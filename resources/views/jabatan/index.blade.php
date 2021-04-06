@extends('layouts.app')


@section('content')
    <div class="container pt-5">
        <h4>Daftar Jabatan</h4>

        <a href="{{url('/jabatan/create')}}" class="btn btn-primary"> Tambah </a>
        <br/>
        <br/>
        <hr>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID </th>
                    <th>Nama Jabatan</th>
                    <th>Action </th>
                </tr>
            </thead>
            <tbody>
                @foreach($semua_jabatan as $jabatan)
                <tr>
                    <td> {{$jabatan->id}}</td>
                    <td> {{$jabatan->jabatan}} </td>
                    <td>
                        <a href="{{url("/jabatan/$jabatan->id/edit")}}" class="btn btn-info btn-sm">edit </a>
                        <a href="{{url("/jabatan/$jabatan->id")}}" class="btn btn-info btn-sm">view </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="10">{{$semua_jabatan->links()}}</th>
                </tr>
            </tfoot>
        </table>
    </div>
@endsection