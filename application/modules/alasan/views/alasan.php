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
                  <th>Nama</th>
                  <th>Alasan</th>
                  <th>Tanggal</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; ?>
                <?php foreach ($data_alasan as $alasan) : ?>
                  <tr class="text-center">
                    <td><?php echo $no; ?></td>
                    <td><?php echo $alasan['nama']; ?></td>
                    <td><?php echo $alasan['alasan']; ?></td>
                    <td><?php echo $alasan['tanggal']; ?></td>
                    <td>
                      <a href="#"><span class="badge badge-success waves-effect waves-light" data-toggle="modal" data-target="#editModal<?php echo $alasan['id_alasan']; ?>">Edit</span></a>
                      <a class="btn-hapus" href="<?php echo base_url('alasan/delete/') . encrypt_url($alasan['id_alasan']); ?>"><span class="badge badge-danger waves-effect waves-light ml-3">Delete</span></a>
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
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newTambahDataLabel">Tambah Alasan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo base_url(); ?>alasan/add" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="form-group">
            <label for="nama_peserta">Nama Peserta</label>
            <select name="nama_peserta" id="nama_peserta" class="form-control selectpicker" data-live-search="true" required>
              <option value="">Select Peserta</option>
              <?php foreach ($data_peserta as $peserta) : ?>
                <option value="<?php echo $peserta['id_peserta']; ?>" <?php echo $selected = $peserta['id_peserta'] == $peserta_alasan['id_peserta'] ? 'selected' : '' ?>><?php echo $peserta['nama']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <label for="alasan">Alasan</label>
            <input type="text" class="form-control" id="alasan" name="alasan" placeholder="Alasan" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="tanggal_alasan">Tanggal</label>
            <input type="date" class="form-control" id="tanggal_alasan" name="tanggal_alasan" autocomplete="off">
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
foreach ($data_alasan as $alasan) :  ?>
  <div class="modal fade" id="editModal<?php echo $alasan['id_alasan']; ?>" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Edit Alasan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="<?php echo base_url(); ?>alasan/edit" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="id_alasan" value="<?php echo $alasan['id_alasan']; ?>">
          <div class="modal-body">
            <div class="form-group">
              <label for="nama_peserta">Nama Peserta</label>
              <select name="nama_peserta" id="nama_peserta" class="form-control selectpicker" data-live-search="true" required>
                <option value="">Select Peserta</option>
                <?php foreach ($data_peserta as $peserta) : ?>
                  <option value="<?php echo $peserta['id_peserta']; ?>" <?php echo $selected = $peserta['id_peserta'] == $alasan['id_peserta'] ? 'selected' : ''; ?>><?php echo $peserta['nama']; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group">
              <label for="alasan">Alasan</label>
              <input type="text" class="form-control" id="alasan" name="alasan" placeholder="Alasan" autocomplete="off" value="<?= $alasan['alasan']; ?>">
            </div>
            <div class="form-group">
              <label for="tanggal_alasan">Tanggal</label>
              <input type="date" class="form-control" id="tanggal_alasan" name="tanggal_alasan" autocomplete="off" value="<?= $alasan['tanggal'] ?>">
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