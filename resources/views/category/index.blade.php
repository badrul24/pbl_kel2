@extends('layouts.dashboard')
@section('header-title', 'Kategori Arsip')
@section('header-subtitle', 'Kelola Data Kategori')

@section('content')
    <a href="{{ route('category.create') }}"
        class="inline-flex items-center bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white px-4 py-2 rounded-xl transition duration-300 shadow-md hover:shadow-lg mb-4 w-fit">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
        </svg>
        Add Data
    </a>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-300">
            <thead class="bg-gray-100">
                <tr>
                    <th class="py-2 px-4 border-b text-left">No</th>
                    <th class="py-2 px-4 border-b text-left">Nama</th>
                    <th class="py-2 px-4 border-b text-left">Deskripsi</th>
                    <th class="py-2 px-4 border-b text-left">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr class="hover:bg-gray-50">
                        <td class="py-2 px-4 border-b">{{ $categories->firstItem() + $loop->index }}</td>
                        <td class="py-2 px-4 border-b">{{ $category->nama }}</td>
                        <td class="py-2 px-4 border-b">{{ $category->deskripsi }}</td>
                        <td class="py-2 px-4 border-b space-x-2">
                            <a href="{{ route('category.edit', $category->id) }}"
                                class="text-sm bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded-md">Edit</a>

                            <form action="{{ route('category.destroy', $category->id) }}" method="POST"
                                class="inline-block"
                                onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="text-sm bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-md">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $categories->links() }}
    </div>

    <div class="text-sm text-gray-500 mt-4">
        Padang, &copy; {{ date('Y-m-d') }} PNP
    </div>
@endsection
