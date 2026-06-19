@extends('layouts.app')

@section('title', 'Tambah Produk')

@section('content')
    <h1 class="mb-4">Tambah Produk</h1>

    <form action="{{ route('products.store') }}" method="POST" class="card p-4 shadow-sm">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Kategori</label>
            <input type="text" name="category" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Harga</label>
            <input type="number" name="price" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Stok</label>
            <input type="number" name="stock" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea name="description" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Image</label>
            <input type="text" name="image" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
