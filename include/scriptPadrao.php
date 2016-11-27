<?php //arrumar essa coisa porca

if($jquery!=FALSE){
?>
<!-- jQuery 2.2.3-->
<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>

<?php } ?>

<!-- SlimScroll -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

<?php
if(isset($nomeTabela)){
if ($tabela == TRUE){
?>
<!-- DataTables -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>

<script>
	$(function () {
		<?php for ($i=0; $i <= $contTable; $i++) { ?>
		$("#<?php echo $nomeTabela . $i; ?>").DataTable();
	<?php } ?>});
</script>

<?php }} ?>
