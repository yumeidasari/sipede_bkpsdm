@extends('adminltelayouts.app')


@section('content')
    <div class="container pt-4">
        <h4><b>DAFTAR PANGKAT/GOLONGAN</b></h4>
		<hr>
        <a href="{{url('/golongan/create')}}" class="btn btn-primary"> Tambah </a>
        <br/>
        
        <hr>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>NO </th>
                    <th>Golongan</th>
					<th>Pangkat</th>
                    <th>Action </th>
                </tr>
            </thead>
            <tbody>
				@php $i=1 @endphp
                @foreach($semua_golongan as $golongan)
                <tr>
                    <td> {{$i++}}</td>
                    <td> {{$golongan->golongan}} </td>
					<td> {{$golongan->pangkat}} </td>
                    <td>
                        <a href="{{url("/golongan/$golongan->id/edit")}}" class="btn btn-info btn-sm"><i class='nav-icon fas fa-edit' style='color: white'></i></a>
						<a href="{{url("/golongan/$golongan->id")}}" class="btn btn-primary btn-sm" title='View'><i class='fa fa-file' style='color: white'></i></a>
                        <!--a href="{{url("/golongan/$golongan->id/delete")}}" class="btn btn-danger btn-sm" title='Delete'><i class='fa fa-trash' style='color: white'></i></a-->
                       
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="10">{{$semua_golongan->links()}}</th>
                </tr>
            </tfoot>
        </table>
		<hr>
    </div>
@endsection