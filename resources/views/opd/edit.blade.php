@extends('adminltelayouts.app')

@section('content')
    <div class="container pt-3">
        <div class="col-md-6 offset-md-3">
			<h3><center>Edit Data Instansi</center></h3>
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

            <form action="{{url("opd/$opd->id")}}" method="POST" enctype="multipart/form-data">
				<input type="hidden" name="_method" value="PUT">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="">Nama Instansi</label>
                    <input type="text" name="nama_opd" value="{{$opd->nama_opd}}" class="form-control">
                </div>
				
				
                <input type="submit" class="btn btn-primary" value="Simpan">
				<a href="{{url('/opd')}}" class="btn btn-primary"> Batal </a>

            </form>
        </div>
    </div>
@endsection

