<!DOCTYPE html>
<html>
<head>
	<title>Surat Tugas</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 11pt;
		}
	</style>
	 <table  align="center" width="700px"  >
        <tr>
        <td ><center><img src="{{ asset('/storage/img/logo-beltim.png') }}" width="70" height="90"></center></td>
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
        <tr>
            <td colspan="2"><center>
                <font size="5"><b>SURAT TUGAS</b></font><BR>
                <font size="4"><b>Nomor : {{$surattugas->st_nomor}}</b></font></center>
            </td>
        </tr>
    </table>
	<br>
	<table class="table">
		<!--thead>
			<tr>
				<th>No</th>
				<th>Pejabat Pembuat Komitmen/Pejabat yg berwenang</th>
				<th>Nama/NIP Pegawai yang/melaksanakan perjalanan dinas</th>
				<th>Alamat</th>
				<th>Telepon</th>
				<th>Pekerjaan</th>
			</tr>
		</thead-->
		<tbody>
			<tr>
				<td>Dasar Penugasan</td>
				<td>:</td>
				<td>{{$surattugas->st_dasar_penugasan}}</td>
			</tr>
			<tr>
				<td colspan="3"><center>MEMERINTAHKAN</center></td>
			</tr>
			<tr>
				<td>Kepada</td>
				<td>:</td>
				<td>
					Nama&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					: {{$surattugas->pegawai->nama_pegawai}}
					<br>
					Pangkat/Gol : {{$surattugas->pegawai->golongan->pangkat}}/{{$surattugas->pegawai->golongan->golongan}}
					<br>
					NIP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					: {{$surattugas->pegawai->nip}}
					<br>
					Jabatan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					: {{$surattugas->pegawai->jabatan->jabatan}}
					
				</td>
			</tr>
			<tr>
				<td>Untuk</td>
				<td>:</td>
				<td>{{$surattugas->st_alasan_penugasan}}</td>
			</tr>
			<tr>
				<td>Lama Pelaksanaan Tugas</td>
				<td>:</td>
				<td>{{$surattugas->st_lama_tugas}} hari</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td>Terhitung tanggal {{Carbon\Carbon::parse($surattugas->st_tgl_awal)->translatedformat('d F Y')}} s.d {{Carbon\Carbon::parse($surattugas->st_tgl_akhir)->translatedformat('d F Y')}}</td>
				 
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td>
					Ditetapkan di 
					: {{$surattugas->st_tempat_penetapan}}
					<br>
					Pada Tanggal
					: {{Carbon\Carbon::parse($surattugas->st_tgl_penetapan)->translatedformat('d F Y')}}
					<br><br>
					<center>{{$surattugas->penandatangan->jabatan->jabatan}},</center>
					<br><br><br><br>
					<center> <b><u>{{$surattugas->penandatangan->nama_pegawai}}</u></b></center>
					
					<center> <b>{{$surattugas->penandatangan->golongan->pangkat}} </b></center>
					<center><b>NIP.{{$surattugas->penandatangan->nip}}</b></center>
				</td>
				
			</tr>
			
		</tbody>
	</table>

</body>
</html>