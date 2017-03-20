<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.6
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>
</div>
<!-- ./wrapper -->
<<<<<<< HEAD
<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url('assets/plugins/jQuery/jquery-2.2.3.min.js'); ?>"></script>
<!-- Select2-->
<script src="<?php echo base_url('assets/plugins/select2/select2.full.min.js')?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url('assets/plugins/slimScroll/jquery.slimscroll.min.js'); ?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets/plugins/fastclick/fastclick.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/dist/js/app.min.js'); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/dist/js/demo.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url()."assets/plugins/jQueryMaskMoney/jquery.maskMoney.min.js"; ?>"></script>
=======

>>>>>>> a8b3132bcdd04b9564c0b47a2aef18601ee63689
<script type="text/javascript">
	$(function() {
		$(".select2").select2();
		$('#tabel_personil').on('click', '.btn_edit_personil', function(){
			var id = $(this).attr('data');
			$('#update_personil').modal('show');
			$.ajax({
				type: 'ajax',
				url: '<?php echo base_url()?>pm_personil/get_project_personil',
				method: 'get',
				data : {id, id},
				async: false,
				dataType: 'json',
				success: function(data){
					console.log(data);
					for (i=0;i<data.length;i++){
						$('input[name=edit_id_pp]').val(data[i].id_project_personil);
						$('#edit_nama_proyek').val(data[i].id_project);
						$('#edit_nama_pengguna').val(data[i].id_user);
						$('#cb_levelakses').val(data[i].id_level_user);
					}
				},
				error: function(fafa){
					console.log(fafa);
					alert('gagal tampil');
				}

			});
		});

		$('#tabel_pp').on('click', '.btn_edit_pp', function(){
			$('#edit_pp').modal('show');
		});

		$('#tabel_proyek').on('click', '.btn_edit_proyek', function(){
			$('#edit_proyek').modal('show');
		});
		$('#tabel_anggarandana').on('click', '.btn_edit_anggaranP', function(){
			$('#edit_anggaran').modal('show');
		});
	});
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#jumlah_anggaran').maskMoney({prefix: 'Rp. ', thousands: '.', decimal: ',', precision: 0});
		$('#edit_jumlah_anggaran').maskMoney({prefix: 'Rp. ', thousands: '.', decimal: ',', precision: 0});
		$('#jumlah_pengeluaran').maskMoney({prefix: 'Rp. ', thousands: '.', decimal: ',', precision: 0});
		$('#jumlah_pengeluaran').maskMoney({prefix: 'Rp. ', thousands: '.', decimal: ',', precision: 0});
	});
</script>
</body>
</html>
