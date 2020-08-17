<script src="<?php echo URLROOT; ?>/public/js/jquery.min.js"></script>
<script src="http://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    $(document).ready( function () {
        $('#myTable').DataTable();
        $( "#myTable thead tr th:nth-last-child(1)" ).removeClass( "sorting");
        $( "#myTable thead tr th:nth-last-child(2)" ).removeClass( "sorting");
    } );
</script>
<script src="<?php echo URLROOT; ?>/public/js/popper.js"></script>
<script src="<?php echo URLROOT; ?>/public/js/bootstrap.min.js"></script>
<script src="<?php echo URLROOT; ?>/public/js/main.js"></script>

	
<!--===============================================================================================-->	
<script src="<?php echo URLROOT; ?>/public/vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="<?php echo URLROOT; ?>/public/vendor/bootstrap/js/popper.js"></script>
<script src="<?php echo URLROOT; ?>/public/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo URLROOT; ?>/public/vendor/select2/select2.min.js"></script>
<script src="<?php echo URLROOT; ?>/public/vendor/tilt/tilt.jquery.min.js"></script>
<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
</script>
<script src="<?php echo URLROOT; ?>/public/js/login.js"></script>

</body>

</html>