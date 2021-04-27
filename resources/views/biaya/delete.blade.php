@extends('adminltelayouts/app')

@section('content')
        <div class="container pt-4">
        <br>
        <br>
        
            <div class="col-md-8 offset-md-2">

                <h3>Hapus Data Biaya?</h3>

                <form method="POST" action="{{ url("biaya/$biaya->id") }}">

                    {{ csrf_field() }}

                    <input type="hidden" name="_method" value="DELETE">

                    Anda yakin ingin menghapus {{$biaya->biaya}}?
                    <br>
                    <br>
                    <a href=" {{ url("biaya") }} " class="btn btn-secondary">Batalkan</a>
                    <input type="submit" value="Ya hapus" class="btn btn-danger">

                </form>
            </div>
        </div>
@endsection