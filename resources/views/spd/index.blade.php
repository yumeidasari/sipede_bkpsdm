@extends('adminltelayouts.app')


@section('content')
    <div class="container pt-5">
        <h4>Daftar Surat Perjalanan Dinas</h4>

        <a href="{{url('/spd/create')}}" class="btn btn-primary"> Tambah </a>
        <br/>
        <br/>
        <hr>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID </th>
                    <th>Nomor SPD</th>
					<th>Nama Pegawai</th>
					<th>NIP</th>
					<th>Nama PPK</th>
					<th>Action </th>
                </tr>
            </thead>
            <tbody>
                @foreach($semua_spd as $spd)
                <tr>
                    <td> {{$spd->id}}</td>
                    <td> {{$spd->spd_nomor}} </td>
					<td> {{$spd->pegawai->nama_pegawai}} </td>
					<td> {{$spd->pegawai->nip}} </td>
					<td> {{$spd->pegawai->nama_pegawai}} </td>
					<td>
                        <a href="{{url("/spd/$spd->id/edit")}}" class="btn btn-info btn-sm">edit </a>
                        <a href="{{url("/spd/$spd->id")}}" class="btn btn-info btn-sm">view </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="10">{{$semua_spd->links()}}</th>
                </tr>
            </tfoot>
        </table>
    </div>
@endsection