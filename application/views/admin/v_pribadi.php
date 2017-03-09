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
          <!-- Custom Tabs (Pulled to the right) -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1-1" data-toggle="tab">Debit</a></li>
              <li><a href="#tab_2-2" data-toggle="tab">Kredit</a></li>
              <li class="pull-right header"><i class="fa fa-th"></i> Custom Tabs</li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1-1">
                <button type="button" class="btn btn-primary btn-flat" data-toggle="modal" data-target="#pemasukan_pribadi"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp;Debit</button>

                <h3>Data Pemasukkan</h3>
                  <table class=" table table-striped table-bordered table-hover">
                    <thead>
                      <tr>
                        <td>No</td>
                        <td>Nama Pendapatan</td>
                        <td>Jumlah Pendapatan</td>
                        <td>Tanggal Pemasukkan</td>
                        <td><span class="glyphicon glyphicon-cog"></span></td>
                      </tr>
                    </thead>
                    <tbody id="tabel_debit">
                      <tr>
                        <td>1</td>
                        <td>ISO BALI</td>
                        <td>Makhfud</td>
                        <td>12000000</td>
                        <td>
                          <a href="javascript:;" class="btn btn-info btn-flat btn_edit_debit"><span class="fa fa-pencil"></span></a>
                          <a href="#" class="btn btn-danger btn-flat" onclick="return confirm('Anda yakn ingin menghapus data ini ?');"><span class=" glyphicon glyphicon-remove"></span></a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2-2">
                <button type="button" class="btn btn-primary btn-flat" data-toggle="modal" data-target="#pengeluaran_pribadi"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp;Kredit</button>
        <h3>Kredit</h3>
          <table class=" table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <td>Tanggal</td>
                <td>Jumlah Pengeluaran</td>
                <td>Keterangan</td>
                <td><span class="glyphicon glyphicon-cog"></span></td>
              </tr>
            </thead>
            <tbody id="tabel_kredit">
              <tr>
                <td>1</td>
                <td></td>
                <td></td>
                <td>
                  <a href="javascript:;" class="btn btn-info btn-flat btn_edit_kredit"><span class="fa fa-pencil"></span></a>
                  <a href="#" class="btn btn-danger btn-flat" onclick="return confirm('apakah anda yakin ingi menghapus data tersebut ?');"><span class="glyphicon glyphicon-remove"></span></a>
                </td>
              </tr>
            </tbody>
          </table>
              </div>

            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
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

<!-- Tambah Debit !-->  
<div class="modal fade" tabindex="-1" role="dialog" id="pemasukan_pribadi">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-aqua">
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
        <h3>Tambah Pemasukkan pribadi</h3>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="post" action="<?php ?>">
          <div class="form-group">
            <label class="control-label col-md-4">Tanggal Pemasukkan</label>
            <div class="col-md-6">
              <input type="date" name="tgl_pemasukkan" class="form-control" value="<?php echo date('Y-m-d H:i:s');?>">
            </div>
          </div>        
          <div class="form-group">
            <label class="control-label col-md-4">Jumlah Pemasukkan</label>
            <div class="col-md-6">
              <input type="text" name="jumlah_pemasukkan" class="form-control" id ="jumlah_pemasukkan">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-4">Keterangan</label>
            <div class="col-md-6">
              <textarea name="keterangan_pemasukkan" class="form-control"></textarea>
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

<!-- Modal Edit Debit-->
<div class="modal fade" tabindex="-1" role="dialog" id="edit_pemasukkan_pribadi">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-aqua">
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
        <h3>Edit Pemasukkan Pribadi</h3>
      </div>
      <div class="modal-body">
        <form class="form-horizontal">
        <input type="hidden" name="edit_idpribadi">
          <div class="form-group">
            <label class="control-label col-md-4">Tanggal Pemasukkan</label>
            <div class="col-md-6">
              <input type="date" name="edit_tanggal_pemasukan" class="form-control">
            </div>
          </div>        
          <div class="form-group">
            <label class="control-label col-md-4">Jumlah Pemasukkan</label>
            <div class="col-md-6">
              <input type="text" name="edit_jumlah_ppemasukkan"
              id="edit_jumlah_ppemasukkan" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-4">Keterangan</label>
            <div class="col-md-6">
              <textarea name="edit_keterangan_pemasukkan" class="form-control"></textarea>
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

<!-- Modal Tambah Kredit-->

<div class="modal fade" tabindex="-1" role="dialog" id="pengeluaran_pribadi">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-aqua">
          <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
          <h3>Tambah Pengeluaran Pribadi</h3>
        </div>
        <div class="modal-body">
          <form class="form-horizontal">
            <div class="form-group">
              <label class="control-label col-md-4">Tanggal Pengeluaran</label>
              <div class="col-md-6">
                <input type="date" name="edit_tanggal_pengeluaran" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4">Jumlah Pengeluaran</label>
              <div class="col-md-6">
                <input type="text" name="edit_jumlah_pengeluaran" class="form-control" id="jumlah_pengeluaran">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4">Keterangan</label>
              <div class="col-md-6">
                <textarea class="form-control" name="keterangan_pengeluaran"></textarea>
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

  <!--Modal Edit Kredit -->

  <div class="modal fade" tabindex="-1" role="dialog" id="edit_pengeluaran_pribadi">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-aqua">
          <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
          <h3>Edit Pengeluaran</h3>
        </div>
        <div class="modal-body">
          <form class="form-horizontal">
          <input type="hidden" name="edit_idpribadi">
            <div class="form-group">
              <label class="control-label col-md-4">Tanggal Pengeluaran</label>
              <div class="col-md-6">
                <input type="date" name="edit_tanggal_pengeluaran" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4">Jumlah Pengeluaran</label>
              <div class="col-md-6">
                <input type="text" name="edit_jumlah_ppengeluaran" id ="edit_jumlah_ppengeluaran" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4">Keterangan</label>
              <div class="col-md-6">
                <textarea class="form-control" name="edit_keterangan_pengeluaran"></textarea>
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