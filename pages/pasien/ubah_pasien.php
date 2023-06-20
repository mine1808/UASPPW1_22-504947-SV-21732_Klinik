<?php
$sql= "SELECT * FROM pasien WHERE ID_Pasien='".$_GET['id']."'";
$query = mysql_query($sql);
$row = mysql_fetch_array($query);
?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      UBAH PASIEN <?php echo $row['ID_Pasien']; ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">UBAH PASIEN</li>
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
            <form role="form" method="post" action="pages/pasien/ubah_pasien_proses.php">
              <div class="box-body">
                <input type="hidden" name="ID_Pasien" value="<?php echo $row['ID_Pasien']; ?>">
                <div class="form-group">
                  <label>NAMA PASIEN</label>
                  <input type="text" name="Nama_Pasien" class="form-control" placeholder="Nama_Pasien" value="<?php echo $row['Nama_Pasien']; ?>" required>
                </div>
                <div class="form-group">
                  <label>TANGGAL LAHIR</label>
                  <input type="text" name="Tanggal_Lahir" class="form-control" placeholder="Tanggal_Lahir" value="<?php echo $row['Tanggal_Lahir']; ?>" required>
                </div>
                <div class="form-group">
                  <label>ALAMAT</label>
                  <input type="text" name="Alamat" class="form-control" placeholder="Alamat" value="<?php echo $row['Alamat']; ?>" required>
                </div>
                <div class="form-group">
                  <label>JENIS KELAMIN</label>
                  <input type="text" name="Jenis_Kelamin" class="form-control" placeholder="Jenis_Kelamin" value="<?php echo $row['Jenis_Kelamin']; ?>" required>
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