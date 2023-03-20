<?php 
//koneksi
include 'koneksi.php';
include 'header.php';
include 'navbar.php';
//query
$query_tampil="SELECT * FROM transaksi order by id_transaksi asc";
$data=mysqli_query($db,$query_tampil);
?>
<html>
<body>
          <!-- Begin Page Content -->
          <div class="container-fluid">
            <!-- Page Heading -->
            <div
              class="d-sm-flex align-items-center justify-content-between mb-4"
            >
              <h1 class="h3 mb-0 text-gray-800">Daftar Transaksi</h1>
            </div>

            <!-- Content Row -->
            <div class="row">
              
                      <!-- Pending Requests Card Example -->
            </div>

            <!-- Content Row -->
            <div class="row">
              <!-- Content Column -->
              <div class="col-lg-12 mb-12">
                <!-- Project Card Example -->
                    <!-- Page Heading -->
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Transaksi</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                        <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Lengkap</th>
                                        <!-- <th scope="col">NIK</th> -->
                                        <th scope="col">NO_hp</th>
                                        <th scope="col">Kelas Penumpang</th>
                                        <th scope="col">Jadwal Keberangkatan</th>
                                        <!-- <th scope="col">Jumlah Penumpang Biasa</th> -->
                                        <!-- <th scope="col">Jumlah Penumpang Dewasa</th> -->
                                        <!-- <th scope="col">Total Harga</th> -->
                                        <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no=1;
                                        //perulangan
                                        while ($d=mysqli_fetch_array($data)) {
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
                                        <tr>
                                        <th scope="row"><?php echo $no++; ?></th>
                                        <td><?php echo $nama_lengkap?> </td>
                                        <!-- <td><?php echo $nik?></td> -->
                                        <td><?php echo $no_hp?></td>
                                        <td><?php echo $kelas_penumpang?></td>
                                        <td><?php echo $jadwal_keberangkatan?></td>
                                        <!-- <td><?php echo $jumlah_penumpang?></td> -->
                                        <!-- <td><?php echo $jumlah_lansia?></td> -->
                                        <!-- <td><?php echo $jumlah_bayar?></td> -->
                                        <td>  
                                            <!-- <a href="editanggota.php?id=<?php echo $idanggota?>" class="btn btn-warning btn-circle">
                                                <i class="fas fa-pen"></i>
                                            </a> -->
                                            <!-- <a href="hapustransaksi.php?id=<?php echo $id_transaksi?>" class="btn btn-danger btn-circle" onclick="hapusData(event);">
                                                <i class="fas fa-trash"></i>
                                            </a> -->
                                            <a href="cetaktransaksi.php" class="btn btn-primary btn-circle">
                                                <i class="fas fa-print"></i>
                                            </a>
                                        </td>

                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

            </div>

              <div class="col-lg-6 mb-4">
                <!-- Illustrations -->
          </div>
          <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->

      </div>
      <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
    

<?php include 'footer.php';?>
    </body>
              <!-- Bootstrap core JavaScript-->
              <script src="js/script.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="js-ku.js"></script>
    <!-- <script>
    function hapusData() {
        swal({
            title: "Anda yakin ingin menghapus data?",
            text: "Data yang dihapus tidak dapat dikembalikan!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                window.location.href = "hapusanggota.php";
            } else {
                swal("Data tidak dihapus.");
            }
        });
    }
</script> -->
<script>
    function hapusData(event) {
        event.preventDefault(); // Mencegah aksi default dari tombol yang ditekan
        const url = event.target.href; // Mendapatkan URL halaman yang akan dihapus
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                window.location.href = url;
            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                'Cancelled',
                'Your imaginary file is safe :)',
                'error'
                )
            }
            });
                }
</script>
</html>