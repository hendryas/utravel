<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?php echo $title; ?></title>

  <!-- Fav Icon -->
  <link rel="icon" href="<?= base_url('assets/images/logo/UTRAVEL-01.svg') ?>" type="image/x-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Source+Serif+Pro:wght@400;600&display=swap" rel="stylesheet">

  <!-- Stylesheets -->
  <script src="<?= base_url(); ?>assets/traveler/js/jquery.js"></script>
  <link href="<?= base_url(); ?>assets/traveler/css/font-awesome-all.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/traveler/css/fontawesome.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/traveler/css/flaticon_save_us.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/traveler/fonts/flaticon.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/traveler/css/owl.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/traveler/css/slick-theme.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/traveler/css/slick.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/traveler/css/bootstrap.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/traveler/css/jquery.fancybox.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/traveler/css/magnific-popup.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/traveler/css/progresscircle.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/traveler/css/animate.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/traveler/css/color.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/traveler/css/nice-select.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/traveler/css/global.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/traveler/css/style.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/traveler/css/swiper.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/traveler/css/responsive.css" rel="stylesheet">

  <!-- Sweet Alert-->
  <link href="<?= base_url('assets/sweetalert2/sweetalert2.min.css'); ?>" rel="stylesheet" type="text/css" />

  <style>
    @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

    .starrating>input {
      display: none;
    }

    /* Remove radio buttons */

    .starrating>label:before {
      content: "\f005";
      /* Star */
      margin: 2px;
      font-size: 2em;
      font-family: FontAwesome;
      display: inline-block;
    }

    .starrating>label {
      color: #222222;
      /* Start color when not clicked */
    }

    .starrating>input:checked~label {
      color: #ffca08;
    }

    /* Set yellow color when star checked */

    .starrating>input:hover~label {
      color: #ffca08;
    }
  </style>
</head>

<!-- page wrapper -->

<body>