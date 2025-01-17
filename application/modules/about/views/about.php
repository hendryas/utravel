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

   <!-- common banner -->
        <section class="common-banner" style="margin-top:200px;">
            <div class="common-banner-image" style="background: url(<?= base_url('assets/images/img_wisata/destination1.jpg') ?>);"></div>

            <div class="common-banner-title">
                <h3>Tentang Utravel</h3>
            </div>
        </section>
        <!-- common banner -->

         <!-- home two about -->
         <section class="home-two-about about-page">
            <div class="home2-about-icon1">
                <img src="<?= base_url('assets/traveler/images/icons/home2-about-icon1.png') ?>" alt="">
            </div>
            <div class="home2-about-icon2">
                <svg width="115" height="77" viewBox="0 0 115 77" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path id="book" d="M114.032 34.0846C107.812 29.2199 103.534 23.2143 98.6058 17.1611C93.7648 11.2189 88.5436 5.59366 83.0292 0.269439C82.5856 -0.158399 81.8646 -0.0633242 81.5477 0.45959C78.0061 6.26711 74.9795 12.4074 72.2857 18.6507C66.0108 17.8346 60.2112 15.1012 53.952 14.1504C51.9792 13.8494 50.87 13.9127 49.9589 14.5783C49.7687 14.5941 49.5944 14.6892 49.5073 14.8952C49.4994 14.919 49.4835 14.9506 49.4756 14.9744C49.4677 14.9903 49.4677 15.0061 49.4597 15.0299C49.222 15.2755 48.9923 15.5766 48.7546 15.9331C48.6674 15.9569 48.5724 15.9806 48.4852 16.0044C47.994 16.4956 47.5107 16.9868 47.0274 17.486C46.3856 18.1515 45.7518 18.825 45.1259 19.4984C43.5571 21.1939 42.0359 22.9211 40.5385 24.6879C38.0586 27.6115 35.3014 30.6618 33.5188 34.0766C27.743 32.0563 20.9926 32.2464 14.9632 32.286C11.6911 32.3098 8.42682 32.3811 5.15464 32.4207C3.01545 32.4445 1.78739 32.1434 0.226572 33.4586C0.218649 33.4586 0.226572 33.4666 0.218649 33.4666C0.0839594 33.419 -0.0824224 33.5696 0.0126529 33.7122C8.8705 48.0052 20.0022 61.2048 29.9614 74.7689C29.9614 74.7689 29.9614 74.7768 29.9693 74.7768C30.0802 74.9273 30.1911 75.0779 30.3021 75.2205C30.5873 75.6087 31.0627 75.6087 31.3875 75.4185C31.9738 76.2346 31.6886 75.7909 32.6948 76.1395C33.9545 76.5674 36.2284 75.9177 37.607 75.7988C39.5164 75.6325 41.4338 75.4502 43.3432 75.2601C49.6816 74.6421 56.0912 74.1271 62.39 73.1447C62.6277 73.105 62.7782 72.9704 62.8654 72.796C63.7686 72.289 64.3945 71.3541 65.0759 70.5776C66.7872 68.6444 68.4431 66.6716 70.1624 64.7543C73.4583 61.0939 76.9365 57.6078 80.2483 53.9632C80.4305 53.7651 80.4939 53.5512 80.4939 53.3531C84.3682 53.9711 88.3693 53.8919 92.2832 54.1454C94.874 54.3118 99.1524 55.5557 101.664 54.6763C101.91 54.9219 102.345 54.9615 102.631 54.5733C107.012 48.536 110.625 41.7223 114.182 35.1779C114.341 34.861 114.349 34.3381 114.032 34.0846ZM53.548 15.6241C55.7981 15.7271 58.2701 16.6065 60.4172 17.2325C64.3153 18.3813 68.0945 19.6648 72.1114 20.2115C72.2461 20.3858 72.46 20.4967 72.7453 20.4254C72.9037 20.3858 73.0622 20.3462 73.2206 20.3066C73.4187 20.259 73.5455 20.156 73.6406 20.0372C74.6309 21.2335 75.6292 22.4378 76.6275 23.6263C74.9478 23.3886 73.395 22.6834 71.7074 22.4616C69.9009 22.2318 68.142 22.1605 66.3594 21.9545C69.9405 22.7944 73.5059 23.7293 76.9603 24.0145C83.5442 31.8503 90.2787 39.5514 96.8152 47.4268C93.9074 48.1082 90.2787 47.6724 87.3789 47.712C83.98 47.7516 80.5731 48.2032 77.2138 48.7341C73.5613 43.9011 69.7504 39.1711 66.0504 34.3856C62.5009 29.7982 59.0544 25.092 55.4574 20.5205C56.63 20.465 57.8105 20.5046 58.999 20.6156C57.7868 20.4412 56.5745 20.3541 55.3861 20.4254C54.1501 18.8567 52.8983 17.3117 51.6227 15.7905C52.2011 15.6558 52.827 15.5845 53.548 15.6241ZM39.2471 74.3252C37.2188 74.5946 33.4792 75.8464 31.6331 75.1967C31.7757 74.9907 31.8153 74.7292 31.6094 74.4599C21.3491 60.9829 11.7941 46.4364 0.535567 33.7676C5.93109 33.0466 11.9684 33.6409 17.4194 33.7043C22.8862 33.7676 28.1153 34.6312 33.5267 35.2017C33.6931 35.2175 33.8199 35.17 33.907 35.0828C34.8578 36.4377 35.7927 37.8004 36.7117 39.1711C32.8453 39.3533 28.7412 38.5214 24.8194 38.6086C21.1669 38.6878 17.5461 38.9017 13.957 39.5593C13.759 39.2741 13.553 38.9889 13.3549 38.7036C13.3232 38.664 13.2598 38.6957 13.2836 38.7432C13.4579 39.0205 13.6401 39.2978 13.8144 39.5831C13.6005 39.6227 13.3866 39.6623 13.1727 39.7019C13.1489 39.7098 13.1568 39.7415 13.1806 39.7415C13.4103 39.7178 13.6401 39.694 13.8778 39.6702C20.4063 50.1047 27.735 60.1035 35.0954 69.9755C34.937 70.0072 34.7706 70.0389 34.6121 70.0706C34.5408 70.0864 34.5725 70.1894 34.6438 70.1736C34.8261 70.1419 35.0004 70.1102 35.1826 70.0785C35.6263 70.6727 36.062 71.2669 36.5057 71.8532C36.6325 72.0275 36.9256 71.8532 36.7989 71.6789C36.3869 71.1243 35.9749 70.5618 35.5629 70.0072C42.3925 68.8187 49.3488 68.2483 56.2497 67.5669C57.4619 69.0881 58.888 70.7757 60.3459 71.7581C55.7664 72.1543 51.1949 72.8119 46.6312 73.3665C44.1514 73.6676 41.7032 73.9924 39.2471 74.3252ZM37.0128 39.6068C40.7366 45.1767 44.2623 50.8574 47.9702 56.4669C50.0143 59.5647 52.1615 62.5992 54.5383 65.4515C54.9662 65.9585 55.4574 66.6003 55.9962 67.2817C49.1507 68.0027 42.2023 68.4939 35.4599 69.8962C28.0916 59.9609 21.1748 49.7324 14.0204 39.6465C17.8947 39.2265 21.7294 38.9492 25.6355 38.9096C29.4464 38.87 33.2494 39.7495 36.997 39.6148C37.0049 39.6148 37.0049 39.6068 37.0128 39.6068ZM66.7872 65.3564C66.296 65.9189 62.3662 69.7299 61.6294 71.6551C61.5264 71.6631 61.4313 71.671 61.3283 71.6789C60.4092 70.9896 58.7137 69.2386 57.0975 67.4956C57.1212 67.4956 57.1529 67.4877 57.1767 67.4877C57.3827 67.4639 57.3827 67.1391 57.1767 67.1628C57.0578 67.1787 56.939 67.1866 56.8202 67.2024C55.0137 65.2296 53.3657 63.3361 53.1281 63.0271C50.5769 59.739 48.2792 56.2609 46.0449 52.751C42.2102 46.7058 38.637 40.3516 34.0258 34.8452C34.0338 34.8214 34.0417 34.8055 34.0417 34.7897C34.0813 34.758 34.1209 34.7263 34.1526 34.6788C34.2635 34.5124 34.3745 34.3539 34.4854 34.1876C34.525 34.1242 34.4695 34.0449 34.4061 34.0449C35.856 34.037 38.0982 29.9963 38.946 28.9505C40.5385 26.9777 42.1786 25.0366 43.8661 23.135C45.3953 21.4078 46.9719 19.7203 48.5644 18.0485C49.1111 17.4781 49.9114 16.9076 50.3709 16.2025C50.672 16.0678 50.9889 15.9569 51.3137 15.8697C52.415 17.4226 53.5401 18.9517 54.6968 20.465C48.7388 26.225 43.0184 32.3653 37.6862 38.7116C37.6229 38.7829 37.7259 38.8859 37.7892 38.8146C43.4066 32.6901 49.0874 26.6608 54.8553 20.6789C58.0957 24.9336 61.4709 29.101 64.7352 33.316C68.7125 38.4659 72.5947 43.7109 76.6354 48.8212C76.5879 48.8291 76.5404 48.8371 76.5007 48.845C76.469 48.8529 76.477 48.9005 76.5087 48.9005C76.5641 48.8925 76.6275 48.8925 76.683 48.8846C76.7147 48.9242 76.7464 48.9638 76.778 49.0035C76.7305 48.9718 76.6592 48.9559 76.6037 49.0114C70.2099 55.0407 63.7606 61.0542 57.4381 67.1628C57.3589 67.2341 57.4778 67.3451 57.557 67.2817C64.2598 61.6564 70.7249 55.5082 76.8097 49.2174C76.8573 49.1698 76.8493 49.1144 76.8335 49.0668C77.7446 50.2157 78.6716 51.3566 79.5986 52.4975C79.4005 52.4975 79.1866 52.5609 78.9885 52.7352C74.5992 56.5857 70.6378 60.9433 66.7872 65.3564ZM100.84 53.8206C100.935 52.4579 82.031 52.2915 80.177 52.5292C80.1294 52.5371 80.0819 52.5529 80.0423 52.5688C79.1312 51.317 78.2121 50.0651 77.2772 48.8292C81.3337 48.4726 85.3744 47.8625 89.4548 48.0448C91.8633 48.1557 94.7156 48.3617 97.037 47.6962C98.5503 49.5264 100.064 51.3645 101.545 53.2105C101.197 53.1551 100.864 53.4403 100.84 53.8206ZM110.118 38.4105C107.281 43.2514 104.271 48.0844 101.902 53.1788C100.373 51.3249 98.8514 49.463 97.3302 47.6011C97.4569 47.5139 97.3935 47.2921 97.2192 47.3396C97.1875 47.3476 97.1559 47.3476 97.1321 47.3555C90.6907 39.4722 84.2415 31.5651 77.4753 23.959C77.5149 23.8798 77.4911 23.7689 77.396 23.7213C79.9551 19.3162 82.3241 14.7605 84.7485 10.2761C84.8198 10.1414 84.6217 10.0147 84.5346 10.1493C81.9359 14.5149 79.3926 19.0468 77.293 23.6738V23.6817C77.2693 23.6817 77.2455 23.6738 77.2217 23.6738C76.0729 22.3824 74.9082 21.1068 73.7356 19.8391C73.8228 19.5935 73.7673 19.3083 73.6009 19.0864C76.1363 13.2551 79.147 7.78039 82.5301 2.41656C90.2233 9.81658 96.9419 17.8425 103.518 26.2488C105.103 28.2691 106.774 30.1785 108.676 31.9137C109.302 32.4841 111.29 33.5696 111.568 34.3856C112.091 35.9227 110.855 37.1507 110.118 38.4105Z" fill="#094174" fill-opacity="0.6"/>
                </svg>
            </div>
            <div class="home2-about-icon3">
                <img src="<?= base_url('assets/traveler/images/icons/home2-about-icon3.png') ?>" alt="">
            </div>
            <div class="home-two-pattern-layer" style="background-image: url(assets/images/shape/home-about-map.png);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="common-title">
                            <!-- <h5>Destination</h5> -->
                            <h3>Tentang Utravel</h3>
                        </div>
                        <div class="home-two-about-content">
                            <p>Utravel adalah sebuah platform online yang dirancang khusus untuk membantu para wisatawan mencari destinasi wisata yang sesuai dengan anggaran mereka. Kami memahami betapa pentingnya perencanaan liburan yang tepat dengan mempertimbangkan keterbatasan keuangan, dan itulah mengapa kami hadir untuk memberikan solusi yang efisien.</p>
                        </div>
                        <br>
                        <div class="home-two-about-content">
                            <p>Dengan Utravel, Anda dapat dengan mudah mencari destinasi wisata yang cocok dengan budget Anda. Apakah Anda mencari liburan mewah dengan anggaran besar atau petualangan yang terjangkau, kami memiliki alat pencarian yang dirancang untuk memenuhi kebutuhan Anda. Dengan ribuan pilihan destinasi yang tersedia, Anda dapat menyesuaikan rencana liburan Anda sesuai dengan preferensi dan kemampuan keuangan Anda.</p>
                        </div>
                        <br>
                        <div class="home-two-about-content">
                            <p>Selamatkan waktu dan energi dalam mencari destinasi wisata yang sesuai dengan anggaran Anda. Mulailah pencarian Anda dengan Utravel dan temukan destinasi wisata yang tepat untuk Anda tanpa repot.</p>
                        </div>
                    </div>

                    <div class="col-lg-6 offset-lg-1">
                        <div class="about-right-image about-right-image-top">
                            <img src="<?= base_url('assets/images/img_wisata/photo1.jpg') ?>" alt="photo">
                        </div>
                        <div class="row">
                            <div class="col-lg-6 pr-0">
                                <div class="about-right-image about-right-image-bottom">
                                    <img src="<?= base_url('assets/images/img_wisata/photo2.jpg') ?>" alt="photo">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="about-right-image about-right-image-bottom">
                                    <img src="<?= base_url('assets/images/img_wisata/photo3.jpg') ?>" alt="photo">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- home two about -->

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
                          <img src="<?= base_url('assets/images/blog_post/') . $blog_footer['image_post'] ?>" alt="img">
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