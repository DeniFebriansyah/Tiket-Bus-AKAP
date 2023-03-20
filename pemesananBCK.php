<?php 
//koneksi
include 'header.php';
include 'navbar.php';
session_start();
?>
<body>
	<!-- SWAL -->
	<!-- <div class="info-data" data-infodata="<?php if(isset($_SESSION['info'])){ echo $_SESSION['info']; } unset($_SESSION['info']); ?>"></div> -->
      <div class="container-fluid">
        <h3>Pemesanan Tiket</h3>

        <form method="post" action="transaksi.php">
          <div class="form-group">
            <label for="exampleFormControlInput1">Nama Lengkap</label>
            <input type="text" name="nama_lengkap" class="form-control" id="nama" onkeyup="validateNama()" placeholder="Nama Lengkap" required>
            <p id="namaValidasi" style="font-size: .8rem;"></p>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Nomor Identitas</label>
            <input type="text" name="nik" class="form-control" id="" placeholder="NIK" required>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">No HP</label>
            <input type="text" name="no_hp" class="form-control" id="" placeholder="Nomor Handphone" required>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Kelas Penumpang</label>
            <select name='kelasTiket' class="form-control" id="inputGroupSelect01" onchange="generateHargaTiket(this)" required>
                    <option value="" disabled selected hidden>Kelas Tiket</option>
                    <option value="Ekonomi">Ekonomi</option>
                    <option value="Eksekutif">Eksekutif</option>
                    <option value="Bisnis">Bisnis</option>
                  </select>
            <!-- <input type="number" name="stok" class="form-control" id="" placeholder="Stok"> -->
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Jadwal Keberangkatan</label>
            <input type="date" name="jadwal_keberangkatan" class="form-control" id="" placeholder="" required>
          </div>
          <div class="form-group">
          <label for="exampleFormControlInput1">Penumpang biasa</label>
          <input  id='bukanLansia' type="number" name="jumlahPenumpangBukanLansia" class="form-control" placeholder="Jumlah Penumpang" onchange="generateTotalBayar()" required>
                  <p style="font-size: .8rem;">Penumpang bukan lansia < 60 tahun</p>
          </div>
          <div class="form-group">
          <label for="exampleFormControlInput1">Penumpang Lansia</label>
          <input id="lansia" type="number" name="jumlahPenumpangLansia" class="form-control" placeholder="Jumlah Penumpang Lansia" onchange="generateTotalBayar()" required>
                  <p style="font-size: .8rem;">Penumpang lansia > 60 tahun</p>
          </div>
          <div class="form-group row">
            <div class="col-sm-2 mb-3 mb-sm-2">
                <label for="exampleFormControlInput1">Harga Tiket</label>
            </div>
            <div class="col-sm-10">
                <div id="hargaTiket" class="col-md-10">
                  Rp. 0
                </div>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-2 mb-3 mb-sm-2">
                <label for="exampleFormControlInput1">Total Harga</label>
            </div>
            <div class="col-sm-10">
                <!-- <div id="totalBayar" class="col-md-10" name="total_bayar"> -->
                <input type="text" name="total_bayar" class="form-control" id="totalBayar" placeholder="" readonly>
                  <!-- Rp. 0 -->
                <!-- </div> -->
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-12">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <p style="font-size: .8rem;">
                    Saya dan / atau rombongan telah membaca, memahami, dan setuju berdasarkan syarat dan ketentuan yang telah ditetapkan.
                  </label>
                </div>
          </div>
          <button type="submit" class="btn btn-success">Simpan</button>
          <button type="cancel" class="btn btn-danger" onclick="goBack()">Cancel</button>
        </form>
      </div>
      <script>
        function goBack() {
          window.history.back();
        }
      </script>
      <script>
    const generateHargaTiket = (kelas) => {
      if (kelas.value == 'Ekonomi') {
        document.getElementById('hargaTiket').innerText = 'Rp. 200.000';
      }

      if (kelas.value == 'Eksekutif') {
        document.getElementById('hargaTiket').innerText = 'Rp. 250.000';
      }

      if (kelas.value == 'Bisnis') {
        document.getElementById('hargaTiket').innerText = 'Rp. 300.000';
      }

      generateTotalBayar();
    }

    const generateTotalBayar = () => {
      totalBukanLansia = Number(document.getElementById('bukanLansia').value);
      totalLansia = Number(document.getElementById('lansia').value);
      kelasTiket = document.getElementById('inputGroupSelect01').value;

      if (kelasTiket == 'Ekonomi') {
        hargaTiket = 200000;
      }
      
      if (kelasTiket == 'Eksekutif') {
        hargaTiket = 250000;
      }

      if (kelasTiket == 'Bisnis') {
        hargaTiket = 300000;
      }

      totalBayar = (hargaTiket * totalBukanLansia) + (hargaTiket * 0.9 * totalLansia);
      
      document.getElementById('totalBayar').value = totalBayar;
    }

    const disableSubmitButton = () => {
      document.getElementById('pesanButton').disabled = true;
    }

    const enableSubmitButton = () => {
      document.getElementById('pesanButton').disabled = false;
    }

    const validateNama = () => {
      nama = document.getElementById('nama').value.toLowerCase();
      validasi = document.getElementById('namaValidasi');

      cond = /^[a-z\.][a-z\s\.]*$/;

      if (nama.match(cond)) {
        validasi.setAttribute('style', 'color: blue;');
        validasi.innerText = 'Valid';

        enableSubmitButton();

      } else {
        validasi.setAttribute('style', 'color: red;');
        validasi.innerText = 'Mohon hanya masukkan huruf'

        disableSubmitButton();

      }

    }
  </script>
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
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script>
    <script src="js-ku.js"></script>

</body>
<?php include 'footer.php'?>