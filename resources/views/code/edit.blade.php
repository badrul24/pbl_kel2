@extends('layouts.dashboard')
@section('header-title', 'Edit Kode')
@section('header-subtitle', 'Form Edit Data Kode')

@section('content')
    <form action="{{ route('code.update', $code->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block font-medium">Kode</label>
            <input type="text" name="kode" value="{{ old('kode', $code->kode) }}" class="w-full border px-4 py-2 rounded">
        </div>
        <div>
            <label class="block font-medium">Nama</label>
            <input type="text" name="nama"
                class="w-full border border-gray-300 rounded-md px-3 py-2 @error('nama') border-red-500 @enderror"
                value="{{ old('nama', $code->nama) }}">
            @error('nama')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label class="block font-medium">Kategori</label>
            <select name="kategori_id" class="w-full border px-4 py-2 rounded">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $code->kategori_id == $category->id ? 'selected' : '' }}>
                        {{ $category->nama }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label class="block font-medium">Keterangan</label>
            <textarea name="keterangan" class="w-full border px-4 py-2 rounded">{{ old('keterangan', $code->keterangan) }}</textarea>
        </div>

        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Update</button>
    </form>
@endsection
