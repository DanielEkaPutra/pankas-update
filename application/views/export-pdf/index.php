<head>
    <title>Kartu Warga Jemaat </title>
</head>

<div>
    <img src="<?= 'assets/images/logo/logo_GPIB.png'?>" style="width: 200px; margin-left:-15px; margin-top: 15px">
    <center style="margin-top:-220px;margin-left:10px;">
        <p style="font-size:20px">GEREJA PROTESTAN di INDONESIA bagian BARAT</p>
        <b><h1 style="margin-top:-15px;">GPIB JEMAAT "PANCARAN KASIH" DEPOK</h1></b>
        <p style="margin-top:-15px; font-size:19px">
            Jalan Let. Tole Iskandar No. 27 Depok, Jawa Barat 16415 <br>
            Telp. : (021) 8741519, (021) 8744862 | Fax. : (021) 8741519, (021) 8744862 <br>
            Email : pancarankasih.depok@gpib.or.id | Website: www.gpibpankas.or.id 
        </p>
        <hr style="border-top: 4px double; width:700px">
    </center>
    <img src="<?= 'assets/images/logo/logo_pankas.png'?>" style="margin-left: 770px; margin-top:-235px; width:330px">


</div>
<center>
    <h1 style="font-size:40px;margin-top:-20px">KARTU WARGA JEMAAT</h1>
</center>

<?php

foreach($kepalakeluarga as $kk)
{

?>

<div style="margin-top:-20px;margin-bottom:60px">
    <?php
    
        if($kk->id_anggota == "0")
        {
            
    ?>
    <p>No. Kartu Jemaat : <?= $kk->id_jemaat?></p>
    <p>Nama Keluarga &nbsp;&nbsp; : <?= $kk->nama_depan?> <?= $kk->nama_belakang?></p>
    <p>Alamat Lengkap &nbsp;: <?= $kk->alamat?>, RT 0<?= $kk->rt?>, RW 0<?= $kk->rw?>, <?= $kk->kelurahan?>, 
    <?= $kk->kecamatan?>, <?= $kk->kota?>, <?= $kk->provinsi?></p>
    <p>No. Telepon &nbsp; &nbsp; &nbsp; &nbsp; : <?= $kk->telepon?></p>
    <p>Sektor Pelayanan : <?= $kk->nama?></p>

    <?php } ?>
</div>
<?php } ?>

<table border="1" width="100%" style="border-collapse: collapse">
	<tr style="text-align:center;">
		<th width="10" rowspan="2">No</th>
        <th width="80" rowspan="2">Nomor Induk Anggota</th>
		<th width="130" rowspan="2">Nama Lengkap</th>
		<th width="60" rowspan="2">Jenis Kelamin</th>
        <th width="30" rowspan="2">Hubungan Keluarga</th>
        <th colspan="4">Tanggal / Bulan / Tahun</th>
        <th width="70" rowspan="2">Pendidikan</th>
        <th width="70" rowspan="2">Pekerjaan</th>

	</tr>
    <tr>
        <th>Lahir</th>
        <th>Baptis</th>
        <th>Sidi</th>
        <th>Nikah</th>
    </tr>
	<?php 
	$no = 1;
    foreach($print as $p)
    {
	?>
		<tr>
			<td style="text-align:center;"><?php echo $no++; ?></td>
            <td style="text-align:center;">0<?php echo $p->id_anggota?></td>
			<td><?php echo $p->nama_depan;?> <?php echo $p->nama_belakang; ?></td>
			<td style="text-align:center;">
                <?php 
                
                    if($p->jenis_kelamin == "1")
                    {
                        echo "L";
                    }
                    else if($p->jenis_kelamin == "2")
                    {
                        echo "P";
                    }

                ?>
            </td>
            <td style="text-align:center;">
                <?php
                
                if($p->status == "1")
                {
                    echo "Suami";
                }
                else if($p->status == "2")
                {
                    echo "Istri";
                }
                else if($p->status == "3")
                {
                    echo "Anak";
                }
                else if($p->status == "4")
                {
                    echo "Kakek";
                }
                else if($p->status == "5")
                {
                    echo "Nenek";
                }
                
                ?>
            </td>
            <td style="text-align:center;width:90px">
                <?php
                    if($p->tanggal_lahir == "0000-00-00")
                    {
                        echo " - ";
                    }
                    else
                    {
                        echo date('d M Y', strtotime($p->tanggal_lahir));
                    }
                ?>
            </td>
            <td style="text-align:center;width:90px">
                <?php
                    if($p->tanggal_baptis == "0000-00-00")
                    {
                        echo " - ";
                    }
                    else
                    {
                        echo date('d M Y', strtotime($p->tanggal_baptis));
                    }
                ?>
            </td>
            <td style="text-align:center;width:90px">
                <?php
                    if($p->tanggal_sidi == "0000-00-00")
                    {
                        echo " - ";
                    }
                    else
                    {
                        echo date('d M Y', strtotime($p->tanggal_sidi));
                    }
                ?>
            </td>
            <td style="text-align:center;width:90px">
                <?php
                    if($p->tanggal_nikah == "0000-00-00")
                    {
                        echo " - ";
                    }
                    else{
                        echo date('d M Y', strtotime($p->tanggal_nikah));
                    }
                ?>    
            </td>
            <td style="text-align:center;width:90px"><?= $p->pendidikan?></td>
            <td style="text-align:center;width:90px"><?= $p->pekerjaan?></td>
		</tr>
        <?php } ?>
</table>
<footer>
    <p>
        <i>Tanggal Cetak: <?= date('F j, Y')?></i>
        <i style="margin-left:500px;">Sistem Informasi GPIB Pancaran Kasih Depok</i>
    </p>
</footer>