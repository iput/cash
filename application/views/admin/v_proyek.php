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
        <div class="box-body">
      <div class="row">

        <div class="col-md-12">
          <!-- Custom Tabs (Pulled to the right) -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1-1" data-toggle="tab">Data Proyek</a></li>
              <li><a href="#tab_2-2" data-toggle="tab">Tambahan Anggaran</a></li>
              <li class="pull-right header"><i class="fa fa-th"></i> Custom Tabs</li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1-1">
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
            <?php foreach ($data_project as $data):?>
            <?php 
            $tgl_mulai = $data['tanggal_mulai'];
            $tgl_selesai = $data['tanggal_selesai'];
            $biaya = $data['anggaran'];
            ?>
              <tr>
                <td><?php echo $data['id_project']?></td>
                <td><?php echo $data['nama_project']?></td>
                <td><?php echo "Rp. ".number_format($biaya,2,',','.')?></td>
                <td><?php echo date('d F Y', strtotime($tgl_mulai))?></td>
                <td><?php echo date('d F Y', strtotime($tgl_selesai))?></td>
                <td>
                  <a href="javascript:;" class="btn btn-info btn-xs btn_edit_proyek" data = "<?php echo $data['id_project'];?>"><span class="fa fa-pencil"></span></a>
                  <a href="<?= base_url()?>c_proyek/delete_project/<?= $data['id_project']?>" class="btn btn-danger btn-xs" onclick="return confirm('Ada yakin ingin menghapus data ini ?');"><span class="fa fa-trash-o"></span></a>
                </td>
              </tr>
             <?php endforeach ?>
            </tbody>
          </table>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2-2">
              <button type="button" class="btn btn-primary btn-flat" data-toggle="modal" data-target="#tambah_anggaran"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp;Tambah Suntikan Dana</button>
              <h3>Data Suntikan Anggaran Proyek</h3>
          <table class=" table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <td>Nama Proyek</td>
                <td>Sumber Anggaran</td>
                <td>Jumlah Anggaran</td>
                <td>Waktu Masuk</td>
                <td><span class="glyphicon glyphicon-cog"></span></td>
              </tr>
            </thead>
            <tbody id="tabel_anggarandana">
            <?php foreach ($suntikan_anggaran as $key):?>
              <tr>
                <td><?php echo $key['nama_project']?></td>
                <td><?php echo $key['nama_tambahan']?></td>
                <td><?php echo "Rp. ".number_format($key['jumlah_tambahan'],2,',','.')?></td>
                <td><?php echo date('d F Y', strtotime($key['waktu_tambahan']))?></td>
                <td>
                  <a href="javascript:;" class="btn btn-info btn-xs btn_edit_anggaranP" data ="<?php echo $key['id_tambahan'];?>"><span class="fa fa-pencil"></span></a>
                  <a href="<?= base_url()?>c_proyek/delete_suntikan/<?= $key['id_tambahan']?>" class="btn btn-danger btn-xs" onclick="return confirm('Ada yakin ingin menghapus data terkait ?');"><span class="fa fa-trash-o"></span></a>
                </td>
              </tr>
               <?php endforeach ?>
            </tbody>
          </table>
              </div>
              <!-- /.tab-pane -->
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
  
<div class="modal fade" tabindex="-1" role="dialog" id="tambah_proyek">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-aqua">
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
        <h3>Tambah Proyek</h3>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="post" action="<?php echo base_url('c_proyek/add_project')?>">
          <div class="form-group">
            <label class="control-label col-md-3">Nama Proyek</label>
            <div class="col-md-6">
              <input type="text" name="nama_proyek" class="form-control" placeholder="nama proyek" required="" maxlength="30">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3">Anggaran Proyek</label>
            <div class="col-md-6">
              <input type="text" name="anggaran_proyek" id= "anggaran_proyek" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3">Durasi Proyek</label>
            <div class="col-md-6">
              <input type="text" name="durasi_proyek" class="form-control" placeholder="waktu dalam bentuk bulan" onkeypress="return isNumberKey(event)" required="" maxlength="3" id="durasi_proyek">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3">Tanggal Mulai</label>
            <div class="col-md-6">
              <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" name="tgl_mulai" id ="tgl_mulai" value="<?php echo date('Y-m-d H:i:s');?>" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
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
                  <input type="date" name="tgl_selesai" id ="tgl_selesai" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
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

<!--Modal Edit Data Proyek-->
<div class="modal fade" tabindex="-1" role="dialog" id="edit_proyek">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-aqua">
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
        <h3>Edit proyek</h3>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="post" action="<?php echo base_url('c_proyek/update_project')?>">
        <input type="hidden" name="edit_idproyek">
          <div class="form-group">
            <label class="control-label col-md-3">Nama Proyek</label>
            <div class="col-md-6">
              <input type="text" name="edit_nama_proyek" class="form-control" placeholder="nama proyek">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3">Anggaran Proyek</label>
            <div class="col-md-6">
              <input type="text" name="edit_anggaran_proyek" id ="edit_anggaran_proyek" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3">Durasi Proyek</label>
            <div class="col-md-6">
              <input type="text" name="durasi_proyek" class="form-control">
            </div>
          </div>          
          <div class="form-group">
            <label class="control-label col-md-3">Tanggal Mulai</label>
            <div class="col-md-6">
              <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control" name ="edit_tgl_mulai" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
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
                  <input type="date" class="form-control" name ="edit_tgl_selesai" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
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

