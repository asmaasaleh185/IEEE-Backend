<?php

// test('example', function () {
//     $response = $this->get('/');

//     $response->assertStatus(200);
// });

namespace Tests\Feature;

use App\Models\Author;
use App\Models\Book;
use App\Models\category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class BulkInsertionTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function test_bulk_insert_books()
    {
        $user = User::factory()->create();
        $this->actingAs($user, 'sanctum');

        $author = Author::factory()->create();
        $categories = Category::factory()->count(3)->create();

        $booksData = [
            [
                'title' => 'Book One',
                'author_id' => $author->id,
                'category_ids' => $categories->pluck('id')->toArray(),
            ],
            [
                'title' => 'Book Two',
                'author_id' => $author->id,
                'category_ids' => $categories->pluck('id')->take(2)->toArray(),
            ],
        ];

        $response = $this->postJson('/books/bulk-insert', ['books' => $booksData]);
        $response->assertStatus(201)
            ->assertJsonStructure([
                'message',
                'books' => [
                    '*' => ['title', 'author_id', 'category_ids'],
                ],
            ]);
    }

}
