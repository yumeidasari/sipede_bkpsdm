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
                    <input type="text"  name="spd_surattugas_id" value="{{$surattugas->id}}" class="form-control" hidden>
                </div>
				
                <!-- div class="form-group">
                    <label>SKPD/Unit Kerja</label>
                    <select name="spd_opd_id" class="form-control">
                        <option value="">Pilih Unit Kerja</option>
                        @foreach($opd as $o)
                            <option value="{{$o->id_opd}}"> {{$o->nama_opd}} </option>
                        @endforeach
                    </select>
                </div -->
				
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
                    <label>Alat Angkutan/Transportasi</label>
                    <select name="spd_transportasi_id" class="form-control">
                        <option value="">Pilih Alat Angkut</option>
                        @foreach($transportasi as $t)
                            <option value="{{$t->id}}"> {{$t->alat_transportasi}}</option>
                        @endforeach
                    </select>
                </div>
				
				<div class="form-group">
                    <label for="">Tempat Berangkat </label>
                    <input type="text" name="spd_tempat_berangkat" class="form-control">
                </div>
				
				<div class="form-group">
                    <label>Tempat Tujuan</label>
                    <select name="spd_kota_tujuan_id" class="form-control">
                        <option value="">Pilih Tujuan</option>
                        @foreach($kota as $kota)
                            <option value="{{$kota->id}}"> {{$kota->nama_kota}}</option>
                        @endforeach
                    </select>
                </div>
				
				<div class="form-group">
                    <label for="">Akun/Kode Rekening Anggaran </label>
                    <input type="text" name="spd_anggaran_id" class="form-control">
                </div>

                <input type="submit" class="btn btn-primary" value="Simpan">
				<a href="{{url('/surattugas')}}" class="btn btn-primary"> Kembali </a>

            </form>
        </div>
    </div>
@endsection

