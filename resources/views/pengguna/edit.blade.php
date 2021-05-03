@extends('adminltelayouts.app')

@section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 pt-3">
                    <!--br-->
                    <h3><center>Edit Data User</center></h3>
                    <hr>
                    @if(Session::has('pesan'))
                        <div class="alert alert-success">
                            {{ Session::get('pesan') }}
                        </div>
                    @endif

                     <form action="{{url("pengguna/$pengguna->id")}}" method="POST" enctype="multipart/form-data">
						<input type="hidden" name="_method" value="PUT">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="">Nama User</label>
                            <input type="text" name="name" value="{{$pengguna->name}}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" name="email" value="{{$pengguna->email}}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Role</label>
                                <select class=form-control name="role">
                                    <option {{$pengguna->role == "PU" ? "selected": ""}} value="PU">Pengadministrasi Umum</option>
                                    <option {{$pengguna->role == "KUK" ? "selected": ""}} value="KUK">Kasubbag Umum dan Kepegawaian</option>
									<option {{$pengguna->role == "PPK" ? "selected": ""}} value="PPK">Pejabat Pembuat Komitmen</option>
									<option {{$pengguna->role == "ADMIN" ? "selected": ""}} value="ADMIN">Admin</option>
                                </select>
                        </div>

                       <div class="form-group">
							<label>Pegawai</label>
								<select name="pegawai_id" class="form-control">
									<option value="">Pilih Pegawai</option>
									@foreach($pegawai as $p)
									<option {{$pengguna->pegawai_id == $p->id ? "selected" : ""}} value="{{$p->id}}"> {{$p->nama_pegawai}} </option>
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