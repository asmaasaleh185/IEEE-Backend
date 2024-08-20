@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-md mx-auto bg-white/10 p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold text-center mb-6">Create a New Book</h2>

            @if($errors->any())
                <div class="bg-red-100 text-red-700 p-4 mb-4 rounded">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('books.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="title" class="block text-gray-500">Title</label>
                    <input type="text" name="title" id="title" class="p-2 mt-1 text-black block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required>
                </div>

                <div class="mb-4">
                    <label for="author_id" class="block text-gray-500">Author</label>
                    <select name="author_id" id="author_id" class="mt-1 p-2 text-black block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required>
                        <option value="">Select an author</option>
                        @foreach($authors as $author)
                            <option value="{{ $author->id }}">{{ $author->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-4">
                    <label for="category_ids" class="block text-gray-500">Categories</label>
                    <select name="category_ids[]" id="category_ids" multiple class="text-black mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    <span class="text-gray-600 text-xs">Hold down the Ctrl (windows) or Command (Mac) button to select multiple options.</span>
                </div>

                <div class="flex justify-center">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Create Book
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection
