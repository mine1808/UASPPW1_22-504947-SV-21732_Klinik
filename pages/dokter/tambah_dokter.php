<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      TAMBAH DOKTER
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">TAMBAH DOKTER</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="pages/dokter/tambah_dokter_proses.php">
              <div class="box-body">
                <div class="form-group">
                  <label>ID DOKTER</label>
                  <input type="text" name="ID_Dokter" class="form-control" placeholder="ID_Dokter" required>
                </div>
                <div class="form-group">
                  <label>NAMA DOKTER</label>
                  <input type="text" name="Nama_Dokter" class="form-control" placeholder="Nama_Dokter" required>
                </div>
                <div class="form-group">
                  <label>SPESIALISASI</label>
                  <select class="form-control" name="Spesialisasi">
                  <option value="">- Pilih Spesialisasi -</option>
                    <option value="Umum">Umum</option>
                    <option value="Anak">Anak</option>
                    <option value="Gigi">Gigi</option>
                    <option value="Mata">Mata</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>ALAMAT</label>
                  <input type="text" name="Alamat" class="form-control" placeholder="Alamat" required>
                </div>
                <div class="form-group">
                  <label>NOMOR TELEPON</label>
                  <input type="text" name="Nomor_Telepon" class="form-control" placeholder="Nomor_Telepon" required>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" title="Simpan Data"> <i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->