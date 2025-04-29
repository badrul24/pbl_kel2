<?php

namespace App\Http\Controllers;

use App\Models\Code;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CodeController extends Controller
{
    public function index()
    {
        $codes = Code::with('category')->latest()->paginate(5);
        return view('code.index', compact('codes'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('code.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode' => 'required|unique:codes',
            'nama' => 'required|min:3',
            'keterangan' => 'nullable',
            'kategori_id' => 'required|exists:categories,id',
        ]);

        Code::create($validated);
        return redirect()->route('code.index')->with('success', 'Kode berhasil ditambahkan.');
    }

    public function edit(Code $code)
    {
        $categories = Category::all();
        return view('code.edit', compact('code', 'categories'));
    }

    public function update(Request $request, Code $code)
    {
        $validated = $request->validate([
            'kode' => ['required', Rule::unique('codes')->ignore($code->id)],
            'nama' => 'required|min:3',
            'keterangan' => 'nullable',
            'kategori_id' => 'required|exists:categories,id',
        ]);

        $code->update($validated);
        return redirect()->route('code.index')->with('success', 'Kode berhasil diperbarui.');
    }

    public function destroy(Code $code)
    {
        $code->delete();
        return redirect()->route('code.index')->with('success', 'Kode berhasil dihapus.');
    }
}
