<?php
session_start();
require 'conf/koneksi.php';

$query = mysqli_query($koneksi, "SELECT * FROM Berita");
$query1 = mysqli_query($koneksi, "SELECT * FROM Galeri where kategori = 'Makanan'");
$query2 = mysqli_query($koneksi, "SELECT * FROM Galeri where kategori = 'Minuman'");
$query3 = mysqli_query($koneksi, "SELECT * FROM Galeri where kategori = 'Dessert'");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Gatotkaca Unisi Eco Team</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="icon" href="https://fit.uii.ac.id/wp-content/uploads/2016/01/cropped-favicon-uii-1-32x32.png"
    sizes="32x32">
  <link rel="icon" href="https://fit.uii.ac.id/wp-content/uploads/2016/01/cropped-favicon-uii-1-192x192.png"
    sizes="192x192">
  <link rel="icon" href="https://fit.uii.ac.id/wp-content/uploads/2016/01/cropped-favicon-uii-1-32x32.png"
    sizes="32x32">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="logo col-xl-9 d-flex align-items-center justify-content-lg-between">
          <!-- Uncomment below if you prefer to use an image logo -->
          <a href="index.html" class="logo me-auto me-lg-0 "><img src="assets/img/logogatot-overlaywhite.png" alt=""
              class="img-fluid"></a>
          <!-- <h1 class="logo me-auto ms-xl-4"><a href="index.html">Gatotkaca</a></h1> -->

          <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
              <li><a class="nav-link scrollto active" href="#hero">BERANDA</a></li>
              <li><a class="nav-link scrollto" href="#about">TENTANG KAMI </a></li>
              <li><a class="nav-link scrollto" href="#team">TIM</a></li>
              <li><a class="nav-link scrollto " href="#berita">BERITA</a></li>
              <li><a class="nav-link scrollto" href="#contact">KONTAK</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
        </div>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-7">
          <h1>Gatotkaca Unisi</h1>
          <h2>Gatotkaca Unisi is a student car team that developed Urban and Prototype Car to be competed in KMHE and
            SEM Asia.</h2>
          <a href="#about" class="get-started-btn scrollto">Tentang Kami</a>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container-kiri">
        <center>
          <blockquote class="instagram-media"
            data-instgrm-permalink="https://www.instagram.com/p/CpIA05BvIi5/?utm_source=ig_embed&amp;utm_campaign=loading"
            data-instgrm-version="14"
            style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
            <div style="padding:16px;"> <a
                href="https://www.instagram.com/p/CpIA05BvIi5/?utm_source=ig_embed&amp;utm_campaign=loading"
                style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;"
                target="_blank">
                <div style=" display: flex; flex-direction: row; align-items: center;">
                  <div
                    style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;">
                  </div>
                  <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
                    <div
                      style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;">
                    </div>
                    <div
                      style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;">
                    </div>
                  </div>
                </div>
                <div style="padding: 19% 0;"></div>
                <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px"
                    viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg"
                    xmlns:xlink="https://www.w3.org/1999/xlink">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <g transform="translate(-511.000000, -20.000000)" fill="#000000">
                        <g>
                          <path
                            d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631">
                          </path>
                        </g>
                      </g>
                    </g>
                  </svg></div>
                <div style="padding-top: 8px;">
                  <div
                    style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">
                    View this post on Instagram</div>
                </div>
                <div style="padding: 12.5% 0;"></div>
                <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
                  <div>
                    <div
                      style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);">
                    </div>
                    <div
                      style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;">
                    </div>
                    <div
                      style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);">
                    </div>
                  </div>
                  <div style="margin-left: 8px;">
                    <div
                      style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;">
                    </div>
                    <div
                      style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)">
                    </div>
                  </div>
                  <div style="margin-left: auto;">
                    <div
                      style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);">
                    </div>
                    <div
                      style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);">
                    </div>
                    <div
                      style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);">
                    </div>
                  </div>
                </div>
                <div
                  style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;">
                  <div
                    style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;">
                  </div>
                  <div
                    style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;">
                  </div>
                </div>
              </a>
              <p
                style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
                <a href="https://www.instagram.com/p/CpIA05BvIi5/?utm_source=ig_embed&amp;utm_campaign=loading"
                  style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;"
                  target="_blank">A post shared by Gatotkaca Unisi Eco Team | since 2022 (@gatotkaca_unisi)</a>
              </p>
            </div>
          </blockquote>
        </center>
      </div>
      <div class="container-tengah">
        <div class="section-title">
          <!-- test padding 10px-->
          <h2>About Us</h2>
          <p>Gatotkaca Unisi is a research and competition-based organization of students from Universitas Islam
            Indonesia that focuses on energy-efficient electric vehicles. The team, founded on March 18th, 2022, has its
            sights set on two prestigious competitions, the Shell Eco-Marathon, and the Energy-Efficient Vehicle
            Contest. In addition, the team is active in various research and non-research activities, such as the Growth
            Fest 2022 held by the Business and Innovation Incubator Jointly (IBISMA) of Universitas Islam Indonesia, the
            initiator of the National EV 101 Webinar with the theme "The Urgency of Electric Vehicles and Their
            Implementation in Indonesia", and has also been actively participating in the Student Organization Work
            Program (PPK Ormawa) 2023 in Keditan village with the program title "Empowering Sawi Farmers in Keditan
            Village through Implementation of Smart Greenhouse Based on Internet of Things and Solar PV". Up until now,
            Gatotkaca Unisi has 35 active members divided into seven divisions, namely electrical, programming,
            mechanical, design, administration & finance, sponsorship & public relations, and creative & social media.
          </p>
        </div>
      </div>
      <div class="container-kanan">
        <center>
          <blockquote class="instagram-media"
            data-instgrm-permalink="https://www.instagram.com/p/Co2M82-B15M/?utm_source=ig_embed&amp;utm_campaign=loading"
            data-instgrm-version="14"
            style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
            <div style="padding:16px;"> <a
                href="https://www.instagram.com/p/Co2M82-B15M/?utm_source=ig_embed&amp;utm_campaign=loading"
                style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;"
                target="_blank">
                <div style=" display: flex; flex-direction: row; align-items: center;">
                  <div
                    style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;">
                  </div>
                  <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
                    <div
                      style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;">
                    </div>
                    <div
                      style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;">
                    </div>
                  </div>
                </div>
                <div style="padding: 19% 0;"></div>
                <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px"
                    viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg"
                    xmlns:xlink="https://www.w3.org/1999/xlink">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <g transform="translate(-511.000000, -20.000000)" fill="#000000">
                        <g>
                          <path
                            d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631">
                          </path>
                        </g>
                      </g>
                    </g>
                  </svg></div>
                <div style="padding-top: 8px;">
                  <div
                    style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">
                    View this post on Instagram</div>
                </div>
                <div style="padding: 12.5% 0;"></div>
                <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
                  <div>
                    <div
                      style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);">
                    </div>
                    <div
                      style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;">
                    </div>
                    <div
                      style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);">
                    </div>
                  </div>
                  <div style="margin-left: 8px;">
                    <div
                      style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;">
                    </div>
                    <div
                      style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)">
                    </div>
                  </div>
                  <div style="margin-left: auto;">
                    <div
                      style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);">
                    </div>
                    <div
                      style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);">
                    </div>
                    <div
                      style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);">
                    </div>
                  </div>
                </div>
                <div
                  style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;">
                  <div
                    style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;">
                  </div>
                  <div
                    style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;">
                  </div>
                </div>
              </a>
              <p
                style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
                <a href="https://www.instagram.com/p/Co2M82-B15M/?utm_source=ig_embed&amp;utm_campaign=loading"
                  style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;"
                  target="_blank">A post shared by Gatotkaca Unisi Eco Team | since 2022 (@gatotkaca_unisi)</a>
              </p>
            </div>
          </blockquote>
        </center>
      </div>
    </section>
    <!-- End About Us Section -->

    <!-- Process Section -->
    <section id="process" class="process">
      <div class="icon-box">
        <div class="icon"><img src="/gatotkaca-test1/assets/img/processtest.png"></img></div>
        <h2>1. Discuss</h2>
      </div>
      <div class="icon-box">
        <div class="icon"><img src="/gatotkaca-test1/assets/img/processtest.png"></img></div>
        <h2>2. Sketch</h2>
      </div>
      <div class="icon-box">
        <div class="icon"><img src="/gatotkaca-test1/assets/img/processtest.png"></img></div>
        <h2>3. Build</h2>
      </div>
      <div class="icon-box">
        <div class="icon"><img src="/gatotkaca-test1/assets/img/processtest.png"></img></div>
        <h2>4. Evaluate</h2>
      </div>
      <div class="icon-box">
        <div class="icon"><img src="/gatotkaca-test1/assets/img/processtest.png"></img></div>
        <h2>5. Launch</h2>
      </div>
      <div class="icon-box">
        <div class="icon"><img src="/gatotkaca-test1/assets/img/processtest.png"></img></div>
        <h2>6. Race</h2>
      </div>
    </section>
    <!-- End Process Section -->
    <!-- Slider YANG TERBARU-->
    <section>
      <div class="slider-title">
        <h2>YANG TERBARU</h2>
      </div>
      <div style="padding-left: 2%;">
        <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" slides-per-view="3"
          space-between="30" free-mode="true">

          <?php while ($row = mysqli_fetch_assoc($query)): ?>
            <swiper-slide>
              <div style="width: 300px; display: inline-block;">
                <img src="Album/<?= $row['Gambar'] ?>" class="card-img-top">
                <div class="font-weigth-bold">
                  <?= $row['Judul']; ?>
                </div>
                <div class="font-weight-bold">
                  <?= $row['Tanggal']; ?>
                </div>
              </div>
            </swiper-slide>
          <?php endwhile; ?>


          <swiper-slide><img src="/gatotkaca-test1/assets/img/terbarutest.png"></img></swiper-slide>
          <swiper-slide><img src="/gatotkaca-test1/assets/img/terbarutest.png"></img></swiper-slide>
          <swiper-slide><img src="/gatotkaca-test1/assets/img/terbarutest.png"></img></swiper-slide>
          <swiper-slide><img src="/gatotkaca-test1/assets/img/terbarutest.png"></img></swiper-slide>
          <swiper-slide><img src="/gatotkaca-test1/assets/img/terbarutest.png"></img></swiper-slide>
          <swiper-slide><img src="/gatotkaca-test1/assets/img/terbarutest.png"></img></swiper-slide>
          <swiper-slide><img src="/gatotkaca-test1/assets/img/terbarutest.png"></img></swiper-slide>
          <swiper-slide><img src="/gatotkaca-test1/assets/img/terbarutest.png"></img></swiper-slide>
          <swiper-slide><img src="/gatotkaca-test1/assets/img/terbarutest.png"></img></swiper-slide>
        </swiper-container>
      </div>
    </section>
    <!-- End Slider -->

    <!-- Galeri -->

    <section id="portfolio" class="portfolio">

      <div class="container">
        <div class="section-title">
          <h2>GALERI</h2>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Makanan</li>
              <li data-filter=".filter-card">Minuman</li>
              <li data-filter=".filter-web">Dessert</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">


          <?php while ($row = mysqli_fetch_assoc($query1)): ?>
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <img src="Album/<?= $row['Gambar'] ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>
                  <?= $row['Judul']; ?>
                </h4>
                <p>
                  <?= $row['Kategori']; ?>
                </p>
                <a href="Album/<?= $row['Gambar'] ?>" data-gallery="portfolioGallery"
                  class="portfolio-lightbox preview-link" title=<?= $row['Judul']; ?>><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          <?php endwhile; ?>

          <?php while ($row = mysqli_fetch_assoc($query2)): ?>
            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <img src="Album/<?= $row['Gambar'] ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>
                  <?= $row['Judul']; ?>
                </h4>
                <p>
                  <?= $row['Kategori']; ?>
                </p>
                <a href="Album/<?= $row['Gambar'] ?>" data-gallery="portfolioGallery"
                  class="portfolio-lightbox preview-link" title=<?= $row['Judul']; ?>><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          <?php endwhile; ?>

          <?php while ($row = mysqli_fetch_assoc($query3)): ?>
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <img src="Album/<?= $row['Gambar'] ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>
                  <?= $row['Judul']; ?>
                </h4>
                <p>
                  <?= $row['Kategori']; ?>
                </p>
                <a href="Album/<?= $row['Gambar'] ?>" data-gallery="portfolioGallery"
                  class="portfolio-lightbox preview-link" title=<?= $row['Judul']; ?>><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          <?php endwhile; ?>
        </div>

      </div>
    </section>
    <!-- End Galeri -->

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="social-links">
        <a href="https://www.linkedin.com/company/gatotkaca-unisi/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        <a href="https://www.instagram.com/gatotkaca_unisi/" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.tiktok.com/@gatotkaca_unisi/" class="tiktok"><i class="bx bxl-tiktok"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Gatotkaca</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer>

  <!-- End Footer -->
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script async src="//www.instagram.com/embed.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>