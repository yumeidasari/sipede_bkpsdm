<!DOCTYPE html>
<html>
<head>
    
	<title>Rincian Biaya SPD</title>
	<link rel="shortcut icon" type="image/png" href="{{ asset('/storage/img/logo-beltim.png') }}">
</head>


    <table  align="center" width="650px"  >
        
        <tr>
            <td ><center>
                <BR><font size="4"><b>RINCIAN BIAYA PERJALANAN DINAS</b></font><BR>
                
            </td>
        </tr>
		<tr>
			<td>
				<br>
				<br>Lampiran SPD Nomor
				<span style="padding-left:5px;">: {{$spd->spd_nomor}}</span>
				<br>Tanggal
				<span style="padding-left:98px;">: {{Carbon\Carbon::parse($spd->surattugas->st_tgl_penetapan)->translatedformat('d F Y')}}</span>
			</td>
		</tr>
    </table>
    <BR>
    <table align="center" width="650px" border="0.5" rules="all">
        <tr>
            <td width="50px">
               <center>No.</center> 
            </td>
			<td width="200px">
               <center>PERINCIAN BIAYA</center> 
            </td>
			<td width="200px">
               <center>JUMLAH</center> 
            </td>
			<td width="200px">
               <center>KETERANGAN</center> 
            </td>
            
        </tr>
		@php $i=1; @endphp
		@foreach($semua_rincianbiaya as $rb)
		<tr>
		
			<td><center>{{$i++}}</center>
			</td>
				
			<td>
				{{$rb->biaya}}
			</td>
			
			<td >
				<table >
				<tr>
					<td width="20px">
						Rp.
					</td>
					<td align="right" width="100px">
						{{rupiah($rb->jumlah)}}
					</td>
				</tr>
				</table>
			</td>
			
			<td>
				{{$rb->keterangan}}
			</td>
			
		</tr>
		@endforeach
		<tr>
			<td colspan="2">
				<center>JUMLAH</center>
			</td>
			
			<td>
				<table >
				<tr>
					<td width="20px">
						<b>Rp.</b>
					</td>
					<td align="right" width="100px">
						<b>{{rupiah($jumlah)}}</b>
					</td>
				</tr>
				</table>
				
			</td>
			
			<td>
			</td>
		</tr>
		<tr>
			<td colspan="4">
				Terbilang : {{Terbilang($jumlah)}} Rupiah
			</td>
		</tr>
	  
    </table>
	<BR>
	<table  align="center" width="650px" >
		<tr>
			<td width="40px">
			</td>
			<td width="300px">
				Telah dibayar sejumlah
				<BR><b>Rp. {{rupiah($jumlah)}}</b>
				<BR>
				<BR>
				<BR>
			</td>
			<td width="300px">
				Manggar,<span style="padding-left:110px;">2021<span>
				<BR>Telah menerima jumlah uang sebesar
				<BR>tersebut diatas
				<BR>
			</td>
		</tr>
		<tr>
			
			<td colspan="2">
				<BR><center>Bendahara Pengeluaran,</center>
				<BR>
				<BR>
				<BR>
				<BR><center>(Asnawi, A.Md)</center>
				<center>NIP. 197606202010011010</center>
			</td>
			<td width="300px">
				<BR><center>Yang Menerima,</center>
				<BR>
				<BR>
				<BR>
				<BR><center>({{$spd->pegawai->nama_pegawai}})
				<BR><center>NIP. {{$spd->pegawai->nip}}
			</td>
		</tr>
	</table>
	<BR>
	<BR>
	<BR>
	<BR>
	<hr>
	<BR>
	<table  align="center" width="650px"  >
        
        <tr>
            <td ><center>
                <BR><font size="4"><b>PERHITUNGAN SPD RAMPUNG</b></font><BR>
            </td>
        </tr>
		<tr>
			<td>
				<BR>
				<BR>
				Ditetapkan sejumlah
				<span style="padding-left:49px;">: <b>Rp. {{rupiah($jumlah)}}</b><span>
				<BR>
				Yang telah dibayar semula
				<span style="padding-left:10px;">: Rp. 0<span>
				<BR>
				Sisa kurang / lebih
				<span style="padding-left:61px;">: Rp. 0<span>
			</td>
		</tr>
	</table>
	<table align="center" width="650px">
		<tr>
			<td width="300px">
			</td>
			<td width="340px">
				<BR>
				<BR>
				<BR>
				<BR>
				
				<center>PEJABAT PEMBUAT KOMITMEN</center>
				<BR>
				<BR>
				<BR>
				<BR><center>({{$spd->ppk->nama_pegawai}})</center>
				<center>NIP. {{$spd->ppk->nip}}</center>
			</td>
		</tr>
	</table>
	
    
</html>
<?php
function Terbilang($satuan)
{
$huruf = array("", "Satu", "Dua", "Tiga", "Empat", "Lima", "Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh", "Sebelas");
if ($satuan < 12)
return " " . $huruf[$satuan];
elseif ($satuan < 20)
return Terbilang($satuan - 10) . "Belas";
elseif ($satuan < 100)
return Terbilang($satuan / 10) . " Puluh" . Terbilang($satuan % 10);
elseif ($satuan < 200)
return " Seratus" . Terbilang($satuan - 100);
elseif ($satuan < 1000)
return Terbilang($satuan / 100) . " Ratus" . Terbilang($satuan % 100);
elseif ($satuan < 2000)
return " Seribu" . Terbilang($satuan - 1000);
elseif ($satuan < 1000000)
return Terbilang($satuan / 1000) . " Ribu" . Terbilang($satuan % 1000);
elseif ($satuan < 1000000000)
return Terbilang($satuan / 1000000) . " Juta" . Terbilang($satuan % 1000000);
elseif ($satuan <= 1000000000)
echo "Maaf Tidak Dapat di Prose Karena Jumlah Uang Terlalu Besar ";
}

function rupiah($angka){
	
	//$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	$hasil_rupiah = number_format($angka,2,',','.');
	return $hasil_rupiah;
 
}
?>