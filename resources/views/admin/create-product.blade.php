@extends('templates.admin')
@section('content')
@include('templates.layouts.admin-navbar')
<div class="container-fluid py-4">
  <div class="row mt-4 justify-content-center">
    <div class="col-lg-6 mb-lg-0 mb-4">
      <div class="card z-index-2 mb-4">
        <div class="card-header pb-0">
          <h6>Tambah Data Produk</h6>
        </div>
        <div class="card-body p-3">
          <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-3">
              <label for="name">Nama Produk</label>
              <input type="text" class="form-control" name="name" value="{{old('name')}}">
              @if ($errors->has('name'))
              <small class="text-danger">{{$errors->first('name')}}</small>
              @endif
            </div>
            <div class="form-group mb-3">
              <label for="desc">Deskripsi Produk</label>
              <textarea name="desc" name="desc" class="form-control" rows="5">{{old('desc')}}</textarea>
              @if ($errors->has('desc'))
                  <small class="text-danger">{{$errors->first('desc')}}</small>
              @endif
            </div>
            <div class="form-group mb-3">
              <label for="desc">Harga Produk</label>
              <input type="number" name="price" class="form-control" value="{{old('price')}}">
              @if ($errors->has('price'))
                  <small class="text-danger">{{$errors->first('price')}}</small>
              @endif
            </div>
            <div class="form-group mb-3">
              <label for="desc">Satuan Produk</label>
              <input type="text" name="uom" class="form-control" value="{{old('uom')}}">
              @if ($errors->has('uom'))
                  <small class="text-danger">{{$errors->first('uom')}}</small>
              @endif
            </div>
            <div class="form-group mb-3">
              <label for="desc">Berat Produk</label>
              <input type="text" name="weight" class="form-control" value="{{old('weight')}}">
              @if ($errors->has('weight'))
                  <small class="text-danger">{{$errors->first('weight')}}</small>
              @endif
            </div>
            <div class="form-group mb-3">
              <label for="desc">Foto Produk</label>
              <input type="file" name="photo" class="form-control">
              @if ($errors->has('photo'))
                  <small class="text-danger">{{$errors->first('photo')}}</small>
              @endif
            </div>
            <div class="d-grid">
              <button type="submit" class="btn btn-sm btn-success">Tambah</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection