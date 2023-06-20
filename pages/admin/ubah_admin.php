<?php
$sql= "SELECT * FROM admin WHERE id_admin='".$_GET['id']."'";
$query = mysql_query($sql);
$row = mysql_fetch_array($query);
?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      UBAH ADMIN <?php echo $row['id_admin']; ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">UBAH ADMIN</li>
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
            <form role="form" method="post" action="pages/admin/ubah_admin_proses.php">
              <div class="box-body">
                <input type="hidden" name="id_admin" value="<?php echo $row['id_admin']; ?>">
                <div class="form-group">
                  <label>USERNAME</label>
                  <input type="text" name="username" class="form-control" placeholder="username" value="<?php echo $row['username']; ?>" required>
                </div>
                <div class="form-group">
                  <label>PASSWORD</label>
                  <input type="password" name="password" class="form-control" placeholder="password" value="<?php echo $row['password']; ?>" required>
                </div>
                <div class="form-group">
                  <label>NAMA</label>
                  <input type="text" name="nama" class="form-control" placeholder="nama" value="<?php echo $row['nama']; ?>" required>
                </div>
                <div class="form-group">
                  <label>PROFILE</label>
                  <input type="text" name="profile" class="form-control" placeholder="profile" value="<?php echo $row['profile']; ?>" required>
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