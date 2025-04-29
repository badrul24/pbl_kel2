@extends('layouts.dashboard')
@section('header-title', 'Tambah Kategori')
@section('header-subtitle', 'Form Tambah Data Kategori')

@section('content')
    <div class="max-w-xl">
        <form action="{{ route('category.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block font-medium">Nama</label>
                <input type="text" name="nama"
                    class="w-full border border-gray-300 rounded-md px-3 py-2 @error('nama') border-red-500 @enderror"
                    value="{{ old('nama') }}">
                @error('nama')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label class="block font-medium">Deskripsi</label>
                <textarea name="deskripsi" rows="3"
                    class="w-full border border-gray-300 rounded-md px-3 py-2 @error('deskripsi') border-red-500 @enderror">{{ old('deskripsi') }}</textarea>
                @error('deskripsi')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex space-x-2">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Simpan</button>
                <button type="reset" class="bg-yellow-400 text-white px-4 py-2 rounded-md hover:bg-yellow-500">Reset</button>
            </div>
        </form>
    </div>
@endsection
