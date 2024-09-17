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
                  <th>Nama Wisata</th>
                  <th>Lokasi Wisata</th>
                  <th>Harga Tiket</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; ?>
                <?php foreach ($data_wisata as $wisata) : ?>
                  <tr class="text-center">
                    <td><?php echo $no; ?></td>
                    <td><?php echo $wisata['nama_wisata']; ?></td>
                    <td><?php echo $wisata['lokasi_wisata']; ?></td>
                    <td>Rp <?php echo number_format($wisata['harga_tiket']); ?></td>
                    <td>
                      <a href="#"><span class="badge badge-info waves-effect waves-light" data-toggle="modal" data-target="#newDetailData<?php echo $wisata['id_wisata']; ?>">Detail</span></a>
                      <a href="#"><span class="badge badge-success waves-effect waves-light ml-3" data-toggle="modal" data-target="#editModal<?php echo $wisata['id_wisata']; ?>">Edit</span></a>
                      <a class="btn-hapus" href="<?php echo base_url('masterwisata/delete/') . encrypt_url($wisata['id_wisata']); ?>"><span class="badge badge-danger waves-effect waves-light ml-3">Delete</span></a>
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
        <h5 class="modal-title" id="newTambahDataLabel">Tambah Wisata</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo base_url(); ?>masterwisata/add" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="nama_wisata">Nama Wisata</label>
                <input type="text" class="form-control" id="nama_wisata" name="nama_wisata" placeholder="Nama Wisata" autocomplete="off">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label for="singkatan_wisata">Singkatan Wisata</label>
                <input type="text" class="form-control" id="singkatan_wisata" name="singkatan_wisata" placeholder="Singkatan Wisata" autocomplete="off">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="lokasi_wisata">Lokasi Wisata</label>
                <input type="text" class="form-control" id="lokasi_wisata" name="lokasi_wisata" placeholder="Lokasi Wisata" autocomplete="off">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label for="alamat_wisata">Alamat Wisata</label>
                <input type="text" class="form-control" id="alamat_wisata" name="alamat_wisata" placeholder="Alamat Wisata" autocomplete="off">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="harga_tiket">Harga Wisata</label>
                <input type="number" class="form-control" id="harga_tiket" name="harga_tiket" placeholder="Harga Wisata" autocomplete="off">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label for="link_lokasi_wisata">Link Lokasi Wisata</label>
                <input type="text" class="form-control" id="link_lokasi_wisata" name="link_lokasi_wisata" placeholder="Link Lokasi Wisata" autocomplete="off">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="souvenir_wisata">Souvenir Wisata</label>
                <textarea id="elm1" name="souvenir_wisata" class="form-control" rows="5"></textarea>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label for="tempat_makan">Tempat Makan Wisata</label>
                <textarea id="elm1" name="tempat_makan" class="form-control" rows="5"></textarea>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="keterangan_wisata">Keterangan Wisata</label>
                <textarea id="elm1" name="keterangan_wisata" class="form-control" rows="5"></textarea>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label for="gambar_wisata">Gambar Wisata</label>
                <input type="file" class="form-control" id="gambar_wisata" name="gambar_wisata" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label for="gambar_wisata_detail1">Gambar Wisata Detail 1</label>
                <input type="file" class="form-control" id="gambar_wisata_detail1" name="gambar_wisata_detail1" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label for="gambar_wisata_detail2">Gambar Wisata Detail 2</label>
                <input type="file" class="form-control" id="gambar_wisata_detail2" name="gambar_wisata_detail2" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label for="gambar_wisata_detail3">Gambar Wisata Detail 3</label>
                <input type="file" class="form-control" id="gambar_wisata_detail3" name="gambar_wisata_detail3" required>
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

<!-- START DETAIL MODAL -->
<?php
foreach ($data_wisata as $wisata) :  ?>
  <div class="modal fade" id="newDetailData<?php echo $wisata['id_wisata']; ?>" tabindex="-1" aria-labelledby="newDetailDataLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="newDetailDataLabel">Detail Wisata</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="card-body">

            <h4 class="mt-0 header-title">Form Detail Wisata</h4>
            <p class="text-muted m-b-30 font-14">Anda bisa melihat detail wisata yang sudah anda input.</p>

            <div class="media m-b-30">
              <img class="d-flex align-self-start rounded mr-3" src="<?= base_url('assets/images/img_wisata/') . $wisata['gambar_wisata']; ?>" alt="" height="64">
              <div class="media-body">
                <?php if ($wisata['singkatan_wisata'] != null) : ?>
                  <h5 class="mt-0 font-18"><?php echo $wisata['nama_wisata']; ?> &nbsp (<?php echo $wisata['singkatan_wisata'] ?>) </h5>
                <?php else : ?>
                  <h5 class="mt-0 font-18"><?php echo $wisata['nama_wisata']; ?></h5>
                <?php endif; ?>
                <p><?php echo $wisata['keterangan_wisata']; ?></p>
                <h6>Harga Tiket</h6>
                <p>Rp <?php echo number_format($wisata['harga_tiket']); ?></p>
                <h6>Alamat</h6>
                <p><?php echo $wisata['alamat_wisata']; ?></p>
                <h6>Souvenir</h6>
                <p><?php echo $wisata['souvenir_wisata']; ?></p>
                <h6>Tempat Makan</h6>
                <p><?php echo $wisata['tempat_makan']; ?></p>
                <h6>Link Lokasi</h6>
                <a href="<?= $wisata['link_lokasi_wisata']; ?>" class="btn btn-sm btn-info" target="_blank">Lokasi</a>
              </div>
            </div>

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
<?php endforeach; ?>
<!-- END DETAIL MODAL -->

