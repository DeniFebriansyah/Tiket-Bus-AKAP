<?php
include 'koneksi.php';
$query_tampil="SELECT * FROM transaksi order by id_transaksi asc";
$data=mysqli_query($db,$query_tampil);

?>
<body onload="window.print()">

<!DOCTYPE html>
<html>
<head>
	<title>Tiket BUS | Admin</title>
	<style type="text/css">
		table {
			border-style: double;
			border-width: 3px;
			border-color: white;
		}
		table tr .text2 {
			text-align: right;
			font-size: 13px;
		}
		table tr .text {
			text-align: center;
			font-size: 13px;
		}
		table tr td {
			padding-left: 10px;
			font-size: 13px;
		}
		body .rangkasurat{
			margin:0;
			padding:20px;
		}
		table{
			border-bottom: 5px;
			padding: 2px;
		}
		.tengah{
			text-align: center;
			line-height: 0px;
			font-size: 15px;
		}
		body .a{
			text-align: right;
			font-size: 13px;
			line-height: 10px;
		}
	</style>

</head>
<!-- <body onload="window.print()"> -->
    <center>
<body>
<?php 
                                        $no=1;
                                        //perulangan
                                        $d=mysqli_fetch_array($data);
                                        //perintah Menampilkan data
                                        $id_transaksi=$d['id_transaksi'];
                                        $nama_lengkap=$d['nama_lengkap'];
                                        $nik=$d['nik'];
                                        $no_hp=$d['no_hp'];
                                        $kelas_penumpang=$d['kelas_penumpang'];
                                        $jadwal_keberangkatan=$d['jadwal_keberangkatan'];
                                        $jumlah_penumpang=$d['jumlah_penumpang'];
                                        $jumlah_lansia=$d['jumlah_lansia'];
                                        $jumlah_bayar=$d['total_harga'];
                                        ?>
	<p>Tiket Bus Online AKAP</p>
	<table>
    <tr>
      <td>Nama Pemesan</td>
      <td>:</td>
      <td><?php echo $nama_lengkap?></td>
    </tr>
    <tr>
      <td>NIK</td>
      <td>:</td>
      <td><?php print $nik; ?></td>
    </tr>
    <tr>
      <td>No Hp</td>
      <td>:</td>
      <td><?php print $no_hp; ?></td>
    </tr>
    <tr>
      <td>Kelas BUS</td>
      <td>:</td>
      <td><?php print $kelas_penumpang; ?></td>
    </tr>
	<tr>
      <td>Jadwal Berangkat</td>
      <td>:</td>
      <td><?php print $jadwal_keberangkatan; ?></td>
    </tr>
    <tr>
      <td>Jumlah Penumpang Biasa</td>
      <td>:</td>
      <td><?php print $jumlah_penumpang; ?></td>
    </tr>
    <tr>
      <td>Jumlah Penumpang Lansia</td>
      <td>:</td>
      <td><?php print $jumlah_lansia; ?></td>
    </tr>
    <tr>
      <td>Jumlah Bayar</td>
      <td>:</td>
      <td><?php print $jumlah_bayar; ?></td>
    </tr>
	<br>
  </table>
  <p>Diharapkan konfirmasinya H-1 sebelum jadwal Keberangkatan</p>
  <p>Terimakasih</p>

</body>
</center>
<!-- <body>
	<center>
		<table>
			<tr>
				<td><img src="<?= base_url().'images/image-gallery/Jambi.png'?>" width="70px" padding="10px"></td>
				<td></td>
				<td>
				<center>
					<font size="4">PEMERINTAH KOTA JAMBI</font><br>
					<font size="4">KECAMATAN JAMBI SELATAN</font><br>
					<font size="5"><b>KELURAHAN THEHOK</b></font><br>
					<font size="2">Jln. Ternate No.09 Rt.05. Telepon (0741) 40240 Jambi. Kode Pos. 36138</font><br>
				</center>
				</td>
			</tr>
				<table width="625" size="bold">
			<tr>
				<td></td>
			</tr>
			<tr>
				<td colspan="3"><hr></td>
			</tr>
		</table>
		</table>
		<table>
			<tr class="text2">
				<td>Nomer</td>
				<td width="572">: -</td>
			</tr>
			<tr>
				<td>Perihal</td>
				<td width="564">: -</td>
			</tr>
		</table>
		<br>
		<table width="625">
			<tr>
		       <td>
			       <font size="2">Kpd yth.<br>Siswa Smk Baitul Hikmah kelas x<br>Di tempat</font>
		       </td>
		    </tr>
		</table>
		<br>
		<table width="625">
			<tr>
		       <td>
			       <font size="2">Assalamu'alaikum wr.wb<br>Dalam rangka praktikum simulasi digital yg jatuh pada tanggal 16 mei 2019
Siswa smk baitul hikmah <b>kelas X</b> akan mengadakan peraktikum, jadi di harapkan siswa di minta hadir
pada tempat yang sudah di siapkan.</font>
		       </td>
		    </tr>
		</table>
		<br>
		</table>
		<table>
			<tr class="text2">
				<td>Hari Tanggal</td>
				<td width="541">: <b>Selasa/16 mei 2019</b></td>
			</tr>
			<tr>
				<td>Jam</td>
				<td width="525">: 08:30</td>
			</tr>
			<tr>
				<td>Tempat</td>
				<td width="525">: Ruang lap komputer</td>
			</tr>
		</table>
		<br>
		<table width="625">
			<tr>
		       <td>
			       <font size="2">Diharapkan atas kehadiranya, Demikian surat ini di sampaikan, atas perhatian dan kerjasamanya kami
ucapkan terima kasih.<br><br>Wassalamu'alaikum wr.wb.
</font>
		       </td>
		    </tr>
		</table>
		<br>
		<table width="625">
			<tr>
				<td width="430"><br><br><br><br></td>
				<td class="text" align="center">Wali kelas<br><br><br><br>Bpk Fauzy.s.kom</td>
			</tr>
	     </table>
	</center>
</body> -->
</html>