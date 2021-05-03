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

            <form action="{{url("berkas/$berkas->id")}}" method="POST" enctype="multipart/form-data">

                <input type="hidden" name="_method" value="PUT">
				
				{{ csrf_field() }}
               
				<div class="form-group">
                    <input type="text"  name="spd_id" value="{{$berkas->spd->id}}" class="form-control" hidden>
                </div>

                <div class="col">
                     <div class="form-group">
                          <label for=""><b>File Scan Nota Dinas</b></label>
                          <input type="file" name="scan_nodin" class="form-control">
							@if(isset($berkas->scan_nodin))
                                <a href="{{asset("/storage/$berkas->scan_nodin")}}" target='_BLANK'>
									<img  src="{{asset('/storage/img/Adobe-PDF-Document-icon.png')}}" >
									Unduh
								</a>
                            @else
                                Belum Ada
                            @endif
                     </div>
                </div>
				
				<div class="col">
                     <div class="form-group">
                          <label for=""><b>File Scan Surat Tugas</b></label>
                          <input type="file" name="scan_surattugas" class="form-control">
							@if(isset($berkas->scan_surattugas))
                                <a href="{{asset("/storage/$berkas->scan_surattugas")}}" target='_BLANK'>
									<img  src="{{asset('/storage/img/Adobe-PDF-Document-icon.png')}}" >
									Unduh
								</a>
                            @else
                                -
                            @endif
                     </div>
                </div>
				
				<div class="col">
                     <div class="form-group">
                          <label for=""><b>File Scan SPD</b></label>
                          <input type="file" name="scan_spd" class="form-control">
							@if(isset($berkas->scan_spd))
                                <a href="{{asset("/storage/$berkas->scan_spd")}}" target='_BLANK'>
									<img  src="{{asset('/storage/img/Adobe-PDF-Document-icon.png')}}">
									Unduh
								</a>
                            @else
                                -
                            @endif
                     </div>
                </div>
				
				<div class="col">
                     <div class="form-group">
                          <label for=""><b>File Scan Tiket</b></label>
                          <input type="file" name="scan_tiket" class="form-control">
							@if(isset($berkas->scan_tiket))
                                <a href="{{asset("/storage/$berkas->scan_tiket")}}" target='_BLANK'>
									<img  src="{{asset('/storage/img/Adobe-PDF-Document-icon.png')}}">
									Unduh
								</a>
                            @else
                                -
                            @endif
                     </div>
                </div>
				
				<div class="col">
                     <div class="form-group">
                          <label for=""><b>File Scan Boarding Pass</b></label>
                          <input type="file" name="scan_boarding_pass" class="form-control">
							@if(isset($berkas->scan_boarding_pass))
                                <a href="{{asset("/storage/$berkas->scan_boarding_pass")}}" target='_BLANK'>
									<img  src="{{asset('/storage/img/Adobe-PDF-Document-icon.png')}}">
									Unduh
								</a>
                            @else
                                -
                            @endif
                     </div>
                </div>
				
				<div class="col">
                     <div class="form-group">
                          <label for=""><b>File Scan Bill Hotel</b></label>
                          <input type="file" name="scan_bill_hotel" class="form-control">
							@if(isset($berkas->scan_bill_hotel))
                                <a href="{{asset("/storage/$berkas->scan_bill_hotel")}}" target='_BLANK'>
									<img  src="{{asset('/storage/img/Adobe-PDF-Document-icon.png')}}">
									Unduh
								</a>
                            @else
                                -
                            @endif
                     </div>
                </div>
				
				<div class="col">
                     <div class="form-group">
                          <label for=""><b>File Scan Laporan SPD</b></label>
                          <input type="file" name="scan_laporan_spd" class="form-control">
							@if(isset($berkas->scan_laporan_spd))
                                <a href="{{asset("/storage/$berkas->scan_laporan_spd")}}" target='_BLANK'>
									<img  src="{{asset('/storage/img/Adobe-PDF-Document-icon.png')}}">
									Unduh
								</a>
                            @else
                                -
                            @endif
                     </div>
                </div>
				
				<div class="col">
                     <div class="form-group">
                          <label for=""><b>File Scan Bill Rapid Test</b></label>
                          <input type="file" name="scan_bill_rapidtest" class="form-control">
							@if(isset($berkas->scan_bill_rapidtest))
                                <a href="{{asset("/storage/$berkas->scan_bill_rapidtest")}}" target='_BLANK'>
									<img  src="{{asset('/storage/img/Adobe-PDF-Document-icon.png')}}">
									Unduh
								</a>
                            @else
                                -
                            @endif
                     </div>
                </div>

                <input type="submit" class="btn btn-primary" value="Simpan">
				<a href="{{url('/berkas')}}" class="btn btn-primary"> Kembali </a>


            </form>
        </div>
    </div>
@endsection

