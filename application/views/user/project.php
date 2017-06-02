<div class="content-wrapper">
  <section class="content-header">

  </section>
  <section class="content">
    <div class="box">
      <div class="box-body">
        <button type="button" class="btn btn-primary btn-flat" data-toggle="modal" data-target="#pengeluaranP"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp;Pengeluaran Baru</button>
        <h3 class="box-title">Aset Pengeluaran</h3>
        <table class="table table-hover tabl-striped">
          <thead>
            <tr>
              <td>Anggaran</td>
              <td>Nama Pengeluaran</td>
              <td>jumlah pengeluaran</td>
              <td>Waktu Pengeluaran</td>
              <td>Keterangan</td>
              <td><span class="fa fa-cogs"></span></td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>
                <a href="javascript:;" class="btn btn-info btn-flat btnEditPP"><span class="glyphicon glyphicon-pencil"></span></a>
                <a href="#" onclick="return confirm('anda yakin akan menghapus data ini ?')" class="btn btn-danger btn-flat"><span class="glyphicon glyphicon-remove"></span></a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="pengeluaranP">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
        <h4 class="modal-title">Pengeluaran Baru</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="" method="post">
          <div class="form-group">
            <label class="control-label col-md-4">Anggaran Proyek</label>
            <div class="col-md-8">
              <select class="form-control" name="select_anggaran">
                <option value="">PIlih Anggaran</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-4">Nama Pengeluaran</label>
            <div class="col-md-8">
              <input type="text" name="txtNamaPengeluaran" value="" class="form-control" placeholder="Nama Pengeluaran">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-4">Jumlah Pengeluaran</label>
            <div class="col-md-8">
              <input type="text" name="txtJumlahPengeluaran" value="" class="form-control" placeholder="Rp. ">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-4">Waktu Pengeluaran</label>
            <div class="col-md-8">
              <input type="date" name="tglPengeluaran" value="" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-4">Keterangan</label>
            <div class="col-md-8">
              <textarea name="txtKet" rows="8" cols="80" class="form-control" placeholder="rincian pengeluaran"></textarea>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-4">Bukti Pengeluaran</label>
            <div class="col-md-8">
              <input type="file" name="userfile" value="" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3"></div>
            <div class="col-md-8">
              <button type="button" class="btn btn-danger btn-flat" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>&nbsp;Batal</button>
              <button type="submit" class="btn btn-primary btn-flat"><span class="glyphicon glyphicon-save"></span>&nbsp;Simpan</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
