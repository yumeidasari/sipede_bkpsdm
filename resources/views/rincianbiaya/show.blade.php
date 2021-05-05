@extends('adminltelayouts.app')


@section('content')
    <div class="container pt-4">
        <h4><b>DETAIL RINCIAN BIAYA PERJALANAN DINAS</b></h4>
		<!-- a href="{{url('/biaya/create')}}" class="btn btn-primary"> Tambah </a-->
        
        <hr>
		<br>
		<form>
			<div class="form-group">
                    <label for="">Lampiran SPD Nomor <span style="padding-left:10px;">:</span>
					<span style="padding-left:10px;">{{$spd->spd_nomor}}</span></label>
					<BR>
					<label for="">Tanggal <span style="padding-left:107px;">:</span> 
					<span style="padding-left:10px;">{{Carbon\Carbon::parse($spd->surattugas->st_tgl_penetapan)->format('d F Y')}}</span>
					</label>
					<BR>
					<label for="">Kota Tujuan <span style="padding-left:79px;">:</span>
					<span style="padding-left:10px;">{{$spd->kota->nama_kota}}</span></label>
            </div>
			
		<a href="{{url("/rincianbiaya/$spd->id/create")}}" class="btn btn-info btn-sm custom" > + Rincian Biaya </a>
		<a href="{{url("rincianbiaya/$spd->id/rincianbiaya_pdf") }}" class="btn btn-danger btn-sm" target='_BLANK'> Export to PDF </a>
		</form>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>Perincian Biaya</th>
					<th>Jumlah</th>
					<th>Keterangan</th>
					<th>Action</th>
                    
                </tr>
            </thead>
            <tbody>
				@php $i=1 @endphp
                @foreach($semua_rincianbiaya as $rb)
                <tr>
					<td> {{$i++}}</td>
                    <td> {{$rb->biaya}}</td>
                    <td> Rp. {{rupiah($rb->jumlah)}} </td>
					<td> {{$rb->keterangan}} </td>
					<td> <a href="{{url("/rincianbiaya/$rb->id/destroy")}}" class="btn btn-danger btn-sm" title='Delete'><i class='fa fa-trash' style='color: white'></i></a>
						<!--button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalSaya">
							<i class='fa fa-trash' style='color: black'></i>
						</button-->
					</td>
                    
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    
                </tr>
            </tfoot>
        </table>
		<hr>
    </div>
	
	<!-- contoh modal Hapus Data -->
<div class="modal fade" id="modalSaya" tabindex="-1" role="dialog" aria-labelledby="modalSayaLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalSayaLabel">Hapus Rincian Biaya</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <form method="POST" action="{{ url("rincianbiaya/$rb->id") }}">
	  {{ csrf_field() }}

                    <input type="hidden" name="_method" value="DELETE">
      <!--div class="modal-body"-->
		<br>
		<br>
        <center>Anda yakin akan menghapus data?</center>
      <!--/div-->
		<br>
		<br>
      <!--div class="modal-footer"-->
		<center>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <input type="submit" value="Ya hapus" class="btn btn-danger">
		</center>
		<br/>
      <!--/div-->
	  </form>
    </div>
  </div>
</div>

<?php
function rupiah($angka){
	
	//$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	$hasil_rupiah = number_format($angka,2,',','.');
	return $hasil_rupiah;
 
}
?>
@endsection