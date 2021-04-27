@extends('adminltelayouts/app')

@section('content')
        <div class="container pt-4">
        <br>
        <br>
        
            <div class="col-md-8 offset-md-2">

                <h3>Hapus Data Alat Transportasi?</h3>

                <form method="POST" action="{{ url("transportasi/$transportasi->id") }}">

                    {{ csrf_field() }}

                    <input type="hidden" name="_method" value="DELETE">

                    Anda yakin ingin menghapus {{$transportasi->alat_transportasi}}?
                    <br>
                    <br>
                    <a href=" {{ url("transportasi") }} " class="btn btn-secondary">Batalkan</a>
                    <input type="submit" value="Ya hapus" class="btn btn-danger">

                </form>
            </div>
        </div>
@endsection