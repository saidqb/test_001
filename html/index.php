<?php require_once 'inc/inc.php' ?>
<!doctype html>
  <html lang="en">
  <head>
    <title>niagahoster - penyedia hosting</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="niagahoster penyedia hosting">
    <title>Niagahoster</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <meta name="theme-color" content="#7952b3">

    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
  </head>
  <body>

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
      <symbol id="check" viewBox="0 0 16 16">
        <title>Check</title>
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
      </symbol>
    </svg>

    <header id="header">
      <!-- Fixed navbar -->
      <nav id="nav_t1">
       <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="me-auto hightlight">
              Gratis Ebook 9 cara cerdas menggunakan domain
            </div>
          </div>
          <div class="col-md-6">
            <nav class="menu ms-auto navbar navbar-expand ">
              <ul class="navbar-nav ms-auto  mb-md-0">
                <li class="nav-item"><i class="fa fa-phone"></i><a href="#">0274-2885822</a></li>
                <li class="nav-item"><i class="fa fa-comments"></i><a href="#">Live Chat</a></li>
                <li class="nav-item"><i class="fa fa-user-circle"></i><a href="#">Member Area</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </nav>

    <nav id="nav_t2" class="navbar navbar-light navbar-expand-md text-dark">
      <div class="container">
        <div class="logo">
          <a class="navbar-brand" href="#"><img src="assets/images/niagahoster-logo.png" alt="niagahoster"></a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ms-auto mb-2 mb-md-0">
            <li class="nav-item"> <a class="nav-link" href="#">Hosting</a> </li>
            <li class="nav-item"> <a class="nav-link" href="#">Domain</a> </li>
            <li class="nav-item"> <a class="nav-link" href="#">Server</a> </li>
            <li class="nav-item"> <a class="nav-link" href="#">Website</a> </li>
            <li class="nav-item"> <a class="nav-link" href="#">Afiliasi</a> </li>
            <li class="nav-item"> <a class="nav-link" href="#">Promo</a> </li>
            <li class="nav-item"> <a class="nav-link" href="#">Pembayaran</a> </li>
            <li class="nav-item"> <a class="nav-link" href="#">Review</a> </li>
            <li class="nav-item"> <a class="nav-link" href="#">Kontak</a> </li>
            <li class="nav-item"> <a class="nav-link" href="#">Blog</a> </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main id="home">
    <section id="slide">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="slide_1">
              <p><b>PHP Hosting</b></p>
              <p>Cepat, handal, penuh dengan modul PHP yang Anda butuhkan</p>
            </div>
            <div class="slide_2">
              <ul>
                <li>Solusi PHP untuk permorma query yang lebih cepat.</li>
                <li>Konsumsi memori yang lebih rendah</li>
                <li>Support PHP 5.4, PHP 5.4, PHP 5.5, PHP 5.6, PHP 7</li>
                <li>Fitur enkripsi IonCube dan Zend Guard Loaders</li>
              </ul>
            </div>
          </div>
          <div class="col-md-6">
            <img class="img-fluid" src="assets/svg/illustration-banner-PHP-hosting-01.svg">
          </div>
        </div>
      </div>
    </section>
    
    <section id="support_app">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-3 ">
            <div class="wrap">
              <div class="box">
                <div><img src="assets/images/tools/zenguard.png" alt="zenguard"></div>
                <div>PHP Zend Guard Loader</div>
              </div>
            </div>
          </div>
          <div class="col-md-3 ">
            <div class="wrap">
              <div class="box">
                <div><img src="assets/images/tools/composer.png" alt="composer"></div>
                <div>Php Composer</div>
              </div>          
            </div>          
          </div>          
          <div class="col-md-3 ">
            <div class="wrap">
              <div class="box">
                <div><img src="assets/images/tools/ioncube.png" alt="ioncube"></div>
                <div>Php ionCube Loader</div>
              </div>         
            </div>         
          </div>
        </div>
      </div>
    </section>

    <section id="pricing">
      <div class="container">
        <div class="s_title text-center">
          <h2 class="st_1">Paket Hosting Singapura yang Tepat</h2>
          <div class="st_2">Diskon 40% Domain dan SSL Gratis untuk Anda</div>
        </div>
        <div class="content">
         <div class="row row-cols-1 row-cols-md-4 mb-3 text-center">
          <?php 
          $pricing = get_data('pricing');
          foreach ($pricing as $v) { 

              $sticky = $v['sticky'] ? 'sticky' : '';
            ?>

            <div class="col <?php echo $sticky ?>">
              <div class="card">
                <div class="card-header">
                  <h4 class="title"><?php echo $v['title'] ?></h4>
                </div>
                <div class="price_box">
                  <div class="price"><?php echo sq_price('Rp ', $v['price']) ?></div>
                  <div class="price_discount"><?php echo sq_price_discount('Rp ', $v['price_discount'])?>/bln</div>
                </div>
                <div class="user_use"><?php echo $v['list'][0] ?></div>
                <div class="card-body">
                  <ul class="list-unstyled mt-3 mb-4">
                    <?php 
                    foreach ($v['list'] as $key => $l) { ?>
                      <?php if($key == 0){
                        continue;
                      } else { ?>
                        <li><?php echo $l ?></li>
                      <?php }  ?>
                    <?php } ?>
                  </ul>

                  <a href="#" class="btn ">Pilih Sekarang</a>
                </div>
              </div>
              <div class="bestseller"></div>
            </div>
          <?php } ?>
        </div>
      </div>
    </section>

    <section id="featured_list">
      <div class="container">
        <div class="g_title text-center">
          <h2 class="gt1">Powerful dengan Limit PHP yang Lebih Besar</h2>
        </div>

        <div class="row justify-content-center">
          <div class="col-md-10">
            <div class="row">
              <?php 
              $php_module = get_data('featured_list');
              $arr = count_data_grid(2,$php_module);
              $x =0;
              foreach ($arr as $v) {
                $start = $v;
                $x++;
                $end = 1000;
                if(isset($arr[$x])){
                  $end = $arr[$x];
                }
                ?>
                <div class="col-md-6">
                  <div class="box">
                    <div class="list_item">
                      <ul>
                        <?php 
                        for ($i=$start; $i < $end; $i++) { 
                          if(!isset($php_module[$i])){
                            continue;
                          }
                          ?>
                          <li ><span><?php echo $php_module[$i] ?></span></li>
                          <?php 
                        } ?>
                      </ul>
                    </div>
                  </div>
                </div>
                <?php 
              } ?>
            </div>
          </div>
        </div>
      </div>
      <div class="sep"><div></div></div>
    </section>

    <section id="featured_img">
      <div class="container">
        <div class="g_title text-center">
          <h2 class="gt1">Smeua Paket Hosting sudah Termasuk</h2>
        </div>

        <div class="row">
          <?php foreach (get_data('featured_img') as $key => $v) { ?>
            <div class="col-md-4">
              <div class="box">
                <div class="box-img">
                  <img src="<?php echo $v['img']; ?>">
                </div>
                <div class="title"><?php echo $v['title']; ?></div>
                <div class="desc"><?php echo $v['desc']; ?></div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </section>

    <section id="support_fw">
      <div class="container">
        <div class="g_title text-center mb-5">
          <h2 class="gt1"> Mendukung Penuh Framework Larabel </h2>
        </div>

        <div class="row">
          <div class="col-md-6">

            <div class="desc mb-4">
              Tak perlu menggunakan dedicated server ataupun VPS yang mahal. Layanan PHP hosting murah kami mendukung penuh framework favorit Anda
            </div>
            <div class="list_ok mb-4">
              <ul>
                <li>Install Laravel <b>1 klik</b> dengan Softaculous Installer.</li>
                <li>Mendukun ekstensi <b>PHP MCrypt, phar, mbstring, json</b> dan <b>fileinfo.</b></li>
                <li>Tersedia Composer dan SSH untuk menginstal pakeages pilihan Anda.</li>
              </ul>
            </div>
            <div class=" mb-4">
              <small class="note">Nb. <b>Composer</b> dan <b>SSH</b> hanya tersedia pada paket Personal dan Bisnis</small>
            </div>
            <div class="sfwbtn mb-4">
              <a href="#" class="btn btn-cta">Pilih Hosting Anda</a>
            </div>
          </div>
          <div class="col-md-6">
            <img class="img-fluid" src="assets/svg/illustration-banner-support-laravel-hosting.svg">

          </div>
        </div>
      </div>
    </section>

    <section id="module">
      <div class="container">
        <div class="g_title text-center">
          <h2 class="gt1"> Modul Lengkap untuk Menjalankan Aplikasi PHP Anda.</h2>
        </div>

        <div class="m1">
          <div class="row justify-content-center">
            <div class="col-md-10">
              <div class="row">
                <?php 
                $php_module = get_data('php_module');
                $arr = count_data_grid(4,$php_module);
                $x =0;
                foreach ($arr as $v) {
                  $start = $v;
                  $x++;
                  $end = 1000;
                  if(isset($arr[$x])){
                    $end = $arr[$x];
                  }
                  ?>
                  <div class="col-md-3 col-sm-3 module-m">
                    <div class="m1l">
                      <ul>
                        <?php 
                        for ($i=$start; $i < $end; $i++) { 
                          if(!isset($php_module[$i])){
                            continue;
                          }
                          ?>
                          <li ><?php echo $php_module[$i] ?></li>
                          <?php 
                        } ?>
                      </ul>
                    </div>
                  </div>
                  <?php 
                } ?>
              </div>
            </div>
          </div>
        </div>

        <div class="m2">
          <a href="#" class="btn">Lihat Selengkapnya</a>
        </div>
      </div>
    </section>

    <section id="cta1">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="c1">

              <h3 class="mb-3">Linux Hosting yang Stabil dengan Teknologi LVE</h3>

              <p>SuperMicro Intel Xeon 24-Cores server dengan RAM 128 GB dan teknologi LVE CloudLinuk untuk stabilitas server Anda. Dilengkapi dengan SSD untuk kecepatan MySQL dan caching, Apache load balancer berbasis LiteSpeed Technologies, CagesFS scurity, Raid-10 protection dan auto backup untuk kamanan website PHP Anda.</p>

            </div>
            <div class="c2">
              <a href="#" class="btn btn-cta">Pilih Hosting Anda</a>
            </div>


          </div>
          <div class="col-md-6">
            <img class="img-fluid" src="assets/images/image-support.png">
          </div>
        </div>
      </div>
    </section>

    <section id="cta_share">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ">
            <div class="cs1 align-middle">
              <div class=" ">Bagikan jika anda menyukai halaman ini.</div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="text-end text-sm-center">
              <a class="btn"><i class="fa fa-comments"></i> Live Chat</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="cta2">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            Perlu <b>BANTUAN?</b> Hubungi Kami : <b>0274-5305505</b>
          </div>
          <div class="col-md-4">

          </div>
        </div>
      </div>
    </section>
  </main>

  <footer id="footer">
    <div id="footer_menu">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="footer_widget">
              <h3 class="fw1">Hubungi Kami</h3>
              <div class="fw2">
                <p>Telepon: 0274-2885822<br/>
                Whatsapp: 0895395186038</p>
                <p>Jl. Palagan Tentara Pelajar No. 81 Jongkang, Sariharjo, Ngaglik, Sleman, Daerah Istimewa Yogyakarta, 55581</p>

              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="footer_widget">
              <h3 class="fw1">Layanan</h3>
              <div class="fw2">
                <ul>
                  <li><a href="#">Domain</a></li>
                  <li><a href="#">Shared Hosting</a></li>
                  <li><a href="#">Cloud VPS</a></li>
                  <li><a href="#">Managed VPS Hosting</a></li>
                  <li><a href="#">Web Builder</a></li>
                  <li><a href="#">Keamanan SSL/HTTPS</a></li>
                  <li><a href="#">Jasa Pembuatan Website</a></li>
                  <li><a href="#">Program Affiliasi</a></li>
                </ul>

              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="footer_widget">
              <h3 class="fw1">Service Hosting</h3>
              <div class="fw2">
                <ul>
                  <li><a href="#">Hosting Murah</a></li>
                  <li><a href="#">Hosting Indonesia</a></li>
                  <li><a href="#">Hosting Singapura SG</a></li>
                  <li><a href="#">Hosting PHP</a></li>
                  <li><a href="#">Hosting Wordpress</a></li>
                  <li><a href="#">Hosting Laravel</a></li>
                </ul>

              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="footer_widget">
              <h3 class="fw1">Tutorial</h3>
              <div class="fw2">
                <ul>
                  <li><a href="#">Knowledgebase</a></li>
                  <li><a href="#">Blog</a></li>
                  <li><a href="#">Cara Pembayaran</a></li>
                </ul>

              </div>
            </div>
          </div>


          <div class="col-md-3">
            <div class="footer_widget">
              <h3 class="fw1">Tentang Kami</h3>
              <div class="fw2">
                <ul>
                  <li><a href="#">Tim Niagahoster</a></li>
                  <li><a href="#">Karir</a></li>
                  <li><a href="#">Events</a></li>
                  <li><a href="#">Penawaran & Promo Spesial</a></li>
                  <li><a href="#">Kontak Kami</a></li>
                </ul>

              </div>
            </div>
          </div>


          <div class="col-md-3">
            <div class="footer_widget">
              <h3 class="fw1">Kenapa Pilih Niagahoster?</h3>
              <div class="fw2">
                <ul>
                  <li><a href="#">Support Terbaik</a></li>
                  <li><a href="#">Garansi Harga Termurah</a></li>
                  <li><a href="#">Domain Gratis Selamanya</a></li>
                  <li><a href="#">Datacenter Hosting Terbaik</a></li>
                  <li><a href="#">Review Pelanggan</a></li>
                </ul>

              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="footer_widget">
              <h3 class="fw1">Newsletter</h3>
              <div class="fw2">
                <ul>
                  <li><a href="#">search</a></li>
                </ul>

              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="footer_widget">
              <h3 class="fw1"></h3>
              <div class="fw2">
                <ul>
                  <li><a href="#">social media</a></li>
                </ul>

              </div>
            </div>
          </div>

        </div>

        <div id="footer_payment">
          <div class="footer_widget">
            <h3 class="fw1">Pembayaran</h3>
            <div class="fw2">
              <p>
                <img class="img-fluid" src="assets/images/payment.png">
              </p>
              <p>
                Aktivasi instan dengan e-Payment hosting dan domaain langsung Aktif!
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div id="copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            Copyright ©2021 Niagahoster | Hosting powered by PHP8, CloudLinux, CloudFlare, BitNinja and DC DCI-Indonesia | Cloud VPS Murah powered by Webuzo Softaculous, Intel SSD and cloud computing technology
          </div>
          <div class="col-md-4">

            <nav class="menu ms-auto navbar navbar-expand ">
              <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="#">Syarat dan Ketentuan</a></li>
                <li class="nav-item"><a href="#">Kebijakan Privasi </a></li>
              </ul>
            </nav>

          </div>
        </div>
      </div>
    </div>
  </footer>
</div>

<script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>

</body>
</html>
