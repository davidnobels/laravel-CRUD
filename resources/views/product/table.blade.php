<div class="table-responsive">
  <table id="tabel_data" class="table table-bordered table=striped table-hover">
    <thead>
      <tr>
        <th>No.</th>
        <th>Nama Produk</th>
        <th>Jumlah Produk</th>
        <th>Satuan Produk</th>
        <th>Harga Awal Produk</th>
        <th>Diubah Oleh</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @if(!empty($product))
        @foreach($product as $key => $value)
        <tr>
          <td>{{ $key+1 }}</td>
          <td>{{ $value['nama'] }}</td>
          <td>{{ $value['jumlah'] }}</td>
          <td>{{ $value['satuan' ]}}</td>
          <td>{{ $value['harga_awal' ]}}</td>
          <td>{{ $value['updated_at' ]}}</td>
          <td>
            <span class="btn btn-group">
              <a href="/product/edit/{{$value['id']}}" class="btn btn-sm btn-warning" ><i class="fa fa-edit"></i>&nbsp;Ubah</a>
              <a href="/product/show/{{$value['id']}}" class="btn btn-sm btn-danger" ><i class="fa fa-trash"></i>&nbsp;Hapus</a>
            </span>
          </td>
        </tr>
        @endforeach
      @else
        <tr>
          <td colspan="7">Data Masing Kosong</td>
        </tr>
      @endif
    </tbody>
    <tfoot>
      <tr>
        <th>No.</th>
        <th>Nama Produk</th>
        <th>Jumlah Produk</th>
        <th>Satuan Produk</th>
        <th>Harga Awal Produk</th>
        <th>Diubah oleh</th>
        <th>Action</th>
      </tr>
    </tfoot>
  </table>
</div>
