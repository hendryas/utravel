<div class="boxed_wrapper">
  <?php
  // $uri = $_SERVER['REQUEST_URI'];
  // $parsed_url = parse_url($uri);
  // echo $parsed_url;
  ?>
  <!-- preloader -->
  <div class="loader-wrap">
    <div class="preloader">
      <div class="preloader-close">x</div>
      <div id="handle-preloader" class="handle-preloader home-1">
        <div class="loading">
          <div class="pre-plane">
            <img src="<?= base_url('assets/traveler/images/shape/plan-shape.png'); ?>" alt="plane">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- preloader end -->

  <!-- main header -->
  <header class="main-header style-one">

    <div class="header-lower">
      <div class="header_bottom p_relative">
        <div class="auto_container">
          <div class="outer-box">
            <div class="logo-box">
              <figure class="logo"><a href="<?= base_url(); ?>"><img src="<?= base_url('assets/images/logo/UTRAVEL-01.svg') ?>" alt=""></a></figure>
            </div>
            <div class="menu-area">
              <!--Mobile Navigation Toggler-->
              <div class="mobile-nav-toggler">
                <i class="icon-bar"></i>
                <i class="icon-bar"></i>
                <i class="icon-bar"></i>
              </div>
              <nav class="main-menu navbar-expand-md navbar-light">
                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                  <ul class="navigation clearfix">
                    <li><a href="<?= base_url() ?>">Home </a></li>
                    <li><a href="<?= base_url('about') ?>">About </a></li>
                    <li><a href="<?= base_url('contact') ?>">Contact </a></li>
                  </ul>
                </div>
              </nav>
            </div>
            <div class="header__right">
              <div class="header-right-search">
                <!-- <div class="header-scarce">
                  <button class="btn primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                    <i class="flaticon-search"></i>
                  </button>
                </div> -->
              </div>
              <div class="header-right-option">
                <!-- <select>
                  <option value="">Usd</option>
                  <option value="">Uro</option>
                  <option value="">Bdt</option>
                </select> -->
              </div>
              <div class="header-right-option">
                <!-- <select>
                  <option value="">Eng</option>
                  <option value="">Spanish</option>
                  <option value="">Chinish</option>
                </select> -->
              </div>
              <div class="header__right__button">
                <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="flaticon-menu-1"></i></button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                  <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasRightLabel">
                      <img src="<?= base_url('assets/images/logo/UTRAVEL-01.svg') ?>" alt="logo">
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                    <div class="offcanvas-container">
                      <div class="blog-icon">
                        <img src="<?= base_url('assets/traveler/images/icons/blog-icon.png'); ?>" alt="icon">
                      </div>
                      <p>“ Utravel adalah sebuah platform online yang dirancang khusus untuk membantu para wisatawan mencari destinasi wisata yang sesuai dengan anggaran mereka. Kami memahami betapa pentingnya perencanaan liburan yang tepat dengan mempertimbangkan keterbatasan keuangan, dan itulah mengapa kami hadir untuk memberikan solusi yang efisien. ”</p>
                      <div class="banner-media">
                        <ul>
                          <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                          <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                          <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                          <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--sticky Header-->
    <div class="sticky-header">
      <div class="auto_container">
        <div class="outer-box">
          <div class="logo-box">
            <figure class="logo"><a href="<?= base_url(); ?>"><img src="<?= base_url('assets/images/logo/UTRAVEL-01.svg') ?>" alt=""></a></figure>
          </div>
          <div class="menu-area">
            <nav class="main-menu clearfix">
              <!--Keep This Empty / Menu will come through Javascript-->
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- main-header end -->

  <!-- search popup start-->
  <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop">
    <div class="offcanvas-header">
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"><i class="flaticon-add"></i></button>
    </div>
    <div class="offcanvas-body">
      <form>
        <input type="search" placeholder="Search...">
        <i class="flaticon-search"></i>
      </form>
    </div>
  </div>
  <!-- search popup end-->

  <!-- Mobile Menu  -->
  <div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><i class="fas fa-times"></i></div>
    <nav class="menu-box">
      <div class="nav-logo"><a href="index.html"><img src="<?= base_url('assets/images/logo/UTRAVEL-01.svg') ?>" alt="logo"></a></div>
      <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
      <div class="contact-info">
        <h4>Contact Info</h4>
        <ul>
          <li>Chicago 12, Melborne City, USA</li>
        </ul>
      </div>
      <div class="social-links">
        <div class="banner-media">
          <ul>
            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <!-- End Mobile Menu -->

  <!-- common banner -->
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <section class="common-banner mt-5">
    <div class="common-banner-image" style="background: url(<?php echo base_url() ?>assets/images/img_wisata/<?php echo $wisata['gambar_wisata']; ?>);"></div>

    <div class="common-banner-title">
      <h3><?php echo $wisata['lokasi_wisata'] ?>/<?php echo $wisata['nama_wisata'] ?></h3>
    </div>
  </section>
  <!-- common banner -->

  <!-- tour package details -->
  <section class="package-details">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="package-details-left-container">
            <div class="package-tab">
              <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true"><i class="fa-solid fa-circle-info"></i> Detail Wisata</button>
                  <button class="nav-link" id="nav-image-tab" data-bs-toggle="tab" data-bs-target="#nav-image" type="button" role="tab" aria-controls="nav-image" aria-selected="true"><i class="fa-solid fa-circle-info"></i> Image Wisata</button>
                </div>
              </nav>
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                  <div class="pkg-nav-contant">
                    <div class="nav-info">
                      <p>Rp <?php echo number_format($wisata['harga_tiket']) ?> / <span>per orang</span></p>
                    </div>
                    <div class="nav-list">
                      <ul class="tour-nav-info">
                        <li><i class="fa-solid fa-book-open"></i> Lokasi : <?php echo $wisata['lokasi_wisata']; ?></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade show" id="nav-image" role="tabpanel" aria-labelledby="nav-image-tab" tabindex="0">
                  <div class="pkg-nav-contant">
                    <div class="nav-info">
                      <div class="row">
                        <div class="col-lg-12 offset-lg-1">
                          <div class="row">
                            <?php foreach ($image_detail as $imgdetail) : ?>
                              <div class="col-lg-6">
                                <div class="about-right-image about-right-image-bottom">
                                  <img src="<?= base_url('assets/images/img_wisata/image_detail/') . $imgdetail['image_detail'] ?>" alt="photo">
                                </div>
                              </div>
                            <?php endforeach; ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="nav-list">
                      <ul class="tour-nav-info">
                        <li><i class="fa-solid fa-book-open"></i> Lokasi : <?php echo $wisata['lokasi_wisata']; ?></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="pkg-common-title">
              <h4><?php echo $wisata['nama_wisata']; ?></h4>
            </div>
            <P><?php echo $wisata['keterangan_wisata']; ?></P>

            <div class="pkg-common-title" style="margin-top: 30px;">
              <h4>Alamat</h4>
            </div>
            <P><?php echo $wisata['alamat_wisata']; ?></P>

            <div class="pkg-list-info">
              <ul>
                <li>
                  <h6>Souvenir :</h6> <span><?php echo $wisata['souvenir_wisata']; ?></span>
                </li>
                <li>
                  <h6>Tempat Makan :</h6> <span><?php echo $wisata['tempat_makan']; ?></span>
                </li>
                <li>
                  <h6>Map :</h6> <span> <i class="fa-solid fa-map-marker"></i> <a href="<?php echo $wisata['link_lokasi_wisata']; ?>" target="_blank">Link Lokasi</a> </span>
                </li>

              </ul>
            </div>

            <div id="accordion">
              <h4><?php echo count($jml_ulasan_wisata); ?> Komentar</h4>

              <?php if (count($jml_ulasan_wisata) == 0) : ?>
                <div class="card-footer">
                  <div class="card-footer-right">
                    <h5>Belum Ada Ulasan</span></h5>
                  </div>
                </div>
              <?php endif; ?>

              <div class="card">
                <?php foreach ($jml_ulasan_wisata as $ulasan) : ?>
                  <div class="card-footer">

                    <div class="card-footer-left">
                      <!-- <img src="assets/images/gallery/comments-01.png" alt=""> -->
                    </div>
                    <div class="card-footer-right">
                      <h5><?php echo $ulasan['nama_customer'] ?> <span><?php echo $ulasan['created_date'] ?></span></h5>
                      <p><?php echo $ulasan['ulasan_wisata'] ?></p>
                    </div>

                  </div>
                <?php endforeach; ?>
                <div class="card-body">
                  <div class="coment-title">
                    <h4>Post Comment </h4>
                  </div>
                  <div class="destination-form-container">
                    <form method="post" action="<?= base_url('postcommentwisata/postComment') ?>">
                      <div class="row">
                        <div class="col-6">
                          <input type="text" placeholder="Your name" name="nama">
                          <input type="text" name="id_wisata" value="<?= $wisata['id_wisata']; ?>" hidden>
                        </div>
                        <div class="col-6">
                          <input type="text" placeholder="Your email" name="email">
                        </div>
                      </div>
                      <div class="row" style="margin-top: 120px;">
                        <div class="col-12">
                          <div class="container">
                            <div class="row">
                              <div class="col-6">
                                <label for="rating">Rating</label>
                              </div>
                              <div class="col-6">
                                <div class="starrating risingstar d-flex justify-content-center flex-row-reverse">
                                  <input type="radio" id="star5" class="star5" name="rating" value="5" /><label for="star5" title="5 star"></label>
                                  <input type="radio" id="star4" class="star4" name="rating" value="4" /><label for="star4" title="4 star"></label>
                                  <input type="radio" id="star3" class="star3" name="rating" value="3" /><label for="star3" title="3 star"></label>
                                  <input type="radio" id="star2" class="star2" name="rating" value="2" /><label for="star2" title="2 star"></label>
                                  <input type="radio" id="star1" class="star1" name="rating" value="1" /><label for="star1" title="1 star"></label>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12">
                          <textarea placeholder="Write your Question" name="komen"></textarea>
                        </div>
                      </div>
                      <button type="submit" class="submit">Send now</button>
                    </form>
                  </div>
                </div>
              </div>

            </div>

            <br>
            <br>
            <br>
            <br>

            <div class="pkg-common-title" style="margin-bottom: 50px; margin-top: 80px;">
              <h4>Wisata Lainnya :</h4>
            </div>

            <div class="row">
              <?php foreach ($data_wisata as $wisata) : ?>
                <div class="col-lg-6 col-md-6">
                  <div class="tour-package-container">
                    <div class="activities-image">
                      <a href="<?= base_url('utravel/detailwisata/') . $wisata['id_wisata']; ?>"><img src="<?= base_url('assets/images/img_wisata/') . $wisata['gambar_wisata']; ?>" alt="photo"></a>
                    </div>
                    <div class="activities-content">
                      <div class="tour-package-info">
                        <div class="rating">
                          <p><i class="fa-solid fa-star"></i> 4.45 (313 Reviews) </p>
                        </div>
                        <div class="doller">
                          Dari <span>Rp <?php echo number_format($wisata['harga_tiket']) ?></span>
                        </div>
                      </div>
                      <a href="<?= base_url('utravel/detailwisata/') . $wisata['id_wisata']; ?>"><?php echo $wisata['nama_wisata'] ?></a>
                      <ul>
                        <li><i class="flaticon-placeholder"></i> <?php echo $wisata['lokasi_wisata']; ?></li>
                      </ul>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>


      </div>
    </div>
  </section>
  <!-- tour package details -->

  <!--footer -->
  <footer class="main__footer p_relative">
    <div class="footer-location1 footer-location">
      <i class="fa-solid fa-location-dot"></i>
    </div>
    <div class="footer-location2 footer-location">
      <i class="fa-solid fa-location-dot"></i>
    </div>
    <div class="footer-location3 footer-location">
      <i class="fa-solid fa-location-dot"></i>
    </div>
    <div class="footer-location4 footer-location">
      <i class="fa-solid fa-location-dot"></i>
    </div>
    <div class="footer-location5 footer-location">
      <i class="fa-solid fa-location-dot"></i>
    </div>
    <div class="footer__middle  p_relative d_block">
      <div class="container">
        <div class="footer__middle__content">
          <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12 footer_column">
              <div class="footer_widget left">
                <div class="footer__logo">
                  <figure>
                    <img src="<?= base_url('assets/images/logo/UTRAVEL-01.svg') ?>" alt="">
                  </figure>
                </div>
                <div class="widget_content">
                  <!-- <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantiumtheresr doloremque laudantium, totam rem aperiam.</p> -->
                </div>
                <!-- <div class="banner-media footer-media">
                    <p>Social Network:</p>
                    <ul>
                      <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                      <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                      <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                    </ul>
                  </div> -->
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 footer_column">
              <div class="footer_widget links_widget ml_100">
                <div class="widget_title">
                  <h4>About Travel</h4>
                </div>
                <div class="widget_content">
                  <ul class="links_list clearfix">
                    <li><a href="<?= base_url('about') ?>">About</a></li>
                    <li><a href="<?= base_url('contact') ?>">Contact</a></li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="col-lg-5 col-md-6 col-sm-12 footer_column">
              <div class="footer-align">
                <div class="footer_widget links_widget">
                  <div class="widget_title">
                    <h4>Recent Post</h4>
                  </div>
                  <div class="widget_content">
                    <div class="footer-recent-post">
                      <?php foreach ($data_blogpost_footer as $blog_footer) : ?>
                        <div class="footer-recent-content">
                          <div class="footer-recent-image">
                            <img src="<?= base_url('assets/images/blog_post/') . $blog_footer['image_post'] ?>" alt="img">
                          </div>
                          <div class="footer-info">
                            <ul>
                              <li><i class="fa-regular fa-user"></i> <?php echo $blog_footer['author_post']; ?></li>
                              <?php
                              $dateString = $blog_footer['tanggal_post'];
                              $newDateFormat = date("d-m-Y", strtotime($dateString));
                              ?>
                              <li><i class="fa-regular fa-calendar"></i> <span> <?php echo $newDateFormat; ?></span></li>
                            </ul>
                            <a href="<?= base_url('detailblog/blogdetail/') . $blog_footer['id_blog_post'] ?>"><?php echo $blog_footer['judul_post']; ?></a>
                          </div>
                        </div>
                      <?php endforeach; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer_bottom p_relative">
      <div class="auto_container">
        <div class="bottom_inner  p_relative">
          <div class="copyright">
            <p> © 2023 Utravel</p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- main-footer end -->

