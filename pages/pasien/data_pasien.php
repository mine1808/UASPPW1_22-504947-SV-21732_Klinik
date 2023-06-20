<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      DATA PASIEN
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">DATA PASIEN</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header">
          <a href="index.php?page=tambah_pasien" class="btn btn-primary" role="button" title="Tambah Data"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
          </div>
            <div class="box-body table-responsive">
              <table id="pasien" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID PASIEN</th>
                  <th>NAMA PASIEN</th>
                  <th>TANGGAL LAHIR</th>
                  <th>ALAMAT</th>
                  <th>JENIS KELAMIN</th>
                </tr>
                </thead>
                <tbody>

                <?php
                include "conf/conn.php";
                $query=mysql_query("SELECT * FROM pasien ORDER BY id_pasien ASC");
                while ($row=mysql_fetch_array($query))
                {
                ?>

                <tr>
                  <td><?php echo $row['ID_Pasien'];?></td>
                  <td><?php echo $row['Nama_Pasien'];?></td>
                  <td><?php echo $row['Tanggal_Lahir'];?></td>
                  <td><?php echo $row['Alamat'];?></td>
                  <td><?php echo $row['Jenis_Kelamin'];?></td>
                  <td>
                    <a href="index.php?page=ubah_pasien&id=<?=$row['ID_Pasien'];?>" class="btn btn-success" role="button" title="Ubah Data"><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="pages/pasien/hapus_pasien.php?id=<?=$row['ID_Pasien'];?>" class="btn btn-danger" role="button" title="Hapus Data"><i class="glyphicon glyphicon-trash"></i></a>
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
    $('#pasien').DataTable();
  });
</script>