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

            <form action="{{url('/surattugas')}}" method="POST" enctype="multipart/form-data">

                {{ csrf_field() }}

                <div class="form-group">
                    <label for="">Nomor Surat Tugas</label>
                    <input type="text" name="st_nomor" class="form-control">
                </div>
				
				<div class="form-group">
                    <label for="">Dasar Penugasan</label>
                    <input type="text" name="st_dasar_penugasan" class="form-control">
                </div>
				
				<div class="form-group">
                    <label>Memerintahkan Kepada</label>
                    <select name="st_pegawai_id_tujuan" class="form-control">
                        <option value="">Pilih Pegawai</option>
                        @foreach($pegawai as $p)
                            <option value="{{$p->id}}"> {{$p->nama_pegawai}} - {{$p->nip}}  </option>
                        @endforeach
                    </select>
                </div>
				
				<div class="form-group">
                    <label for="">Alasan Penugasan</label>
                    <input type="text" name="st_alasan_penugasan" class="form-control">
                </div>
				
				<div class="form-group">
                    <label for="">Lama Pelaksanaan Tugas (hari)</label>
                    <input type="text" name="st_lama_tugas" class="form-control">
                </div>
				
				<div class="form-group">
                    <label> Dari Tanggal </label>
                    <input type="text" class=" tanggal" name="st_tgl_awal" autocomplete="off">
					<label> Sampai Tanggal </label>
                    <input type="text" class=" tanggal1" name="st_tgl_akhir" autocomplete="off">
                </div>
				
				<div class="form-group">
                    <label for="">Ditetapkan di</label>
                    <input type="text" name="st_tempat_penetapan" class="form-control">
                </div>
				
				<div class="form-group">
                    <label> Tanggal Penetapan </label>
                    <input type="text" class=" tanggal2" name="st_tgl_penetapan" autocomplete="off">
					
                </div>
				
				<div class="form-group">
                    <label>Pejabat Penanda Tangan</label>
                    <select name="st_penanda_tangan_id" class="form-control">
                        <option value="">Pilih Pegawai</option>
                        @foreach($pegawai as $p)
                            <option value="{{$p->id}}"> {{$p->nama_pegawai}} - {{$p->nip}}  </option>
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
	<script>
        $(document).ready(function(){
            $('input.tanggal1').datepicker();
        })
    </script>
	<script>
        $(document).ready(function(){
            $('input.tanggal2').datepicker();
        })
    </script>
@endpush