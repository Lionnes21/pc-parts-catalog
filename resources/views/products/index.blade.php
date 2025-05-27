@extends('layouts.app')

@section('content')
    <div class="bg-gray-50 min-h-screen">
        <div class="max-w-5xl mx-auto px-4 py-8">
            <h1 class="text-grey text-2xl font-semibold mb-6">Product Catalog</h1>

            
            @if (session('success'))
                <div class="bg-green-100 text-green-700 p-4 mb-6 rounded-md border border-green-200 shadow-sm">
                    {{ session('success') }}
                </div>
            @endif
            
            <a href="{{ route('products.create') }}" class="text-sm text-gray-600 hover:text-gray-900 rounded-md px-4 py-2 bg-white shadow-sm border border-gray-300 transition-colors duration-200 mb-6 inline-block">Add New Product</a>

            
            <div class="bg-white shadow-sm rounded-md overflow-hidden">
                <table class="w-full">
                    <thead>
                        <tr class="bg-gray-600">
                            <th class="p-4 text-left text-white text-sm font-semibold">Name</th>
                            <th class="p-4 text-left text-white text-sm font-semibold">Category</th>
                            <th class="p-4 text-left text-white text-sm font-semibold">Price</th>
                            <th class="p-4 text-left text-white text-sm font-semibold">Stock</th>
                            <th class="p-4 text-left text-white text-sm font-semibold">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        @foreach ($products as $product)
                            <tr class="border-b border-gray-200 hover:bg-gray-50 transition-colors duration-200">
                                <td class="p-4 text-gray-700">{{ $product->name }}</td>
                                <td class="p-4 text-gray-700">{{ $product->category }}</td>
                                <td class="p-4 text-gray-700">${{ number_format($product->price, 2) }}</td>
                                <td class="p-4 text-gray-700">{{ $product->stock }}</td>
                                <td class="p-4">
                                    <a href="{{ route('products.edit', $product) }}" class="text-gray-100 hover:text-white text-sm transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-gray-300 focus:ring-offset-2 rounded-md px-3 py-1 bg-gray-600 hover:bg-gray-700 shadow-sm">Edit</a>
                                    <form action="{{ route('products.destroy', $product) }}" method="POST" class="inline ml-2">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 px-3 py-1 bg-white shadow-sm border border-gray-300 transition-colors duration-200" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection