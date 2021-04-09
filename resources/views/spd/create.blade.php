@extends('adminltelayouts.app')

@section('content')
    <div class="container pt-3">
        <div class="col-md-6 offset-md-3">
		<h3><center>Buat Data Surat Perjalanan Dinas Baru</center></h3>
                    <hr>
                    <br>
            @if(Session::has('message'))
                <div class="alert alert-success">
                    {{ Session::get('message')}}
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{url('/spd')}}" method="POST" enctype="multipart/form-data">

                {{ csrf_field() }}

                <div class="form-group">
                    <label>SKPD/Unit Kerja</label>
                    <select name="spd_opd_id" class="form-control">
                        <option value="">Pilih Unit Kerja</option>
                        @foreach($opd as $o)
                            <option value="{{$o->id_opd}}"> {{$o->nama_opd}} </option>
                        @endforeach
                    </select>
                </div>
				
				<div class="form-group">
                    <label for="">Lembar Ke</label>
                    <input type="text" name="spd_lembar_ke" class="form-control">
                </div>
				
				<div class="form-group">
                    <label for="">Kode No.</label>
                    <input type="text" name="spd_kode" class="form-control">
                </div>
				
				<div class="form-group">
                    <label for="">Nomor</label>
                    <input type="text" name="spd_nomor" class="form-control">
                </div>
				
				<div class="form-group">
                    <label>Pejabat Pembuat Komitmen (PPK)</label>
                    <select name="spd_ppk_id" class="form-control">
                        <option value="">Pilih PPK</option>
                        @foreach($pegawai as $p)
                            <option value="{{$p->id}}"> {{$p->nama_pegawai}} - {{$p->nip}}  </option>
                        @endforeach
                    </select>
                </div>
				
				<div class="form-group">
                    <label>Pegawai yang melaksanakan Perjalanan Dinas</label>
                    <select name="spd_pegawai_id" class="form-control">
                        <option value="">Pilih Pegawai</option>
                        @foreach($pegawai as $p)
                            <option value="{{$p->id}}"> {{$p->nama_pegawai}} - {{$p->nip}}  </option>
                        @endforeach
                    </select>
                </div>
				
				<div class="form-group">
                    <label for="">Maksud Perjalanan Dinas</label>
                    <input type="text" name="spd_maksud" class="form-control">
                </div>
				
				<div class="form-group">
                    <label for="">Alat Angkutan </label>
                    <input type="text" name="spd_alat_angkut" class="form-control">
                </div>
				
				<div class="form-group">
                    <label for="">Tempat Berangkat </label>
                    <input type="text" name="spd_tempat_berangkat" class="form-control">
                </div>
				
				<div class="form-group">
                    <label for="">Tempat Tujuan </label>
                    <input type="text" name="spd_tempat_tujuan" class="form-control">
                </div>
																
				<div class="form-group">
                    <label>Surat Tugas</label>
                    <select name="spd_surattugas_id" class="form-control">
                        <option value="">Pilih Surat Tugas</option>
                        @foreach($surattugas as $st)
                            <option value="{{$st->id}}"> {{$st->st_nomor}} - {{$st->pegawai->nama_pegawai}}  </option>
                        @endforeach
                    </select>
                </div>
				
				<div class="form-group">
                    <label for="">Data Anggaran Pengeluaran </label>
                    <input type="text" name="spd_anggaran_id" class="form-control">
                </div>

                <input type="submit" class="btn btn-primary" value="Simpan">


            </form>
        </div>
    </div>
@endsection

