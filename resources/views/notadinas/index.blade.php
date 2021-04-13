@extends('adminltelayouts.app')


@section('content')
    <div class="container pt-4">
        <h4><b>DAFTAR NOTA DINAS</b></h4>
		<hr>
        <a href="{{url('/notadinas/create')}}" class="btn btn-primary"> Tambah </a>
        <br/>
        
        <hr>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID </th>
                    <th>Nomor Nota Dinas</th>
					<th>Kepada</th>
					<th>Dari</th>
					<th>Perihal</th>
					<th>Action </th>
                </tr>
            </thead>
            <tbody>
                @foreach($semua_notadinas as $nd)
                <tr>
                    <td> {{$nd->id}}</td>
                    <td> <a href="{{url("notadinas/$nd->id/nodin_pdf") }}" class="links" target='_BLANK'> {{$nd->nd_nomor}} </a>
					<td> {{$nd->nd_kepada}} </td>
					<td> {{$nd->nd_dari}} </td>
					<td> {{$nd->nd_perihal}} </td>
					<td>
                        <a href="{{url("/notadinas/$nd->id/edit")}}" class="btn btn-info btn-sm">edit </a>
                        <a href="{{url("/notadinas/$nd->id")}}" class="btn btn-info btn-sm">view </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="10">{{$semua_notadinas->links()}}</th>
                </tr>
            </tfoot>
        </table>
		<hr>
    </div>
@endsection