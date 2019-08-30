
</div>
<script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/js/popper.min.js"></script>
<script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>assets/js/pace.min.js"></script>
<script src="<?= base_url() ?>assets/js/perfect-scrollbar.min.js"></script>
<script src="<?= base_url() ?>assets/js/coreui.min.js"></script>
<script>
    $('#ui-view').ajaxLoad();
    $(document).ajaxComplete(function() {
      Pace.restart()
    });
  </script>
</body>
</html>