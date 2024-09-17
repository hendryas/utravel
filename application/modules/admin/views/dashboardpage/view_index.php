<style>
    .piechart_3d {
        width: 800px;
        height: 450px;
    }
</style>

<div class="wrapper">
    <div class="container-fluid">

        <!-- Page-Title -->
        <div class="row mt-3">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="btn-group float-right">
                        <ol class="breadcrumb hide-phone p-0 m-0">
                            <li class="breadcrumb-item"><a href="#"><?php echo $title; ?></a></li>
                        </ol>
                    </div>
                    <h4 class="page-title"><?php echo $title; ?></h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->

        <!--====START CONTENT HERE =====-->
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat m-b-30">
                    <div class="p-3 bg-primary text-white">
                        <div class="mini-stat-icon">
                            <i class="mdi mdi-cube-outline float-right mb-0"></i>
                        </div>
                        <h6 class="text-uppercase mb-0 text-white">Total Wisata</h6>
                    </div>
                    <div class="card-body">
                        <div class="mt-4 text-muted">
                            <h5 class="m-0"><?php echo count($jumlah_wisata); ?><i class="mdi mdi-arrow-up text-success ml-2"></i></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat m-b-30">
                    <div class="p-3 bg-primary text-white">
                        <div class="mini-stat-icon">
                            <i class="mdi mdi-account-network float-right mb-0"></i>
                        </div>
                        <h6 class="text-uppercase mb-0 text-white">Total Customer</h6>
                    </div>
                    <div class="card-body">
                        <div class="mt-4 text-muted">
                            <h5 class="m-0"><?php echo count($jumlah_customer); ?><i class="mdi mdi-arrow-up text-success ml-2"></i></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat m-b-30">
                    <div class="p-3 bg-primary text-white">
                        <div class="mini-stat-icon">
                            <i class="mdi mdi-airplane float-right mb-0"></i>
                        </div>
                        <h6 class="text-uppercase mb-0 text-white">Wisata Terbaik</h6>
                    </div>
                    <div class="card-body">
                        <div class="border-bottom pb-4">
                            <span class="badge badge-danger"> -02% </span> <span class="ml-2 text-muted">From previous period</span>
                        </div>
                        <div class="mt-4 text-muted">
                            <div class="float-right">
                                <p class="m-0">Last : 15.8</p>
                            </div>
                            <h5 class="m-0">14.5<i class="mdi mdi-arrow-down text-danger ml-2"></i></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====END CONTENT HERE =====-->

    </div> <!-- end container -->
</div>
<!-- end wrapper -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" type='text/javascript'></script>
<script src="https://www.gstatic.com/charts/loader.js" type='text/javascript'></script>