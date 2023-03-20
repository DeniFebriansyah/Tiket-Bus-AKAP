<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>AKAP Transport - Transportasi Bus Antar Pulau</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/main.css" rel="stylesheet">

  <!-- Vanilla Datepicker CSS -->
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/css/datepicker.min.css'>   

  <!-- =======================================================
  * Template Name: Logis - v1.3.0
  * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>AKAP Transport</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="services.html">Services</a></li>
          <li><a href="pricing.html">Pricing</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a href="contact.html">Contact</a></li>
          <li><a class="get-a-quote" href="get-a-quote.html">Get a Quote</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Solusi Perjalanan Yang Aman dan Nyaman</h2>
              <p>Melayani sudah lebih dari 30 tahun. Memiliki 269 armada dengan kualitas premium untuk menjamin kenyamanan dan keamanan para penumpang.</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Pesan Tiket</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Get a Quote Section ======= -->
    <section id="get-a-quote" class="get-a-quote">
      <div class="container" data-aos="fade-up">

        <div class="row g-0">

          <div class="col-lg-5 quote-bg" style="background-image: url(assets/img/quote-bg.jpg);"></div>

          <div class="col-lg-7">
            <form action="pesan.service.php" method="post" class="php-email-form">
              <div class="row gy-4">

                

                <div class="col-lg-12">
                  <h4>Form Pemesanan</h4>
                </div>

                <div class="col-md-12">
                  <input id="nama" type="text" name="nama" class="form-control" placeholder="Nama Lengkap" onkeyup="validateNama()" required>
                  <p id="namaValidasi" style="font-size: .8rem;"></p>
                </div>

                <div class="col-md-12 ">
                  <input type="number" class="form-control" name="noIdentitas" placeholder="Nomor Identitas" required>
                </div>

                <div class="col-md-12">
                  <input type="number" class="form-control" name="noHP" placeholder="Nomor Handphone" required>
                </div>

                <div class="col-md-12">
                  <select name='kelasTiket' class="form-control" id="inputGroupSelect01" onchange="generateHargaTiket(this)">
                    <option value="" disabled selected hidden>Kelas Tiket</option>
                    <option value="Ekonomi">Ekonomi</option>
                    <option value="Eksekutif">Eksekutif</option>
                    <option value="Bisnis">Bisnis</option>
                  </select>
                </div>

                <div class="input-group mb-4">
                  <i class="bi bi-calendar-date input-group-text"></i>
                  <input name="tanggalKeberangkatan" type="text" class="datepicker_input form-control" placeholder="Tanggal Keberangkatan" required aria-label="Tanggal Keberangkatan">
                </div>


                <div class="col-md-6">
                  <input  id='bukanLansia' type="number" name="jumlahPenumpangBukanLansia" class="form-control" placeholder="Jumlah Penumpang" onchange="generateTotalBayar()" required>
                  <p style="font-size: .8rem;">Penumpang bukan lansia</p>
                </div>

                <div class="col-md-6">
                  <input id="lansia" type="number" name="jumlahPenumpangLansia" class="form-control" placeholder="Jumlah Penumpang Lansia" onchange="generateTotalBayar()" required>
                  <p style="font-size: .8rem;">Penumpang lansia (lebih dari 65 tahun)</p>
                </div>


                <div class="col-md-2">
                  Harga Tiket
                </div>

                <div id="hargaTiket" class="col-md-10">
                  Rp. 0
                </div>

                <div class="col-md-2">
                  Total Bayar
                </div>

                <div id="totalBayar" class="col-md-10">
                  Rp. 0
                </div>

                <div class="col-md-12">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <p style="font-size: .8rem;">
                    Saya dan / atau rombongan telah membaca, memahami, dan setuju berdasarkan syarat dan ketentuan yang telah ditetapkan.
                  </label>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your quote request has been sent successfully. Thank you!</div>

                  <button id="pesanButton" type="submit">Pesan Tiket</button>
                </div>

              </div>
            </form>
          </div><!-- End Quote Form -->

        </div>

      </div>
    </section><!-- End Get a Quote Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>Logis</span>
          </a>
          <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
          <div class="social-links d-flex mt-4">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>
            A108 Adam Street <br>
            New York, NY 535022<br>
            United States <br><br>
            <strong>Phone:</strong> +1 5589 55488 55<br>
            <strong>Email:</strong> info@example.com<br>
          </p>

        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Logis</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!-- Vanilla Datepicker JS -->
  <script src='https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/js/datepicker-full.min.js'></script>

  <script>
    const getDatePickerTitle = elem => {
      // From the label or the aria-label
      const label = elem.nextElementSibling;
      let titleText = '';
      if (label && label.tagName === 'LABEL') {
        titleText = label.textContent;
      } else {
        titleText = elem.getAttribute('aria-label') || '';
      }
      return titleText;
    }

    const elems = document.querySelectorAll('.datepicker_input');
    for (const elem of elems) {
      const datepicker = new Datepicker(elem, {
        'format': 'dd/mm/yyyy', // UK format
        title: getDatePickerTitle(elem)
      });
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
      
      document.getElementById('totalBayar').innerText = totalBayar;
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


  

</body>

</html>