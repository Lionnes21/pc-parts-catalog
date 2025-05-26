@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Product Catalog</h1>
    @if (session('success'))
        <div class="bg-green-100 text-green-700 p-4 mb-4 rounded">
            {{ session('success') }}
        </div>
    @endif
    <a href="{{ route('products.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded mb-4 inline-block">Add New Product</a>
    <table class="w-full bg-white shadow rounded">
        <thead>
            <tr class="bg-gray-200">
                <th class="p-2">Name</th>
                <th class="p-2">Category</th>
                <th class="p-2">Price</th>
                <th class="p-2">Stock</th>
                <th class="p-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td class="p-2">{{ $product->name }}</td>
                    <td class="p-2">{{ $product->category }}</td>
                    <td class="p-2">${{ number_format($product->price, 2) }}</td>
                    <td class="p-2">{{ $product->stock }}</td>
                    <td class="p-2">
                        <a href="{{ route('products.edit', $product) }}" class="text-blue-600">Edit</a>
                        <form action="{{ route('products.destroy', $product) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 ml-2" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection