@extends('adminltelayouts.app')


@section('content')
    <div class="container pt-4">
        <h4><b>DAFTAR BIAYA</b></h4>
		<hr>
        <a href="{{url('/biaya/create')}}" class="btn btn-primary"> Tambah </a>
        <br/>
        
        <hr>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>Nama Biaya</th>
                    <th>Action </th>
                </tr>
            </thead>
            <tbody>
				@php $i=1 @endphp
                @foreach($semua_biaya as $biaya)
                <tr>
                    <td> {{$i++}}</td>
                    <td> {{$biaya->biaya}} </td>
                    <td>
                        <a href="{{url("/biaya/$biaya->id/edit")}}" class="btn btn-info btn-sm">edit </a>
                        <a href="{{url("/biaya/$biaya->id")}}" class="btn btn-info btn-sm">view </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="10">{{$semua_biaya->links()}}</th>
                </tr>
            </tfoot>
        </table>
		<hr>
    </div>
@endsection