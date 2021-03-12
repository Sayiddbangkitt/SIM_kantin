
<!DOCTYPE html>
<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="dns-prefetch" href="//fonts.googleapis.com" />
<link rel="dns-prefetch" href="//fonts.gstatic.com" />
<link rel="preload" as="style" href="https://fonts.googleapis.com/css?family=Open Sans:400,500,600,700&display=swap" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans:400,500,600,700&display=swap" media="print" onload="this.media='all'">
</head>
<body data-rsssl=1>
	<style type="text/css"> table tr td, table tr th{ font-size: 9pt; } </style>
		<h5 class="text-center">Laporan Bulanan Kantin</h5>		
	<h4>Pembelian</h4>	
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Barang</th>
				<th>jumlah</th>				
				<th>Harga</th>
				<th>Tanggal</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp	
			@if($pembelian->count() > 0 )				
			@foreach($pembelian as $p)
				<tr>
					<td>{{ $i++ }}</td>
					<td>{{$p->nama_barang}}</td>
					<td>{{$p->jumlah}}</td>
					<td>Rp. {{$p->harga}}</td>
					<td>{{$p->hari}}-{{$p->bulan}}-{{$p->tahun}}</td>				
				</tr>
				@endforeach			
			@else			
				<tr>
					<td colspan="5">Tidak ada data pembelian untuk bulan ini</td>								
				</tr>
			@endif
					
		</tbody>
	</table>
	
	<h4>Pengeluaran</h4>
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Barang</th>
				<th>jumlah</th>								
				<th>Tanggal</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp			
			@if($pengeluaran->count() > 0 )
			@foreach($pengeluaran as $p)
				<tr>
					<td>{{ $i++ }}</td>
					<td>{{$p->nama_barang}}</td>
					<td>{{$p->jumlah}}</td>					
					<td>{{$p->hari}}-{{$p->bulan}}-{{$p->tahun}}</td>				
				</tr>
				@endforeach			
			@else
				@foreach($pengeluaran as $p)
				<tr>
					<td colspan="4">Tidak ada data pengeluaran untuk bulan ini</td>					
				</tr>
				@endforeach			
			@endif
		</tbody>
	</table>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
 <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
 
 <center>
 <h5>Membuat Laporan PDF Dengan DOMPDF Laravel</h4>
 <h6><a target="_blank" href="https://www.malasngoding.com/membuat-laporan-…n-dompdf-laravel/">www.malasngoding.com</a></h5>
 </center>
 
 <table class='table table-bordered'>
 <thead>
 <tr>
 <th>No</th>
 <th>Nama</th>
 <th>Email</th>
 <th>Alamat</th>
 <th>Telepon</th>
 <th>Pekerjaan</th>
 </tr>
 </thead>
 <tbody>
 @php $i=1 @endphp
 @foreach($pembelian as $p)
 <tr>
 <td>{{ $i++ }}</td>
<td>{{$p->nama_barang}}</td>
<td>{{$p->jumlah}}</td>
<td>{{$p->harga}}</td>
<td>{{$p->tanggal}}</td>				
 </tr>
 @endforeach
 </tbody>
 </table>
 
</body>
</html