  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pengeluaran Proyek
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
        <button type="button" class="btn btn-primary btn-flat" data-toggle="modal" data-target="#pengeluaran_proyek"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp;Tambah pengeluaran</button>
        <h3>Data Pengeluaran</h3>
          <table class=" table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <td>Nama Project</td>
                <td>Nama Anggaran</td>
                <td>Nama Pengeluaran</td>
                <td>Jumlah Pengeluaran</td>
                <td>Keterangan</td>
                <td><span class="glyphicon glyphicon-cog"></span>&nbsp;Action</td>
              </tr>
            </thead>
            <tbody id="tabel_pengeluaran">
              <?php foreach($all_pengeluaran as $p):?>
              <tr>
                <td><?php echo $p['nama_project']?></td>
                <td><?php echo $p['nama_anggaran']?></td>
                <td><?php echo $p['nama_pengeluaran']?></td>
                <td><?php echo $p['jumlah_pengeluaran']?></td>
                <td><?php echo $p['keterangan_pengeluaran']?></td>                
                <td>
                  <a href="javascript:;" class="btn btn-info btn-xs btn_edit_pengeluaran" data="<?php echo $p['id_pengeluaran_project'];?>"><span class="fa fa-pencil"></span></a>
                  <a href="#" class="btn btn-danger btn-xs" onclick="return confirm('Anda yakin ingin menghapus data ini ?');"><span class="fa fa-trash-o"></span></a>
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
  
  <div class="modal fade" tabindex="-1" role="dialog" id="pengeluaran_proyek">   
  <div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header bg-aqua">
      <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
      <h3>Tambah Pengeluaran proyek</h3>
    </div>
    <div class="modal-body">
      <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="<?php echo base_url('pm_ppengeluaran/add_pengeluaran')?>">
        <div class="form-group">
          <label class="control-label col-md-4">Nama Proyek</label>
          <div class="col-md-8">
            <select class="form-control" name="nama_project" id="nama_project">
              <option>Pilih nama proyek</option>
              <?php foreach($nm_project as $proyek):?>
                <option value="<?php echo $proyek['id_project']?>"><?php echo $proyek['nama_project']?></option>
              <?php endforeach ?>  
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-4">Nama Anggaran</label>
          <div class="col-md-8">
            <select class="form-control" name="nama_anggaran" id="nama_anggaran">
            </select>
          </div>
        </div>        
        <div class="form-group">
          <label class="control-label col-md-4">Nama Pengeluaran</label>
          <div class="col-md-8">
            <input type="text" name="nama_pengeluaran" class="form-control" placeholder="nama pengeluaran" maxlength="20">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-4">Jumlah Pengeluaran</label>
          <div class="col-md-8">
            <input type="text" name="jumlah_pengeluaran" class="form-control" id="jumlah_pengeluaran">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-4">Keterangan Pengeluaran</label>
          <div class="col-md-8">
            <textarea class="form-control" name="ket_pengeluaran"></textarea>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-4">Bukti Pengeluaran</label>
            <div class="col-md-8">
            <input type="file" name="userfile" id="userfile">
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-4"></div>
          <div class="col-md-8">
            <button type="button" class="btn btn-danger btn-flat" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>&nbsp;Batal</button>
            <button type="submit" class="btn btn-info btn-flat"><span class="glyphicon glyphicon-save"></span>&nbsp;Simpan</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  </div>
  </div>

<!-- Modal Edit -->
  <div class="modal fade" tabindex="-1" role="dialog" id="edit_pengeluaran_proyek">   
  <div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header bg-aqua">
      <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
      <h3>Tambah Pengeluaran proyek</h3>
    </div>
    <div class="modal-body">
      <form class="form-horizontal" method="POST" action="">
        <div class="form-group">
          <label class="control-label col-md-4">Nama Proyek</label>
          <div class="col-md-8">
            <select class="form-control" name="edit_nm_proyek" id="edit_nm_proyek">
              <option value="0">Pilih nama proyek</option>
              <?php foreach($nm_project as $proyek):?>
                <option value="<?php echo $proyek['id_project']?>"><?php echo $proyek['nama_project']?></option>
              <?php endforeach ?> 
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-4">Nama Anggaran</label>
          <div class="col-md-8">
            <select class="form-control" name="edit_nm_anggaran" id="edit_nm_anggaran">
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-4">Nama Pengeluaran</label>
          <div class="col-md-8">
            <input type="text" name="edit_nama_pengeluaran" class="form-control" placeholder="nama pengeluaran" maxlength="20">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-4">Jumlah Pengeluaran</label>
          <div class="col-md-8">
            <input type="text" name="edit_jumlah_pengeluaran" class="form-control" id="edit_jumlah_pengeluaran">
          </div>
        </div>        
        <div class="form-group">
          <label class="control-label col-md-4">Keterangan Pengeluaran</label>
          <div class="col-md-8">
            <textarea class="form-control" name="ket_pengeluaran"></textarea>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-4">Bukti Pengeluaran</label>
          <div class="col-md-8">
            <input type="file" name="userfile" id="userfile">
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-4"></div>
          <div class="col-md-8">
            <button type="button" class="btn btn-danger btn-flat" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>&nbsp;Batal</button>
            <button type="submit" class="btn btn-info btn-flat"><span class="glyphicon glyphicon-save"></span>&nbsp;Simpan</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  </div>
  </div>
  <script type="text/javascript">
    $(function () {
      $.ajaxSetup({
            type: "POST",
            url: "<?php echo base_url("pm_ppengeluaran/get_anggaran"); ?>",
            cache: false,
        });

        $("#nama_project").change(function () {
            var nilai = $(this).val();
            if (nilai > 0) {
                $.ajax({
                    data: {
                        modul: 'anggaran',
                        id: nilai
                    },
                    success: function (respond) {
                        $("#nama_anggaran").html(respond);

                    }
                })
            }
        });
        

         $('#tabel_pengeluaran').on('click', '.btn_edit_pengeluaran', function(){
          var id = $(this).attr('data');
          $('#edit_pengeluaran_proyek').modal('show');
          $.ajax({
            type: 'ajax',
            url: '<?php echo base_url()?>pm_ppengeluaran/get_pengeluaran',
            method: 'get',
            data: {id, id},
            async: false,
            dataType: 'json',
            success: function(data){
              console.log(data);
              for (i=0;i<data.length;i++){
                $('#edit_nm_proyek').val(data[i].id_project);
                $('input[name=edit_nama_pengeluaran]').val(data[i].nama_pengeluaran);
                $('input[name=edit_jumlah_pengeluaran]').val(data[i].jumlah_pengeluaran);
                $('textarea[name=ket_pengeluaran]').val('keterangan_pengeluaran');

              }
            },
            error : function(fafa){
              console.log(fafa);
            }
          });
        });
        $("#edit_nm_proyek").change(function(){
          var nilai = $(this).val();
            if (nilai > 0) {
                $.ajax({
                    data: {
                        modul: 'anggaran',
                        id: nilai
                    },
                    success: function (respond) {
                        $("#edit_nm_anggaran").html(respond);

                    }
                })
            }
        });
        //Edit 
       
    });
  </script>

  <script type="text/javascript">
    $(document).ready(function(){
      $('#jumlah_pengeluaran').maskMoney({prefix: 'Rp. ', thousands: '.', decimal: ',', precision: 0});
      $('#edit_jumlah_pengeluaran').maskMoney({prefix: 'Rp. ', thousands: '.', decimal: ',', precision: 0});
    });
  </script>