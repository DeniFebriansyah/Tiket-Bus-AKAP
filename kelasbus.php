<?php
include 'koneksi.php';
include 'header.php';
include 'navbar.php';
$query_tampil="SELECT * FROM harga order by id_harga asc";
$data=mysqli_query($db,$query_tampil);
$d=mysqli_fetch_array($data);
$idharga=$d['id_harga'];
?>
<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Kelas Bus</h1>
                    <p class="mb-4">Berikut adalah kelas bus yang tersedia pada website kami</p>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Donut Chart -->
                        <div class="col-xl-6 col-lg-5">
                        <h6 align="center">Gambar Bus Ekonomi</h6>
                            <div class="card shadow mb-4">
                            <img src="img/gambar_ekonomi1.jpg">
                            </div>
                        </div>
                        <!-- Donut Chart -->
                        <div class="col-xl-6 col-lg-5">
                        <h6 align="center">Seat Penumpang Bus Ekonomi</h6>
                            <div class="card shadow mb-4">
                            <img src="img/set_ekonomi.jpg">
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12">
                            <center><a href="pemesanan.php?id=1" type="submit" class="btn btn-success">Pesan Bus Ekonomi</a></center>  
                        </div>                    
                    </div>
                    <br>
                    <!-- Content Row -->
                    <div class="row">

                        <!-- Donut Chart -->
                        <div class="col-xl-6 col-lg-5">
                        <h6 align="center">Gambar Bus Bisnis</h6>
                            <div class="card shadow mb-4">
                            <img src="img/gambar_bisnis.jpg">
                            </div>
                        </div>
                        <!-- Donut Chart -->
                        <div class="col-xl-6 col-lg-5">
                        <h6 align="center">Seat Penumpang Bus Bisnis</h6>
                            <div class="card shadow mb-4">
                            <img src="img/set_bisnis.jpg">
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12">
                            <center><a href="pemesanan.php?id=2" type="submit" class="btn btn-success">Pesan Bus Bisnis</a></center>  
                        </div>                                            
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Donut Chart -->
                        <div class="col-xl-6 col-lg-5">
                        <h6 align="center">Gambar Bus Eksekutif</h6>
                            <div class="card shadow mb-4">
                            <img src="img/gambar_eksekutif.jpg">
                            </div>
                        </div>
                        <!-- Donut Chart -->
                        <div class="col-xl-6 col-lg-5">
                        <h6 align="center">Seat Penumpang Bus Eksekutif</h6>
                            <div class="card shadow mb-4">
                            <img src="img/set_eksekutif.jpg">
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12">
                            <center><a href="pemesanan.php?id=3" type="submit" class="btn btn-success">Pesan Bus Eksekutif</a></center>  
                        </div>                                            
                    </div>

                </div>
                <!-- /.container-fluid -->
<?php include 'footer.php';?>