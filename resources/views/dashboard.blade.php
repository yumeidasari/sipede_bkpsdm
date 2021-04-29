@extends('adminltelayouts.app')

@section('content')

<div class="container">
<br/>
        
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><b>DASHBOARD</b></h1>
            <hr>
			
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
      @auth
        <div class="row">
		@if(\Gate::allows('PPK'))
			<div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h4>{{$jml_pegawai}}<!--sup style="font-size: 20px">%</sup--></h4>

                <p>Pegawai</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-person"></i>
              </div>
              <a href="{{url('/pegawai')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
		  
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h4>Rp. {{rupiah($sisa_anggaran)}}</h4>

                <p>Sisa Anggaran</p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-paper"></i>
              </div>
              <a href="{{url('/anggaran')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
		@endif
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h4>{{$jml_surattugas}}<!--sup style="font-size: 20px">%</sup--></h4>

                <p>Surat Tugas</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-clipboard"></i>
              </div>
              <a href="{{url('/surattugas')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
      
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h4>{{$jml_spd}}</h4>

                <p>SPD </p>
              </div>
              <div class="icon">
                <i class="ion ion-android-plane"></i>
              </div>
              <a href="{{url('/spd')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
		@endauth
          <!--div class="col-lg-3 col-6"-->
            <!-- small box -->
            <!--div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div-->
          <!-- ./col -->
        </div>
        <!-- /.row -->
        
      </div><!-- /.container-fluid -->

    
</div>

<?php
function rupiah($angka){
	
	//$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	$hasil_rupiah = number_format($angka,2,',','.');
	return $hasil_rupiah;
 
}
?>
@endsection
