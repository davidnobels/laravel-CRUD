@extends('layouts.my-app-layout')

@section('content')
  <section class="content">
    <div class="content">
      <div class="col-12">
        <form class="form-horizontal" method="POST" action="/product/{{ $action }}{{($action!='store')? '/' .$product['id'] : ''}}">
          {{ csrf_field() }}
          <div class="modal-header">
            <h3>Form {{ ucwords($action)}}</h3>
          </div>
          <div class="modal-body">
            @if($action=="delete")
              <div class="alert alert-danger">
                <strong>Perhatian!</strong> Menekan tombol delete
              </div>
            @endif
            <div class="form-group">
              <label class="col-sm-4 control-label">Nama Produk</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="nama" placeholder="Nama Produk" value="{{ ($action!='store') ? $product['nama'] : '' }}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-4 control-label">Jumlah Produk</label>
              <div class="col-sm-8">
                <input type="number" class="form-control" name="jumlah" placeholder="Jumlah Produk" value="{{ ($action!='store') ? $product['jumlah'] : '' }}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-4 control-label">Satuan Produk</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="satuan" placeholder="Satuan Produk" value="{{ ($action!='store') ? $product['satuan'] : '' }}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-4 control-label">Harga Awal Produk</label>
              <div class="col-sm-8">
                <input type="number" class="form-control" name="harga_awal" placeholder="Harga Awal Produk" value="{{ ($action!='store') ? $product['harga_awal'] : '' }}">
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-default" onclick="window.history.back();">Cancel</button>
            <button type="submit" class="btn {{($action!='delete')? 'btn-success' : 'btn-danger' }} pull-right" >{{ ucwords($action) }}</button>
          </div>
        </form>
      </div>
    </div>
  </section>
@endsection
