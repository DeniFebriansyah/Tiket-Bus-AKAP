<?php
// session_start();
include 'koneksi.php'; 
include 'header.php'; 
// var_dump($_POST);
//mengambil nilai post
$nama_lengkap=$_POST['nama_lengkap'];
$nik=$_POST['nik'];
$no_hp=$_POST['no_hp'];
$kelas_penumpang=$_POST['kelasTiket'];
$jadwal_keberangkatan=$_POST['jadwal_keberangkatan'];
$jumlah_penumpang=$_POST['jumlahPenumpangBukanLansia'];
$jumlah_lansia=$_POST['jumlahPenumpangLansia'];
$jumlah_bayar=$_POST['total_bayar'];

//query
$query_simpan="INSERT INTO `transaksi` (`id_transaksi`,`nama_lengkap`,`nik`,`no_hp`,`kelas_penumpang`,`jadwal_keberangkatan`,`jumlah_penumpang`,`jumlah_lansia`,`total_harga`) values (NULL,'$nama_lengkap','$nik','$no_hp','$kelas_penumpang','$jadwal_keberangkatan','$jumlah_penumpang','$jumlah_lansia','$jumlah_bayar')";
$simpan=mysqli_query($db,$query_simpan);

//cek
if ($simpan) {
    echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js'></script>
    <script type='text/javascript'>
      setTimeout(function () {
      Swal.fire({
          position: 'center',
          icon: 'success',
          title: 'Transaksi Berhasil',
          showConfirmButton: true,
        });
        },10);
        window.setTimeout(function(){
            window.location.replace('index.php');
        } ,2000);
        </script>";
    // $_SESSION['info'] = 'Disimpan';
    // echo "<script>document.location.href='index.php'</script>";
    // echo 'Berhasil';
    // header('location: index.php');
    }
else{
    // $_SESSION['info'] = 'Gagal Disimpan';
    // echo "<script>document.location.href='index.php'</script>";
    echo "gagal <br>";
}


 ?>

<!-- setTimeout(function () {
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Transaksi Berhasil',
            showConfirmButton: true,
          });
    },10);
    window.setTimeout(function(){
        window.location.replace('index.php');
    } ,2000); -->
