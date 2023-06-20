<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      DATA ADMIN
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">DATA ADMIN</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header">
          <a href="index.php?page=tambah_admin" class="btn btn-primary" role="button" title="Tambah Data"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
          </div>
            <div class="box-body table-responsive">
              <table id="admin" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID ADMIN</th>
                  <th>USERNAME</th>
                  <th>NAMA</th>
                  <th>PROFILE</th>
                </tr>
                </thead>
                <tbody>

                <?php
                include "conf/conn.php";
                $query=mysql_query("SELECT * FROM admin ORDER BY id_admin ASC");
                while ($row=mysql_fetch_array($query))
                {
                ?>

                <tr>
                  <td><?php echo $row['id_admin'];?></td>
                  <td><?php echo $row['username'];?></td>
                  <td><?php echo $row['nama'];?></td>
                  <td><?php echo $row['profile'];?></td>
                  <td>
                    <a href="index.php?page=ubah_admin&id=<?=$row['id_admin'];?>" class="btn btn-success" role="button" title="Ubah Admin"><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="pages/admin/hapus_admin.php?id=<?=$row['id_admin'];?>" class="btn btn-danger" role="button" title="Hapus Admin"><i class="glyphicon glyphicon-trash"></i></a>
                  </td>
                </tr>

                <?php } ?>

                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->

<!-- Javascript Datatable -->
<script type="text/javascript">
  $(document).ready(function(){
    $('#admin').DataTable();
  });
</script>