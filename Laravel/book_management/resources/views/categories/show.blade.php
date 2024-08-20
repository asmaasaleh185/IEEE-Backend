@extends('layouts.app')
@section('content')
    <div class="container mx-auto my-5 px-4">
        <h1 class="text-2xl font-bold mb-4">Category: {{ $category->name }}</h1>

        @if ($category->books->count())
            <div class="flex justify-between mt-4">
                <h2 class="text-xl font-semibold">Books in {{ $category->name }}</h2>
                <a href="{{ route('categories.index') }}"
                    class="bg-blue-500 text-white p-2 rounded inline-block">Back to List</a>
            </div>
            <table class="min-w-full text-black bg-white border border-gray-300 mt-4 text-center">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b">Title</th>
                        <th class="py-2 px-4 border-b">Author</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($category->books as $book)
                        <tr>
                            <td class="py-2 px-4 border-b">{{ $book->title }}</td>
                            <td class="py-2 px-4 border-b">{{ $book->author->name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No books found for this category.</p>
        @endif

    </div>
@endsection
