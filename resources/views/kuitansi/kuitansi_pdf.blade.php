<!DOCTYPE html>
<html>
<head>
    
	<title>Kuitansi</title>
	<link rel="shortcut icon" type="image/png" href="{{ asset('/storage/img/logo-beltim.png') }}">
	
</head>

    <table  align="center" width="700px" >
        <tr>
			<td width="250px">
				BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA
				<BR>KABUPATEN BELITUNG TIMUR
				<BR>
				<BR>
				<BR>
			</td>
			
			<td width="180px">
			</td>
			
			<td width="270px">
				Beban Rekening
				<span style="padding-left:12px;">:</span>
				<span style="padding-left:5px;">5.1.02.04.01.0001</span>
				<BR>
				Buku Kas Nomor
				<span style="padding-left:5px;">:</span>
				<span style="padding-left:5px;"></span>
				<BR>
				Tahun Anggaran
				<span style="padding-left:10px;">:</span>
				<span style="padding-left:5px;">2021</span>
				<BR>
				<BR>
				<BR>
				
			</td>
        
        </tr>
			
		<tr>
			<td width="250px">
			</td>
			
			<td width="180px">
				<table  align="center" width="180px" rules="all">
					<tr>
						<td>
							<center><font size="4"><b>KUITANSI</b></font></center>
						</td>
					</tr>
				</table>
				
			</td>
			
			<td width="270px">
			</td>
			
		</tr>
		
		<tr>
			<td colspan="3">
				<hr>
			</td>
		</tr>
    </table>
    
    <table align="center" width="650px" >
        <tr>
			<td width="150px">
				Sudah terima dari 
			</td>
			
			<td width="5px">
			:
			</td>
			
			<td width="495px">
			{{$kuitansi->sudah_terima_dari}}
			
			</td>
        </tr>
		<tr>
			<td width="150px">
				 
			</td>
			
			<td width="5px">
			
			</td>
			
			<td width="495px">
			
			
			</td>
        </tr>
		
		<tr>
			<td width="150px">
				Uang sebesar 
			</td>
			
			<td width="5px">
			:
			</td>
			
			<td width="495px">
			Rp. {{rupiah($kuitansi->jumlah)}}
			</td>
        </tr>
			 <tr>
			<td width="150px">
				Untuk pembayaran 
			</td>
			
			<td width="5px">
			:
			</td>
			
			<td width="495px">
			{{$kuitansi->untuk_pembayaran}}
			</td>
        </tr>
		</tr>
			 <tr>
			<td width="150px">
				Berdasarkan SPD Nomor 
			</td>
			
			<td width="5px">
			:
			</td>
			
			<td width="495px">
			{{$kuitansi->spd->spd_nomor}}
			</td>
        </tr>
		</tr>
			 <tr>
			<td width="150px">
				Tanggal 
			</td>
			
			<td width="5px">
			:
			</td>
			
			<td width="495px">
			{{Carbon\Carbon::parse($kuitansi->spd->surattugas->st_tgl_penetapan)->format('d F Y')}}
			</td>
        </tr>
		</tr>
			 <tr>
			<td width="150px">
				Untuk perjalanan dinas dari 
			</td>
			
			<td width="5px">
			: 
			</td>
			
			<td width="495px">
				{{$kuitansi->spd->spd_tempat_berangkat}} ke {{$kuitansi->spd->spd_tempat_tujuan}}
			</td>
        </tr>
		</tr>
			 <tr>
			<td width="150px">
				Terbilang 
			</td>
			
			<td width="5px">
			:
			</td>
			
			<td width="495px">
			{{terbilang($kuitansi->jumlah)}} Rupiah
			</td>
        </tr>
			
    </table>
	
	<table align="center" width="650px" >
		<tr>
			<td>
			<BR>
			Rp. {{rupiah($kuitansi->jumlah)}}
			</td>
		</tr>
	</table>
	
	<table align="center" width="650px">
		<tr>
			<td width="350px">
			
			</td>
			<td width="300px">
				<BR>
				<BR>
				<center>Yang Menerima,</center>
				<BR>
				<BR>
				<BR>
				<center>( {{$kuitansi->spd->pegawai->nama_pegawai}} )</center>
				<center>NIP. {{$kuitansi->spd->pegawai->nip}}</center>
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