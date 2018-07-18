@extends('master')
@section('content')
  <form class="form-horizontal" action="{{ Route('insert') }}" method="post">
    <fieldset>
      @csrf
      <div class="form-group">
        <label class="col-md-2 control-label" for="ID mobil">Kode mobil</label>
        <div class="col-md-6">
          <input name="kode_barang" type="text" placeholder="Kode Mobil" class="form-control">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label" for="nama barang">Jenis Mobil</label>
        <div class="col-md-6">
          <input name="nama_barang" type="text" placeholder="Jenis Mobil" class="form-control">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label" for="stok">Jumlah</label>
        <div class="col-md-6">
          <input name="stok" type="number" placeholder="0" class="form-control">
        </div>
      </div>

      <div class="form-group">
        <div class="col-md-8 text-right">
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </div>
    </fieldset>


  </form>
@endsection

{{-- @extends('master')
@section('content')

<form action="">
<label for="">Kode Mobil</label>
<input type="text" placeholder="Kode barang...">
<br><br>

<label for="">Jenis Mobil</label>
<input type="text" placeholder="nama barang...">
<br><br>

<label for="">Jumlah</label>
<input type="number">
<br><br>
<button>Save</button>
<br><br>
</form>
@endsection
--}}
