  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pengeluaran Proyek
        <small>Official Gasek Community</small>
      </h1>


    </section>

    <!-- Main content -->
    <section class="content">


      <!-- Default box -->
      <div class="box">
        <div class="box-body">      
      <div class="row">
        <div class="col-xs-12">
        <button type="button" class="btn btn-primary btn-flat" data-toggle="modal" data-target="#pengeluaran_proyek"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp;Tambah pengeluaran</button>
        <h3>Data Pengeluaran</h3>
          <table class=" table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <td>No</td>
                <td>Nama Pengeluaran</td>
                <td>waktu pengeluaran</td>
                <td>Jumlah Pengeluaran</td>
                <td>Keterangan</td>
                <td>bukti</td>
                <td><span class="glyphicon glyphicon-cog"></span></td>
              </tr>
            </thead>
            <tbody id="tabel_pengeluaran_proyek">
              <tr>
                <td>1</td>
                <td>ISO BALI</td>
                <td>Makhfud</td>
                <td>12000000</td>
                <td>Makan</td>
                <td>a</td>
                <td>
                  <a href="javascript:;" class="btn btn-info btn-xs btn_edit_pengeluaranP"><span class="fa fa-pencil"></span></a>
                  <a href="#" class="btn btn-danger btn-xs" onclick="return confirm('Anda yakin ingin menghapus data ini ?');"><span class="glyphicon glyphicon-remove"></span></a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Official Gasek Community
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  
  <div class="modal fade" tabindex="-1" role="dialog" id="pengeluaran_proyek">   
  <div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header bg-aqua">
      <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
      <h3>Tambah Pengeluaran proyek</h3>
    </div>
    <div class="modal-body">
      <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="<?php echo base_url('c_pengeluaran_proyek/add_pengeluaran')?>">
        <div class="form-group">
          <label class="control-label col-md-3">Nama User</label>
          <div class="col-md-8">
            <select class="form-control" name="cb_user" id="cb_user">
              <option>Pilih Nama User</option>
              <?php foreach($user as $usr):?>
                <option value="<?php echo $usr['id_user']?>"><?php echo $usr['nama_user']?></option>
              <?php endforeach ?>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3">Nama Proyek</label>
          <div class="col-md-8">
            <select class="form-control" name="cb_proyek" id="cb_proyek">
            
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3">Anggaran Pengeluaran</label>
          <div class="col-md-8">
            <select class="form-control" name="cb_anggaran" id="cb_anggaran">
              <option>Pilih Anggaran proyek</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3">Nama Pengeluaran</label>
          <div class="col-md-8">
            <input type="text" name="nama_pengeluaran" class="form-control" placeholder="nama pengeluaran" maxlength="20">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3">Jumlah Pengeluaran</label>
          <div class="col-md-8">
            <input type="text" name="txtJumlah" class="form-control" id="jumlah_pengeluaranP">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3">Keterangan Pengeluaran</label>
          <div class="col-md-8">
            <textarea class="form-control" name="ket_pengeluaran"></textarea>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-md-3">Bukti Pengeluaran</label>
          <div class="col-md-8">
            <input type="file" name="userfile" id="userfile">
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-3"></div>
          <div class="col-md-8">
            <button type="button" class="btn btn-danger btn-flat" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>&nbsp;Batal</button>
            <button type="submit" class="btn btn-info btn-flat"><span class="glyphicon glyphicon-save"></span>&nbsp;Simpan</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  </div>
  </div>

  <div class="modal fade" tabindex="-1" role="dialog" id="edit_pengeluaran_proyek">   
  <div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header bg-aqua">
      <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
      <h3>Tambah Pengeluaran proyek</h3>
    </div>
    <div class="modal-body">
      <form class="form-horizontal">
        <div class="form-group">
          <label class="control-label col-md-3">Anggaran Pengeluaran</label>
          <div class="col-md-6">
            <select class="form-control" name="cb_anggaran" id="cb_anggaran">
              
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3">Nama Pengeluaran</label>
          <div class="col-md-6">
            <input type="text" name="nama_pengeluaran" class="form-control" placeholder="nama pengeluaran" maxlength="20">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3">Jumlah Pengeluaran</label>
          <div class="col-md-8">
            <input type="text" name="txtJumlah" class="form-control" id="edit_jumlah_pengeluaranP">
          </div>
        </div>        
        <div class="form-group">
          <label class="control-label col-md-3">Keterangan Pengeluaran</label>
          <div class="col-md-6">
            <textarea class="form-control" name="ket_pengeluaran"></textarea>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3">Bukti Pengeluaran</label>
          <div class="col-md-6">
            <input type="file" name="foto_bukti" class="form-control">
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <button type="button" class="btn btn-danger btn-flat" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>&nbsp;Batal</button>
            <button type="submit" class="btn btn-info btn-flat"><span class="glyphicon glyphicon-save"></span>&nbsp;Simpan</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  </div>
  </div>
  <script type="text/javascript">
    $(function(){
      $.ajaxSetup({
        type: "POST",
        url: "<?php echo base_url("c_pengeluaran_proyek/get_combo")?>",
        cache: false,
      });
      $("#cb_user").change(function(){
        var nilai = $(this).val();
        if (nilai > 0){
          $.ajax({
            data: {
              modul: 'project',
              id : nilai
            },
            success: function(respond){
              $("#cb_proyek").html(respond);
            }           
          })
        }
      });
      $("#cb_proyek").change(function(){
        var nilai = $(this).val();
        if (nilai > 0){
          $.ajax({
            data: {
              modul: 'anggaran',
              id : nilai
            },
            success: function(respond){
              $("#cb_anggaran").html(respond);
            }           
          })
        }
      });
    });
  </script>