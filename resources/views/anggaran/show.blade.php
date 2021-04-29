@extends('adminltelayouts.app')

@section('content')
    <div class="container pt-3">
        <h3><center>Detail Anggaran</center></h3>
        <hr>
        <div class="col-md-8 offset-md-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
						<td>Tahun</td>
						<td>:</td>
						<td>{{$anggaran->tahun}}</td>
					</tr>
					
					<tr>
						<td>Jumlah Anggaran</td>
						<td>:</td>
						<td>Rp. {{rupiah($anggaran->jml_anggaran)}}</td>
					</tr>
					
					<tr>
						<td>Jumlah Realisasi</td>
						<td>:</td>
						<td>Rp. {{rupiah($anggaran->jml_realisasi)}}</td>
					</tr>
					
					<tr>
						<td>Sisa Anggaran</td>
						<td>:</td>
						<td>Rp. {{rupiah($anggaran->sisa_anggaran)}}</td>
					</tr>
					
                </tbody>
            </table>
            <a href="{{url('/anggaran')}}" class="btn btn-primary"> Kembali </a>
            <br>
            <br>
        </div>
    </div>
<?php
function rupiah($angka){
	
	//$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	$hasil_rupiah = number_format($angka,2,',','.');
	return $hasil_rupiah;
 
}
?>
@endsection