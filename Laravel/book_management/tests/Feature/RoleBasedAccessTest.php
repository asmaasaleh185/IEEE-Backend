<?php

// test('example', function () {
//     $response = $this->get('/');

//     $response->assertStatus(200);
// });

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Book;
use App\Models\User;
use App\Models\Author;
use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class RoleBasedAccessTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function users_can_read_books_and_categories()
    {
        $response = $this->get('/books');
        $response->assertStatus(200);

        $response = $this->get('/categories');
        $response->assertStatus(200);
    }

    
    /** @test */
    public function test_registered_users_can_create_and_edit_books_and_categories()
    {
        $user = User::factory()->create(['role' => 'user']);
        $this->actingAs($user);
        
        $author = Author::factory()->create();
        $book = Book::factory()->create(['author_id' => $author->id]);
        $category = Category::factory()->create();
        
        $response = $this->put("/books/{$book->id}", [
            'title' => 'Updated Title',
            'author_id' => $author->id,
            'category_ids' => [$category->id],
        ]);
        
        $response->assertStatus(302);
        $response->assertRedirect("/books/{$book->id}");
        
        $this->assertDatabaseHas('books', [
            'id' => $book->id,
            'title' => 'Updated Title',
        ]);
    }
    
    /** @test */
    public function test_check_role_middleware()
    {
        $admin = User::factory()->create(['role' => 'admin']);
        $user = User::factory()->create(['role' => 'user']);
        
        $response = $this->actingAs($admin)->get('/admin-route');
        $response->assertStatus(200);

        $response = $this->actingAs($user)->get('/admin-route');
        $response->assertStatus(403);
    }

    /** @test */
    public function test_authenticated_user_can_access_protected_route()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get('/books');
        $response->assertStatus(200);
    }

    /** @test */
    public function test_admins_can_delete_books_and_categories()
    {
        $admin = User::factory()->create(['role' => 'admin']);
        $this->actingAs($admin);

        $book = Book::factory()->create();
        
        $response = $this->delete("/books/{$book->id}");

        $response->assertStatus(302);
        $response->assertRedirect('/books');

        $this->assertDatabaseMissing('books', [
            'id' => $book->id,
        ]);
    }

    /** @test */
    public function unauthorized_users_cannot_delete_books()
    {
        $user = User::factory()->create(['role' => 'user']);
        $this->actingAs($user);

        $book = Book::factory()->create();
        $response = $this->delete("/books/{$book->id}");
        $response->assertStatus(403);
    }

    /** @test */
    public function unauthorized_users_cannot_delete_categories()
    {
        $user = User::factory()->create(['role' => 'user']);
        $this->actingAs($user);

        $category = Category::factory()->create();
        $response = $this->delete("/categories/{$category->id}");
        $response->assertStatus(403);
    }

    /** @test */
    public function test_only_admins_can_view_all_authors()
    {
        $user = User::factory()->create(['role' => 'user']);

        $admin = User::factory()->create(['role' => 'admin']);

        $this->actingAs($user);
        $response = $this->get('/authors');
        $response->assertStatus(403);

        $this->actingAs($admin);
        $response = $this->get('/authors');
        $response->assertStatus(200);

        $authors = Author::all();
        $response->assertViewHas('authors', function ($viewAuthors) use ($authors) {
            return $viewAuthors->pluck('id')->toArray() === $authors->pluck('id')->toArray();
        });
    }


}
