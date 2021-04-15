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
  
                  <!-- Page Heading -->
                  <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Welcome 
                            <small>Author</small>
                        </h1>
                        
                        <?php 
                        
                            if(isset($_GET['source'])){
                                $source = $_GET['source'];
                            } else {
                                $source = "";
                            }
                            
                            switch ($source) {
                                case "edit_user":
                                    include("includes/edit_users.php");
                                    break;
                                case 200:
                                   echo "200 Nice";
                                    break;
                                
                                default:
                                   include("includes/view_all_users.php");
                                    break;
                            }
                        
                        
                        ?>
                        
                    </div> 
                </div>
                <!-- /.row -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
<?php include('./includes/footer.php') ?>





<?php 



?>

