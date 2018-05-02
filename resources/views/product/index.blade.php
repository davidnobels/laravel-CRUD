@extends('layouts.my-app-layout')

@section('content')
<section class="content">
  <div class="row">
    <div class="col-12">
      <div class="panel panel-default">
        <div class="panel-heading text-right">
          <a href="/product/create" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>&nbsp;Tambah Data</a>
        </div>
        <div class="panel-body">
          @includeif('product.table')
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
