@extends('adminltelayouts.app')

@section('content')

    <div class="container pt-3">
        <div class="col-md-6 offset-md-3">
		<h3><center>Edit Data Kuitansi</center></h3>
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

            <form action="{{url("kuitansi/$kuitansi->id")}}" method="POST" enctype="multipart/form-data">
				<input type="hidden" name="_method" value="PUT">
                {{ csrf_field() }}

				<div class="form-group">
					<label for="">Nomor SPD</label>
                    <input type="text"  name="surattugas_id" value="{{$kuitansi->spd->spd_nomor}}" class="form-control" >
                </div>
				
                <div class="form-group">
                    <label for="">Sudah Terima Dari</label>
                    <textarea name="sudah_terima_dari"  class="form-control" rows="5">{{$kuitansi->sudah_terima_dari}}</textarea>
                </div>
				
				<div class="form-group">
                    <label for="">Untuk Pembayaran</label>
                    <textarea name="untuk_pembayaran"  class="form-control" rows="5">{{$kuitansi->untuk_pembayaran}}</textarea>
                </div>
				
                <input type="submit" class="btn btn-primary" value="Simpan">
				<a href="{{url('/kuitansi')}}" class="btn btn-primary"> Kembali </a>


            </form>
        </div>
    </div>
	 
@endsection

