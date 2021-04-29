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
        <h4><b>DAFTAR SURAT PERJALANAN DINAS</b></h4>

        <!-- <a href="{{url('/spd/create')}}" class="btn btn-primary"> Tambah </a> -->
        
        <hr>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>Nomor SPD</th>
					<th>Nomor Surat Tugas</th>
					<th>Nama Pegawai</th>
					<th>NIP</th>
					<th>Nama PPK</th>
					<th width="100px">Status</th>
					<th>Action </th>
                </tr>
            </thead>
            <tbody>
				@php $i=1 @endphp
                @foreach($semua_spd as $spd)
                <tr>
                    <td> {{$i++}}</td>
                    <td> {{$spd->spd_nomor}} </td>
					<td> {{$spd->surattugas->st_nomor}} </td>
					<td> {{$spd->pegawai->nama_pegawai}} </td>
					<td> {{$spd->pegawai->nip}} </td>
					<td> {{$spd->pegawai->nama_pegawai}} </td>
					@auth
				@if(\Gate::allows('PU') )
					@if($spd->spd_status == 0)
						<td width="100px">Belum Diperiksa</td>
					@elseif($spd->spd_status == 1)
						<td width="100px">
							<a href="{{url("/spd/$spd->id/edit")}}" class="btn btn-info btn-sm"><i class='nav-icon fas fa-edit' style='color: white'></i></a>
							
						Harus Revisi
						</td>
					@else
						<td width="100px">Approved</td>
					@endif
				@elseif(\Gate::allows('PPK') )
					@if($spd->spd_status == 0)
						<td width="100px">Belum Diperiksa</td>
					@elseif($spd->spd_status == 1)
						<td width="100px">
							Harus Revisi
						</td>
					@else
						<td width="100px">Approved</td>
					@endif	
				@elseif(\Gate::allows('KUK'))
					@if($spd->spd_status == 0)
						<td width="100px">
							
								<a href="{{url("/spd/$spd->id/spd_confirm_status")}}" class="btn btn-success btn-sm custom1" ><i class='nav-icon fas fa-check' style='color: white'></i></a>
								<a href="{{url("/spd/$spd->id/spd_tolak_status")}}" class="btn btn-danger btn-sm custom1" ><i class='nav-icon fas fa-times' style='color: white'></i></a>
							
						</td>
					@elseif($spd->spd_status == 1)
						<td>Harus Revisi</td>
					@else
						<td>Approved</td>
					@endif
				@endif
				@endauth
					<td>
                        <!-- <a href="{{url("/spd/$spd->id/edit")}}" class="btn btn-info btn-sm">edit </a> -->
                        <!-- <a href="{{url("/spd/$spd->id")}}" class="btn btn-info btn-sm">view </a> -->
						<a href="{{url("spd/$spd->id/spd_pdf") }}" class="btn btn-danger btn-sm" target='_BLANK'> Export to PDF </a>
						<!-- a href="{{url("/rincianbiaya/$spd->id/create")}}" class="btn btn-info btn-sm custom" > Rincian Biaya </a -->
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="10">{{$semua_spd->links()}}</th>
                </tr>
            </tfoot>
        </table>
		<hr>
    </div>
@endsection