<!-- START EDIT MODAL -->
<?php
foreach ($data_wisata as $wisata) :  ?>
  <div class="modal fade" id="editModal<?php echo $wisata['id_wisata']; ?>" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Edit Wisata</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="<?php echo base_url(); ?>masterwisata/edit" method="POST" enctype="multipart/form-data">
          <input type="text" name="id_wisata" id="id_wisata" value="<?= $wisata['id_wisata'] ?>" hidden>
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="nama_wisata">Nama Wisata</label>
                  <input type="text" class="form-control" id="nama_wisata" name="nama_wisata" value="<?= $wisata['nama_wisata']; ?>" placeholder="Nama Wisata" autocomplete="off">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="singkatan_wisata">Singkatan Wisata</label>
                  <input type="text" class="form-control" id="singkatan_wisata" name="singkatan_wisata" value="<?= $wisata['singkatan_wisata']; ?>" placeholder="Singkatan Wisata" autocomplete="off">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="lokasi_wisata">Lokasi Wisata</label>
                  <input type="text" class="form-control" id="lokasi_wisata" name="lokasi_wisata" value="<?= $wisata['lokasi_wisata']; ?>" placeholder="Lokasi Wisata" autocomplete="off">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="alamat_wisata">Alamat Wisata</label>
                  <input type="text" class="form-control" id="alamat_wisata" name="alamat_wisata" value="<?= $wisata['alamat_wisata']; ?>" placeholder="Alamat Wisata" autocomplete="off">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="harga_tiket">Harga Wisata</label>
                  <input type="number" class="form-control" id="harga_tiket" name="harga_tiket" value="<?= $wisata['harga_tiket']; ?>" placeholder="Harga Wisata" autocomplete="off">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="link_lokasi_wisata">Link Lokasi Wisata</label>
                  <input type="text" class="form-control" id="link_lokasi_wisata" name="link_lokasi_wisata" value="<?= $wisata['link_lokasi_wisata']; ?>" placeholder="Link Lokasi Wisata" autocomplete="off">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="souvenir_wisata">Souvenir Wisata</label>
                  <textarea id="elm1" name="souvenir_wisata" class="form-control" rows="5"><?php echo $wisata['souvenir_wisata'] ?></textarea>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="tempat_makan">Tempat Makan Wisata</label>
                  <textarea id="elm1" name="tempat_makan" class="form-control" rows="5"><?php echo $wisata['tempat_makan'] ?></textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="keterangan_wisata">Keterangan Wisata</label>
                  <textarea id="elm1" name="keterangan_wisata" class="form-control" rows="5"><?php echo $wisata['keterangan_wisata'] ?></textarea>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="preview_img">Preview Image</label>
                      <div class="row">
                        <div class="col">
                          <img src="<?php echo base_url('assets/images/img_wisata/') . $wisata['gambar_wisata']; ?>" alt="Gambar-Wisata" width="200" height="150">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="gambar_wisata">Gambar Wisata</label>
                      <input type="file" class="form-control" id="gambar_wisata" name="gambar_wisata">
                    </div>
                  </div>
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

<script>
  $(document).ready(function() {
    if ($("#elm1").length > 0) {
      tinymce.init({
        selector: "textarea#elm1",
        theme: "modern",
        height: 300,
        plugins: [
          "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
          "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
          "save table contextmenu directionality emoticons template paste textcolor"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
        style_formats: [{
            title: 'Bold text',
            inline: 'b'
          },
          {
            title: 'Red text',
            inline: 'span',
            styles: {
              color: '#ff0000'
            }
          },
          {
            title: 'Red header',
            block: 'h1',
            styles: {
              color: '#ff0000'
            }
          },
          {
            title: 'Example 1',
            inline: 'span',
            classes: 'example1'
          },
          {
            title: 'Example 2',
            inline: 'span',
            classes: 'example2'
          },
          {
            title: 'Table styles'
          },
          {
            title: 'Table row 1',
            selector: 'tr',
            classes: 'tablerow1'
          }
        ]
      });
    }
  });
</script>