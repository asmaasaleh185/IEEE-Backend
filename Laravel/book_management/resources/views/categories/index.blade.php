@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-6">
        <div class="flex justify-between">
            <h1 class="text-2xl font-bold">Categories</h1>
        <a href="{{ route('categories.create') }}" class="bg-blue-500 text-white p-2 rounded">Add New Category</a>
        </div>
        <div class="mt-6">
            <ul class="space-y-4">
                @foreach ($categories as $category)
                    <li class="p-4 bg-white/5 rounded-xl border border-transparent hover:border-blue-500 group transation-colors duration-300">
                        <h2 class="text-xl font-semibold">{{ $category->name }}</h2>
                        <div class="mt-4">
                            <a href="{{ route('categories.show', $category->id) }}" class="bg-white/10 px-2 py-1 text-sm hover:bg-white/25 rounded-xl font-bold transition-colors duration-300">View</a>
                            <a href="{{ route('categories.edit', $category->id) }}" class="text-blue-500 bg-white/10 px-2 py-1 text-sm hover:bg-white/25 rounded-xl font-bold transition-colors duration-300 ml-3">Edit</a>
                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="inline">
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
            {{ $categories->links() }}
        </div>
    </div>
@endsection
