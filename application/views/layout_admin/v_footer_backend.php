</div>
</div>
<!-- /row-->
</div><!-- container fluid-->

</div>
</div>
<!-- /.content -->
</div>
<footer class="main-footer no-print">
  <div class="float-right d-none d-sm-block">
    <b>Version</b> 3.2.0
  </div>
  <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
</footer>
</div>
<!-- Main Footer -->

<!-- ./wrapper -->


<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": true,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script>
  window.setTimeout(function () {
    $('.alert').fadeTo(500, 0).slideUp(500, function () {
      $(this).remove();
    });
  }, 3000)
</script>

</body>

</html>