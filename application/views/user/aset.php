<div class="content-wrapper">
  <section class="content-header">
    <h1>Aset user</h1>
    <div class="alert alert-success" style="display: none;"></div>
    <div class="alert alert-danger" style="display: none;"></div>
  </section>
  <section class="content">
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#tab1-1" data-toggle="tab">Debit</a></li>
            <li><a href="#tab2" data-toggle="tab">Kredit</a></li>
            <li class="pull-right header"><i class="fa fa-th"></i>&nbsp;Pemasukan dan pengeluaran pribadi</li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab1-1">
              <button type="button" class="btn btn-primary btn-flat" data-toggle="modal" data-target="#debit"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp;Debit</button>
              <h4>Pemasukan pribadi anda</h4>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <td>Tanggal</td>
                    <td>Jumlah Pemasukan</td>
                    <td>Keterangan</td>
                    <td><span class="fa fa-cogs"></span></td>
                  </tr>
                </thead>
                <tbody id="tabel_debit">
                <?php foreach ($debit as $data): ?>
                  <tr>
                    <td><?php echo $data['tanggal']; ?></td>
                    <td><?php echo $data['debit'] ?></td>
                    <td><?php echo $data['keterangan'] ?></td>
                    <td>
                      <a href="javascript:;" class="btn btn-info btn-flat edit_debitU" data="<?php echo $data['id_pengeluaran_pribadi'] ?>" ><span class="fa fa-pencil"></span></a>
                      <a href="<?php echo base_url('user_aset/deleteDebit/'.$data['id_pengeluaran_pribadi']) ?>" class="btn btn-danger btn-flat" onclick="return confirm('anda yakin akan menghapus data ini ?')"><span class="fa fa-trash-o"></span></a>
                    </td>
                  </tr>
                <?php endforeach ?>
                </tbody>
              </table>
            </div>
            <div class="tab-pane" id="tab2">
              <button type="button" class="btn btn-primary btn-flat" data-toggle="modal" data-target="#kredit"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp;Kredit</button>
              <h4>Pengeluaran Pribadi</h4>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <td>Tanggal</td>
                    <td>Jumlah Pengeluaran</td>
                    <td>Keterangan</td>
                    <td><span class="fa fa-cogs"></span></td>
                  </tr>
                </thead>
                <tbody id="tabelKredit">
                <?php foreach ($kredit as $rows): ?>
                  <tr>
                    <td><?php echo $rows['tanggal'] ?></td>
                    <td><?php echo $rows['kredit'] ?></td>
                    <td><?php echo $rows['keterangan'] ?></td>
                    <td>
                    <a href="javascript:;" class="btn btn-info btn-flat btn_editKredit" data="<?php echo $rows['id_pengeluaran_pribadi']; ?>"><span class="fa fa-pencil"></span></a>
                    <a href="<?php echo base_url('user_aset/deleteKredit/'.$rows['id_pengeluaran_pribadi']) ?>" class="btn btn-danger btn-flat" onclick="return confirm('apakah anda yakin akan menghapus data ini ?')"><span class="fa fa-trash-o"></span></a>
                  </td>
                  </tr>
                <?php endforeach ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
  </section>
