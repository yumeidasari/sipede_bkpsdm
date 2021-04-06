@extends('layouts.app')


@section('content')
    <div class="container pt-5">
        <h4>Daftar Surat Tugas</h4>

        <a href="{{url('/surattugas/create')}}" class="btn btn-primary"> Tambah </a>
        <br/>
        <br/>
        <hr>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID </th>
                    <th>Nomor Surat Tugas</th>
					<th>Dasar Penugasan</th>
					<th>Nama Pegawai</th>
					<th>NIP</th>
					<th>Jabatan</th>
                    <th>Action </th>
                </tr>
            </thead>
            <tbody>
                @foreach($semua_surattugas as $st)
                <tr>
                    <td> {{$st->id}}</td>
                    <td> {{$st->st_nomor}} </td>
					<td> {{$st->st_dasar_penugasan}} </td>
					<td> {{$st->pegawai->nama_pegawai}} </td>
					<td> {{$st->pegawai->nip}} </td>
					<td> {{$st->pegawai->jabatan->jabatan}} </td>
                    <td>
                        <a href="{{url("/surattugas/$st->id/edit")}}" class="btn btn-info btn-sm">edit </a>
                        <a href="{{url("/surattugas/$st->id")}}" class="btn btn-info btn-sm">view </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="10">{{$semua_surattugas->links()}}</th>
                </tr>
            </tfoot>
        </table>
    </div>
@endsection