<?php

// test('example', function () {
//     $response = $this->get('/');

//     $response->assertStatus(200);
// });

// tests/Feature/BookApiTest.php
// tests/Feature/BookApiTest.php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Book;
use App\Models\User;
use App\Models\Author;
use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BookApiTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function test_can_list_books()
    {
        $response = $this->get('/books');

        $response->assertStatus(200)
            ->assertViewIs('books.index')
            ->assertSee('Books');
    }

    /** @test */
    public function test_can_filter_books_by_title()
    {
        $book1 = Book::factory()->create(['title' => 'Harry Potter and the Philosopher\'s Stone']);
        $book2 = Book::factory()->create(['title' => 'The Hobbit']);

        $response = $this->get('/books?title=Harry');

        $response->assertStatus(200)
            ->assertSee($book1->title)
            ->assertDontSee($book2->title);
    }

    /** @test */
    public function test_can_include_books_for_author()
    {
        $user = User::factory()->create(['role'=>'admin']);
        $this->actingAs($user);
        $author = Author::factory()->hasBooks(3)->create();

        $response = $this->get("/authors/{$author->id}?includeBooks=true");

        $response->assertStatus(200);
        $response->assertSee($author->books->first()->title);
    }

    /** @test */
    public function test_can_include_categories_for_book()
    {
        $book = Book::factory()->hasCategories(2)->create();

        $response = $this->get("/books/{$book->id}?includeCategories=true");

        $response->assertStatus(200);
        $response->assertSee($book->categories->first()->name);
    }

}