</div>

<script>
  function hanyaAngka(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))

      return false;
    return true;
  }
</script>

<script>
  $(document).ready(function() {

    // load_data();

    // function load_data() {
    //   $.ajax({
    //     url: "</?php echo base_url(); ?>star_rating/fetch",
    //     method: "POST",
    //     success: function(data) {
    //       $('#business_list').html(data);
    //     }
    //   })
    // }

    $(document).on('mouseenter', '.rating', function() {
      var index = $(this).data('index');
      var business_id = $(this).data('business_id');
      remove_background(business_id);
      for (var count = 1; count <= index; count++) {
        $('#' + business_id + '-' + count).css('color', '#ffcc00');
      }
    });

    function remove_background(business_id) {
      for (var count = 1; count <= 5; count++) {
        $('#' + business_id + '-' + count).css('color', '#ccc');
      }
    }

    $(document).on('click', '.rating', function() {
      var index = $(this).data('index');
      var business_id = $(this).data('business_id');
      $.ajax({
        url: "<?php echo base_url(); ?>star_rating/insert",
        method: "POST",
        data: {
          index: index,
          business_id: business_id
        },
        success: function(data) {
          load_data();
          alert("You have rate " + index + " out of 5");
        }
      })
    });

    $(document).on('mouseleave', '.rating', function() {
      var index = $(this).data('index');
      var business_id = $(this).data('business_id');
      var rating = $(this).data('rating');
      remove_background(business_id);
      for (var count = 1; count <= rating; count++) {
        $('#' + business_id + '-' + count).css('color', '#ffcc00');
      }
    });

  });
</script>