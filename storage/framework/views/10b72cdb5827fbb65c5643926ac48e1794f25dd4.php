<!DOCTYPE html>
<html>
<head>
    
	<title>Data Nota Dinas</title>
	<link rel="shortcut icon" type="image/png" href="<?php echo e(asset('/storage/img/logo-beltim.png')); ?>">
</head>


    <table  align="center" width="700px"  >
        <tr>
        <td ><center><img src="<?php echo e(asset('/storage/img/logo-beltim.png')); ?>" width="70" height="90"></center></td>
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
            <td >
                <!--p align="justify"><span style="padding-left:40px;">
                Diterbitkan berdasarkan Peraturan Menteri Kelautan dan Perikanan Nomor PER.27/MEN/2009 
                dan Keputusan Direktur Jenderal Perikanan Tangkap Nomor 36/DJ-PT/201. <br></span>
                <br>-->
                
                <br><span >Kepada Yth</span><span style="padding-left:15px;">:</span>
					<span style="padding-left:15px;"><?php echo e($nodin->nd_kepada); ?></span>
                <br><span >Dari</span><span style="padding-left:63px;">:</span>
					<span style="padding-left:15px;"><?php echo e($nodin->nd_dari); ?></span>
                <br><span >Tanggal</span><span style="padding-left:39px;">:</span>
					<span style="padding-left:15px;"><?php echo e($nodin->nd_tgl_nodin); ?></span>
				<br><span >Nomor</span><span style="padding-left:46.5px;">:</span>
					<span style="padding-left:15px;"><?php echo e($nodin->nd_nomor); ?></span>
				<br><span >Lampiran</span><span style="padding-left:30px;">:</span>
					<span style="padding-left:15px;"><?php echo e($nodin->nd_lampiran); ?></span>
				<br><span >Perihal</span><span style="padding-left:46.5px;">:</span>
					<span style="padding-left:15px;"><?php echo e($nodin->nd_perihal); ?></span>
                
            </td>
            
        </tr>
		 <tr>
            <td ><hr> </td>
        </tr>
    
        <tr>
            <td >
                
				<p align="justify"><span style="padding-left:40px;">
                <?php echo e($nodin->nd_kalimat_pembuka); ?><br></span>
				</p>
                
                <p >
					<span style="padding-left:40px;">Nama</span>
                    <span style="padding-left:60px;">:</span>
					<span style="padding-left:15px;"><?php echo e($nodin->pegawai->nama_pegawai); ?></span>
                    
                <br><span style="padding-left:40px;">NIP</span>
                    <span style="padding-left:72px;">:</span>
					<span style="padding-left:15px;"><?php echo e($nodin->pegawai->nip); ?></span>
                    
                <br><span style="padding-left:40px;">Pangkat/Gol</span>
                    <span style="padding-left:18px;">:</span>
					<span style="padding-left:15px;"><?php echo e($nodin->pegawai->golongan->golongan); ?></span>
                    
                <br><span style="padding-left:40px;">Jabatan</span>
                    <span style="padding-left:50px;">:</span>
					<span style="padding-left:15px;"><?php echo e($nodin->pegawai->jabatan->jabatan); ?></span>
                    
                
                <br>
                <br>
                

                <p align="justify"><span style="padding-left:40px;">
                <?php echo e($nodin->nd_kalimat_penutup); ?><br></span>
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
                
                  <p><b><span><center> ..,</center></span><b>   
                    <br>
                    <br> 
                    <br>
                    <br> 
                    <span><center> <b><u>..</u></b></cener></span>  
                     
                    <span><center> <b>..</b></center></span> 
                    
                    <span><center><b>NIP...</b></center></span>

                </p>
            </td>
        <tr>
    </table>


    
</html><?php /**PATH C:\xampp7\htdocs\laravel_framework\sipede_bkpsdm\resources\views/notadinas/nodin_pdf.blade.php ENDPATH**/ ?>