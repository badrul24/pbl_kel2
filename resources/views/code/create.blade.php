@extends('layouts.dashboard')
@section('header-title', 'Tambah Kode')
@section('header-subtitle', 'Form Tambah Data Kode')

@section('content')
    <form action="{{ route('code.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label class="block font-medium">Kode</label>
            <input type="text" name="kode" value="{{ old('kode') }}" class="w-full border px-4 py-2 rounded @error('kode') border-red-500 @enderror">
            @error('kode')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>
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
            <label class="block font-medium">Kategori</label>
            <select name="kategori_id" class="w-full border px-4 py-2 rounded">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->nama }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label class="block font-medium">Keterangan</label>
            <textarea name="keterangan" class="w-full border px-4 py-2 rounded">{{ old('keterangan') }}</textarea>
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Simpan</button>
    </form>
@endsection
