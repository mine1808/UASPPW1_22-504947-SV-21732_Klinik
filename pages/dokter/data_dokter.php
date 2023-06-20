<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      DATA DOKTER
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">DATA DOKTER</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header">
          <a href="index.php?page=tambah_dokter" class="btn btn-primary" role="button" title="Tambah Data"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
          </div>
            <div class="box-body table-responsive">
              <table id="dokter" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID DOKTER</th>
                  <th>NAMA DOKTER</th>
                  <th>SPESIALISASI</th>
                  <th>ALAMAT</th>
                  <th>NOMOR TELEPON</th>
                </tr>
                </thead>
                <tbody>

                <?php
                include "conf/conn.php";
                $query=mysql_query("SELECT * FROM dokter ORDER BY ID_Dokter ASC");
                while ($row=mysql_fetch_array($query))
                {
                ?>

                <tr>
                  <td><?php echo $row['ID_Dokter'];?></td>
                  <td><?php echo $row['Nama_Dokter'];?></td>
                  <td><?php echo $row['Spesialisasi'];?></td>
                  <td><?php echo $row['Alamat'];?></td>
                  <td><?php echo $row['Nomor_Telepon'];?></td>
                  <td>
                    <a href="index.php?page=ubah_dokter&id=<?=$row['ID_Dokter'];?>" class="btn btn-success" role="button" title="Ubah Data"><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="pages/dokter/hapus_dokter.php?id=<?=$row['ID_Dokter'];?>" class="btn btn-danger" role="button" title="Hapus Data"><i class="glyphicon glyphicon-trash"></i></a>
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
    $('#dokter').DataTable();
  });
</script>