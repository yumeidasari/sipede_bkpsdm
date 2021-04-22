@extends('adminltelayouts.app')


@section('content')
    <div class="container pt-4">
        <h4><b>DAFTAR KUITANSI</b></h4>
		<!-- a href="{{url('/kuitansi/create')}}" class="btn btn-primary"> Tambah </a -->
        
        <hr>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>Nomor SPD</th>
					<th>Tujuan Pembayaran</th>
					<th>Jumlah</th>
					<th>Action </th>
                </tr>
            </thead>
            <tbody>
				@php $i=1 @endphp
                @foreach($semua_kuitansi as $k)
                <tr>
                    <td> {{$i++}}</td>
                    <td> {{$k->spd->spd_nomor}} </td>
					<td> {{$k->tujuan_pembayaran}} </td>
					<td> Rp. {{rupiah($k->jumlah)}} </td>
					<td>
                        <a href="{{url("/kuitansi/$k->id/edit")}}" class="btn btn-info btn-sm">edit </a>
                        <a href="{{url("/kuitansi/$k->id")}}" class="btn btn-info btn-sm">view </a>
						<a href="{{url("kuitansi/$k->id/kuitansi_pdf") }}" class="btn btn-danger btn-sm" target='_BLANK'> Export to PDF </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="10">{{$semua_kuitansi->links()}}</th>
                </tr>
            </tfoot>
        </table>
		<hr>
    </div>
<?php
function rupiah($angka)
	{
	
		//$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
		$hasil_rupiah = number_format($angka,2,',','.');
		return $hasil_rupiah;
 
	}
?>
@endsection