<?php 
include 'koneksi.php';
include 'header.php';
include 'navbar.php';
$query_tampil="SELECT * FROM harga order by id_harga asc";
$data=mysqli_query($db,$query_tampil);
?>

<div class="container-fluid">
        <!-- <h3>Daftar Harga Bus</h3> -->
                           <!-- DataTales Example -->
                           <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Daftar Harga Bus Terbaru</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Kelas Bus</th>
                                            <th>Harga</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $no=1;
                                        //perulangan
                                        while ($d=mysqli_fetch_array($data)) {
                                        //perintah Menampilkan data
                                        // $idharga=$d['id_harga'];
                                        $tipebus=$d['tipe_bus'];
                                        $hargabus=$d['harga_bus'];
                                        ?>
                                        <tr>
                                            <td><?php echo $tipebus?></td>
                                            <td><?php echo $hargabus?></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
</div>
<?php include 'footer.php';?>