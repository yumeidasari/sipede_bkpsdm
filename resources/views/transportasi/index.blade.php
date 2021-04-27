@extends('adminltelayouts.app')


@section('content')
    <div class="container pt-4">
        <h4><b>DAFTAR ALAT TRANSPORTASI</b></h4>
		<hr>
        <a href="{{url('/transportasi/create')}}" class="btn btn-primary"> Tambah </a>
        <br/>
        
        <hr>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>NO </th>
                    <th>Nama Alat Transportasi</th>
                    <th>Action </th>
                </tr>
            </thead>
            <tbody>
				@php $i=1 @endphp
                @foreach($semua_transportasi as $transportasi)
                <tr>
                    <td> {{$i++}}</td>
                    <td> {{$transportasi->alat_transportasi}} </td>
                    <td>
                        <a href="{{url("/transportasi/$transportasi->id/edit")}}" class="btn btn-info btn-sm"><i class='nav-icon fas fa-edit' style='color: white'></i></a>
						<a href="{{url("/transportasi/$transportasi->id")}}" class="btn btn-primary btn-sm" title='View'><i class='fa fa-file' style='color: white'></i></a>
                        <!--a href="{{url("/transportasi/$transportasi->id/delete")}}" class="btn btn-danger btn-sm" title='Delete'><i class='fa fa-trash' style='color: white'></i></a-->
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="10">{{$semua_transportasi->links()}}</th>
                </tr>
            </tfoot>
        </table>
		<hr>
    </div>
@endsection