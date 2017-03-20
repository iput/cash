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
		$('#tabel_personil').on('click', '.btn_edit_personil', function(){
			$('#update_personil').modal('show');
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
</body>
</html>
