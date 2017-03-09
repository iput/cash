  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        personil Proyek
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
        <button type="button" class="btn btn-primary btn-flat" data-toggle="modal" data-target="#tambah_pp"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp;Tambah Personil Proyek</button>
        <h3>Data Personil Proyek</h3>
          <table class=" table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <td>Nama Project</td>
                <td>Nama Personil</td>
                <td>Level</td>
                <td><span class="glyphicon glyphicon-cog"></span></td>
              </tr>
            </thead>
            <tbody id="tabel_pp">
              <?php foreach ($isi_table as $tabel):?>
              <tr>
                <td><?php echo $tabel['nama_project']?></td>
                <td><?php echo $tabel['nama_user']?></td>
                <td><?php echo $tabel['nama_level']?></td>               
                <td>
                  <a href="javascript:;" class="btn btn-info btn-flat btn_edit_pp" data="<?php echo $tabel['id_project_personil'];?>"><span class="fa fa-pencil"></span></a>
                  <a href="<?= base_url()?>c_personil_proyek/delete_personil_project/<?= $tabel['id_project_personil']?>" class="btn btn-danger btn-flat" onclick="return confirm('Anda yakin akan menghapus record ?');"><span class="fa fa-trash-o"></span></a>
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
  <div class="modal fade" tabindex="-1" id="tambah_pp" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-aqua">
          <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
          <h3>Tambah personi Proyek</h3>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" method="post" action="<?php echo base_url('c_personil_proyek/add_personil_project');?>">
            <div class="form-group">
              <label class="control-label col-md-3">Nama Proyek</label>
              <div class="col-md-6">
                <select class="form-control" name="cb_proyek">
                  <option value="null">Pilih Proyek</option>
                  <?php foreach ($nama_proyek as $proyek):?>
                  <option value="<?php echo $proyek['id_project'] ?>"><?php echo $proyek['nama_project']?></option>
                  <?php endforeach ?>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Username</label>
              <div class="col-md-6">
                <select class="form-control" name="cb_userpp">
                  <option value="null">Pilih Pengguna proyek</option>
                  <?php foreach ($nama_user as $user):?>
                  <option value="<?php echo $user['id_user'] ?>"><?php echo $user['nama_user']?></option>
                  <?php endforeach ?>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Level akses</label>
              <div class="col-md-6">
                <select class="form-control" name="cb_levelakses">
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
                <button type="button" class="btn btn-danger btn-flat" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>&nbsp;Batal</button>
                <button type="submit" class="btn btn-default btn-flat"><span class="glyphicon glyphicon-save"></span>&nbsp;Simpan</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

<!-- Modal Edit-->
  <div class="modal fade" tabindex="-1" id="edit_pp" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-aqua">
          <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
          <h3>Edit Personil Proyek</h3>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" method="post" action="<?php echo base_url('c_personil_proyek/update_personil_project')?>">
          <input type="hidden" name="edit_idpp">
            <div class="form-group">
              <label class="control-label col-md-3">Nama Proyek</label>
              <div class="col-md-6">
                <select class="form-control" name="edit_cb_proyek">
                  <option value="null">Pilih Proyek</option>
                  <?php foreach ($nama_proyek as $proyek):?>
                  <option value="<?php echo $proyek['id_project'] ?>"><?php echo $proyek['nama_project']?></option>
                  <?php endforeach ?>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Username</label>
              <div class="col-md-6">
                <select class="form-control" name="edit_cb_userpp">
                  <option value="null">Pilih Pengguna proyek</option>
                  <?php foreach ($nama_user as $user):?>
                  <option value="<?php echo $user['id_user'] ?>"><?php echo $user['nama_user']?></option>
                  <?php endforeach ?>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Level akses</label>
              <div class="col-md-6">
                <select class="form-control" name="edit_cb_levelakses">
                  <option>Pilih Hak Akses</option>
                  <?php foreach ($level as $lv):?>
                  <option value="<?php echo $lv['id_level'] ?>"><?php echo $lv['nama_level']?></option>
                <?php endforeach ?>
                </select>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-3"></div>
              <div class="col-md-6">
                <button type="button" class="btn btn-danger btn-flat" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>&nbsp;Batal</button>
                <button type="submit" class="btn btn-default btn-flat" ><span class="glyphicon glyphicon-refresh"></span>&nbsp;perbarui</button>
              </div>
            </div>
          </form>          
        </div>
      </div>
    </div>
  </div>