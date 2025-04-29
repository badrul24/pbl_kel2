@extends('layouts.dashboard')
@section('header-title', 'Edit Kategori')
@section('header-subtitle', 'Form Edit Data Kategori')

@section('content')
    <div class="max-w-xl">
        <form action="{{ route('category.update', $category->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')
            <div>
                <label class="block font-medium">Nama</label>
                <input type="text" name="nama"
                    class="w-full border border-gray-300 rounded-md px-3 py-2 @error('nama') border-red-500 @enderror"
                    value="{{ old('nama', $category->nama) }}">
                @error('nama')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label class="block font-medium">Deskripsi</label>
                <textarea name="deskripsi" rows="3"
                    class="w-full border border-gray-300 rounded-md px-3 py-2 @error('deskripsi') border-red-500 @enderror">{{ old('deskripsi', $category->deskripsi) }}</textarea>
                @error('deskripsi')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex space-x-2">
                <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700">Update</button>
                <a href="{{ route('category.index') }}"
                    class="bg-gray-400 text-white px-4 py-2 rounded-md hover:bg-gray-500">Batal</a>
            </div>
        </form>
    </div>
@endsection
