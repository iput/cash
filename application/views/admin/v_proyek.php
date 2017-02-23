  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Admin Petty Cash
        <small>Official Gasek Community</small>
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
        <button type="button" class="btn btn-primary btn-flat" data-toggle="modal" data-target="#tambah_proyek"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp;Tambah proyek</button>
        <h3>Data Poyek Petty Cash</h3>
          <table class=" table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <td>No</td>
                <td>Nama Project</td>
                <td>Anggaran</td>
                <td>Tanggal mulai</td>
                <td>Tanggal Selesai</td>
                <td><span class=" glyphicon glyphicon-cog"></span></td>
              </tr>
            </thead>
            <tbody id="tabel_proyek">
              <tr>
                <td>1</td>
                <td>ISO BALI</td>
                <td>1200000</td>
                <td>12000000</td>
                <td>2387198</td>
                <td>
                  <a href="javascript:;" class="btn btn-info btn-flat btn_edit_proyek"><span class="fa fa-pencil"></span></a>
                  <a href="#" class="btn btn-danger btn-flat" onclick="return confirm('Ada yakin ingin menghapus data ini ?');"><span class="glyphicon glyphicon-remove"></span></a>
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
  
<div class="modal fade" tabindex="-1" role="dialog" id="tambah_proyek">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-aqua">
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
        <h3>Tambah Proyek</h3>
      </div>
      <div class="modal-body">
        <form class="form-horizontal">
          <div class="form-group">
            <label class="control-label col-md-3">Nama Proyek</label>
            <div class="col-md-6">
              <input type="text" name="nama_proyek" class="form-control" placeholder="nama proyek">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3">Anggaran Proyek</label>
            <div class="col-md-6">
              <input type="text" name="anggaran_proyek" class="form-control" placeholder="Rp. ">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3">Tanggal Mulai</label>
            <div class="col-md-6">
              <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                </div>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3">Tanggal Selesai</label>
            <div class="col-md-6">
              <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                </div>
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

<div class="modal fade" tabindex="-1" role="dialog" id="edit_proyek">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-aqua">
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
        <h3>Edit proyek</h3>
      </div>
      <div class="modal-body">
        <form class="form-horizontal">
          <div class="form-group">
            <label class="control-label col-md-3">Nama Proyek</label>
            <div class="col-md-6">
              <input type="text" name="edit_nama_proyek" class="form-control" placeholder="nama proyek">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3">Anggaran Proyek</label>
            <div class="col-md-6">
              <input type="text" name="edit_anggaran_proyek" class="form-control" placeholder="Rp. ">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3">Tanggal Mulai</label>
            <div class="col-md-6">
              <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                </div>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3">Tanggal Selesai</label>
            <div class="col-md-6">
              <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                </div>
            </div>
          </div>          
          <div class="form-group">
            <div class="col-md-3"></div>
            <div class="col-md-6">
              <button type="button" class="btn btn-danger btn-flat" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>&nbsp;Batal</button>
              <button type="submit" class="btn btn-info btn-flat"><span class="glyphicon glyphicon-refresh"></span>&nbsp;Perbarui</button>
            </div>
          </div>
        </form>        
      </div>
    </div>
  </div>
</div>