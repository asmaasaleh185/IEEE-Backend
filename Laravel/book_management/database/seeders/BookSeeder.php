<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::factory(30)->create()->each(function ($book) {
            $book->categories()->attach(category::inRandomOrder()->take(rand(1, 5))->pluck('id'));
        });
    }
}
