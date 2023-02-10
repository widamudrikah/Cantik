<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Frank+Ruhl+Libre:wght@400;500;600;700;800;900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700&family=Oswald:wght@200;300;400;500;600;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="sneat-1.0.0/assets/vendor/fonts/boxicons.css" />


  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Heebo:wght@100;200;300;400;500;600;700;800&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Oswald:wght@200;300;400;500;600;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet">
  <!-- Core CSS -->
  <link rel="stylesheet" href="sneat-1.0.0/assets/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="sneat-1.0.0/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="sneat-1.0.0/assets/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="sneat-1.0.0/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />



  <!-- Page CSS -->
  <!-- Page -->
  <link rel="stylesheet" href="sneat-1.0.0/assets/vendor/css/pages/page-auth.css">
  <!-- Helpers -->
  <script src="sneat-1.0.0/assets/vendor/js/helpers.js"></script>


  <!-- custume mycss-->
  <link rel="stylesheet" href="mycss/style.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Miracle Clinic</title>
</head>

<body>
  <section>
    <nav class="navbar bg-body-tertiary fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand">
          <img src="mycss/logo.png" alt="logo" width="70%">
        </a>
        <div class="d-flex">
          <a href="{{ route('login') }}">
            <h5 class="login">LOGIN</h5>
          </a>
          <a href="{{ route('register') }}">
            <h5 class="regist">REGIST</h5>
          </a>
        </div>
      </div>
    </nav>
  </section>

  <section>
    <div class="container geser">
      <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="mycss/20200930004003homepageimg.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="mycss/20210113030745homepageimg.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="mycss/20210524031513homepageimg.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </section>

  <section>
    <div class="welcome">
      <div class="container">
        <h3 style="color: white;">Selamat Datang Custemor </h3>
        <p style="color: whitesmoke;">Miracle Aesthetic Surgery Center menyuguhkan standar perawatan tertinggi dalam prosedur bedah plastik.
          Memberikan waktu konsultasi dengan dokter bedah kami adalah salah satu bentuk usaha kami agar pasien merasa
          yakin akan prosedur yang akan dilakukan.</p>
      </div>
    </div>
    </div>
  </section>

  <section>
    <div class="container kartu">
      <div class="text-center">
        <h1>
          <a href="" class="ikon">
            <i class="fa-brands fa-square-instagram"></i>
          </a>
          <a href="" class="ikon">
            <i class="fa-brands fa-square-facebook"></i>
          </a>
          <a href="" class="ikon">
            <i class="fa-brands fa-square-twitter"></i>
          </a>
          <a href="" class="ikon">
            <i class="fa-brands fa-square-youtube"></i>
          </a>
        </h1>
      </div>
    </div>
  </section>

  
    <div class="container">
      <div class="card">
        <div class="card-body">
          <h4 class="judul">
            Our Value
          </h4>
          <p class="sub">
            Sumber daya manusia yang unggul akan memberikan kontribusi positif terhadap perkembangan Miracle. Oleh sebab
            itu, setiap insan di Miracle tertanam nilai-nilai:
          </p>
          <div class="row">
            <div class="col-md-4">
              <h3>
                <i class="fa-solid fa-medal"></i>
              </h3>
              <h5>
                Excellence
              </h5>
              <p class="isi">
                Selalu berusaha menghasilkan kinerja yang luar <br> biasa dengan menunjukkan empati dan <br> berusaha
                bekerja melebihi standard <br> yang diharapkan.
              </p>
            </div>
            <div class="col-md-4">
              <h3><i class="fa-solid fa-user"></i></h3>
              <h5>
                Excellence
              </h5>
              <p class="isi">
                Selalu berusaha menghasilkan kinerja yang luar <br> biasa dengan menunjukkan empati dan <br> berusaha
                bekerja melebihi standard <br> yang diharapkan.
              </p>
            </div>
            <div class="col-md-4">
              <h3>
                <i class="fa-solid fa-gears"></i>
              </h3>
              <h5>
                Excellence
              </h5>
              <p class="isi">
                Selalu berusaha menghasilkan kinerja yang luar <br> biasa dengan menunjukkan empati dan <br> berusaha
                bekerja melebihi standard <br> yang diharapkan.
              </p>
            </div>
          </div>

          <div class="row bawah">
            <div class="col-md-6">
              <h3>
                <i class="fa-solid fa-gears"></i>
              </h3>
              <h5>
                Excellence
              </h5>
              <p class="isi">
                Selalu berusaha menghasilkan kinerja yang luar <br> biasa dengan menunjukkan empati dan <br> berusaha
                bekerja melebihi standard <br> yang diharapkan.
              </p>
            </div>

            <div class="col-md-6">
              <h3>
                <i class="fa-solid fa-gears"></i>
              </h3>
              <h5>
                Excellence
              </h5>
              <p class="isi">
                Selalu berusaha menghasilkan kinerja yang luar <br> biasa dengan menunjukkan empati dan <br> berusaha
                bekerja melebihi standard <br> yang diharapkan.
              </p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <section>
    <div class="welcome">
      <div class="container start">
        <h3 style="color: whitesmoke;">Start Your Beauty With Us</h3>
      </div>
    </div>
    </div>
  </section>

  <section>
    <div class="container treatment">
      <div class="card">
        <div class="card-body">
          <h4 class="judul">
            <strong>
              Our Treatment
            </strong>
          </h4>
          <div class="row">
            <div class="col-md-4">
              <h5>
                Tarik Benang APTOS
              </h5>
              <p class="isi">
                Treatment tarik benang menggunakan benang Aptos V-shape yang bertujuan untuk membuat wajah lebih tirus atau V-shape dan membantu memperbaiki wajah yang kendur.
              </p>
            </div>
            <div class="col-md-4">
              <h5>
                Derma Toxin
              </h5>
              <p class="isi">
                Toksin Botulinum tipe A, yang lebih dikenal sebagai Botox adalah produk yang digunakan dalam dunia estetika untuk memperbaiki garis kerutan ekspresi yang menganggu di wajah. Koreksi terjadi karena toksin botulinum akan merelaksasikan otot- otot yang terlibat, secara sementara.
              </p>
            </div>
            <div class="col-md-4">
              <h5>
                Hydrafacial
              </h5>
              <p class="isi">
                Hydrafacial adalah perawatan kulit wajah menggunakan teknologi canggih untuk memberi hasil optimal dan tanpa rasa sakit. Prosedur ini bisa mengatasi jerawat, komedo, kulit kering, dan kerutan.
              </p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  

  <footer id="footer" class="bg-white">
    <div class="footer-wrap">
          <div class="container">
              <div class="row">
                  <div class="col-md-4">
                    <img src="mycss/logo.png" alt="logo" width="40%">
                  </div>	
                  <div class="col-md-4">
                    <div class="row">
                      <strong>CONNECT WITH US</strong>
                    </div>
                    <div class="row mt-4">
                      <a href="#" class="mb-2">Youtube</a>
                      <a href="#" class="mb-2">Linkdin</a>
                      <a href="#" class="mb-2">Twitter</a>
                      <a href="#" class="mb-2">Facebook</a>
                      <a href="#" class="mb-2">Whatsapp</a>
                    </div>
                    
                  </div>	
                  <div class="col-md-4">
                    <div class="row">
                      <strong>JAM OPERASIONAL</strong>
                    </div>
                    <div class="row mt-4">
                      <p class="mb-2">Senin-Jumat : 10:00 - 17:00</p>
                      <p>Sabtu-Minggu : 10:00 - 15:00</p>
                    </div>
                  </div>	
              </div>
              <div class="row">
                <strong class="copyright">©2023 <br> MIRACLE
                  ALL RIGHTS RESERVED</strong>
              </div>
          </div>
      </div>   
  </footer>



  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="sneat-1.0.0/assets/vendor/libs/jquery/jquery.js"></script>
  <script src="sneat-1.0.0/assets/vendor/libs/popper/popper.js"></script>
  <script src="sneat-1.0.0/assets/vendor/js/bootstrap.js"></script>
  <script src="sneat-1.0.0/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

  <script src="sneat-1.0.0/assets/vendor/js/menu.js"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="sneat-1.0.0/assets/vendor/libs/apex-charts/apexcharts.js"></script>

  <!-- Main JS -->
  <script src="sneat-1.0.0/assets/js/main.js"></script>

  <!-- Page JS -->
  <script src="sneat-1.0.0/assets/js/dashboards-analytics.js"></script>

  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>