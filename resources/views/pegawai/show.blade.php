@extends('adminltelayouts.app')

@section('content')
    <div class="container pt-3">
        <h3><center>Detail Pegawai {{$pegawai->nama_pegawai}}</center></h3>
        <hr>
        <div class="col-md-8 offset-md-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
						<td>Nama Pegawai</td>
						<td>:</td>
						<td>{{$pegawai->nama_pegawai}}</td>
					</tr>
					<tr>
						<td>NIP</td>
						<td>:</td>
						<td>{{$pegawai->nip}}</td>
					</tr>
					<tr>
						<td>Jabatan</td>
						<td>:</td>
						<td>{{$pegawai->jabatan->jabatan}}</td>
					</tr>
					<tr>
						<td>Pangkat/Golongan</td>
						<td>:</td>
						<td>{{$pegawai->golongan->pangkat}}/{{$pegawai->golongan->golongan}}</td>
					</tr>
                    
                </tbody>
            </table>
            <a href="{{url('/pegawai')}}" class="btn btn-primary"> Kembali </a>
            <br>
            <br>
        </div>
    </div>
@endsection