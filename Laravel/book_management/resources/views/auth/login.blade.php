@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-md mx-auto bg-white/10 p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold text-center mb-6">LogIn</h2>

            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-gray-500">Email</label>
                    <input type="email" name="email" id="email" class="p-2 mt-1 text-black block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-500">Password</label>
                    <input type="password" name="password" id="password" class="p-2 mt-1 text-black block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required>
                </div>
                @if($errors->any())
                <div class="bg-red-100 text-red-700 p-4 mb-4 rounded">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <div class="flex justify-center">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        LogIn
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection
