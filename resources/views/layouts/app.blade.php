    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PC Parts Catalog</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-gray-50 min-h-screen">
        <nav class="bg-gray-600 shadow-sm py-4 px-10">
            <div class="container mx-auto flex justify-between items-center">
                <a href="{{ route('products.index') }}" class="text-white text-lg font-semibold hover:text-gray-200 transition-colors duration-200">PC Parts Catalog</a>
                <div class="flex items-center space-x-4">
                    @auth
                        <span class="text-gray-100 text-sm">Hello, {{ ucfirst(auth()->user()->name) }}</span>  
                        <form action="{{ route('logout') }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 px-2 py-1 bg-white shadow-sm border border-gray-300 transition-colors duration-200">Logout </button>

                        </form> 
                    @else
                        <a href="{{ route('login') }}" class="text-gray-100 hover:text-white text-sm underline hover:no-underline transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-gray-300 focus:ring-offset-2 focus:ring-offset-gray-600 rounded-md px-2 py-1">Login</a>
                        <a href="{{ route('register') }}" class="text-gray-100 hover:text-white text-sm underline hover:no-underline transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-gray-300 focus:ring-offset-2 focus:ring-offset-gray-600 rounded-md px-2 py-1">Register</a>
                    @endauth
                </div>
            </div>
        </nav>
        <div class="max-w-5xl mx-auto mt-8 px-4">
            @yield('content')
        </div>
    </body>
    </html>