</div>
<div class="modal fade" tabindex="-1" id="debit" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <button type="button"class="close" data-dismiss="modal">&times;</button>
        <h4>Pemasukan Baru</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="<?php echo base_url('user_aset/insertDebit') ?>" method="post">
          <div class="form-group">
            <label for="tgldebit" class="control-label col-md-3">Tanggal Pemasukan</label>
            <div class="col-md-9">
              <input type="date" name="tglDebit" value="" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label for="pemasukan" class="control-label col-md-3">Jumlah Pemasukan</label>
            <div class="col-md-9">
              <input type="text" name="pemasukan" value="" class="form-control" placeholder="Rp.">
            </div>
          </div>
          <div class="form-group">
            <label for="keterangan" class="control-label col-md-3">Keterangan</label>
            <div class="col-md-9">
              <textarea name="keterangan" rows="8" class="form-control"></textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3">

            </div>
            <div class="col-md-9">
              <button type="button" class="btn btn-danger btn-flat" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>&nbsp;Batal</button>
              <button type="submit" class="btn btn-primary btn-flat"><span class="glyphicon glyphicon-save"></span>&nbsp;Simpan</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="edit_debit">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <button type="button"class="close" data-dismiss="modal">&times;</button>
        <h4>Edit Pemasukan</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="" method="post" id="formEditDebit">
          <div class="form-group">
            <label class="control-label col-md-3">Tanggal Pemasukan</label>
            <div class="col-md-9">
              <input type="date" name="editTanggalDebit" value="" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label for="pemasukan" class="control-label col-md-3">Jumlah Pemasukan</label>
            <div class="col-md-9">
              <input type="hidden" name="id_editpemasukan" value="">
              <input type="text" name="edit_pemasukan" value="" class="form-control" placeholder="Rp.">
            </div>
          </div>
          <div class="form-group">
            <label for="keterangan" class="control-label col-md-3">Keterangan</label>
            <div class="col-md-9">
              <textarea name="edit_keteranganDebit" rows="8" class="form-control"></textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3"></div>
            <div class="col-md-9">
              <button type="button" class="btn btn-danger btn-flat" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>&nbsp;Batal</button>
              <button type="submit" class="btn btn-primary btn-flat"><span class="glyphicon glyphicon-refresh"></span>&nbsp;Update</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="kredit">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header bg-primary">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Pengeluaran User</h4>
    </div>
    <div class="modal-body">
      <form class="form-horizontal" action="<?php echo base_url('user_aset/insertKredit'); ?>" method="post" >
        <div class="form-group">
          <label class="control-label col-md-3">Tanggal Pengeluaran</label>
          <div class="col-md-8">
            <input type="date" name="tglKredit" value="" class="form-control">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3">Jumlah Pengeluaran</label>
          <div class="col-md-8">
            <input type="text" name="jumlahKredit" value="" class="form-control" placeholder="Rp.">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3">Keterangan Pengeluaran</label>
          <div class="col-md-8">
            <textarea name="ketKredit" rows="8" cols="80" class="form-control"></textarea>
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-3">
          </div>
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
<div class="modal fade" tabindex="-1" role="dialog" id="editKreditM">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-dialog">
      <div class="modal-header bg-primary">
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
        <h4 class="modal-title">Edit Kredit</h4>
      </div>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="" method="post">
          <div class="form-group">
            <label class="control-label col-md-3">Tanggal Pengeluaran</label>
            <div class="col-md-8">
              <input type="date" name="EtglKredit" value="" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3">Jumlah Pengeluaran</label>
            <div class="col-md-8">
              <input type="text" name="EjumlahKredit" value="" class="form-control" placeholder="Rp.">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3">Keterangan Pengeluaran</label>
            <div class="col-md-8">
              <textarea name="EketKredit" rows="8" cols="80" class="form-control"></textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3">
            </div>
            <div class="col-md-8">
              <button type="button" class="btn btn-danger btn-flat" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>&nbsp;Batal</button>
              <button type="submit" class="btn btn-primary btn-flat"><span class="glyphicon glyphicon-refresh"></span>&nbsp;Update</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    $('#tabelKredit').on('click','.btn_editKredit', function () {
      $('#editKreditM').modal('show');
    });

    // untuk menampilkan info
    <?php if ($this->session->flashdata('sukses')): ?>
      $('.alert-success').html('<?php echo $this->session->flashdata('sukses') ?>').fadeIn().delay(2000).fadeOut('slow');
    <?php endif ?>
    <?php if ($this->session->flashdata('gagal')): ?>
      $('.alert-danger').html('<?php echo $this->session->flashdata('gagal') ?>').fadeIn().delay(2000).fadeOut('slow');
    <?php elseif($this->session->flashdata('hapus')): ?>
      $('.alert-danger').html('<?php echo $this->session->flashdata('hapus') ?>').fadeIn().delay(2000).fadeOut('slow');
    <?php endif ?>

  });
</script>
<script type="text/javascript">
  $(function () {
        $('#tabel_debit').on('click', '.edit_debitU', function(){
      var id = $(this).attr('data');
      $('#edit_debit').modal('show');
      $('#formEditDebit').attr('action','<?php echo base_url('user_aset/updateDebit') ?>');
      $.ajax({
        type : 'ajax',
        method : 'get',
        url : '<?php echo base_url('user_aset/editDebit')?>',
        data : {id: id},
        async : false,
        dataType : 'json',
        success : function(data){
            $('input[name=editTanggalDebit]').val(data.tanggal);
          $('input[name=edit_pemasukan').val(data.debit);
          $('input[name=id_editpemasukan]').val(data.id_pengeluaran_pribadi);
          $('textarea[name=edit_keteranganDebit]').val(data.keterangan);

        },
        error : function(fafa){
          console.log(fafa);
        }
      });
    });
  });
</script>