@extends('layouts.app')

@section('title', 'Edit Produk')

@section('content')
    <h1 class="mb-4">Edit Produk</h1>

    <form action="{{ route('products.update', $product->id) }}" method="POST" class="card p-4 shadow-sm">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Kategori</label>
            <input type="text" name="category" class="form-control" value="{{ $product->category }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Harga</label>
            <input type="number" name="price" class="form-control" value="{{ $product->price }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Stok</label>
            <input type="number" name="stock" class="form-control" value="{{ $product->stock }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea name="description" class="form-control">{{ $product->description }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Image</label>
            <input type="text" name="image" class="form-control" value="{{ $product->image }}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
