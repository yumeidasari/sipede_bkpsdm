@extends('adminltelayouts.app')

@section('content')
    <div class="container pt-3">
        <h3><center>Detail Pangkat/Golongan</center></h3>
        <hr>
        <div class="col-md-8 offset-md-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
						<td>Nama Golongan</td>
						<td>:</td>
						<td>{{$golongan->golongan}}</td>
					</tr>
					<tr>
						<td>Pangkat</td>
						<td>:</td>
						<td>{{$golongan->pangkat}}</td>
					</tr>
					
                </tbody>
            </table>
            <a href="{{url('/golongan')}}" class="btn btn-primary"> Kembali </a>
            <br>
            <br>
        </div>
    </div>
@endsection