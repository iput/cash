  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Anggaran Proyek
        <small>Petty CASH</small>
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
        <button type="button" class="btn btn-primary btn-flat" data-toggle="modal" data-target="#tambah_anggaran"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp;Tambah anggaran</button>
        <h3>Data Anggaran</h3>
          <table class=" table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <td>No</td>
                <td>Nama Anggaran</td>
                <td>Jumlah Anggaran</td>
                <td>Waktu Penambahan anggaran</td>
                <td><span class="glyphicon glyphicon-cog"></span></td>
              </tr>
            </thead>
            <tbody id="tabel_anggarandana">
              <tr>
                <td>1</td>
                <td>ISO BALI</td>
                <td>Makhfud</td>
                <td>12000000</td>
                <td>a</td>
                <td>
                  <a href="javascript:;" class="btn btn-info btn-flat btn_edit_anggaranP"><span class="fa fa-pencil"></span></a>
                  <a href="#" class="btn btn-danger btn-flat" onclick="return confirm('Ada yakin ingin menghapus data terkait ?');"><span class="glyphicon glyphicon-remove"></span></a>
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
  
<div class="modal fade" tabindex="-1" role="dialog" id="tambah_anggaran">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
      <h3>Tambah anggaran dana</h3>
    </div>
    <div class="modal-body">
      <form class="form-horizontal">
        <div class="form-group">
          <label class="control-label col-md-3">Nama Anggaran</label>
          <div class="col-md-6">
            <input type="text" name="nama_anggaran" class="form-control" placeholder="Nama Tambahan anggaran">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3">Jumlah Anggaran</label>
          <div class="col-md-6">
            <input type="text" name="jumlah_anggaran" class="form-control" placeholder="Rp. ">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3">Nama Proyek</label>
          <div class="col-md-6">
            <select class="form-control" name="nama_proyek">
              <option value="null">Pilih Nama proyek tujuan anggaran</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <button type="button" data-dismiss="modal" class="btn btn-danger btn-flat"><span class="glyphicon glyphicon-remove"></span>&nbsp;Batal</button>
            <button type="submit" class="btn btn-info btn-flat"><span class="glyphicon glyphicon-save"></span>&nbsp;Simpan</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>  
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="edit_anggaran">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
      <h3>Perbarui anggaran dana</h3>
    </div>
    <div class="modal-body">
      <form class="form-horizontal">
        <div class="form-group">
          <label class="control-label col-md-3">Nama Anggaran</label>
          <div class="col-md-6">
            <input type="text" name="edit_nama_anggaran" class="form-control" placeholder="Nama Tambahan anggaran">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3">Jumlah Anggaran</label>
          <div class="col-md-6">
            <input type="text" name="edit_jumlah_anggaran" class="form-control" placeholder="Rp. ">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3">Nama Proyek</label>
          <div class="col-md-6">
            <select class="form-control" name="edit_nama_proyek">
              <option value="null">Pilih Nama proyek tujuan anggaran</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <button type="button" data-dismiss="modal" class="btn btn-danger btn-flat"><span class="glyphicon glyphicon-remove"></span>&nbsp;Batal</button>
            <button type="submit" class="btn btn-info btn-flat"><span class="glyphicon glyphicon-refresh"></span>&nbsp;Perbarui</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
  
</div>