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
        <div class="box-body">
      <div class="row">
        <div class="col-xs-12">
        <button type="button" class="btn btn-primary btn-flat" data-toggle="modal" data-target="#tambah_anggaran"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp;Tambah anggaran</button>
        <h3>Data Anggaran Pengeluaran</h3>
          <table class=" table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <td>Nama Proyek</td>
                <td>Nama Anggaran</td>
                <td>Jumlah Anggaran</td>
                <td><span class="glyphicon glyphicon-cog"></span></td>
              </tr>
            </thead>
            <tbody id="tabel_anggarandana">
            <?php foreach($nm_anggaran as $ag):?>
              <tr>
                <td><?php echo $ag['nama_project']?></td>
                <td><?php echo $ag['nama_pengeluaran']?></td>
                <td><?php echo "Rp. ".number_format($ag['anggaran'],2,',','.') ?></td>
                <td>
                  <a href="javascript:;" class="btn btn-info btn-flat btn_edit_anggaranP" data="<?php echo $ag['id_anggaran_pengeluaran'];?>"><span class="fa fa-pencil"></span></a>
                  <a href="#" class="btn btn-danger btn-flat" onclick="return confirm('Ada yakin ingin menghapus data terkait ?');"><span class="fa fa-trash-o"></span></a>
                </td>
              </tr>
               <?php endforeach ?>
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
  
  <!-- Modal Tambah Anggaran -->
<div class="modal fade" tabindex="-1" role="dialog" id="tambah_anggaran">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header bg-aqua">
      <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
      <h3>Tambah Anggaran Pengeluaran</h3>
    </div>
    <div class="modal-body">
      <form class="form-horizontal" method="post" action="<?php echo base_url('pm_aproyek/add_anggaran')?>">
        <div class="form-group">
          <label class="control-label col-md-3">Nama Proyek</label>
          <div class="col-md-8">
            <select class="form-control" name="nama_proyek">
              <option value="null">Pilih Nama Proyek</option>
              <?php foreach($nama_proyek as $proyek): ?>
                <option value="<?php echo $proyek['id_project']?>"><?php echo $proyek['nama_project']?></option>
              <?php endforeach ?>
            </select>
          </div>
        </div>      
        <div class="form-group">
          <label class="control-label col-md-3">Nama Anggaran</label>
          <div class="col-md-8">
            <input type="text" name="nama_anggaran" class="form-control" placeholder="Nama Tambahan anggaran" maxlength="40" required="">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3">Jumlah Anggaran</label>
          <div class="col-md-8">
            <input type="text" name="jumlah_anggaran" id ="jumlah_anggaran" class="form-control">
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-3"></div>
          <div class="col-md-8">
            <button type="button" data-dismiss="modal" class="btn btn-danger btn-flat"><span class="glyphicon glyphicon-remove"></span>&nbsp;Batal</button>
            <button type="submit" class="btn btn-info btn-flat"><span class="glyphicon glyphicon-save"></span>&nbsp;Simpan</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>  
</div>

<!-- Modal Edit Anggaran-->
<div class="modal fade" tabindex="-1" role="dialog" id="edit_anggaran">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header bg-aqua">
      <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
      <h3>Perbarui Anggaran Pengeluaran</h3>
    </div>
    <div class="modal-body">
      <form class="form-horizontal" method="post" action="<?php echo base_url('pm_aproyek/update_anggaran_pengeluaran')?>">
      <input type="hidden" name="edit_ap">
        <div class="form-group">
          <label class="control-label col-md-3">Nama Proyek</label>
          <div class="col-md-8">
            <select class="form-control" name="edit_nama_proyek" id="edit_nama_proyek">
              <option value="null">Pilih Nama Proyek</option>
              <?php foreach($nama_proyek as $proyek): ?>
                <option value="<?php echo $proyek['id_project']?>"><?php echo $proyek['nama_project']?></option>
              <?php endforeach ?>
            </select>
          </div>
        </div>      
        <div class="form-group">
          <label class="control-label col-md-3">Nama Anggaran</label>
          <div class="col-md-8">
            <input type="text" name="edit_nama_anggaran" class="form-control" placeholder="Nama Tambahan anggaran" maxlength="40" required="">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3">Jumlah Anggaran</label>
          <div class="col-md-8">
            <input type="text" name="edit_jumlah_anggaran" class="form-control" id="edit_jumlah_anggaran">
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-3"></div>
          <div class="col-md-8">
            <button type="button" data-dismiss="modal" class="btn btn-danger btn-flat"><span class="glyphicon glyphicon-remove"></span>&nbsp;Batal</button>
            <button type="submit" class="btn btn-info btn-flat"><span class="glyphicon glyphicon-refresh"></span>&nbsp;Perbarui</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
<script type="text/javascript">
 $(function(){
$('#tabel_anggarandana').on('click', '.btn_edit_anggaranP', function(){
      var id = $(this).attr('data');
      $('#edit_anggaran').modal('show');
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url()?>pm_aproyek/get_anggaran',
        method: 'get',
        data: {id : id},
        async: false,
        dataType: 'json',
        success: function(data){
          console.log(data);
          for(i=0;i<data.length;i++){
            $('input[name=edit_ap]').val(data[i].id_anggaran_pengeluaran);
            $('#edit_nama_proyek').val(data[i].id_project);
            $('input[name=edit_nama_anggaran]').val(data[i].nama_pengeluaran);
            $('input[name=edit_jumlah_anggaran]').val(data[i].anggaran);
          }
        },
        error: function(fafa){
          console.log(fafa);
          alert('gagal');
        }
      });

    });
 }); 
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#jumlah_anggaran').maskMoney({prefix: 'Rp. ', thousands: '.', decimal: ',', precision: 0});
    $('#edit_jumlah_anggaran').maskMoney({prefix: 'Rp. ', thousands: '.', decimal: ',', precision: 0});
  });
</script>