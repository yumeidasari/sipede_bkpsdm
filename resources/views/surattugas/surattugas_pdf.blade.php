<!DOCTYPE html>
<html>
<head>
    
	<title>Data Surat Tugas</title>
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
        <tr>
            <td colspan="2"><center>
                <font size="5"><b>SURAT TUGAS</b></font><BR>
                <font size="4"><b>Nomor : {{$surattugas->st_nomor}}</b></font></center>
               
            </td>
        </tr>
    </table>
    <br>
    <table align="center" width="700px" >
        <tr>
            <td width="200px">
                <!--p align="justify"><span style="padding-left:40px;">
                Diterbitkan berdasarkan Peraturan Menteri Kelautan dan Perikanan Nomor PER.27/MEN/2009 
                dan Keputusan Direktur Jenderal Perikanan Tangkap Nomor 36/DJ-PT/201. <br></span>
                <br>-->
               <font size="4"> Dasar Penugasan</font>
				
            </td>
			
			<td width="50px">
				<font size="4">:</font>
			</td>
			
			<td width="450px">
				<font size="4">{{$surattugas->st_dasar_penugasan}}</font>
			</td>
            
        </tr>
		
		<tr>
			<td colspan="3">
			<br>
				<center><font size="4">MEMERINTAHKAN</font></center>
			<br>
			</td>
		</tr>
		
		<tr>
			<td width="200px">
				<table align="center" width="200px">
					<tr>
						<td>
							<font size="4">Kepada</font>
							
						</td>
						
					</tr>
					<tr>
						<td>
						<font size="4"><br></font>
						</td>
					</tr>
					<tr>
						<td>
						<font size="4"><br></font>
						</td>
					</tr>
					<tr>
						<td>
						<font size="4"><br></font>
						</td>
					</tr>
				</table>
			</td>
			<td width="50px">
				<table align="center" width="50px">
					<tr>
						<td>
							<font size="4">:</font>
							
						</td>
						
					</tr>
					<tr>
						<td>
						<font size="4"><br></font>
						</td>
					</tr>
					<tr>
						<td>
						<font size="4"><br></font>
						</td>
					</tr>
					<tr>
						<td>
						<font size="4"><br></font>
						</td>
					</tr>
				</table>
			</td>
			
			<td width="450px">
				<table align="center" width="450px" >
					<tr>
						<td width="100px">
							<font size="4">Nama</font>
						</td>
						<td width="50px">
							<font size="4">:</font>
						</td>
						<td width="300px">
							<font size="4">{{$surattugas->pegawai->nama_pegawai}}</font>
						</td>
					</tr>
						
					<tr>
						<td width="100px">
							<font size="4">Pangkat/Gol</font>
						</td>
						<td width="50px">
							<font size="4">:</font>
						</td>
						<td width="300px">
							<font size="4">{{$surattugas->pegawai->golongan->golongan}}</font>
						</td>
					</tr>
					
					<tr>
						<td width="100px">
							<font size="4">NIP</font>
						</td>
						<td width="50px">
							<font size="4">:</font>
						</td>
						<td width="300px">
							<font size="4">{{$surattugas->pegawai->nip}}</font>
						</td>
					</tr>
					
					<tr>
						<td width="100px">
							<font size="4">Jabatan</font>
						</td>
						<td width="50px">
							<font size="4">:</font>
						</td>
						<td width="300px">
							<font size="4">{{$surattugas->pegawai->jabatan->jabatan}}</font>
							
						</td>
					</tr>
				</table>
			</td>
		</tr>
		
		<tr>
			<td width="200px">
				<table>
					<tr>
						<td>
							<font size="4">Untuk</font>
						</td>
					</tr>
					<tr>
						<td><br></td>
					</tr>
					<tr>
						<td><br></td>
					</tr>
				</table>
			</td>
			<td width="50px">
				<table>
					<tr>
						<td>
							<font size="4">:</font>
						</td>
					</tr>
					<tr>
						<td><br></td>
					</tr>
					<tr>
						<td><br></td>
					</tr>
				</table>
			</td>
			<td width="450px">
			
				<font size="4">{{$surattugas->st_alasan_penugasan}}</font>
			</td>
		</tr>
		
		<tr>
			<td width="200px">
				<font size="4">Lama Pelaksanaan Tugas</font>
			</td>
			<td width="50px">
				<font size="4">:</font>
			</td>
			<td width="450px">
				<font size="4">{{$surattugas->st_lama_tugas}} hari</font>
			</td>
		</tr>
	  
    </table>
	<br>
    <table align="center" width="700px"  >
        <tr>
            <td width="210px">
                <!--table align="center" width="250px" rules="all">
                    <tr>
                        <td colspan="2"><center>Paraf Hierarki</center></td>
                    </tr>
                    <tr>
                        <td width="120px"> Sekdin</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td width="120px"> Kabid PNKPWP</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td width="120px"> Kasie PNK</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td width="120px"> Konseptor</td>
                        <td></td>
                    </tr>
                </table-->
            </td>
            <td>
					<br>
					<br>
                  <p><font size="4"><span style="padding-left:33px;">Terhitung tanggal {{Carbon\Carbon::parse($surattugas->st_tgl_awal)->format('d F Y')}} s.d {{Carbon\Carbon::parse($surattugas->st_tgl_akhir)->format('d F Y')}} </span>
					<br><span style="padding-left:50px;">Ditetapkan di : {{$surattugas->st_tempat_penetapan}}</span>  
					<br><span style="padding-left:50px;">Pada tanggal</span><span style="padding-left:11px;">: {{Carbon\Carbon::parse($surattugas->st_tgl_penetapan)->format('d F Y')}}</span>
					
					<br>
					<br><span><center>{{$surattugas->penandatangan->jabatan->jabatan}},</center></span>
                    <br>
                    <br> 
                    <br>
                    <br> 
                    <span><center> <b><u>{{$surattugas->penandatangan->nama_pegawai}}</u></b></center></span>  
                     
                    <span><center> <b>{{$surattugas->penandatangan->golongan->pangkat}} </b></center></span> 
                    
                    <span><center><b>NIP.{{$surattugas->penandatangan->nip}}</b></center></span>
					</font>
                </p>
            </td>
        </tr>
		
		<tr>
			<td>
				<BR>
				<BR>
			</td>
		</tr>
    </table>


    
</html>