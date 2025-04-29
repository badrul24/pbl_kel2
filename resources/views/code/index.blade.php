@extends('layouts.dashboard')
@section('header-title', 'Kode Klasifikasi')
@section('header-subtitle', 'Kelola Data Kode')

@section('content')
    <a href="{{ route('code.create') }}"
        class="inline-flex items-center bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white px-4 py-2 rounded-xl transition duration-300 shadow-md hover:shadow-lg mb-4 w-fit">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
        </svg>
        Add Data
    </a>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-300">
            <thead class="bg-gray-100">
                <tr>
                    <th class="border px-4 py-2">No</th>
                    <th class="border px-4 py-2">Kode</th>
                    <th class="border px-4 py-2">Nama</th>
                    <th class="border px-4 py-2">Kategori</th>
                    <th class="border px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($codes as $code)
                    <tr>
                        <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                        <td class="border px-4 py-2">{{ $code->kode }}</td>
                        <td class="border px-4 py-2">{{ $code->nama }}</td>
                        <td class="border px-4 py-2">{{ $code->category->nama }}</td>
                        <td class="border px-4 py-2 flex gap-2">
                            <a href="{{ route('code.edit', $code->id) }}"
                                class="text-white bg-yellow-500 hover:bg-yellow-600 px-3 py-1 rounded">Edit</a>
                            <form action="{{ route('code.destroy', $code->id) }}" method="POST"
                                onsubmit="return confirm('Yakin ingin menghapus?')">
                                @csrf
                                @method('DELETE')
                                <button class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
