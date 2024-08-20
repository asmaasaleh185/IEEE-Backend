<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\Book;
use App\Models\Author;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Resources\BookResource;

class BookController extends Controller
{
    use AuthorizesRequests;
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $books = Book::with(['author', 'categories']);

        // Apply filters
        if ($request->has('title')) {
            $books->where('title', 'like', '%' . $request->input('title') . '%');
        }

        // Paginate results
        $books = $books->paginate(10);

        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $authors = Author::all();
        $categories = Category::all();
        return view('books.create', compact('authors', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->authorize('create', Book::class);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author_id' => 'required|exists:authors,id',
            'category_ids' => 'required|array',
            'category_ids.*' => 'exists:categories,id',
        ]);

        $book = Book::create($validated);
        $book->categories()->sync($request->input('category_ids', []));
        return redirect()->route('books.index')->with('success', 'Book created successfully.');
    }

    // Bulk insertion
    public function bulkInsert(Request $request)
    {
        $this->authorize('create', Book::class);
        $booksData = $request->input('books');

        // Create books and attach categories
        $books = collect();

        foreach ($booksData as $bookData) {
            $book = Book::create([
                'title' => $bookData['title'],
                'author_id' => $bookData['author_id'],
            ]);

            $book->categories()->sync($bookData['category_ids']);
            $books->push($book);
        }

        // Return response with collection data
        return response()->json([
            'message' => 'Books successfully inserted',
            'books' => $books->map(function ($book) {
                return [
                    'title' => $book->title,
                    'author_id' => $book->author_id,
                    'category_ids' => $book->categories->pluck('id')->toArray(),
                ];
            }),
        ], 201);
    }


    /**
     * Display the specified resource.
     */
    public function show(Request $request, Book $book)
    {
        if ($request->query('includeCategories', false)) {
            $book->load('categories');
        }
        return view('books.show', compact('book'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        $book->load('categories');
        $authors = Author::all();
        $categories = Category::all();
        return view('books.edit', compact('book', 'authors', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $this->authorize('update', $book);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author_id' => 'required|exists:authors,id',
            'category_ids' => 'required|array',
            'category_ids.*' => 'exists:categories,id',
        ]);

        $book->update($validated);
        $book->categories()->sync($request->input('category_ids', []));
        return redirect()->route('books.show', $book->id)->with('success', 'Book updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $this->authorize('deleteBook', $book);
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Book deleted successfully.');
    }
}
