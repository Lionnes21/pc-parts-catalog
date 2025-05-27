@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Add New Product</h1>
    <form action="{{ route('products.store') }}" method="POST" class="bg-white p-6 rounded shadow">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium">Name</label>
            <input type="text" name="name" id="name" class="w-full p-2 border rounded @error('name') border-red-500 @enderror" value="{{ old('name') }}">
            @error('name')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="description" class="block text-sm font-medium">Description</label>
            <textarea name="description" id="description" class="w-full p-2 border rounded @error('description') border-red-500 @enderror">{{ old('description') }}</textarea>
            @error('description')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="price" class="block text-sm font-medium">Price</label>
            <input type="number" step="0.01" name="price" id="price" class="w-full p-2 border rounded @error('price') border-red-500 @enderror" value="{{ old('price') }}">
            @error('price')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="category" class="block text-sm font-medium">Category</label>
            <select name="category" id="category" class="w-full p-2 border rounded @error('category') border-red-500 @enderror">
                <option value="" {{ old('category') == '' ? 'selected' : '' }} disabled>Select a category</option>
                <option value="CPU" {{ old('category') == 'CPU' ? 'selected' : '' }}>CPU</option>
                <option value="GPU" {{ old('category') == 'GPU' ? 'selected' : '' }}>GPU</option>
                <option value="RAM" {{ old('category') == 'RAM' ? 'selected' : '' }}>RAM</option>
                <option value="Motherboard" {{ old('category') == 'Motherboard' ? 'selected' : '' }}>Motherboard</option>
                <option value="Storage" {{ old('category') == 'Storage' ? 'selected' : '' }}>Storage</option>
                <option value="Power Supply" {{ old('category') == 'Power Supply' ? 'selected' : '' }}>Power Supply</option>
                <option value="Case" {{ old('category') == 'Case' ? 'selected' : '' }}>Case</option>
            </select>
            @error('category')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="stock" class="block text-sm font-medium">Stock</label>
            <input type="number" name="stock" id="stock" class="w-full p-2 border rounded @error('stock') border-red-500 @enderror" value="{{ old('stock') }}">
            @error('stock')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Save Product</button>
    </form>
@endsection