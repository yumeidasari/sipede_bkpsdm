<!DOCTYPE html>
<html>
<head>
    
	<title>Data Nota Dinas</title>
	<link rel="shortcut icon" type="image/png" href="{{ asset('/storage/img/logo-beltim.png') }}">
</head>


    <table  align="center" width="700px"  >
        <tr>
        <td ><center><img src="{{ asset('/storage/img/logo-beltim.png') }}" width="70" height="90"></center></td>
        <td >
            <center><font size="4"><b>PEMERINTAH KABUPATEN BELITUNG TIMUR<b></font><BR>
            <font size="5"><b>BADAN KEPEGAWAIAN DAN PENGEMBANGAN</b></font><BR>
			<font size="5"><b>SUMBER DAYA MANUSIA</b></font><BR>
            <font size="2">Kompleks Perkantoran Terpadu</font><BR>
            <font size="2">Jl. Raya Manggar-Gantung, Dsn. Manggarawank Ds.Padang, Kec. Manggar</font><BR>
            <font size="2">Kabupaten Belitung Timur, Telp/Fax (0719)9220049</font>
                        
        </td>
        </tr>
        <tr>
            <td colspan="2"><hr> </td>
        </tr>
        
    </table>
    
    <table align="center" width="700px" >
        <tr>
            <td >
                
                <font size="4"><span >SKPD/Unit Kerja :</span>
				<br><span>Badan Kepegawaian dan Pengembangan<BR>Sumber Daya Manusia</span>
				<br><span>Pemerintah Kabupaten Belitung Timur</span>
				
                <br><span style="padding-left:380px;">Lembar Ke</span><span style="padding-left:15px;">: {{$spd->spd_lembar_ke}}</span>
					
                <br><span style="padding-left:380px;">Kode No.</span><span style="padding-left:27px;">: {{$spd->spd_kode}}</span>
					
				<br><span style="padding-left:380px;">Nomor</span><span style="padding-left:47px;">: {{$spd->spd_nomor}}</span>
				</font>
				<BR>
            </td>
            
        </tr>
		<tr>
			<td>
				<BR>
				<BR><center><font size="4"><b>SURAT PERJALANAN DINAS (SPD)</b></font></center>
				<BR>
			</td>	
		</tr>
	  
    </table>
	
	
    <table align="center" width="700px" rules="all" >
		<tr>
			<td width="50px">
				<font size="4"><center>1.</center></font>
			</td>
			<td width="300px" colspan="2">
				<font size="4">Pejabat Pembuat Komitmen/<BR>Pejabat yg berwenang</font>
			</td>
			<td width="350px" colspan="2">
				<font size="4">{{$spd->ppk->nama_pegawai}}</font>
			</td>
		</tr>
		
		<tr>
			<td width="50px">
				<font size="4"><center>2.</center></font>
			</td>
			<td width="300px" colspan="2">
				<font size="4">Nama/NIP Pegawai yang<BR>melaksanakan perjalanan dinas</font>
			</td>
			<td width="350px" colspan="2">
				<font size="4">{{$spd->pegawai->nama_pegawai}}</font><BR>
				<font size="4">{{$spd->pegawai->nip}}</font>
			</td>
		</tr>
		
		<tr>
			<td width="50px">
				<font size="4"><center>3.</center></font>
			</td>
			<td width="300px" colspan="2">
				<font size="4">a. Pangkat dan Golongan Ruang<BR>b. Jabatan/Instansi</font>
			</td>
			<td width="350px" colspan="2">
				<font size="4">a. Pangkat/{{$spd->pegawai->golongan->golongan}}
								<BR>b. {{$spd->pegawai->jabatan->jabatan}}</font>
			</td>
		</tr>
		
		<tr>
			<td width="50px">
				<font size="4"><center>4.</center></font>
			</td>
			<td width="300px" colspan="2">
				<font size="4">Maksud Perjalanan Dinas</font>
			</td>
			<td width="350px" colspan="2">
				<font size="4">{{$spd->spd_maksud}}</font>
			</td>
		</tr>
		
		<tr>
			<td width="50px">
				<font size="4"><center>5.</center></font>
			</td>
			<td width="300px" colspan="2">
				<font size="4">Alat angkutan yang dipergunakan</font>
			</td>
			<td width="350px" colspan="2">
				<font size="4">{{$spd->spd_alat_angkut}}</font>
			</td>
		</tr>
		
		<tr>
			<td width="50px">
				<font size="4"><center>6.</center></font>
			</td>
			<td width="300px" colspan="2">
				<font size="4">a. Tempat Berangkat<BR>b. Tempat Tujuan</font>
			</td>
			<td width="350px" colspan="2">
				<font size="4">a. {{$spd->spd_tempat_berangkat}}
								<BR>b. {{$spd->spd_tempat_tujuan}}</font>
			</td>
		</tr>
		
		<tr>
			<td width="50px">
				<font size="4"><center>7.</center></font>
			</td>
			<td width="300px" colspan="2">
				<font size="4">a. Lamanya Perjalanan Dinas
							<BR>b. Tanggal Berangkat
							<BR>c. Tanggal harus kembali/tiba di<BR>tempat baru*)</font>
			</td>
			<td width="350px" colspan="2">
				<font size="4">a. {{$spd->surattugas->st_lama_tugas}} hari
							<BR>b. {{Carbon\Carbon::parse($spd->surattugas->st_tgl_awal)->format('d F Y')}} <BR>
							<BR>c. {{Carbon\Carbon::parse($spd->surattugas->st_tgl_akhir)->format('d F Y')}}</font>
			</td>
		</tr>
		
		<tr>
			<td width="50px">
				<font size="4"><center>8.</center></font>
			</td >
			<td width="100px">
				<font size="4">Pengikut </font>
			</td>
			<td width="200px">
				<font size="4">Nama </font>
			</td>
			<td width="200px">
				<center><font size="4">Tanggal Lahir</font></center>
			</td>
			<td width="150px">
				<center><font size="4">Keterangan</font></center>
			</td>
		</tr>
		
		<tr>
			<td width="50px">
				<font size="4"><center></center></font>
			</td>
			<td width="300px" colspan="2">
				<font size="4">1.
							<BR>2.
							</font>
			</td>
			<td width="350px" colspan="2">
				<font size="4"> 
							<BR></font>
			</td>
		</tr>
		
		<tr>
			<td width="50px">
				<font size="4"><center>9.</center></font>
			</td>
			<td width="300px" colspan="2">
				<font size="4">Pembebanan Anggaran
							<BR>a. Instansi<BR><br>
							<BR>b. Akun/Kode Rekening</font>
			</td>
			<td width="350px" colspan="2">
				<font size="4"><BR>a. Badan Kepegawaian dan Pengembangan Sumber Daya Manusia
										Kabupaten Belitung Timur
								<BR>b. DPA/A.1/5.03.5.04.0.00/5.1.02.04.01.0001</font>
			</td>
		</tr>
		
		<tr>
			<td width="50px">
				<font size="4"><center>10.</center></font>
			</td>
			<td width="300px" colspan="2">
				<font size="4">Keterangan Lain-lain</font>
			</td>
			<td width="350px" colspan="2">
				<font size="4">{{$spd->ket}}</font>
			</td>
		</tr>
				
	</table>
	
	<BR>
	<table align="center" width="700px" >
		<tr>
			<td width="50px">
				
			</td>
			<td width="300px" colspan="2">
				<font size="4">*) coret yang tidak perlu</font>
				<BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR>
			<td width="350px" colspan="2">
				<font size="4"><span style="padding-left:27px;">Dikeluarkan di {{$spd->surattugas->st_tempat_penetapan}}</span>
							<BR><span style="padding-left:27px;">Tanggal {{Carbon\Carbon::parse($spd->surattugas->st_tgl_penetapan)->format('d F Y')}}</span>
							<BR>
				</font>
							<BR><center><b><font size="4">PPK / PA / KPA *) </font></b></center>
							<BR>
							<BR>
							<BR><center><b><font size="4">{{$spd->ppk->nama_pegawai}}</font></b></center>
							<center><b><font size="4">NIP. {{$spd->ppk->nip}}</font></b></center>
				
			</td>
		</tr>
	</table>
	<BR>
	<table>
	</table>
	<BR><BR><BR>
	<table align="center" width="700px" rules="all">
		<tr>
			<td width="350px">
				
			</td>
			<td width="350px">
				<font size="4">
				<span style="padding-left:15px;">I.</span>
				<span style="padding-left:10px;">Berangkat dari</span>
				<span style="padding-left:5px;">: .............</span>
				<BR>
				<span style="padding-left:40px;">(Tempat Kedudukan)</span>
				<BR>
				<span style="padding-left:40px;">Ke</span>
				<span style="padding-left:95px;">: .............</span>
				<BR>
				<span style="padding-left:40px;">Pada Tanggal</span>
				<span style="padding-left:15px;">: .............</span>
				<BR>
				<span style="padding-left:40px;">Kepala</span>
				<span style="padding-left:65px;">: .............</span>
				<BR><BR>
				<BR>
				<span style="padding-left:40px;">(.....................................)</span>
				<BR>
				<span style="padding-left:40px;">NIP ...................................</span>
				
				</font>
			</td>
		</tr>
		<tr>
			<td width="350px">
				<font size="4">
				<span style="padding-left:15px;">II.</span>
				<span style="padding-left:4px;">Tiba di</span>
				<span style="padding-left:63px;">: .............</span>
				<BR>
				<span style="padding-left:40px;">Pada Tanggal</span>
				<span style="padding-left:15px;">: .............</span>
				<BR>
				<span style="padding-left:40px;">Kepala</span>
				<span style="padding-left:65px;">: .............</span>
				<BR><BR><BR>
				<BR>
				<span style="padding-left:40px;">(.....................................)</span>
				<BR>
				<span style="padding-left:40px;">NIP ...................................</span>
				
				</font>
			</td>
			<td width="350px">
				<font size="4">
				<span style="padding-left:40px;">Berangkat dari</span>
				<span style="padding-left:5px;">: .............</span>
				<BR>
				<span style="padding-left:40px;">Ke</span>
				<span style="padding-left:95px;">: .............</span>
				<BR>
				<span style="padding-left:40px;">Pada Tanggal</span>
				<span style="padding-left:15px;">: .............</span>
				<BR>
				<span style="padding-left:40px;">Kepala</span>
				<span style="padding-left:65px;">: .............</span>
				<BR><BR>
				<BR>
				<span style="padding-left:40px;">(.....................................)</span>
				<BR>
				<span style="padding-left:40px;">NIP ...................................</span>
				
				</font>
			</td>
		</tr>
		<tr>
			<td width="350px">
				<font size="4">
				<span style="padding-left:10px;">III.</span>
				<span style="padding-left:4px;">Tiba di</span>
				<span style="padding-left:63px;">: .............</span>
				<BR>
				<span style="padding-left:40px;">Pada Tanggal</span>
				<span style="padding-left:15px;">: .............</span>
				<BR>
				<span style="padding-left:40px;">Kepala</span>
				<span style="padding-left:65px;">: .............</span>
				<BR><BR><BR>
				<BR>
				<span style="padding-left:40px;">(.....................................)</span>
				<BR>
				<span style="padding-left:40px;">NIP ...................................</span>
				
				</font>
			</td>
			<td width="350px">
				<font size="4">
				<span style="padding-left:40px;">Berangkat dari</span>
				<span style="padding-left:5px;">: .............</span>
				<BR>
				<span style="padding-left:40px;">Ke</span>
				<span style="padding-left:95px;">: .............</span>
				<BR>
				<span style="padding-left:40px;">Pada Tanggal</span>
				<span style="padding-left:15px;">: .............</span>
				<BR>
				<span style="padding-left:40px;">Kepala</span>
				<span style="padding-left:65px;">: .............</span>
				<BR><BR>
				<BR>
				<span style="padding-left:40px;">(.....................................)</span>
				<BR>
				<span style="padding-left:40px;">NIP ...................................</span>
				
				</font>
			</td>
		</tr>
		<tr>
			<td width="350px">
				<font size="4">
				<span style="padding-left:10px;">IV.</span>
				<span style="padding-left:4px;">Tiba di</span>
				<span style="padding-left:63px;">: .............</span>
				<BR>
				<span style="padding-left:40px;">Pada Tanggal</span>
				<span style="padding-left:15px;">: .............</span>
				<BR>
				<span style="padding-left:40px;">Kepala</span>
				<span style="padding-left:65px;">: .............</span>
				<BR><BR><BR>
				<BR>
				<span style="padding-left:40px;">(.....................................)</span>
				<BR>
				<span style="padding-left:40px;">NIP ...................................</span>
				
				</font>
			</td>
			<td width="350px">
				<font size="4">
				<span style="padding-left:40px;">Berangkat dari</span>
				<span style="padding-left:5px;">: .............</span>
				<BR>
				<span style="padding-left:40px;">Ke</span>
				<span style="padding-left:95px;">: .............</span>
				<BR>
				<span style="padding-left:40px;">Pada Tanggal</span>
				<span style="padding-left:15px;">: .............</span>
				<BR>
				<span style="padding-left:40px;">Kepala</span>
				<span style="padding-left:65px;">: .............</span>
				<BR><BR>
				<BR>
				<span style="padding-left:40px;">(.....................................)</span>
				<BR>
				<span style="padding-left:40px;">NIP ...................................</span>
				
				</font>
			</td>
		</tr>
		<tr>
			<td width="350px">
				<font size="4">
				<span style="padding-left:15px;">V.</span>
				<span style="padding-left:4px;">Tiba di</span>
				<span style="padding-left:63px;">: .............</span>
				<BR>
				<span style="padding-left:40px;">(Tempat Kedudukan)</span>
				<BR>
				<BR>
				<span style="padding-left:40px;">Pada Tanggal</span>
				<span style="padding-left:15px;">: .............</span>
				<BR>
				<span style="padding-left:40px;">(.....................................)</span>
				<BR><BR><BR>
				<BR>
				<span style="padding-left:40px;">(.....................................)</span>
				<BR>
				<span style="padding-left:40px;">NIP ...................................</span>
				
				</font>
			</td>
			<td width="350px">
				
				<p align="justify"><font size="4">
					Telah diperiksa dengan keterangan bahwa perjalanan tersebut atas perintahnya
					dan semata-mata untuk kepentingan jabatan dalam waktu yang sesingkat-singkatnya
				</font>
				</p>				
				<center><font size="4">PPK / PA / KPA,*)</font></center>
				<BR>
				<BR>
				<center><font size="4">(..............................)</font></center>
				<center><font size="4">NIP..............................)</font></center>
				
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<font size="4">
				<span style="padding-left:10px;">VI.</span>
				<span style="padding-left:4px;">Catatan Lain-lain</span>
				</font>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<font size="4">
				
				<p align="justify"><span style="padding-left:4px;">PPK/Pejabat yang berwenang yang
					menerbitkan SPD, pegawai yang melakukan perjalanan dinas, para pejabat yang mengesahkan
					tanggal berangkat/tiba, serta bendahara pengeluaran/bendahara pengeluaran pembantu
					bertanggungjawab berdasarkan peraturan-peraturan keuangan Negara/Daerah apabila Negara/Daerah
					menderita rugi akibat kesalahan, kelalaian dan kealpaannya.
				</p></span>
				</font>
			</td>
		</tr>
		
	</table>
	
</html>