@extends('layouts.app')


@section('content')
    <div class="container pt-5">
        <h4>Daftar opd</h4>

        <a href="{{url('/opd/create')}}" class="btn btn-primary"> Tambah </a>
        <br/>
        <br/>
        <hr>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID </th>
                    <th>Nama OPD</th>
                    <th>Action </th>
                </tr>
            </thead>
            <tbody>
                @foreach($semua_opd as $opd)
                <tr>
                    <td> {{$opd->id_opd}}</td>
                    <td> {{$opd->nama_opd}} </td>
                    <td>
                        <a href="{{url("/opd/$opd->id/edit")}}" class="btn btn-info btn-sm">edit </a>
                        <a href="{{url("/opd/$opd->id")}}" class="btn btn-info btn-sm">view </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="10">{{$semua_opd->links()}}</th>
                </tr>
            </tfoot>
        </table>
    </div>
@endsection