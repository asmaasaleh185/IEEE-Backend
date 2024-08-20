@extends('layouts.app')

@section('content')
    <div class="container mx-auto m-4 px-4">
        <div class="flex justify-between mb-4">
            <h1 class="text-2xl font-bold">Book Details</h1>
        <a href="{{ route('books.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Back to List</a>

        </div>
        <div class="bg-white/5 rounded-xl border border-transparent hover:border-blue-500 group transation-colors duration-300 p-6 mb-4">
            <h2 class="text-xl font-semibold mb-2">Title: {{ $book->title }}</h2>
            <p class="mb-2"><strong>Author:</strong> {{ $book->author->name }}</p>
            <a href="{{ route('books.show', ['book' => $book->id, 'includeCategories' => 'true']) }}"
                class="btn btn-primary text-blue-500 underline">
                <strong>Categories:</strong>
            </a>

            @if ($book->relationLoaded('categories'))
                <ul class="mt-1 px-8">
                    @foreach ($book->categories as $category)
                        <li class="list-disc">{{ $category->name }}</li>
                    @endforeach
                </ul>
            @endif
        </div>

        <a href="{{ route('books.edit', $book) }}" class="text-blue-500 px-4 py-2 rounded bg-white/10 hover:bg-white/25 transition-colors duration-300">Edit</a>
        <form action="{{ route('books.destroy', $book) }}" method="POST" class="inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-red-500 px-4 py-2 rounded ml-2 bg-white/10 hover:bg-white/25 transition-colors duration-300">Delete</button>
        </form>
    </div>
@endsection
