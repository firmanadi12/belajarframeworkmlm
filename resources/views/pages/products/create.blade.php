@extends('layouts.default')
@section('content')
<div class="card">
    <div class="card-header">
        <strong>Tambah Barang</strong>        
    </div>
    <div class="card-body card-block">
        <form action="{{ route('products.store') }}" method="post" >
            @csrf
            <div class="form-group">
                <label for="nama" class=" form-control-label">Nama Barang</label>
                <input type="text" name="name" value="{{old('name')}}" placeholder="Masukkan Nama Barang" class="form-control" @error('name') is-invalid @enderror />
                @error('name')
                    <div class="text-muted">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="nama" class=" form-control-label">Tipe Barang</label>
                <input type="text" name="type" value="{{old('type')}}" placeholder="Masukkan Tipe Barang" class="form-control" @error('type') is-invalid @enderror />
                @error('type')
                    <div class="text-muted">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="nama" class=" form-control-label">Deskripsi Barang</label>
                <textarea name="description" class="ckeditor form-control" placeholder="Masukkan Deskripsi Barang" @error('description') is-invalid @enderror >{{old('description')}}</textarea>
                @error('description')
                    <div class="text-muted">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="nama" class=" form-control-label">Harga Barang</label>
                <input type="number" name="price" value="{{old('price')}}" placeholder="Masukkan Harga Barang" class="form-control" @error('price') is-invalid @enderror />
                @error('price')
                    <div class="text-muted">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="nama" class=" form-control-label">Qty Barang</label>
                <input type="number" name="quantity" value="{{old('quantity')}}" placeholder="Masukkan Qty Barang" class="form-control" @error('quantity') is-invalid @enderror />
                @error('quantity')
                    <div class="text-muted">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Simpan</button>
            </div>                
        </form>
    </div>
</div>


@endsection