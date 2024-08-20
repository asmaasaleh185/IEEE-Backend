<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management</title>
    @Vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-black  text-white">
    <div class="container mx-auto m-4 px-4">
        <nav class= "flex justify-between items-center py-4 border-b border-white/10">
            <div class="">
                <a href="{{ route('home') }}" class="text-xl font-semibold">Library Management</a>
            </div>
            <div class="space-x-8 font-bold">
                <a href="{{ route('books.index') }}">Books</a>
                <a href="{{ route('authors.index') }}">Authors</a>
                <a href="{{ route('categories.index') }}">Categories</a>
            </div>
            @auth
                <div class="space-x-6 font-bold flex">
                    <form method="POST" action="/logout">
                        @csrf
                        @method('DELETE')
                        <button>Log Out</button>
                    </form>
                </div>
            @endauth

            @guest
                <div class="space-x-6 font-bold">
                <a href="/register">Sign Up</a>
                <a href="/login">sign In</a>
            </div>
            @endguest
        </nav>
    </div>
    <main>
        @yield('content')
    </main>
</body>

</html>
