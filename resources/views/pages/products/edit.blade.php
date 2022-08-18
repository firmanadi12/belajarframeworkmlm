@extends('layouts.default')
@section('content')
<div class="card">
    <div class="card-header">
        <strong>Ubah Barang</strong>
        <small>{{ $item->name }}</small>        
    </div>
    <div class="card-body card-block">
        <form action="{{ route('products.update',$item->id) }}" method="post" >
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="nama" class=" form-control-label">Nama Barang</label>
                <input type="text" name="name" value="{{old('name')? old('name'):$item->name}}" placeholder="Masukkan Nama Barang" class="form-control" @error('name') is-invalid @enderror />
                @error('name')
                    <div class="text-muted">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="nama" class=" form-control-label">Tipe Barang</label>
                <input type="text" name="type" value="{{old('type') ? old('type'):$item->type }}" placeholder="Masukkan Tipe Barang" class="form-control" @error('type') is-invalid @enderror />
                @error('type')
                    <div class="text-muted">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="nama" class=" form-control-label">Deskripsi Barang</label>
                <textarea name="description" class="ckeditor form-control" placeholder="Masukkan Deskripsi Barang" @error('description') is-invalid @enderror >{{old('description') ? old('description'):$item->description}}</textarea>
                @error('description')
                    <div class="text-muted">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="nama" class=" form-control-label">Harga Barang</label>
                <input type="number" name="price" value="{{old('price') ? old('price'):$item->price}}" placeholder="Masukkan Harga Barang" class="form-control" @error('price') is-invalid @enderror />
                @error('price')
                    <div class="text-muted">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="nama" class=" form-control-label">Qty Barang</label>
                <input type="number" name="quantity" value="{{old('quantity') ? old('quantity'):$item->quantity}}" placeholder="Masukkan Qty Barang" class="form-control" @error('quantity') is-invalid @enderror />
                @error('quantity')
                    <div class="text-muted">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Ubah</button>
            </div>                
        </form>
    </div>
</div>


@endsection