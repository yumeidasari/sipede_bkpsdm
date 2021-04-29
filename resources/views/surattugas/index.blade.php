@extends('adminltelayouts.app')


@section('content')
<head>
	<style>
		.custom {
		width: 110px !important;
		}
		.custom1 {
		width: 30px !important;
		}
	</style>
</head>
    <div class="container pt-4">
        <h4><b>DAFTAR SURAT TUGAS</b></h4>
		<hr>
		@auth
		@if(\Gate::allows('PU'))
        <a href="{{url('/surattugas/create')}}" class="btn btn-primary"> Tambah </a>
		@endif
		@endauth
        <br/>
        
        <hr>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>Nomor Surat Tugas</th>
					<th>Dasar Penugasan</th>
					<th>Nama Pegawai</th>
					<th>NIP</th>
					<th>Jabatan</th>
					<th width="100px">Status</th>
                    <th>Action </th>
                </tr>
            </thead>
            <tbody>
				@php $i=1 @endphp
                @foreach($semua_surattugas as $st)
                <tr>
                    <td> {{$i++}}</td>
                    <td> {{$st->st_nomor}} </td>
					<td> {{$st->st_dasar_penugasan}} </td>
					<td> {{$st->pegawai->nama_pegawai}} </td>
					<td> {{$st->pegawai->nip}} </td>
					<td> {{$st->pegawai->jabatan->jabatan}} </td>
				@auth
				@if(\Gate::allows('PU') )
					@if($st->st_status == 0)
						<td width="100px">Belum Diperiksa</td>
					@elseif($st->st_status == 1)
						<td width="100px">
							<a href="{{url("/surattugas/$st->id/edit")}}" class="btn btn-info btn-sm"><i class='nav-icon fas fa-edit' style='color: white'></i></a>
							Harus Revisi
						</td>
					@else
						<td width="100px">Approved</td>
					@endif
				@elseif(\Gate::allows('PPK') )
					@if($st->st_status == 0)
						<td width="100px">Belum Diperiksa</td>
					@elseif($st->st_status == 1)
						<td width="100px">
							Harus Revisi
						</td>
					@else
						<td width="100px">Approved</td>
					@endif	
				@elseif(\Gate::allows('KUK'))
					@if($st->st_status == 0)
						<td width="100px">
							
								<a href="{{url("/surattugas/$st->id/st_confirm_status")}}" class="btn btn-success btn-sm custom1" ><i class='nav-icon fas fa-check' style='color: white'></i></a>
								<a href="{{url("/surattugas/$st->id/st_tolak_status")}}" class="btn btn-danger btn-sm custom1" ><i class='nav-icon fas fa-times' style='color: white'></i></a>
							
						</td>
					@elseif($st->st_status == 1)
						<td>Harus Revisi</td>
					@else
						<td>Approved</td>
					@endif
				@endif
				@endauth
                    <td>
                       <!-- <a href="{{url("/surattugas/$st->id/edit")}}" class="btn btn-info btn-sm">edit </a> -->
                       <!-- <a href="{{url("/surattugas/$st->id")}}" class="btn btn-info btn-sm">view </a> -->
				
						<a href="{{url("surattugas/$st->id/surattugas_pdf") }}" class="btn btn-danger btn-sm custom" target='_BLANK' > Export to PDF </a><br>
					
				@auth
					@if(\Gate::allows('PU'))
						<a href="{{url("/spd/$st->id/create")}}" class="btn btn-secondary btn-sm custom" > Buat SPD </a><br>
					@endif
				@endauth			
						<!--a href="{{url("/berkas/$st->id/create")}}" class="btn btn-info btn-sm custom" > Upload Berkas </a-->
						
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="10">{{$semua_surattugas->links()}}</th>
                </tr>
            </tfoot>
        </table>
		<hr>
    </div>
@endsection