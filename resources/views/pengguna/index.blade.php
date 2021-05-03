@extends('adminltelayouts.app')


@section('content')
    <div class="container pt-4">
        <h4><b>DAFTAR PENGGUNA APLIKASI</b></h4>
		<hr>
        <a href="{{url('/pengguna/create')}}" class="btn btn-primary"> Tambah </a>
        <br/>
        
        <hr>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>User</th>
                    <th>Role</th>
                    <th>Nama Pegawai</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
				@php $i=1 @endphp
                @foreach($semua_pengguna as $pengguna)
                <tr>
                    <td> {{$i++}}</td>
                    <td> {{$pengguna->name}} </td>
					<td> {{$pengguna->role}} </td>
					<td> {{$pengguna->pegawai->nama_pegawai}} </td>
                    <td>
                        <a href="{{url("/pengguna/$pengguna->id/edit")}}" class="btn btn-info btn-sm"><i class='nav-icon fas fa-edit' style='color: white'></i></a>
						<a href="{{url("/pengguna/$pengguna->id")}}" class="btn btn-primary btn-sm" title='View'><i class='fa fa-file' style='color: white'></i></a>
                        <!--a href="{{url("/pengguna/$pengguna->id/delete")}}" class="btn btn-danger btn-sm" title='Delete'><i class='fa fa-trash' style='color: white'></i></a-->
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="10">{{$semua_pengguna->links()}}</th>
                </tr>
            </tfoot>
        </table>
		<hr>
    </div>
@endsection