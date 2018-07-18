<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>Disposisi</title>
	<style>
	.title{
		font-size: 10pt;
		font-weight: bold;
	}
	.content{
		margin-left: 15px;
		margin-right: 15px;
	}
	th, td {
		vertical-align:top;
	}
	.tabel-isi{
		border-collapse: collapse;
	}

	.tabel-isi > thead > tr > th{
		text-align: center;
		padding-top: 10px;
		padding-bottom: 10px;
	}

	.tabel-isi > thead > tr > th, .tabel-isi > tbody > tr > td {
		border: solid 1px black;
	}
	.tabel-isi > tbody > tr > td {
		padding-left: 6px;
		padding-right: 6px;
		padding-top: 5px;
		padding-bottom: 5px;
	}
	</style>
</head>
<body>
	<br>
	<table width="100%" align="center">
		<tr>
			<td align="center">
				<u><b>
					LAPORAN DATA MOBIL
				</b></u>
			</td>
		</tr>
	</table>
	<br>
	<table class="tabel-isi" style="width:100%">
		<thead>
			<tr>
        <th>Kode Mobil</th>
        <th>Jenis Mobil</th>
        <th>Jumlah</th>
			</tr>
		</thead>
		<tbody>
      @foreach ($barang as $databarang)
        <tr>
          <td>{{$databarang->kode_barang}}</td>
          <td>{{$databarang->nama_barang}}</td>
          <td>{{$databarang->stok}}</td>
        </tr>
      @endforeach
		</tbody>
	</table>
</body>
</html>
