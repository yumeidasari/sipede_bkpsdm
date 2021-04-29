@extends('adminltelayouts.app')

@section('content')
    <div class="container pt-3">
        <div class="col-md-6 offset-md-3">
			<h3><center>Tambah Data Anggaran</center></h3>
                    <hr>
                    <br>
            @if(Session::has('message'))
                <div class="alert alert-success">
                    {{ Session::get('message')}}
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{url('/anggaran')}}" method="POST" enctype="multipart/form-data">

                {{ csrf_field() }}
               

                <div class="form-group">
                    <label for="">Tahun Anggaran</label>
                    <input type="text" name="tahun" class="form-control">
                </div>
				
				<div class="form-group">
                    <label for="">Jumlah Anggaran</label>
                    <input type="text" name="jml_anggaran" class="form-control">
                </div>

                <input type="submit" class="btn btn-primary" value="Simpan">
				<a href="{{url('/anggaran')}}" class="btn btn-primary"> Kembali </a>

            </form>
        </div>
    </div>
@endsection

