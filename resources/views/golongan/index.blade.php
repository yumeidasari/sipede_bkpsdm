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
                @foreach($semua_golongan as $golongan)
                <tr>
                    <td> {{$golongan->id}}</td>
                    <td> {{$golongan->golongan}} </td>
					<td> {{$golongan->pangkat}} </td>
                    <td>
                        <a href="{{url("/golongan/$golongan->id/edit")}}" class="btn btn-info btn-sm">edit </a>
                        
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