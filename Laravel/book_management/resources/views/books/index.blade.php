@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-6">
        <div class="flex justify-between">
            <h1 class="text-2xl font-bold">Books</h1>
        <a href="{{ route('books.create') }}" class="bg-blue-500 text-white p-2 rounded">Add New Book</a>
        </div>
        <div class="mt-6">
            <ul class="space-y-4">
                @foreach ($books as $book)
                    <li class="p-4 bg-white/5 rounded-xl border border-transparent hover:border-blue-500 group transation-colors duration-300">
                        <h2 class="pb-4 text-xl font-semibold">{{ $book->title }}</h2>
                        <p class="text-gray-600">Author: {{ $book->author->name }}</p>
                        <p class="text-gray-600">Categories:
                            @foreach ($book->categories as $category)
                                {{ $category->name }}@if (!$loop->last), @endif
                            @endforeach
                        </p>
                        <div class="mt-4">
                            <a href="{{ route('books.show', $book->id) }}" class="bg-white/10 px-2 py-1 text-sm hover:bg-white/25 rounded-xl font-bold transition-colors duration-300">View</a>
                            <a href="{{ route('books.edit', $book->id) }}" class="text-blue-500 bg-white/10 px-2 py-1 text-sm hover:bg-white/25 rounded-xl font-bold transition-colors duration-300 ml-3">Edit</a>
                            <form action="{{ route('books.destroy', $book->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 bg-white/10 px-2 py-1 text-sm hover:bg-white/25 rounded-xl font-bold transition-colors duration-300 ml-3">Delete</button>
                            </form>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="mt-6">
            {{ $books->links() }}
        </div>
    </div>
@endsection
