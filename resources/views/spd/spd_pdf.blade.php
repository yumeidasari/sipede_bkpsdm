<!DOCTYPE html>
<html>
<head>
    
	<title>Surat Perjalanan Dinas</title>
	<link rel="shortcut icon" type="image/png" href="{{ asset('/storage/img/logo-beltim.png') }}">
</head>
<style type="text/css">
		table tr td,
		table tr th{
			font-size: 12pt;
			font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
		}
</style>

    <table  align="center" width="700px"  >
        <tr>
        <td ><center><img src="http://sipede.dev.belitungtimurkab.go.id/storage/img/logo-beltim.png" width="70" height="90"></center></td>
		<td >
            <center><font size="4"><b>PEMERINTAH KABUPATEN BELITUNG TIMUR<b></font><BR>
            <font size="5"><b>BADAN KEPEGAWAIAN DAN PENGEMBANGAN</b></font><BR>
			<font size="5"><b>SUMBER DAYA MANUSIA</b></font><BR>
            <font size="2">Kompleks Perkantoran Terpadu</font><BR>
            <font size="2">Jl. Raya Manggar-Gantung, Dsn. Manggarawan Ds.Padang, Kec. Manggar</font><BR>
            <font size="2">Kabupaten Belitung Timur, Telp/Fax (0719)9220049</font>
                        
        </td>
        </tr>
        <tr>
            <td colspan="2"><hr> </td>
        </tr>
        
    </table>
    
    <table align="center" width="700px" class="table">
        <tr>
            <td >
                
               <span >SKPD/Unit Kerja :</span>
				<br><span>Badan Kepegawaian dan Pengembangan<BR>Sumber Daya Manusia</span>
				<br><span>Pemerintah Kabupaten Belitung Timur</span>
				
                <br><span style="padding-left:380px;">Lembar Ke</span><span style="padding-left:15px;">: {{$spd->spd_lembar_ke}}</span>
					
                <br><span style="padding-left:380px;">Kode No.</span><span style="padding-left:27px;">: {{$spd->spd_kode}}</span>
					
				<br><span style="padding-left:380px;">Nomor</span><span style="padding-left:47px;">: {{$spd->spd_nomor}}</span>
				
				<BR>
            </td>
            
        </tr>
		<tr>
			<td>
				
				<BR><center><font size="4"><b>SURAT PERJALANAN DINAS (SPD)</b></font></center>
				<BR>
			</td>	
		</tr>
	  
    </table>
	
	
    <table align="center" width="700px" rules="all" class="table">
		<tr>
			<td width="50px">
				<center>1.</center>
			</td>
			<td width="300px" colspan="2">
				Pejabat Pembuat Komitmen/<BR>Pejabat yg berwenang
				
			</td>
			<td width="350px" colspan="2">
				{{$spd->ppk->nama_pegawai}}
			</td>
		</tr>
		
		<tr>
			<td width="50px">
				<center>2.</center>
			</td>
			<td width="300px" colspan="2">
				Nama/NIP Pegawai yang<BR>melaksanakan perjalanan dinas
			</td>
			<td width="350px" colspan="2">
				{{$spd->pegawai->nama_pegawai}}
				<BR>
				{{$spd->pegawai->nip}}
			</td>
		</tr>
		
		<tr>
			<td width="50px">
				<center>3.</center>
			</td>
			<td width="300px" colspan="2">
				a. Pangkat dan Golongan Ruang
				<BR>
				b. Jabatan/Instansi
			</td>
			<td width="350px" colspan="2">
				a. Pangkat/{{$spd->pegawai->golongan->golongan}}
				<BR>
				b. {{$spd->pegawai->jabatan->jabatan}}
			</td>
		</tr>
		
		<tr>
			<td width="50px">
				<center>4.</center>
			</td>
			<td width="300px" colspan="2">
				Maksud Perjalanan Dinas
			</td>
			<td width="350px" colspan="2">
				{{$spd->spd_maksud}}
			</td>
		</tr>
		
		<tr>
			<td width="50px">
				<center>5.</center>
			</td>
			<td width="300px" colspan="2">
				Alat angkutan yang dipergunakan
			</td>
			<td width="350px" colspan="2">
				{{$spd->transportasi->alat_transportasi}}
			</td>
		</tr>
		
		<tr>
			<td width="50px">
				<center>6.</center>
			</td>
			<td width="300px" colspan="2">
				a. Tempat Berangkat
				<BR>
				b. Tempat Tujuan
				
			</td>
			<td width="350px" colspan="2">
				a. {{$spd->spd_tempat_berangkat}}
				<BR>
				b. {{$spd->kota->nama_kota}}
			</td>
		</tr>
		
		<tr>
			<td width="50px">
				<center>7.</center>
			</td>
			<td width="300px" colspan="2">
				a. Lamanya Perjalanan Dinas
				<BR>
				b. Tanggal Berangkat
				<BR>
				c. Tanggal harus kembali/tiba di tempat baru*)
			</td>
			<td width="350px" colspan="2">
				a. {{$spd->surattugas->st_lama_tugas}} hari
				<BR>
				b. {{Carbon\Carbon::parse($spd->surattugas->st_tgl_awal)->format('d F Y')}} 
				<BR>
				c. {{Carbon\Carbon::parse($spd->surattugas->st_tgl_akhir)->format('d F Y')}}
				<br><BR>
			</td>
		</tr>
		
		<tr>
			<td width="50px">
				<center>8.</center>
			</td >
			<td width="100px">
				Pengikut 
			</td>
			<td width="200px">
				Nama 
			</td>
			<td width="200px">
				<center>Tanggal Lahir</center>
			</td>
			<td width="150px">
				<center>Keterangan</center>
			</td>
		</tr>
		
		<tr>
			<td width="50px">
				<center></center>
			</td>
			<td width="300px" colspan="2">
				1.
				<BR>
				2.
							
			</td>
			<td width="350px" colspan="2">
				 <BR>
			</td>
		</tr>
		
		<tr>
			<td width="50px">
				<center>9.</center>
			</td>
			<td width="300px" colspan="2">
				Pembebanan Anggaran
				<BR>
				a. Instansi
				<BR><br>
				
				b. Akun/Kode Rekening
			</td>
			<td width="350px" colspan="2">
				<BR>a. Badan Kepegawaian dan Pengembangan Sumber Daya Manusia
										Kabupaten Belitung Timur
				<BR>
				b. DPA/A.1/5.03.5.04.0.00/5.1.02.04.01.0001
			</td>
		</tr>
		
		<tr>
			<td width="50px">
				<center>10.</center>
			</td>
			<td width="300px" colspan="2">
				Keterangan Lain-lain
			</td>
			<td width="350px" colspan="2">
				{{$spd->ket}}
			</td>
		</tr>
				
	</table>
		<BR>
	<table align="center" width="700px" >
		<tr>
			<td width="50px">
				
			</td>
			<td width="300px" colspan="2">
				*) coret yang tidak perlu
				<BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR>
			<td width="350px" colspan="2">
				<span style="padding-left:27px;">Dikeluarkan di {{$spd->surattugas->st_tempat_penetapan}}</span>
							<BR><span style="padding-left:27px;">Tanggal {{Carbon\Carbon::parse($spd->surattugas->st_tgl_penetapan)->format('d F Y')}}</span>
							<BR>
				
							<BR><center><b>Pejabat Pembuat Komitmen (PPK)</b></center>
							<BR>
							<BR>
							<BR><center><b>{{$spd->ppk->nama_pegawai}}</b></center>
							<center><b>NIP. {{$spd->ppk->nip}}</b></center>
				
			</td>
		</tr>
	</table>
	<BR><BR><BR>
	<table align="center" width="700px" rules="all">
		<tr>
			<td width="350px">
				
			</td>
			<td width="350px">
				
				<span style="padding-left:15px;">I.</span>
				<span style="padding-left:10px;">Berangkat dari</span>
				<span style="padding-left:5px;">: {{$spd->spd_tempat_berangkat}}</span>
				<BR>
				<span style="padding-left:40px;">(Tempat Kedudukan)</span>
				<BR>
				<span style="padding-left:40px;">Ke</span>
				<span style="padding-left:95px;">: {{$spd->kota->nama_kota}}</span>
				<BR>
				<span style="padding-left:40px;">Pada Tanggal</span>
				<span style="padding-left:15px;">: {{Carbon\Carbon::parse($spd->surattugas->st_tgl_awal)->format('d F Y')}}</span>
				<BR>
				<center>{{$spd->surattugas->penandatangan->jabatan->jabatan}}</center>
				
				<BR><BR>
				
				<center>({{$spd->surattugas->penandatangan->nama_pegawai}})</center>
				
				<center>NIP.{{$spd->surattugas->penandatangan->nip}}</center>
				
				
			</td>
		</tr>
		<tr>
		
			<td >
				
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
				
				
			</td>
			<td >
				
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
				
				
			</td>
		</tr>
		<tr>
			<td >
				
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
				
				
			</td>
			<td >
				
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
				
				
			</td>
		</tr>
		<tr>
			<td >
				
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
				
				
			</td>
			<td >
				
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
				
				
			</td>
		</tr>
		<tr>
			<td >
				
				<span style="padding-left:15px;">V.</span>
				<span style="padding-left:4px;">Tiba di</span>
				<span style="padding-left:63px;">: {{$spd->spd_tempat_berangkat}}</span>
				<BR>
				<span style="padding-left:40px;">(Tempat Kedudukan)</span>
				<BR>
				<BR>
				<span style="padding-left:40px;">Pada Tanggal</span>
				<span style="padding-left:15px;">: {{Carbon\Carbon::parse($spd->surattugas->st_tgl_akhir)->format('d F Y')}}</span>
				<BR>
				<BR>
				<BR>
				<center>{{$spd->surattugas->penandatangan->jabatan->jabatan}}</center>
				<BR>
				<BR>
				<center>({{$spd->surattugas->penandatangan->nama_pegawai}})</center>
				
				<center>NIP.{{$spd->surattugas->penandatangan->nip}}</center>
				
				
			</td>
			<td >
				
				<span style="padding-left:40px;">Telah diperiksa dengan keterangan</span>
					 <br>
				<span style="padding-left:40px;">bahwa perjalanan tersebut atas pe-</span>
					 <br>
				<span style="padding-left:40px;">rintahnya dan semata-mata untuk ke-</span>
					 <br>
				<span style="padding-left:40px;">pentingan jabatan dalam waktu yang </span>
					<br>
				<span style="padding-left:40px;">sesingkat-singkatnya</span>
				<br>
				<br>
				<center>{{$spd->surattugas->penandatangan->jabatan->jabatan}}</center>
				
				<BR>
				<BR>
				<center>({{$spd->surattugas->penandatangan->nama_pegawai}})</center>
				
				<center>NIP.{{$spd->surattugas->penandatangan->nip}}</center>
				
			</td>
		</tr>
		
		<tr>
			<td colspan="2">
				<br>
				<span style="padding-left:10px;">VI.</span>
				<span style="padding-left:4px;">Catatan Lain-lain</span>
				<br><br>
				
			</td>
		</tr>
		<tr>
			<td colspan="2">
				
				
				<p align="justify"><span style="padding-left:4px;">PPK/Pejabat yang berwenang yang
					menerbitkan SPD, pegawai yang melakukan perjalanan dinas, para pejabat yang mengesahkan
					tanggal berangkat/tiba, serta bendahara pengeluaran/bendahara pengeluaran pembantu
					bertanggungjawab berdasarkan peraturan-peraturan keuangan Negara/Daerah apabila Negara/Daerah
					menderita rugi akibat kesalahan, kelalaian dan kealpaannya.
				</p></span>
				
			</td>
		</tr>
		
	</table>
	
</html>
