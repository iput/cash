<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.6
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>
</div>
<!-- ./wrapper -->
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
		
	});
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#jumlah_pengeluaran').maskMoney({prefix: 'Rp. ', thousands: '.', decimal: ',', precision: 0});
		$('#jumlah_pengeluaran').maskMoney({prefix: 'Rp. ', thousands: '.', decimal: ',', precision: 0});
	});
</script>
</body>
</html>
