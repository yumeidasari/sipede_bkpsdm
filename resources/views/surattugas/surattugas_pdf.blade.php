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
        <tr>
            <td colspan="2"><center>
                <font size="5"><b>SURAT TUGAS</b></font><BR>
                <font size="4"><b>Nomor : {{$surattugas->st_nomor}}</b></font></center>
               
            </td>
        </tr>
    </table>
    
    <table align="center" width="700px" >
        <tr>
            <td >
                <!--p align="justify"><span style="padding-left:40px;">
                Diterbitkan berdasarkan Peraturan Menteri Kelautan dan Perikanan Nomor PER.27/MEN/2009 
                dan Keputusan Direktur Jenderal Perikanan Tangkap Nomor 36/DJ-PT/201. <br></span>
                <br>-->
                
                <br><font size="4"><span >Dasar Penugasan</span><span style="padding-left:79px;">:</span>
					<span style="padding-left:15px;">{{$surattugas->st_dasar_penugasan}}</span>
					
				<br>	
				<br><span ><center>MEMERINTAHKAN</center></span>
				<br>
               <br><span >Kepada</span><span style="padding-left:150px;">:</span>
					<span style="padding-left:15px;">Nama</span>
					<span style="padding-left:65px;">:</span>
					<span style="padding-left:15px;">{{$surattugas->pegawai->nama_pegawai}}</span>
					
				<br><span style="padding-left:231px;">Pangkat/Gol</span>
					<span style="padding-left:17px;">:</span>
					<span style="padding-left:15px;">{{$surattugas->pegawai->golongan->golongan}}</span>
				
				<br><span style="padding-left:231px;">NIP</span>
					<span style="padding-left:80px;">:</span>
					<span style="padding-left:15px;">{{$surattugas->pegawai->nip}}</span>
					
				<br><span style="padding-left:231px;">Jabatan</span>
					<span style="padding-left:54px;">:</span>
					<span style="padding-left:15px;">{{$surattugas->pegawai->jabatan->jabatan}}</span>
				<br>	
                <br><span >Untuk</span><span style="padding-left:160px;">:</span>
					<span style="padding-left:15px;">{{$surattugas->st_alasan_penugasan}}</span>
				<br>
				<br><span >Lama Pelaksanaan Tugas</span><span style="padding-left:17px;">:</span>
					<span style="padding-left:15px;">{{$surattugas->st_lama_tugas}} hari</span>
				</font>
                
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
			
                
                  <p><font size="4"><span><center>Terhitung tanggal {{Carbon\Carbon::parse($surattugas->st_tgl_awal)->format('d F Y')}} s.d {{Carbon\Carbon::parse($surattugas->st_tgl_akhir)->format('d F Y')}} </center></span>
					<br><span>Ditetapkan di : {{$surattugas->st_tempat_penetapan}}</span>  
					<br><span>pada tanggal</span><span style="padding-left:11px;">: {{Carbon\Carbon::parse($surattugas->st_tgl_penetapan)->format('d F Y')}}</span>
					<br><span>BUPATI BELITUNG TIMUR/KETUA DPRD/KEPALA PD*)</span>
                    <br>
                    <br> 
                    <br>
                    <br> 
                    <span><center> <b><u>{{$surattugas->penandatangan->nama_pegawai}}</u></b></center></span>  
                     
                    <span><center> <b>Pangkat </b></center></span> 
                    
                    <span><center><b>NIP.{{$surattugas->penandatangan->nip}}</b></center></span>
					</font>
                </p>
            </td>
        </tr>
		
		<tr>
			<td>
				<BR>
				<BR>*)Coret yang tidak perlu
			</td>
		</tr>
    </table>


    
</html>