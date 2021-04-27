@extends('adminltelayouts.app')

@section('content')
    <div class="container pt-3">
        <div class="col-md-6 offset-md-3">
			<h3><center>Edit Data Pegawai</center></h3>
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

            <form action="{{url("pegawai/$pegawai->id")}}" method="POST" enctype="multipart/form-data">
				<input type="hidden" name="_method" value="PUT">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="">Nama Pegawai</label>
                    <input type="text" name="nama_pegawai" value="{{$pegawai->nama_pegawai}}" class="form-control">
                </div>
				
				<div class="form-group">
                    <label for="">NIP</label>
                    <input type="text" name="nip" value="{{$pegawai->nip}}" class="form-control">
                </div>
				
						
				<div class="form-group">
                    <label>Jabatan</label>
                    <select name="jabatan_id" class="form-control">
                        <option value="">Pilih Jabatan</option>
                        @foreach($jabatan as $j)
                            <option {{$pegawai->jabatan_id == $j->id ? "selected" : ""}} value="{{$j->id}}"> {{$j->jabatan}} </option>
                        @endforeach
                    </select>
                </div>
				
				<div class="form-group">
                    <label>Golongan</label>
                    <select name="golongan_id" class="form-control">
                        <option value="">Pilih Golongan</option>
                        @foreach($golongan as $g)
                            <option {{$pegawai->golongan_id == $g->id ? "selected" : ""}} value="{{$g->id}}"> {{$g->golongan}}-{{$g->pangkat}} </option>
                        @endforeach
                    </select>
                </div>
				
                <input type="submit" class="btn btn-primary" value="Simpan">
				<a href="{{url('/pegawai')}}" class="btn btn-primary"> Batal </a>


            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function(){
            $('input.tanggal').datepicker();
        })
    </script>
@endpush