<!-- Modal Tambah Suntikan Dana-->
<div class="modal fade" tabindex="-1" role="dialog" id="tambah_anggaran">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
      <h3>Suntikan Dana Proyek</h3>
    </div>
    <div class="modal-body">
      <form class="form-horizontal" method="post" action="<?php echo base_url('c_proyek/add_suntikan_anggaran');?>">
        <div class="form-group">
          <label class="control-label col-md-3">Nama Proyek</label>
          <div class="col-md-6">
            <select class="form-control" name="nama_proyek">
            <option value="null">Pilih Nama proyek</option>
            <?php foreach ($data_in as $data):?>            
              <option value="<?php echo $data['id_project']?>"><?php echo $data['nama_project']?></option>
              <?php endforeach ?>              
            </select>
          </div>
        </div>      
        <div class="form-group">
          <label class="control-label col-md-3">Sumber Anggaran</label>
          <div class="col-md-6">
            <input type="text" name="nama_anggaran" class="form-control" placeholder="Sumber Anggaran Proyek" maxlength="40" required="">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3">Jumlah Anggaran</label>
          <div class="col-md-6">
            <input type="text" name="jumlah_anggaran" class="form-control" id="jumlah_anggaran" required="">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3">Waktu Input Anggaran</label>
          <div class="col-md-6">
            <input type="date" name="waktu_input" class="form-control" required="" value="<?php echo date('Y-m-d H:i:s');?>">
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

<!-- Modal Edit Suntikan Dana Proyek-->
<div class="modal fade" tabindex="-1" role="dialog" id="edit_anggaran">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
      <h3>Edit Suntikan Anggaran Proyek</h3>
    </div>
    <div class="modal-body">
      <form class="form-horizontal" method="post" action="<?php echo base_url('c_proyek/update_suntikan');?>">
      <input type="hidden" name="edit_idsuntikan">
        <div class="form-group">
          <label class="control-label col-md-3">Nama Proyek</label>
          <div class="col-md-6">
            <select class="form-control" name="edit_nama_proyek" id="edit_nama_proyek">
              <option value="null">Pilih Nama proyek tujuan anggaran</option>
              <?php foreach ($data_project as $data):?>            
              <option value="<?php echo $data['id_project']?>"><?php echo $data['nama_project']?></option>
              <?php endforeach ?>
            </select>
          </div>
        </div>      
        <div class="form-group">
          <label class="control-label col-md-3">Sumber Anggaran</label>
          <div class="col-md-6">
            <input type="text" name="edit_nama_anggaran" class="form-control" placeholder="Nama Tambahan anggaran">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3">Jumlah Anggaran</label>
          <div class="col-md-6">
            <input type="text" name="edit_jumlah_anggaran" class="form-control" required="" id="edit_jumlah_anggaran">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3">Waktu Input Anggaran</label>
          <div class="col-md-6">
            <input type="date" name="waktu_input" class="form-control">
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
<script type="text/javascript">
  $(function(){
    $('#tabel_proyek').on('click', '.btn_edit_proyek', function(){
            var id = $(this).attr('data');
      $('#edit_proyek').modal('show');            
            $.ajax({
                type : 'ajax',
                url : '<?php echo base_url()?>c_proyek/get_project',
                method : 'get',
                data : {id : id},
                async : false,
                dataType : 'json',
                success : function(data){
                    console.log(data);
                    for (i=0;i<data.length;i++){
                    $('input[name=edit_idproyek]').val(data[i].id_project);
                    $('input[name=edit_nama_proyek]').val(data[i].nama_project);
                    $('input[name=edit_anggaran_proyek]').val(data[i].anggaran);
                    $('input[name=edit_tgl_mulai]').val(data[i].tanggal_mulai);
                    $('input[name=edit_tgl_selesai]').val(data[i].tanggal_selesai);    
                    }
                },
                error : function(data){
                    console.log(data);
                    alert('gagal')
                }
            });
    });

        $('#tabel_anggarandana').on('click', '.btn_edit_anggaranP', function(){
            var id = $(this).attr('data');
      $('#edit_anggaran').modal('show');
            $.ajax({
                type : 'ajax',
                url : '<?php echo base_url()?>c_proyek/get_suntikan',
                method : 'get',
                data : {id : id},
                async : false,
                dataType : 'json',
                success : function(data){
                    console.log(data);
                    for (i=0;i<data.length;i++){
                    $('input[name=edit_idsuntikan]').val(data[i].id_tambahan);
                    $('#edit_nama_proyek').val(data[i].id_project);
                    $('input[name=edit_nama_anggaran]').val(data[i].nama_tambahan);
                    $('input[name=edit_jumlah_anggaran]').val(data[i].jumlah_tambahan);
                    $('input[name=waktu_input]').val(data[i].waktu_tambahan);    
                    }
                },
                error : function(data){
                    console.log(data);
                    alert('gagal');
                }
        });


    });
  });
</script>