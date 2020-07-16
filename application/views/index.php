<!doctype html>
<html lang="en">
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script>

  </script>

  <meta charset="utf-8">
  <title>Login - Papan Tulis</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Setelah mendaftar di https://member.papantulis.net/ anda bisa login untuk akses member area disini">
  <!-- Begin loading animation -->
  <style>
    @keyframes hideLoader {
      0% {
        width: 100%;
        height: 100%;
      }

      100% {
        width: 0;
        height: 0;
      }
    }

    body>div.loader {
      position: fixed;
      background: whitesmoke;
      width: 100%;
      height: 100%;
      z-index: 1071;
      opacity: 0;
      transition: opacity .5s ease;
      overflow: hidden;
      pointer-events: none;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    body:not(.loaded)>div.loader {
      opacity: 1;
    }

    body:not(.loaded) {
      overflow: hidden;
    }

    body.loaded>div.loader {
      animation: hideLoader .5s linear .5s forwards;
    }

    .loading-animation {
      width: 40px;
      height: 40px;
      margin: 100px auto;
      background-color: #FB8122;
      border-radius: 100%;
      animation: pulse 1s infinite ease-in-out
    }

    @keyframes pulse {
      0% {
        -webkit-transform: scale(0);
        transform: scale(0)
      }

      100% {
        -webkit-transform: scale(1);
        transform: scale(1);
        opacity: 0
      }
    }
  </style>
  <script type="text/javascript">
    window.addEventListener("load", function() {
      document.querySelector('body').classList.add('loaded');
    });
  </script>
  <!-- End loading animation -->
  <link href="assets/css/cssku.css" rel="stylesheet" type="text/css" media="all" />
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,400i,600,700&amp;display=swap" rel="stylesheet">
</head>

<body>
  <div class="loader">
    <div class="loading-animation"></div>
  </div>

  <section class="row no-gutters p-0 bg-primary min-vh-100 true">
    <div class="col-lg-12">
      <section class="p-0 bg-gradient text-white">
        <div class="container min-vh-lg-100 d-flex flex-column justify-content-between text-center py-4 py-md-5">
          <a href="index.html" class="fade-page">
            <img src="assets/img/logos/jumpstart.svg" alt="Jumpstart" data-inject-svg class="bg-white">
          </a>
          <div class="row justify-content-center my-5">
            <div class="col-xl-7 col-lg-8">
              <h1 class="h2 text-center mb-lg-5">Masuk - أدخل</h1>
              <div class="card card-body shadow text-left text-dark">
              <form action="<?=base_url('welcome/validateLogin')?>" method="post">
                                <div class="form-group">
                                    <label class="label-font" for="
                                        exampleFormControlInput1">
                                        Email</label>
                                    <input type="text" value="<?=set_value('email');?>" class="form-control"
                                        name="email" autocomplete="off" id="email"
                                        placeholder="Masukan email mu disini ..">
                                        <small class="text-danger"></small>
                                </div>
                                <div class="form-group">
                                    <label class="label-font" for="
                                        exampleFormControlInput1">
                                        Password</label>
                                    <input type="password" name="password" class="form-control" id="password"
                                        placeholder="Masukan password mu disini ..">
                                    <small class="text-danger"></small>
                                </div>
                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Ingat saya.
                                    </label>
                                </div>
                                <p class="terms">Dengan login anda
                                    menyetujui
                                    <i>privasi dan persyaratan ketentuan
                                        hukum kami </i> .
                                    belum punya akun? daftar <a href=" <?=base_url('user/registration')?>">
                                        disini.</a>
                                </p>
                                <button class="btn btn-primary-2 btn-block">Masuk - أدخل</button>
                            </form>
                <!-- <form action="<?= base_url('welcome/validateLogin') ?>" method="post">
                  <div class="form-group">
                    <label class="label-font" for="exampleFormControlInput1">Email</label>
                    <input type="text" value="<?= set_value('email'); ?>" class="form-control" autocomplete="off" id="email" placeholder="Email Address - عنوان البريد الالكترونى">
                  
                  </div>
                  <div class="form-group">
                    <label class="label-font" for="exampleFormControlInput1">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password - كلمه السر">
                    <div class="text-right text-small mt-2"> <small class="text-danger"></small>
                      <a href="lupa.html">Lupa Password?</a>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox text-small">
                      <input type="checkbox" class="custom-control-input" id="defaultCheck1">
                      <label class="custom-control-label" for="defaultCheck1">Ingat saya lain kali</label>
                    </div>
                  </div>
                  <!-- <button class="btn btn-block btn-success btn-lg btn-icon icon-right" tabindex="4">
                    Masuk - أدخل
                  </button> -->
                  <!-- <button class="btn btn-primary-2 btn-block">Masuk - أدخل</button>  -->
                <!-- </form>  -->
              </div>
              <!-- <div class="text-center text-small mt-3">
              belum punya akun? daftar <strong><a href=" <?=base_url('user/registration')?>">disini.</a></strong>
              </div> -->
            </div>
          </div>
          <div>
            <a href="http://papantulis.net" class="btn btn-sm btn-light fade-page">Halaman utama</a>
          </div>
        </div>
      </section>
    </div>
  </section>

  <!-- form action="<?= base_url('welcome/validateLogin') ?>" method="post">
                                <div class="form-group">
                                    <label class="label-font" for="
                                        exampleFormControlInput1">
                                        Email</label>
                                    <input type="text" value="<?= set_value('email'); ?>" class="form-control"
                                        name="email" autocomplete="off" id="email"
                                        placeholder="Masukan email mu disini ..">
                                        <small class="text-danger"></small>
                                </div>
                                <div class="form-group">
                                    <label class="label-font" for="
                                        exampleFormControlInput1">
                                        Password</label>
                                    <input type="password" name="password" class="form-control" id="password"
                                        placeholder="Masukan password mu disini ..">
                                    <small class="text-danger"></small>
                                </div>
                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Ingat saya.
                                    </label>
                                </div>
                                <p class="terms">Dengan login anda
                                    menyetujui
                                    <i>privasi dan persyaratan ketentuan
                                        hukum kami </i> .
                                    belum punya akun? daftar <a href=" <?= base_url('user/registration') ?>">
                                        disini.</a>
                                </p>
                                <button class="btn btn-block font-weight-bold"
                                    style="background-color: #4dbf1c;color:white;font-size:18px;">Login
                                    Sekarang!</button>
                            </form> -->

  <a href="#top" class="btn btn-primary rounded-circle btn-back-to-top" data-smooth-scroll data-aos="fade-up" data-aos-offset="2000" data-aos-mirror="true" data-aos-once="false">
    <img src="assets/img/icons/interface/icon-arrow-up.svg" alt="Icon" class="icon bg-white" data-inject-svg>
  </a>
  <!-- Required vendor scripts (Do not remove) -->
  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/popper.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.js"></script>

  <!-- Sweetaler Flashdata -->
  <?php if ($this->session->flashdata('success-reg')) : ?>
    <script>
      Swal.fire({
        icon: 'success',
        title: 'Kamu berhasil daftar!',
        text: 'Sekarang kamu boleh login!',
        showConfirmButton: false,
        timer: 2500
      })
    </script>
  <?php endif; ?>


  <?php if ($this->session->flashdata('login-success')) : ?>
    <script>
      Swal.fire({
        icon: 'success',
        title: 'Kamu berhasil daftar!',
        text: 'Sekarang login yuk!',
        showConfirmButton: false,
        timer: 2500
      })
    </script>
  <?php endif; ?>


  <?php if ($this->session->flashdata('success-verify')) : ?>
    <script>
      Swal.fire({
        icon: 'success',
        title: 'Email Telah Diverifikasi!',
        text: 'Sekarang login yuk!',
        showConfirmButton: false,
        timer: 2500
      })
    </script>
  <?php endif; ?>


  <?php if ($this->session->flashdata('success-logout')) : ?>
    <script>
      Swal.fire({
        icon: 'success',
        title: 'Kamu berhasil logout!',
        text: 'Selamat tinggal, Sampai jumpa lagi!',
        showConfirmButton: false,
        timer: 2500
      })
    </script>
  <?php endif; ?>


  <?php if ($this->session->flashdata('fail-login')) : ?>
    <script>
      Swal.fire({
        icon: 'error',
        title: 'Gagal login!',
        text: 'Silahkan Periksa Kembali Email dan Password Kamu!',
        showConfirmButton: false,
        timer: 2500
      });
    </script>
  <?php endif; ?>


  <?php if ($this->session->flashdata('fail-email')) : ?>
    <script>
      Swal.fire({
        icon: 'error',
        title: 'Email Belum Diverifikasi!',
        text: 'Silahkan Cek Email Kamu Dahulu!',
        showConfirmButton: false,
        timer: 2500
      })
    </script>
  <?php endif; ?>


  <?php if ($this->session->flashdata('fail-pass')) : ?>
    <script>
      Swal.fire({
        icon: 'error',
        title: 'Password Salah!',
        text: 'Silahkan Periksa Kembali Password Kamu!',
        showConfirmButton: false,
        timer: 2500
      });
    </script>
  <?php endif; ?>


  <?php if ($this->session->flashdata('not-login')) : ?>
    <script>
      Swal.fire({
        icon: 'error',
        title: 'Harap Login Terlebih Dahulu !',
        text: 'Silahkan Login Dahulu !',
        showConfirmButton: false,
        timer: 2500
      });
    </script>
  <?php endif; ?>

  <?php if ($this->session->flashdata('false-login')) : ?>
    <script>
      $("#exampleModalCenter").modal("show")
    </script>
  <?php endif; ?>
  <!-- 
             This appears in the demo only.  This script ensures our demo countdowns are always showing a date in the future 
             by altering the date before the countdown is initialized 
        -->
  <!-- <script type="text/javascript">
      (($) => {
            var now             = new Date;
            var day             = 864e5;
            var weeksToAdd      = 2;
            var tenWeeksFromNow = new Date(+now + day * 7 * weeksToAdd).toISOString().slice(0,10).replace(/\-/g, 'index-2.html');
            $('[data-countdown-date].add-countdown-time').attr('data-countdown-date', tenWeeksFromNow);
          })(jQuery);
    </script> -->

  <script src="<?= base_url('assets/') ?>js/stellar.js"></script>
  <script src="<?= base_url('assets/') ?>vendors/lightbox/simpleLightbox.min.js"></script>
  <script src="<?= base_url('assets/') ?>vendors/nice-select/js/jquery.nice-select.min.js"></script>
  <script src="<?= base_url('assets/') ?>vendors/isotope/imagesloaded.pkgd.min.js"></script>
  <script src="<?= base_url('assets/') ?>vendors/isotope/isotope.pkgd.min.js"></script>
  <script src="<?= base_url('assets/') ?>vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="<?= base_url('assets/') ?>vendors/popup/jquery.magnific-popup.min.js"></script>
  <script src="<?= base_url('assets/') ?>js/jquery.ajaxchimp.min.js"></script>
  <script src="<?= base_url('assets/') ?>vendors/counter-up/jquery.waypoints.min.js"></script>
  <script src="<?= base_url('assets/') ?>vendors/counter-up/jquery.counterup.js"></script>
  <script src="<?= base_url('assets/') ?>js/mail-script.js"></script>
  <script src="<?= base_url('assets/') ?>js/theme.js"></script>

  <!-- Optional Vendor Scripts (Remove the plugin script here and comment initializer script out of index.js if site does not use that feature) -->

  <!-- AOS (Animate On Scroll - animates elements into view while scrolling down) -->
  <script type="text/javascript" src="assets/js/aos.js"></script>
  <!-- Clipboard (copies content from browser into OS clipboard) -->
  <script type="text/javascript" src="assets/js/clipboard.min.js"></script>
  <!-- Fancybox (handles image and video lightbox and galleries) -->
  <script type="text/javascript" src="assets/js/jquery.fancybox.min.js"></script>
  <!-- Flatpickr (calendar/date/time picker UI) -->
  <script type="text/javascript" src="assets/js/flatpickr.min.js"></script>
  <!-- Flickity (handles touch enabled carousels and sliders) -->
  <script type="text/javascript" src="assets/js/flickity.pkgd.min.js"></script>
  <!-- Ion rangeSlider (flexible and pretty range slider elements) -->
  <script type="text/javascript" src="assets/js/ion.rangeSlider.min.js"></script>
  <!-- Isotope (masonry layouts and filtering) -->
  <script type="text/javascript" src="assets/js/isotope.pkgd.min.js"></script>
  <!-- jarallax (parallax effect and video backgrounds) -->
  <script type="text/javascript" src="assets/js/jarallax.min.js"></script>
  <script type="text/javascript" src="assets/js/jarallax-video.min.js"></script>
  <script type="text/javascript" src="assets/js/jarallax-element.min.js"></script>
  <!-- jQuery Countdown (displays countdown text to a specified date) -->
  <script type="text/javascript" src="assets/js/jquery.countdown.min.js"></script>
  <!-- jQuery smartWizard facilitates steppable wizard content -->
  <script type="text/javascript" src="assets/js/jquery.smartWizard.min.js"></script>
  <!-- Plyr (unified player for Video, Audio, Vimeo and Youtube) -->
  <script type="text/javascript" src="assets/js/plyr.polyfilled.min.js"></script>
  <!-- Prism (displays formatted code boxes) -->
  <script type="text/javascript" src="assets/js/prism.js"></script>
  <!-- ScrollMonitor (manages events for elements scrolling in and out of view) -->
  <script type="text/javascript" src="assets/js/scrollMonitor.js"></script>
  <!-- Smooth scroll (animation to links in-page)-->
  <script type="text/javascript" src="assets/js/smooth-scroll.polyfills.min.js"></script>
  <!-- SVGInjector (replaces img tags with SVG code to allow easy inclusion of SVGs with the benefit of inheriting colors and styles)-->
  <script type="text/javascript" src="assets/js/svg-injector.umd.production.js"></script>
  <!-- TwitterFetcher (displays a feed of tweets from a specified account)-->
  <script type="text/javascript" src="assets/js/twitterFetcher_min.js"></script>
  <!-- Typed text (animated typing effect)-->
  <script type="text/javascript" src="assets/js/typed.min.js"></script>
  <!-- Required theme scripts (Do not remove) -->
  <script type="text/javascript" src="assets/js/theme.js"></script>
  <!-- This script appears only on the demo.  It is used to delay unnecessary image loading until after the main page content is loaded. -->
  <script type="text/javascript">
    window.addEventListener("load", function() {
      setTimeout(function() {
        const delayedImages = document.querySelectorAll('[data-delay-src]');
        theme.mrUtil.forEach(delayedImages, (index, elem) => {
          const source = elem.getAttribute('data-delay-src');
          elem.removeAttribute('data-delay-src');
          elem.setAttribute('src', source);
        });
      }, 500);
    });
  </script>

  <script type="text/javascript">
    // This script appears only in the demo - it disables forms with no action attribute to prevent 
    // navigating away from the page.
    jQuery("form:not([action])").on('submit', function() {
      return false;
    });
  </script>

</body>


<!-- Mirrored from jumpstart.mediumra.re/account-sign-in-cover.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Jun 2020 05:02:43 GMT -->

</html>