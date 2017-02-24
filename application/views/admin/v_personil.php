  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Personil
        <small>Petty Cash</small>
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">


      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Timeline</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
      <div class="row">
        <div class="col-xs-12">
        <button type="button" class="btn btn-primary btn-flat" data-toggle="modal" data-target="#tambah_personil"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp;Tambah Data Personil</button>
        <h2>Data Personil Petty Cash</h2>
          <table class=" table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <td>No</td>
                <td>Nama User</td>
                <td>Alamat</td>
                <td>Email</td>
                <td>No. HP</td>
                <td>Username</td>
                <td>Status</td>
                <td><span class="glyphicon glyphicon-cog"></span></td>
              </tr>
            </thead>
            <tbody id="tabel_personil">
              <tr>
                <td>No</td>
                <td>Nama User</td>
                <td>Alamat</td>
                <td>Email</td>
                <td>No. HP</td>
                <td>Username</td>
                <td>Status</td>
                <td>
                  <a href="javascript:;" class="btn btn-info btn-flat btn_edit_personil"><span class="fa fa-pencil"></span></a>
                  <a href="#" class="btn btn-danger btn-flat" onclick="return confirm('Yakin akan menghapus data ?');"><span class="glyphicon glyphicon-remove"></span></a>
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
  <div class="modal fade" id="tambah_personil" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-aqua">
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
        <h3>Tambah personil Baru</h3>
      </div>
      <div class="modal-body">
        <form class="form-horizontal">
          <div class="form-group">
            <label class="control-label col-md-3">Nama User</label>
            <div class="col-md-6">
              <input type="text" name="txt_nama_personil" class="form-control" placeholder="Nama User">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3">Alamat Lengkap</label>
            <div class="col-md-6">
              <textarea class="form-control col-md-6" name="txt_alamat"></textarea>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3">Nomor HP</label>
            <div class="col-md-6">
              <input type="text" name="txt_nohp" class="form-control" placeholder="nomor aktif">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3">Email</label>
            <div class="col-md-6">
              <input type="email" name="txt_email" class="form-control" placeholder="Email aktif">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3">Username</label>
            <div class="col-md-6">
              <input type="text" name="txt_username" class="form-control" placeholder="username">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3">Password</label>
            <div class="col-md-6">
              <input type="password" name="txt_password" class="form-control" placeholder="********">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3"></div>
            <div class="col-md-6">
              <button type="button" data-dismiss="modal" class="btn btn-danger btn-flat"><span class="glyphicon glyphicon-remove"></span>&nbsp;Batal</button>
              <button type="submit" class="btn btn-primary btn-flat"><span class="glyphicon glyphicon-save"></span>&nbsp;Simpan</button>              
            </div>
          </div>
        </form>        
      </div>
    </div>
  </div>
  </div>
  
  <div class="modal fade" id="update_personil" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-aqua">
          <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
          <h3>Edit data Personil</h3>
        </div>
        <div class="modal-body">
        <form class="form-horizontal">
          <div class="form-group">
            <label class="control-label col-md-3">Nama User</label>
            <div class="col-md-6">
              <input type="text" name="edit_nama" class="form-control" placeholder="Nama User">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3">Alamat Lengkap</label>
            <div class="col-md-6">
              <textarea class="form-control col-md-6" name="edit_alamat"></textarea>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3">Nomor HP</label>
            <div class="col-md-6">
              <input type="text" name="edit_nohp" class="form-control" placeholder="nomor aktif">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3">Email</label>
            <div class="col-md-6">
              <input type="email" name="edit_email" class="form-control" placeholder="Email aktif">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3">Username</label>
            <div class="col-md-6">
              <input type="text" name="edit_username" class="form-control" placeholder="username">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3">Password</label>
            <div class="col-md-6">
              <input type="password" name="edit_password" class="form-control" placeholder="********">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3"></div>
            <div class="col-md-6">
              <button type="button" data-dismiss="modal" class="btn btn-danger btn-flat"><span class="glyphicon glyphicon-remove"></span>&nbsp;Batal</button>
              <button type="submit" class="btn btn-primary btn-flat"><span class="glyphicon glyphicon-save"></span>&nbsp;Perbarui</button>              
            </div>
          </div>
        </form>      
        </div>
      </div>
    </div>
  </div>
  