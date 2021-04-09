@extends('adminltelayouts.app')


@section('content')
    <div class="container pt-5">
        <h4>Daftar Pegawai</h4>

        <a href="{{url('/pegawai/create')}}" class="btn btn-primary"> Tambah </a>
        <br/>
        <br/>
        <hr>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID </th>
                    <th>Nama Pegawai</th>
					<th>NIP</th>
					<th>Jabatan</th>
					<th>Golongan</th>
                    <th>Action </th>
                </tr>
            </thead>
            <tbody>
                @foreach($semua_pegawai as $pegawai)
                <tr>
                    <td> {{$pegawai->id}}</td>
                    <td> {{$pegawai->nama_pegawai}} </td>
					<td> {{$pegawai->nip}} </td>
					<td> {{$pegawai->jabatan->jabatan}} </td>
					<td> {{$pegawai->golongan->golongan}} </td>
                    <td>
                        <a href="{{url("/pegawai/$pegawai->id/edit")}}" class="btn btn-info btn-sm">edit </a>
                        <a href="{{url("/pegawai/$pegawai->id")}}" class="btn btn-info btn-sm">view </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="10">{{$semua_pegawai->links()}}</th>
                </tr>
            </tfoot>
        </table>
    </div>
@endsection