<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang; // use model

use PDF;

class BarangController extends Controller
{
	public function index(Request $request){
		if ($request->get('search')) {
			$barangs = Barang::where('nama_barang', 'LIKE', '%'.$request->get('search').'%')->get();
		}else{
			$barangs = Barang::all();
		}
		return view('barang.show', ['barang' => $barangs]);
	}

	public function create(){
		return view('barang.create');
	}

	public function insert(Request $request){
		$barang = new Barang;
		$barang->kode_barang = $request->kode_barang;
		$barang->nama_barang = $request->nama_barang;
		$barang->stok = $request->stok;
		$barang->save();

		return redirect(Route('index'))->with('alert-success','Berhasil Menambahkan Data!');
	}

	public function delete($id){
		$barang = Barang::findOrFail($id);
		$barang->delete();
		return redirect(Route('index'))->with('success','Data berhasil dihapus');
	}

	public function edit($id){
		$barang = Barang::findOrFail($id);
		return view('barang.edit', ['barang' => $barang]);
	}

	public function submitedit(Request $request, $id){
		$barang = Barang::findOrFail($id);

		$barang->kode_barang = $request->kode_barang;
		$barang->nama_barang = $request->nama_barang;
		$barang->stok = $request->stok;
		$barang->save();

		return redirect(Route('index'))->with('alert-success','Berhasil Merubah Data!');
	}

	public function cetak(){
		$barang = Barang::all();

		$pdf = PDF::loadview('barang.cetak', ['barang' => $barang]);
    return $pdf->setPaper('a4', 'potrait')->stream();
	}
}
