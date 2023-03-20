<?php
// menyertakan file koneksi ke database
include('koneksi.php');
var_dump($_GET);
// Mendapatkan id data yang akan dihapus dari URL atau 
// Ambil id data yang akan dihapus dari URL parameter
$id = $_GET['id'];

// Query untuk menghapus data
$query = "DELETE FROM transaksi WHERE id_transaksi = $id";
$hapus= mysqli_query($db, $query);

// Redirect kembali ke halaman sebelumnya
if ($hapus){
header('Location: daftartransaksi.php');
exit();
} else{
    echo 'gagal';
}
?>
