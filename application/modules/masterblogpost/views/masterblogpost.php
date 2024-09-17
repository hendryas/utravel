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
    <div class="col-lg">
      <div class="card m-b-30">
        <div class="card-body">

          <!-- <h4 class="mt-0 header-title">Silahkan buat bank management anda</h4> -->

          <?php echo $this->session->flashdata('message'); ?>

          <a href="#" class="btn btn-primary waves-effect waves-light mb-3" data-toggle="modal" data-target="#newTambahData">Tambah Data</a>

          <div class="table-responsive">
            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
              <thead>
                <tr class="text-center">
                  <th>No</th>
                  <th>Judul</th>
                  <th>Keterangan</th>
                  <th>Tanggal Post</th>
                  <th>Author</th>
                  <th>Gambar</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; ?>
                <?php foreach ($data_blog_post as $blog) : ?>
                  <tr class="text-center">
                    <td><?php echo $no; ?></td>
                    <td><?php echo $blog['judul_post']; ?></td>
                    <td><?php echo $blog['keterangan_post']; ?></td>
                    <td><?php echo $blog['tanggal_post']; ?></td>
                    <td><?php echo $blog['author_post']; ?></td>
                    <td>
                      <img class="d-flex align-self-start rounded mr-3" src="<?= base_url('assets/images/blog_post/') . $blog['image_post']; ?>" alt="" height="64">
                    </td>
                    <td>
                      <a href="#"><span class="badge badge-success waves-effect waves-light ml-3" data-toggle="modal" data-target="#editModal<?php echo $blog['id_blog_post']; ?>">Edit</span></a>
                      <a class="btn-hapus" href="<?php echo base_url('masterblogpost/delete/') . encrypt_url($blog['id_blog_post']); ?>"><span class="badge badge-danger waves-effect waves-light ml-3">Delete</span></a>
                    </td>
                  </tr>
                  <?php $no++; ?>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div> <!-- end col -->
    <!--====END CONTENT HERE =====-->

  </div> <!-- end container -->
</div>
<!-- end wrapper -->

<!-- START TAMBAH MODAL -->
<div class="modal fade" id="newTambahData" tabindex="-1" aria-labelledby="newTambahDataLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newTambahDataLabel">Tambah Blog</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo base_url(); ?>masterblogpost/add" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="judul_post">Judul Post</label>
                <input type="text" class="form-control" id="judul_post" name="judul_post" placeholder="Judul Post" autocomplete="off">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label for="keterangan_post">Keterangan Post</label>
                <input type="text" class="form-control" id="keterangan_post" name="keterangan_post" placeholder="Keterangan Post" autocomplete="off">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="tanggal_post">Tanggal Post</label>
                <input type="date" class="form-control" id="tanggal_post" name="tanggal_post" placeholder="Tanggal Post" autocomplete="off">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label for="author_post">Author Post</label>
                <input type="text" class="form-control" id="author_post" name="author_post" placeholder="Author Post" autocomplete="off">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="image_post">Gambar Post</label>
                <input type="file" class="form-control" id="image_post" name="image_post" required>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- END TAMBAH MODAL -->

<!-- START EDIT MODAL -->
<?php
foreach ($data_blog_post as $blog) :  ?>
  <div class="modal fade" id="editModal<?php echo $blog['id_blog_post']; ?>" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Edit Blog</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="<?php echo base_url(); ?>masterblogpost/edit" method="POST" enctype="multipart/form-data">
          <input type="text" name="id_blog_post" id="id_blog_post" value="<?= $blog['id_blog_post'] ?>" hidden>
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="judul_post">Judul Post</label>
                  <input type="text" class="form-control" id="judul_post" name="judul_post" placeholder="Judul Post" autocomplete="off" value="<?php echo $blog['judul_post']; ?>">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="keterangan_post">Keterangan Post</label>
                  <input type="text" class="form-control" id="keterangan_post" name="keterangan_post" placeholder="Keterangan Post" autocomplete="off" value="<?= $blog['keterangan_post']; ?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="tanggal_post">Tanggal Post</label>
                  <input type="date" class="form-control" id="tanggal_post" name="tanggal_post" placeholder="Tanggal Post" autocomplete="off" value="<?php echo $blog['tanggal_post']; ?>">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="author_post">Author Post</label>
                  <input type="text" class="form-control" id="author_post" name="author_post" placeholder="Author Post" autocomplete="off" value="<?= $blog['author_post']; ?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="preview_img">Preview Image</label>
                  <div class="row">
                    <div class="col">
                      <img src="<?php echo base_url('assets/images/blog_post/') . $blog['image_post']; ?>" alt="Gambar-Post" width="200" height="150">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="image_post">Gambar Post</label>
                  <input type="file" class="form-control" id="image_post" name="image_post">
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Edit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php endforeach; ?>
<!-- END EDIT MODAL -->