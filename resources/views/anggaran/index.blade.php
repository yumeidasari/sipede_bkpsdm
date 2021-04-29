@extends('adminltelayouts.app')


@section('content')
    <div class="container pt-4">
        <h4><b>DAFTAR ANGGARAN</b></h4>
		<hr>
        <a href="{{url('/anggaran/create')}}" class="btn btn-primary"> Tambah </a>
        <br/>
        
        <hr>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>Tahun</th>
					<th>Jumlah Anggaran</th>
					<th>Jumlah Realisasi</th>
					<th>Sisa Anggaran</th>
                    <th>Action </th>
                </tr>
            </thead>
            <tbody>
				@php $i=1 @endphp
                @foreach($semua_anggaran as $anggaran)
                <tr>
                    <td> {{$i++}}</td>
                    <td> {{$anggaran->tahun}} </td>
					<td> Rp. {{rupiah($anggaran->jml_anggaran)}} </td>
					<td> Rp. {{rupiah($anggaran->jml_realisasi)}} </td>
					<td> Rp. {{rupiah($anggaran->sisa_anggaran)}} </td>
                    <td>
                        <a href="{{url("/anggaran/$anggaran->id/edit")}}" class="btn btn-info btn-sm"><i class='nav-icon fas fa-edit' style='color: white'></i></a>
						<a href="{{url("/anggaran/$anggaran->id")}}" class="btn btn-primary btn-sm" title='View'><i class='fa fa-file' style='color: white'></i></a>
                        <!--a href="{{url("/anggaran/$anggaran->id/delete")}}" class="btn btn-danger btn-sm" title='Delete'><i class='fa fa-trash' style='color: white'></i></a-->
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="10">{{$semua_anggaran->links()}}</th>
                </tr>
            </tfoot>
        </table>
		<hr>
    </div>
<?php
function rupiah($angka){
	
	//$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	$hasil_rupiah = number_format($angka,2,',','.');
	return $hasil_rupiah;
 
}
?>
@endsection