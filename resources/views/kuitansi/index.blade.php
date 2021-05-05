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
                    <th><center>Nomor SPD</center></th>
					<th><center>Tujuan Pembayaran</center></th>
					<th width="180px"><center>Jumlah</center></th>
					<th width="150px"><center>Action</center></th>
				
                </tr>
            </thead>
            <tbody>
				@php $i=1 @endphp
                @foreach($semua_kuitansi as $k)
                <tr>
		@auth
		@if(Auth::user()->role == 'PPK')
			@if($k->spd->ppk->id == Auth::user()->pegawai_id)
                    <td> {{$i++}}</td>
                    <td> {{$k->spd->spd_nomor}} </td>
					<td> {{$k->spd->surattugas->st_alasan_penugasan}} </td>
					<td width="180px"> Rp. {{rupiah($k->jumlah)}} </td>
					<td width="150px">
                        <!-- a href="{{url("/kuitansi/$k->id/edit")}}" class="btn btn-info btn-sm"><i class='nav-icon fas fa-edit' style='color: white'></i></a -->
                        <!-- a href="{{url("/kuitansi/$k->id")}}" class="btn btn-info btn-sm">view </a -->
						<center><a href="{{url("kuitansi/$k->id/kuitansi_pdf") }}" class="btn btn-danger btn-sm" target='_BLANK'> Export to PDF </a></center>
                    </td>
                </tr>
			@endif
		@else
					<td> {{$i++}}</td>
                    <td> {{$k->spd->spd_nomor}} </td>
					<td> {{$k->spd->surattugas->st_alasan_penugasan}} </td>
					<td width="180px"> Rp. {{rupiah($k->jumlah)}} </td>
					<td width="150px">
                        <!-- a href="{{url("/kuitansi/$k->id/edit")}}" class="btn btn-info btn-sm"><i class='nav-icon fas fa-edit' style='color: white'></i></a -->
                        <!-- a href="{{url("/kuitansi/$k->id")}}" class="btn btn-info btn-sm">view </a -->
						<center><a href="{{url("kuitansi/$k->id/kuitansi_pdf") }}" class="btn btn-danger btn-sm" target='_BLANK'> Export to PDF </a></center>
                    </td>
                </tr>
		@endif
		@endauth
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
