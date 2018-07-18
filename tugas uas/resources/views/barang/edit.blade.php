@extends('master')
@section('content')
  <form class="form-horizontal" action="{{ Route('submitedit', ['id' => $barang->id]) }}" method="post">
    <fieldset>
      @csrf
      <div class="form-group">
        <label class="col-md-2 control-label" for="kode barang">Kode Mobil</label>
        <div class="col-md-6">
          <input name="kode_barang" type="text" placeholder="Kode barang" class="form-control" value="{{$barang->kode_barang}}">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label" for="nama barang">Jenis Mobil</label>
        <div class="col-md-6">
          <input name="nama_barang" type="text" placeholder="nama barang" class="form-control" value="{{$barang->nama_barang}}">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label" for="stok">Jumlah</label>
        <div class="col-md-6">
          <input name="stok" type="number" placeholder="0" class="form-control" value="{{$barang->stok}}">
        </div>
      </div>

      <div class="form-group">
        <div class="col-md-8 text-right">
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </fieldset>


  </form>
@endsection

{{-- @extends('master')
@section('content')

<form action="">
<label for="">Kode Mobil</label>
<input type="text" placeholder="id barang...">
<br><br>

<label for="">Jenis Mobil</label>
<input type="text" placeholder="nama barang...">
<br><br>

<label for="">Jumlah</label>
<input type="number">
<br><br>
<button>Simpan</button>
<br><br>
</form>
@endsection
--}}
