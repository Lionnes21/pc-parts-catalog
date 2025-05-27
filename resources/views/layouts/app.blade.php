<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PC Parts Catalog</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <nav class="bg-blue-600 p-4">
        <div class="container mx-auto flex justify-between">
            <a href="{{ route('products.index') }}" class="text-white text-lg font-bold">PC Parts Catalog</a>
            <div>
                @auth
                    <span class="text-white">Hello, {{ auth()->user()->name }}</span>
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="text-white ml-4">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-white">Login</a>
                    <a href="{{ route('register') }}" class="text-white ml-4">Register</a>
                @endauth
            </div>
        </div>
    </nav>
    <div class="container mx-auto mt-6">
        @yield('content')
    </div>
</body>
</html>