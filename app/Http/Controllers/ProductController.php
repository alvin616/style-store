<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // tampilkan semua produk
    public function index()
    {
        $products = Product::latest()->get();
        return view('products.index', compact('products'));
    }

    // form tambah produk
    public function create()
    {
        return view('products.create');
    }

    // simpan produk baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
        ]);

        Product::create($request->all());

        return redirect()->route('products.index')
                        ->with('success', 'Produk berhasil ditambahkan');
    }

    // form edit produk
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    // update produk
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
        ]);

        $product = Product::findOrFail($id);
        $product->update($request->all());

        return redirect()->route('products.index')
                        ->with('success', 'Produk berhasil diperbarui');
    }

    // hapus produk
    public function destroy($id)
    {
        Product::findOrFail($id)->delete();
        return redirect()->route('products.index')
                        ->with('success', 'Produk berhasil dihapus');
    }
}
