<?php 
  session_start();
    if(!isset($_SESSION['userName'])){
      header("Location:index.php");
   } 
?>
<?php include('./includes/header.php') ?>
<div class="wrapper">
  <!-- Navbar -->
  <?php include('./includes/navbar.php') ?>
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <?php include('./includes/main_sidebar.php') ?>
  <!-- Content Wrapper. Contains page content -->
  <?php include('./includes/content_page.php') ?>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
<?php include('./includes/footer.php') ?>

