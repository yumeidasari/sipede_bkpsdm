@extends('adminltelayouts.app')


@section('content')
    <div class="container pt-4">
        <h4><b>DAFTAR PANGKAT</b></h4>
		<hr>
        <a href="{{url('/pangkat/create')}}" class="btn btn-primary"> Tambah </a>
        <br/>
        
        <hr>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID </th>
                    <th>Nama Pangkat</th>
                    <th>Action </th>
                </tr>
            </thead>
			
            <tbody>
                @foreach($semua_pangkat as $pangkat)
                <tr>
                    <td> {{$pangkat->id}}</td>
                    <td> {{$pangkat->pangkat}} </td>
                    <td>
                        <a href="{{url("/pangkat/$pangkat->id/edit")}}" class="btn btn-info btn-sm">edit </a>
                        
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="10">{{$semua_pangkat->links()}}</th>
                </tr>
            </tfoot>
        </table>
		<hr>
    </div>
@endsection