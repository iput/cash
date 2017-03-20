  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Personil
        <small>Petty Cash</small>
      </h1>


    </section>

    <!-- Main content -->
    <section class="content">


      <!-- Default box -->
      <div class="box">
        <div class="box-body">
      <div class="row">
        <div class="col-xs-12">
        <button type="button" class="btn btn-primary btn-flat" data-toggle="modal" data-target="#tambah_personil"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp;Tambah Data Personil</button>
        <h2>Data Personil Petty Cash</h2>

          <table class=" table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <td>Nama Proyek</td>
                <td>Nama User</td>
                <td>Level</td>
                <td><span class="glyphicon glyphicon-cog"></span></td>
              </tr>
            </thead>
            <tbody id="tabel_personil">
               <?php foreach ($project_personil as $pp):?>
              <tr>
                <td><?php echo $pp['nama_project'] ?></td>
                <td><?php echo $pp['nama_user']?></td>
                <td><?php echo $pp['nama_level']?></td>
                
                <td>
                  <a href="javascript:;" class="btn btn-info btn-flat btn_edit_personil" data="<?php echo $pp['id_project_personil'];?>"><span class="fa fa-pencil"></span></a>
                  <a href="#" class="btn btn-danger btn-flat" onclick="return confirm('Yakin akan menghapus data ?');"><span class="fa fa-trash-o"></span></a>
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

  <!-- Modal Tambah Data Personil Proyek-->
  <div class="modal fade" id="tambah_personil" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-aqua">
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
        <h3>Tambah personil proyek</h3>        
      </div>      
      <div class="modal-body">
        <form class="form-horizontal" method="post" action="<?php echo base_url('pm_personil/add_project_personil')?>">
          <div class="form-group">
            <label class="control-label col-md-3">Nama Proyek</label>
            <div class="col-md-8">
              <select class="form-control" name="nama_proyek">
                <option>Pilih Proyek</option>
                <?php foreach($nama_proyek as $proyek):?>
                  <option value="<?php echo $proyek['id_project']?>">
                  <?php echo $proyek['nama_project']?>  
                  </option>
                <?php endforeach?>
              </select>
            </div>
          </div>
           <div class="form-group">
                <label class="control-label col-md-3">Nama Personil</label>
                <div class="col-md-8">
                <select class="form-control select2" name ="cb_personil[]" multiple="multiple" data-placeholder="Pilih Personil" style="width: 100%">
                <?php foreach($nama_personil as $personil):?>
                <option value="<?php echo $personil['id_user']?>">
                  <?php echo $personil['nama_user']?>
                </option>
                <?php endforeach ?>
                </select>
                </div>
              </div>
          <!-- select 2-->
          <div class="form-group">
            <div class="col-md-3"></div>
            <div class="col-md-8">
              <button type="button" data-dismiss="modal" class="btn btn-danger btn-flat"><span class="glyphicon glyphicon-remove"></span>&nbsp;Batal</button>
              <button type="submit" class="btn btn-primary btn-flat"><span class="glyphicon glyphicon-save"></span>&nbsp;Simpan</button>              
            </div>
          </div>
        </form>        
      </div>
    </div>
  </div>
  </div>
  

  <!-- Modal Update Data Personil Proyek-->
  <div class="modal fade" id="update_personil" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-aqua">
          <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
          <h3>Edit data Personil</h3>
        </div>
        <div class="modal-body">
        <form class="form-horizontal" method="post" action="<?php echo base_url('pm_personil/update_project_personil')?>">
        <input type="hidden" name="edit_id_pp">
          <div class="form-group">
            <label class="control-label col-md-3">Nama Proyek</label>
            <div class="col-md-6">
              <select class="form-control" name="edit_nama_proyek" id ="edit_nama_proyek">
                <option>Pilih Proyek</option>
                <?php foreach($nama_proyek as $proyek):?>
                  <option value="<?php echo $proyek['id_project']?>">
                  <?php echo $proyek['nama_project']?>  
                  </option>
                <?php endforeach?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3">Pengguna Proyek</label>
            <div class="col-md-6">
              <select class="form-control" name="edit_nama_pengguna" id="edit_nama_pengguna">
                <option>Pilih Pengguna</option>
                <?php foreach($nama_personil as $personil):?>
                <option value="<?php echo $personil['id_user']?>">
                  <?php echo $personil['nama_user']?>
                </option>
                <?php endforeach ?>
              </select>
            </div>
          </div>
            <div class="form-group">
              <label class="control-label col-md-3">Level akses</label>
              <div class="col-md-6">
                <select class="form-control" name="cb_levelakses" id="cb_levelakses">
                  <option>Hak Akses</option>
                  <?php foreach ($level as $lv):?>
                  <option value="<?php echo $lv['id_level'] ?>"><?php echo $lv['nama_level']?></option>
                <?php endforeach ?>
                </select>
              </div>
            </div>
          <div class="form-group">
            <div class="col-md-3"></div>
            <div class="col-md-6">
              <button type="button" data-dismiss="modal" class="btn btn-danger btn-flat"><span class="glyphicon glyphicon-remove"></span>&nbsp;Batal</button>
              <button type="submit" class="btn btn-primary btn-flat"><span class="glyphicon glyphicon-save"></span>&nbsp;Perbarui</button>              
            </div>
          </div>
        </form>      
        </div>
      </div>
    </div>
  </div>
  
