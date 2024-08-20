@extends('layouts.app')

@section('content')
    <div class="container mx-auto my-5 px-4">
        <h1 class="text-2xl font-bold mb-4">Author: {{ $author->name }}</h1>

        <div class="flex justify-between mt-8">
            <a href="{{ route('authors.show', ['author' => $author->id, 'includeBooks' => 'true']) }}"
                class="text-xl font-semibold underline text-blue-500">Books by {{ $author->name }}</a>
            <a href="{{ route('authors.index') }}" class="bg-blue-500 text-white p-2 rounded inline-block">Back to
                List</a>
        </div>
        @if ($author->relationLoaded('books'))
        @if ($author->books->count())
            <table class="min-w-full text-black bg-white border border-gray-300 mt-4 text-center">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b">Title</th>
                        <th class="py-2 px-4 border-b">Categories</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($author->books as $book)
                        <tr>
                            <td class="py-2 px-4 border-b">{{ $book->title }}</td>
                            <td class="py-2 px-4 border-b">
                                @foreach ($book->categories as $category)
                                    {{ $category->name }}@if (!$loop->last)
                                        ,
                                    @endif
                                @endforeach
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @else
                <p class="text-gray-600">No books found for this author.</p>
            @endif
        @endif
    </div>
@endsection
