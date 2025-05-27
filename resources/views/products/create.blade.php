@extends('layouts.app')

@section('content')
    <div class="bg-gray-50 min-h-screen">
        <div class="max-w-5xl mx-auto px-4 py-8">
            <h1 class="text-grey text-2xl font-semibold mb-6">Add New Product</h1>
            
            <div class="bg-white shadow-sm rounded-md p-6">
                <form action="{{ route('products.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Name</label>
                        <input type="text" name="name" id="name" class="w-full p-3 border border-gray-300 rounded-md shadow-sm @error('name') border-red-500 @enderror" value="{{ old('name') }}">
                        @error('name')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                        <textarea name="description" id="description" rows="4" class="w-full p-3 border border-gray-300 rounded-md shadow-sm @error('description') border-red-500 @enderror">{{ old('description') }}</textarea>
                        @error('description')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="price" class="block text-sm font-medium text-gray-700 mb-2">Price</label>
                        <input type="number" step="0.01" name="price" id="price" class="w-full p-3 border border-gray-300 rounded-md shadow-sm @error('price') border-red-500 @enderror" value="{{ old('price') }}">
                        @error('price')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="category" class="block text-sm font-medium text-gray-700 mb-2">Category</label>
                        <select name="category" id="category" class="w-full p-3 border border-gray-300 rounded-md shadow-sm @error('category') border-red-500 @enderror">
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
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="stock" class="block text-sm font-medium text-gray-700 mb-2">Stock</label>
                        <input type="number" name="stock" id="stock" class="w-full p-3 border border-gray-300 rounded-md shadow-sm @error('stock') border-red-500 @enderror" value="{{ old('stock') }}">
                        @error('stock')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex gap-4">
                        <button type="submit" class="text-gray-100 hover:text-white text-sm transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-gray-300 focus:ring-offset-2 rounded-md px-4 py-2 bg-gray-600 hover:bg-gray-700 shadow-sm">Save Product</button>
                        <a href="{{ route('products.index') }}" class="text-sm text-gray-600 hover:text-gray-900 rounded-md px-4 py-2 bg-white shadow-sm border border-gray-300 transition-colors duration-200">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection