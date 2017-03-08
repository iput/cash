<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.6
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>
</div>
<!-- ./wrapper -->
<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url('assets/plugins/jQuery/jquery-2.2.3.min.js'); ?>"></script>
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
<script type="text/javascript" src="<?php echo base_url() . "assets/plugins/jQueryMaskMoney/jquery.maskMoney.min.js"; ?>"></script>
<script type="text/javascript">
	$(function() {
		$('#tabel_personil').on('click', '.btn_edit_personil', function(){
			var id = $(this).attr('data');
			$('#update_personil').modal('show');
			$.ajax({
                type: 'ajax',
                url: '<?php echo base_url() ?>c_personil/get_personil',
                method: 'get',
                data: {id: id},
                async: false,
                dataType: 'json',
                success: function (data) {
                    console.log(data);
                    for (i = 0; i < data.length; i++) {
//                    console.log(data[i].username);
                        $('input[name=edit_iduser]').val(data[i].id_user);
                        $('input[name=edit_nama]').val(data[i].nama_user);
                        $('textarea[name=edit_alamat]').val(data[i].alamat);
                        $('input[name=edit_nohp]').val(data[i].no_hp);
                        $('input[name=edit_email]').val(data[i].email);
                    }
                },
                error: function () {
                    alert('gagal tampil');
                }
            });
		});

		$('#tabel_pp').on('click', '.btn_edit_pp', function(){
			$('#edit_pp').modal('show');
		});

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
                    $('input[name=edit_nama_proyek]').val(data[i].id_project);
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
<script type="text/javascript">
	$(document).ready(function() {
    $('#anggaran_proyek').maskMoney({prefix: 'Rp. ', thousands: '.', decimal: ',', precision: 0});
    $('#edit_anggaran_proyek').maskMoney({prefix: 'Rp. ', thousands: '.', decimal: ',', precision: 0});
    $('#jumlah_anggaran').maskMoney({prefix: 'Rp. ', thousands: '.', decimal: ',', precision: 0});
    $('#edit_jumlah_anggaran').maskMoney({prefix: 'Rp. ', thousands: '.', decimal: ',', precision: 0});
    });
	function isNumberKey(evt){
		var charCode = (evt.which)? evt.which: event.keyCode
		if (charCode > 31 && (charCode < 48 || charCode > 57))
			return false;
			return true;
    }


</script>
</body>
</html>
