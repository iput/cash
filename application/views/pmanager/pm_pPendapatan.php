  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pemasukan Pribadi personal
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
        <button type="button" class="btn btn-primary btn-flat" data-toggle="modal" data-target="#pemasukan_pribadi"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp;Tambah Pemasukan</button>
        <h3>Pemasukan pribadi</h3>
          <table class=" table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <td>No</td>
                <td>Nama Pendapatan</td>
                <td>Jumlah Pendapatan</td>
                <td>Tanggal Dimasukan</td>
                <td><span class="glyphicon glyphicon-cog"></span></td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>ISO BALI</td>
                <td>Makhfud</td>
                <td>12000000</td>
                <td>
                  <a href="javascript:;" class="btn btn-info btn-flat btn_edit_pendapatanP"><span class="fa fa-pencil"></span></a>
                  <a href="#" class="btn btn-danger btn-flat" onclick="return confirm('Anda yakn ingin menghapus data ini ?');"><span class=" glyphicon glyphicon-remove"></span></a>
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
  
<div class="modal fade" tabindex="-1" role="dialog" id="pemasukan_pribadi">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-aqua">
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
        <h3>Tambah Pemasukan pribadi</h3>
      </div>
      <div class="modal-body">
        <form class="form-horizontal">
          <div class="form-group">
            <label class="control-label col-md-3">Nama Pemasukan</label>
            <div class="col-md-6">
              <input type="text" name="nama_pendapatan" class="form-control" placeholder="nama pendapatan pribadi">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3">Jumlah Pendapatan</label>
            <div class="col-md-6">
              <input type="text" name="jumlah_pendapatan" class="form-control" placeholder="Rp.">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3">Tanggal Pemasukan</label>
            <div class="col-md-6">
              <input type="text" name="tanggal_pemasukan" class="form-control" placeholder="yyyy-hh-mm">
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

<div class="modal fade" tabindex="-1" role="dialog" id="edit_pemasukan_pribadi">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-aqua">
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
        <h3>Tambah Pemasukan pribadi</h3>
      </div>
      <div class="modal-body">
        <form class="form-horizontal">
          <div class="form-group">
            <label class="control-label col-md-3">Nama Pemasukan</label>
            <div class="col-md-6">
              <input type="text" name="edit_nama_pendapatan" class="form-control" placeholder="nama pendapatan pribadi">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3">Jumlah Pendapatan</label>
            <div class="col-md-6">
              <input type="text" name="edit_jumlah_pendapatan" class="form-control" placeholder="Rp.">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3">Tanggal Pemasukan</label>
            <div class="col-md-6">
              <input type="text" name="edit_tanggal_pemasukan" class="form-control" placeholder="yyyy-hh-mm">
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