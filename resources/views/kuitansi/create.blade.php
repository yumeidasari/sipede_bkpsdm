@extends('adminltelayouts.app')

@section('content')
<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
</head>
    <div class="container pt-3">
        <div class="col-md-6 offset-md-3">
		<h3><center>Buat Data Nota Dinas Baru</center></h3>
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

            <form action="{{url('/notadinas')}}" method="POST" enctype="multipart/form-data">

                {{ csrf_field() }}

                <div class="form-group">
                    <label for="">Nomor Nota Dinas</label>
                    <input type="text" name="nd_nomor" class="form-control">
                </div>
				
				<div class="form-group">
                    <label for="">Kepada</label>
                    <input type="text" name="nd_kepada" class="form-control">
                </div>
				
				<div class="form-group">
                    <label for="">Dari</label>
                    <input type="text" name="nd_dari" class="form-control">
                </div>
				
				<div class="form-group">
                    <label> Tanggal</label>
                    <!--input type="text" class=" tanggal" name="nd_tgl_nodin" autocomplete="off"-->
					<input type="text" class="date form-control" name="nd_tgl_nodin" id="datepicker">
					
                </div>
				
				<div class="form-group">
                    <label for="">Lampiran</label>
                    <input type="text" name="nd_lampiran" class="form-control">
                </div>
				
				<div class="form-group">
                    <label for="">Perihal</label>
                    <input type="text" name="nd_perihal" class="form-control">
                </div>
				
				<div class="form-group">
                    <label for="">Kalimat Pembuka</label>
                    <textarea name="nd_kalimat_pembuka" class="form-control" rows="5"></textarea>
                </div>
				
				<div class="form-group">
                    <label>Memerintahkan Kepada</label>
                    <select name="nd_pegawai_id" class="form-control">
                        <option value="">Pilih Pegawai</option>
                        @foreach($pegawai as $p)
                            <option value="{{$p->id}}"> {{$p->nama_pegawai}} - {{$p->nip}}  </option>
                        @endforeach
                    </select>
                </div>
				
				<div class="form-group">
                    <label for="">Kalimat Penutup</label>
                    <textarea name="nd_kalimat_penutup" class="form-control" rows="5"></textarea>
                </div>
								
				<div class="form-group">
                    <label>Pejabat Penanda Tangan</label>
                    <select name="nd_penanda_tangan_id" class="form-control">
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
	 <script type="text/javascript">  
        $('#datepicker').datepicker({ 
            autoclose: true   
              
         });  
    </script>
@endsection

