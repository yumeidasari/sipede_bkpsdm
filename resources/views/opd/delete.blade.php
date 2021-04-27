@extends('adminltelayouts/app')

@section('content')
        <div class="container pt-4">
        <br>
        <br>
        
            <div class="col-md-8 offset-md-2">

                <h3>Hapus Data Instansi?</h3>

                <form method="POST" action="{{ url("opd/$opd->id") }}">

                    {{ csrf_field() }}

                    <input type="hidden" name="_method" value="DELETE">

                    Anda yakin ingin menghapus {{$opd->nama_opd}}?
                    <br>
                    <br>
                    <a href=" {{ url("opd") }} " class="btn btn-secondary">Batalkan</a>
                    <input type="submit" value="Ya hapus" class="btn btn-danger">

                </form>
            </div>
        </div>
@endsection