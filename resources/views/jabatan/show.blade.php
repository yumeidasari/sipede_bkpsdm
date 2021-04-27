@extends('adminltelayouts.app')

@section('content')
    <div class="container pt-3">
        <h3><center>Detail Jabatan</center></h3>
        <hr>
        <div class="col-md-8 offset-md-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
						<td>Nama Jabatan</td>
						<td>:</td>
						<td>{{$jabatan->jabatan}}</td>
					</tr>
					
                </tbody>
            </table>
            <a href="{{url('/jabatan')}}" class="btn btn-primary"> Kembali </a>
            <br>
            <br>
        </div>
    </div>
@endsection