@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-md mx-auto bg-white/10 p-6 rounded-lg">
            <h2 class="text-2xl font-semibold text-center mb-6">Edit Book</h2>

            @if($errors->any())
                <div class="bg-red-100 text-red-700 p-4 mb-4 rounded">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('books.update', $book->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="title" class="block text-gray-500">Title</label>
                    <input type="text" name="title" id="title" value="{{ old('title', $book->title) }}" class="mt-1 text-black block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 p-2" required>
                </div>

                <div class="mb-4">
                    <label for="author_id" class="block text-gray-500">Author</label>
                    <select name="author_id" id="author_id" class="mt-1 text-black block w-full border-gray-300 rounded-md focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 p-2" required>
                        <option value="">Select an author</option>
                        @foreach($authors as $author)
                            <option value="{{ $author->id }}" {{ $book->author_id == $author->id ? 'selected' : '' }}>
                                {{ $author->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-4">
                    <label for="category_ids" class="block text-gray-500">Categories</label>
                    <select name="category_ids[]" id="category_ids" multiple class="mt-1 text-black block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ in_array($category->id, $book->categories->pluck('id')->toArray()) ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                    <small class="text-gray-600">Hold down the Ctrl (windows) or Command (Mac) button to select multiple options.</small>
                </div>

                <div class="flex justify-center">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Update Book
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection
