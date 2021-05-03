@extends('adminltelayouts.app')

@section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 pt-3">
                    <!--br-->
                    <h3><center>Buat User Baru</center></h3>
                    <hr>
                    @if(Session::has('pesan'))
                        <div class="alert alert-success">
                            {{ Session::get('pesan') }}
                        </div>
                    @endif

                    <form action="{{url('pengguna')}}" method="POST" enctype="multipart/form-data">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="">Nama User</label>
                            <input type="text" name="name" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" name="email" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="text" name="password" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Role</label>
                                <select class=form-control name="role">
                                    <option value="PU">Pengadministrasi Umum</option>
                                    <option value="KUK">Kasubbag Umum dan Kepegawaian</option>
									<option value="PPK">Pejabat Pembuat Komitmen</option>
									<option value="ADMIN">Admin</option>
                                </select>
                        </div>

                       <div class="form-group">
							<label>Pegawai</label>
								<select name="pegawai_id" class="form-control">
									<option value="">Pilih Pegawai</option>
									@foreach($pegawai as $p)
									<option value="{{$p->id}}"> {{$p->nama_pegawai}} </option>
									@endforeach
								</select>
						</div>
                        
                        <input type="submit" class="btn btn-primary" value="Simpan">

                        <a href="{{url('pengguna') }}" class="btn btn-secondary">Daftar User</a>

                        <br>
                        <br>

                    </form>
                </div>
            </div>
        </div>
@endsection