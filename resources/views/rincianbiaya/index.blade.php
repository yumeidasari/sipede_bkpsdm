@extends('adminltelayouts.app')


@section('content')
    <div class="container pt-4">
        <h4><b>DAFTAR RINCIAN BIAYA PERJALANAN DINAS</b></h4>
		<!-- a href="{{url('/biaya/create')}}" class="btn btn-primary"> Tambah </a-->
        
        <hr>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>Nomor SPD</th>
                    <th>Action </th>
                </tr>
            </thead>
            <tbody>
				@php $i=1 @endphp
                @foreach($semua_spd as $spd)
                <tr>
                    <td> {{$i++}}</td>
                    <td> {{$spd->spd_nomor}} </td>
                    <td>
                        <!-- a href="{{url("/rincianbiaya/$spd->id/edit")}}" class="btn btn-info btn-sm">edit </a -->
                        <a href="{{url("/rincianbiaya/$spd->id")}}" class="btn btn-info btn-sm">Lihat Rincian </a>
						<!-- a href="{{url("spd/$spd->id/spd_pdf") }}" class="btn btn-danger btn-sm" target='_BLANK'> Export to PDF </a -->
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