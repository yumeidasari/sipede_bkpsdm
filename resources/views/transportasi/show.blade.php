@extends('adminltelayouts.app')

@section('content')
    <div class="container pt-3">
        <h3><center>Detail Alat Transportasi</center></h3>
        <hr>
        <div class="col-md-8 offset-md-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
						<td>Nama Alat Transportasi</td>
						<td>:</td>
						<td>{{$transportasi->alat_transportasi}}</td>
					</tr>
					
                </tbody>
            </table>
            <a href="{{url('/transportasi')}}" class="btn btn-primary"> Kembali </a>
            <br>
            <br>
        </div>
    </div>
@endsection