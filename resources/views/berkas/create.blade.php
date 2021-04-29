@extends('adminltelayouts.app')

@section('content')
    <div class="container pt-3">
        <div class="col-md-6 offset-md-3">
			<h3><center>Upload File Pendukung SPD</center></h3>
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

            <form action="{{url('/berkas')}}" method="POST" enctype="multipart/form-data">

                {{ csrf_field() }}
               
				<div class="form-group">
                    <input type="text"  name="surattugas_id" value="{{$surattugas->id}}" class="form-control" hidden>
                </div>

                <div class="col">
                     <div class="form-group">
                          <label for=""><b>File Scan Nota Dinas</b></label>
                          <input type="file" name="scan_nodin" class="form-control">
                     </div>
                </div>
				
				<div class="col">
                     <div class="form-group">
                          <label for=""><b>File Scan Surat Tugas</b></label>
                          <input type="file" name="scan_surattugas" class="form-control">
                     </div>
                </div>
				
				<div class="col">
                     <div class="form-group">
                          <label for=""><b>File Scan SPD</b></label>
                          <input type="file" name="scan_spd" class="form-control">
                     </div>
                </div>
				
				<div class="col">
                     <div class="form-group">
                          <label for=""><b>File Scan Tiket</b></label>
                          <input type="file" name="scan_tiket" class="form-control">
                     </div>
                </div>
				
				<div class="col">
                     <div class="form-group">
                          <label for=""><b>File Scan Boarding Pass</b></label>
                          <input type="file" name="scan_boarding_pass" class="form-control">
                     </div>
                </div>
				
				<div class="col">
                     <div class="form-group">
                          <label for=""><b>File Scan Bill Hotel</b></label>
                          <input type="file" name="scan_bill_hotel" class="form-control">
                     </div>
                </div>
				
				<div class="col">
                     <div class="form-group">
                          <label for=""><b>File Scan Laporan SPD</b></label>
                          <input type="file" name="scan_laporan_spd" class="form-control">
                     </div>
                </div>

                <input type="submit" class="btn btn-primary" value="Simpan">
				<a href="{{url('/berkas')}}" class="btn btn-primary"> Kembali </a>


            </form>
        </div>
    </div>
@endsection

