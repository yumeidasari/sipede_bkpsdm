@extends('adminltelayouts.app')


@section('content')
    <div class="container pt-5">
        <h4>Daftar Golongan</h4>

        <a href="{{url('/golongan/create')}}" class="btn btn-primary"> Tambah </a>
        <br/>
        <br/>
        <hr>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID </th>
                    <th>Golongan</th>
                    <th>Action </th>
                </tr>
            </thead>
            <tbody>
                @foreach($semua_golongan as $golongan)
                <tr>
                    <td> {{$golongan->id}}</td>
                    <td> {{$golongan->golongan}} </td>
                    <td>
                        <a href="{{url("/golongan/$golongan->id/edit")}}" class="btn btn-info btn-sm">edit </a>
                        <a href="{{url("/golongan/$golongan->id")}}" class="btn btn-info btn-sm">view </a>
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
    </div>
@endsection