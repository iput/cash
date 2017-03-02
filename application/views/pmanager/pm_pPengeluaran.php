  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pengeluaran pribadi
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
        <button type="button" class="btn btn-primary btn-flat" data-toggle="modal" data-target="#pengeluaran_pribadi"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp;Tambah Pengeluaran pribadi</button>
        <h3>Data Pengeluaran pribadi</h3>
          <table class=" table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <td>No</td>
                <td>Saldo pribadi</td>
                <td>Nama pengeluaran</td>
                <td>Jumlah Pengeluaran</td>
                <td>Waktu pengeluaran</td>
                <td>Keterangan</td>
                <td><span class="glyphicon glyphicon-cog"></span></td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                  <a href="javascript:;" class="btn btn-info btn-flat btn_edit_pengeluaran"><span class="fa fa-pencil"></span></a>
                  <a href="#" class="btn btn-danger btn-flat" onclick="return confirm('apakah anda yakin ingi menghapus data tersebut ?');"><span class="glyphicon glyphicon-remove"></span></a>
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

  <div class="modal fade" tabindex="-1" role="dialog" id="pengeluaran_pribadi">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-aqua">
          <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
          <h3>Tambah Pengeluaran pribadi</h3>
        </div>
        <div class="modal-body">
          <form class="form-horizontal">
            <div class="form-group">
              <label class="control-label col-md-3">Kode saldo</label>
              <div class="col-md-6">
                <select class="form-control" name="combo_saldo">
                  <option>Pilih Saldo pemasukan</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Nama Pengeluaran</label>
              <div class="col-md-6">
                <input type="text" name="nama_pengeluaran" class="form-control" placeholder="nama pengeluaran pribadi">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Jumlah Pengeluaran</label>
              <div class="col-md-6">
                <input type="text" name="jumlah_pengeluaran" class="form-control" placeholder="Rp. ">
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

  <div class="modal fade" tabindex="-1" role="dialog" id="edit_pengeluaran_pribadi">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-aqua">
          <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
          <h3>Edit Pengeluaran pribadi</h3>
        </div>
        <div class="modal-body">
          <form class="form-horizontal">
            <div class="form-group">
              <label class="control-label col-md-3">Kode saldo</label>
              <div class="col-md-6">
                <select class="form-control" name="combo_saldo">
                  <option>Pilih Saldo pemasukan</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Nama Pengeluaran</label>
              <div class="col-md-6">
                <input type="text" name="edit_nama_pengeluaran" class="form-control" placeholder="nama pengeluaran pribadi">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Jumlah Pengeluaran</label>
              <div class="col-md-6">
                <input type="text" name="edit_jumlah_pengeluaran" class="form-control" placeholder="Rp. ">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Keterangan Pengeluaran</label>
              <div class="col-md-6">
                <textarea class="form-control" name="edit_ket_pengeluaran"></textarea>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Bukti Pengeluaran</label>
              <div class="col-md-6">
                <input type="file" name="edit_foto_bukti" class="form-control">
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