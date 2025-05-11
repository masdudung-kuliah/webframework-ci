<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | <?= $this->renderSection('page_title') ?></title>

  <!-- Google Font: Source Sans Pro -->
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url('adminlte/plugins/fontawesome-free/css/all.min.css')?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url('adminlte/dist/css/adminlte.min.css')?>">

  <link rel="stylesheet" href="<?=base_url('assets/css/global.css')?>">
  
</head>

<?php $global_notification = session()->getFlashdata('notification'); ?>

<body class="hold-transition sidebar-mini" data-notification='<?= json_encode(session()->getFlashdata('notification')) ?>'>

<!-- Site wrapper -->
<div class="wrapper">
  <?= $this->include('parts/navbar') ?>
  
  <?= $this->include('parts/sidebar') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="main-wrapper content-wrapper">
    <?= $this->renderSection('content') ?>
  </div>
  

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?=base_url('adminlte/plugins/jquery/jquery.min.js')?>"></script>
<!-- Bootstrap 4 -->
<script src="<?=base_url('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?=base_url('adminlte/dist/js/adminlte.min.js')?>"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?= $this->renderSection('page_script') ?>

<script>
$(function () {
  const notif = $('body').data('notification');
  if (!notif) return;

  Swal.fire({
    text: notif?.message ?? "",
    icon: notif?.type
  });
});
</script>

</body>
</html>

