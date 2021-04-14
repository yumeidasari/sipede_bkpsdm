<!DOCTYPE html>
<html>
<head>
    
	<title>Data Nota Dinas</title>
	<link rel="shortcut icon" type="image/png" href="{{ asset('/storage/img/logo-beltim.png') }}">
	<style type="text/css">
		p {line-height:2; }
		.contoh {  line-height: 1.5em; }
	</style>
</head>


    <table  align="center" width="700px" >
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
                <font size="5"><b><u>NOTA-DINAS</u></b></font><BR>
                <font size="3"><b></b></font></center>
               
            </td>
        </tr>
    </table>
    
    <table align="center" width="700px" >
        <tr>
            <td colspan="2" class="contoh">
                <!--p align="justify"><span style="padding-left:40px;">
                Diterbitkan berdasarkan Peraturan Menteri Kelautan dan Perikanan Nomor PER.27/MEN/2009 
                dan Keputusan Direktur Jenderal Perikanan Tangkap Nomor 36/DJ-PT/201. <br></span>
                <br>-->
                
                <br><span >Kepada Yth</span><span style="padding-left:15px;">:</span>
					<span style="padding-left:15px;">{{$nodin->nd_kepada}}</span>
                <br><span >Dari</span><span style="padding-left:63px;">:</span>
					<span style="padding-left:15px;">{{$nodin->nd_dari}}</span>
                <br><span >Tanggal</span><span style="padding-left:39px;">:</span>
					<span style="padding-left:15px;">{{Carbon\Carbon::parse($nodin->nd_tgl_nodin)->format('d F Y')}}</span>
				<br><span >Nomor</span><span style="padding-left:46.5px;">:</span>
					<span style="padding-left:15px;">{{$nodin->nd_nomor}}</span>
				<br><span >Lampiran</span><span style="padding-left:30px;">:</span>
					<span style="padding-left:15px;">{{$nodin->nd_lampiran}}</span>
				<br><span >Perihal</span><span style="padding-left:46.5px;">:</span>
					<span style="padding-left:15px;">{{$nodin->nd_perihal}}</span>
                
            </td>
            
        </tr>
		 <tr>
            <td colspan="2"><hr> </td>
        </tr>
    
        <tr>
			<td width="70px">
			</td>
            <td >
                
				<p align="justify"><span style="padding-left:40px;">
                {{$nodin->nd_kalimat_pembuka}}<br></span>
				</p>
                
                <p >
					<span style="padding-left:40px;">Nama</span>
                    <span style="padding-left:60px;">:</span>
					<span style="padding-left:15px;">{{$nodin->pegawai->nama_pegawai}}</span>
                    
                <br><span style="padding-left:40px;">NIP</span>
                    <span style="padding-left:72px;">:</span>
					<span style="padding-left:15px;">{{$nodin->pegawai->nip}}</span>
                    
                <br><span style="padding-left:40px;">Pangkat/Gol</span>
                    <span style="padding-left:18px;">:</span>
					<span style="padding-left:15px;">{{$nodin->pegawai->golongan->golongan}}</span>
                    
                <br><span style="padding-left:40px;">Jabatan</span>
                    <span style="padding-left:50px;">:</span>
					<span style="padding-left:15px;">{{$nodin->pegawai->jabatan->jabatan}}</span>
                    
                
                <br>
                
                <p align="justify"><span style="padding-left:40px;">
                {{$nodin->nd_kalimat_penutup}}<br></span>
				</p>
                
            </td>
        </tr>
        
    </table>

    <table align="center" width="600px"  >
        <tr>
            <td width="300px">
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
                
                  <p><b><span><center>{{$nodin->penandatangan->jabatan->jabatan}}</center></span><b>   
                    <br>
                    <br> 
                     
                    <span><center> <b><u>{{$nodin->penandatangan->nama_pegawai}}</u></b></center></span>  
                    <span><center><b>NIP.{{$nodin->penandatangan->nip}}</b></center></span>

                </p>
            </td>
        <tr>
    </table>


    
</html>