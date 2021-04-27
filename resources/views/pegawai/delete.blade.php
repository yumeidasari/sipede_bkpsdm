@extends('adminltelayouts/app')

@section('content')
        <div class="container pt-4">
        <br>
        <br>
        
            <div class="col-md-8 offset-md-2">

                <h3>Hapus Data Pegawai?</h3>

                <form method="POST" action="{{ url("pegawai/$pegawai->id") }}">

                    {{ csrf_field() }}

                    <input type="hidden" name="_method" value="DELETE">

                    Anda yakin ingin menghapus {{$pegawai->nama_pegawai}}?
                    <br>
                    <br>
                    <a href=" {{ url("pegawai") }} " class="btn btn-secondary">Batalkan</a>
                    <input type="submit" value="Ya hapus" class="btn btn-danger">

                </form>
            </div>
        </div>
@endsection