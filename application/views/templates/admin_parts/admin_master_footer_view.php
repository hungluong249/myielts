<!-- /.content-wrapper -->
<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 1.0.0
    </div>
    <strong>Admin Controller by <a href="http://matocreative.vn/" target="_blank">Mato Creative</a>.</strong> All rights reserved.
</footer>


</body>

<!-- fastClick -->
<script src="<?php echo site_url('assets/lib/') ?>fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo site_url('assets/lib/') ?>dist/js/adminlte.min.js"></script>

<script src="<?php echo site_url('assets/js/admin/script.js') ?>"></script>
<script src="<?php echo site_url('assets/js/admin/image.js') ?>"></script>
<script src="<?php echo site_url('assets/js/admin/common.js') ?>"></script>
<script src="<?php echo site_url('assets/js/admin/active.js') ?>"></script>

<script src="<?php echo base_url('assets/js/bootstrap-datepicker.min.js') ?>"></script>
<script type="text/javascript">
    $(function(){
         //Date picker
        $('#datepicker').datepicker({
          autoclose: true,
          format: 'dd/mm/yyyy'
        })
    });
</script>

</html>