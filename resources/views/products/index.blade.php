@extends('layouts.app')

@section('title', 'Katalog Produk')

@section('content')
    <h1 class="mb-4 text-primary">Katalog Produk</h1>

    <!-- Tombol tambah produk -->
    <a href="{{ route('products.create') }}" class="btn btn-primary mb-4">+ Tambah Produk</a>

    <div class="row">
        @foreach ($products as $product)
            <div class="col-md-4 mb-4">
                <div class="card product-card h-100 border-primary">
                    <!-- Gambar produk jadi trigger modal -->
                    <a href="#" data-bs-toggle="modal" data-bs-target="#detail{{ $product->id }}">
                        @if($product->image)
                            <img src="{{ asset('images/' . $product->image) }}" 
                                class="card-img-top" 
                                alt="{{ $product->name }}" 
                                style="height: 250px; object-fit: cover;">
                        @else
                            <div class="bg-light text-muted d-flex align-items-center justify-content-center" 
                                style="height: 250px;">
                                Tidak ada gambar
                            </div>
                        @endif
                    </a>

                    <div class="card-body">
                        <h5 class="card-title text-primary">{{ $product->name }}</h5>
                        <p class="card-text mb-1"><strong>Kategori:</strong> {{ $product->category }}</p>
                        <p class="card-text mb-1"><strong>Harga:</strong> Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                        <p class="card-text"><strong>Stok:</strong> {{ $product->stock }}</p>
                    </div>

                    <div class="card-footer bg-transparent border-top-0 d-flex justify-content-between">
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-info">Edit</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus produk ini?')">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Modal Detail Produk -->
            <div class="modal fade" id="detail{{ $product->id }}" tabindex="-1">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header bg-primary text-white">
                            <h5 class="modal-title">{{ $product->name }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            @if($product->image)
                                <img src="{{ asset('images/' . $product->image) }}" class="img-fluid mb-3">
                            @endif
                            <p><strong>Kategori:</strong> {{ $product->category }}</p>
                            <p><strong>Harga:</strong> Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                            <p><strong>Stok:</strong> {{ $product->stock }}</p>
                            <p><strong>Deskripsi:</strong> {{ $product->description }}</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
