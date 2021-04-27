@extends('adminltelayouts.app')

@section('content')
<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
</head>
    <div class="container pt-3">
        <div class="col-md-6 offset-md-3">
		<h3><center>Buat Data Surat Tugas Baru</center></h3>
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
                    <!--input type="text" class=" tanggal" name="st_tgl_awal" autocomplete="off"-->
					<input type="text" class="date form-control" name="st_tgl_awal" id="datepicker1">
					<label> Sampai Tanggal </label>
                    <!--input type="text" class=" tanggal1" name="st_tgl_akhir" autocomplete="off"-->
					<input type="text" class="date form-control" name="st_tgl_akhir" id="datepicker2">
					
                </div>
				
				<div class="form-group">
                    <label for="">Ditetapkan di</label>
                    <input type="text" name="st_tempat_penetapan" class="form-control">
                </div>
				
				<div class="form-group">
                    <label> Tanggal Penetapan </label>
                    <!--input type="text" class=" tanggal2" name="st_tgl_penetapan" autocomplete="off"-->
					<input type="text" class="date form-control" name="st_tgl_penetapan" id="datepicker3">
					
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
				<a href="{{url('/surattugas')}}" class="btn btn-primary"> Kembali </a>

            </form>
        </div>
    </div>
	<script type="text/javascript">  
        $('#datepicker1').datepicker({ 
            autoclose: true   
              
         });  
     
        $('#datepicker2').datepicker({ 
            autoclose: true   
              
         });  
      
        $('#datepicker3').datepicker({ 
            autoclose: true   
              
         });  
    </script>
@endsection

