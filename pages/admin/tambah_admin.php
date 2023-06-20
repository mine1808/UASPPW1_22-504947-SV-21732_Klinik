<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      TAMBAH ADMIN
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">TAMBAH ADMIN</li>
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
            <form role="form" method="post" action="pages/admin/tambah_admin_proses.php">
              <div class="box-body">
                <div class="form-group">
                  <label>ID ADMIN</label>
                  <input type="text" name="id_admin" class="form-control" placeholder="id_admin" required>
                </div>
                <div class="form-group">
                  <label>USERNAME</label>
                  <input type="text" name="username" class="form-control" placeholder="username" required>
                </div>
                <div class="form-group">
                  <label>PASSWORD</label>
                  <input type="password" name="password" class="form-control" placeholder="password" required>
                </div>
                <div class="form-group">
                  <label>NAMA</label>
                  <input type="text" name="nama" class="form-control" placeholder="nama" required>
                </div>
                <div class="form-group">
                  <label>PROFILE</label>
                  <input type="text" name="profile" class="form-control" placeholder="profile" required>
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