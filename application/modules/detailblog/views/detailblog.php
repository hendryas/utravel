<div class="boxed_wrapper">

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
     <!-- common banner -->
     <section class="common-banner">
            <div class="common-banner-image" style="background: url(<?= base_url() ?>assets/images/blog_post/<?php echo $blog['image_post']?>);"></div>

            <div class="common-banner-title">
                <h3><?php echo $blog['judul_post']?></h3>
            </div>
        </section>
        <!-- common banner -->

       

        <!-- destination details -->
        <section class="destination-details">
        <div class="pkg-common-title" style="margin-left:100px; margin-bottom:50px;">
                                <h4><?php echo $blog['judul_post']?></h4>
                            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="destination-details-left-container">
                           <div class="blog-details-image">
                                <a href="blog.html"><img src="<?= base_url() ?>assets/images/blog_post/<?= $blog['image_post'] ?>" alt="image"></a>
                            </div>
                            <div class="footer-info blog-details-info">
                                <ul>
                                    <li><i class="fa-regular fa-user"></i> <?php echo $blog['author_post']?></li>
                                    <?php
                                      $dateString = $blog['tanggal_post'];
                                      $newDateFormat = date("d-m-Y", strtotime($dateString));
                                      ?>
                                    <li><i class="fa-regular fa-calendar"></i> <span> <?php echo $newDateFormat; ?></span></li>
                                </ul>
                            </div>
                            <p><?php echo $blog['keterangan_post']?></p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- destination details -->

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
                  <h4>Utravel</h4>
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
                      <?php foreach($data_blogpost_footer as $blog_footer): ?>
                      <div class="footer-recent-content">
                        <div class="footer-recent-image">
                          <img src="<?= base_url('assets/images/blog_post/') . $blog['image_post'] ?>" alt="img">
                        </div>
                        <div class="footer-info">
                          <ul>
                            <li><i class="fa-regular fa-user"></i> <?php echo $blog_footer['author_post']; ?></li>
                            <?php
                            $dateString = $blog_footer['tanggal_post'];
                            $newDateFormat = date("d-m-Y", strtotime($dateString));
                            ?>
                            <li><i class="fa-regular fa-calendar"></i> <span> <?php echo $newDateFormat;?></span></li>
                          </ul>
                          <a href="<?= base_url('detailblog/blogdetail/') . $blog_footer['id_blog_post'] ?>"><?php echo $blog_footer['judul_post']; ?></a>
                        </div>
                      </div>
                      <?php endforeach;?>
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