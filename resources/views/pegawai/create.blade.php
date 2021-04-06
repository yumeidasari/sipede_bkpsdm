@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-6 offset-md-3">

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

            <form action="{{url('/pegawai')}}" method="POST" enctype="multipart/form-data">

                {{ csrf_field() }}

                <div class="form-group">
                    <label for="">Nama Pegawai</label>
                    <input type="text" name="nama_pegawai" class="form-control">
                </div>
				
				<div class="form-group">
                    <label for="">NIP</label>
                    <input type="text" name="nip" class="form-control">
                </div>
				
				<div class="form-group">
                    <label>Jabatan</label>
                    <select name="jabatan_id" class="form-control">
                        <option value="">Pilih Jabatan</option>
                        @foreach($jabatan as $j)
                            <option value="{{$j->id}}"> {{$j->jabatan}} </option>
                        @endforeach
                    </select>
                </div>
				
				<div class="form-group">
                    <label>Golongan</label>
                    <select name="golongan_id" class="form-control">
                        <option value="">Pilih Golongan</option>
                        @foreach($golongan as $g)
                            <option value="{{$g->id}}"> {{$g->golongan}} </option>
                        @endforeach
                    </select>
                </div>

                <input type="submit" class="btn btn-primary" value="Simpan">


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