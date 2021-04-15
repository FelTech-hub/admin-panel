<?php 
    if(!isset($_SESSION['userName'])){
      header("Location:index.php");
   } 
?>>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">AGMS</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">admin Panel</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
    
      
<?php 
      if(isset($_GET['edit_user'])){

        $the_user_id = $_GET['edit_user'];
 
        $query = "SELECT * FROM users WHERE id = $the_user_id ";
        $select_user_query = mysqli_query($connection, $query);
 
        while($row = mysqli_fetch_assoc($select_user_query)){
            $id = $row["id"];
            $firstname = $row["firstname"];
            $middlename = $row["middlename"];
            $lastname = $row["lastname"];
            $email = $row["email"];
            $phone = $row["phone"];
            $gender = $row["gender"];
            $address = $row["address"];
            $classes = $row["classes"];
        }

 
 
 
     }


     if(isset($_POST['edit_user'])){

        $firstname = $_POST['firstname'];
        $middlename = $_POST['middlename'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        $classes = $_POST['classes'];

        $firstname = htmlspecialchars(filter_var($firstname, FILTER_SANITIZE_STRING));
        $middlename = htmlspecialchars(filter_var($middlename, FILTER_SANITIZE_STRING));
        $lastname = htmlspecialchars(filter_var($lastname, FILTER_SANITIZE_STRING));
        $email = htmlspecialchars(filter_var($email, FILTER_SANITIZE_EMAIL));
        $phone = htmlspecialchars(filter_var($phone, FILTER_SANITIZE_STRING));
        $gender = htmlspecialchars(filter_var($gender, FILTER_SANITIZE_STRING));
        $address = htmlspecialchars(filter_var($address, FILTER_SANITIZE_STRING));
        $classes = htmlspecialchars(filter_var($classes, FILTER_SANITIZE_STRING));


     


       if(empty($firstname) && empty($middlename) && empty($lastname) && empty($email) && empty($phone) && empty($gender) && empty($address) && empty($classes)){
           echo "<p class='alert alert-danger'>Field cannot be empty</p>";
       } else {

        $query = "UPDATE users SET ";
        $query .= "firstname = '{$firstname }', ";
        $query .= "middlename = '{$middlename }', ";
        $query .= "lastname = '{$lastname }', ";
        $query .= "email = '{$email }', ";
        $query .= "phone = '{$phone}', ";
        $query .= "gender = '{$gender}', ";
        $query .= "address = '{$address}', ";
        $query .= "classes = '{$classes}' ";
        $query .= "WHERE id = {$the_user_id} ";
  
        $update_user = mysqli_query($connection, $query) or die("Query Failed");

        }
    }



?>


<div class="row">
            <div class="col-md-6 mx-auto">
            <div class="card"> 
            <div class="card-body">
                <form action="" method="post">
                <div class="form-group mb-3">
                    <label for="firstname" class="mb-3">First Name</label>
                    <input type="text" value="<?php echo $firstname ?>" name="firstname" class="form-control" placeholder="First Name"  class="mb-3">
                </div>
                <div class="form-group mb-3">
                    <label for="middle name" class="mb-3">Middle Name</label>
                    <input type="text"  value="<?php echo $middlename ?>" name="middlename" class="form-control" placeholder="Middle Name"  class="mb-3">
                </div>
                <div class="form-group mb-3">
                    <label for="lastname" class="mb-3">Last Name</label>
                    <input type="text"  value="<?php echo $lastname ?>" name="lastname" class="form-control" placeholder="Last Name"  class="mb-3">
                </div>
                <div class="form-group mb-3">
                    <label for="email" class="mb-3">Email</label>
                    <input type="email"  value="<?php echo $email ?>" name="email" class="form-control" placeholder="Email"  class="mb-3">
                </div>
                <div class="form-group mb-3">
                    <label for="phone" class="mb-3">Phone No</label>
                    <input type="phone" name="phone"  value="<?php echo $phone ?>" class="form-control" placeholder="Phone Number"  class="mb-3">
                </div>
                <div class="form-group mb-3">
                    <label for="gender" class="mb-3">Gender</label>
                   <select name="gender" id="gender" class="form-control">
                        <option selected></option>
                        <option>Male</option>
                        <option>Female</option>
                   </select>
                </div>
                <div class="form-group mb-3">
                    <label for="address" class="mb-3"></label>
                    <input type="text"  value="<?php echo $address ?>" name="address" class="form-control" placeholder="Address"  >
                </div>
                <div class="form-group mb-3">
                    <label for="classes" class="mb-3">Classes</label>
                   <select name="classes"id="classes" class="form-control">
                        <option selected></option>
                        <option>PRE KG</option>
                        <option>NURI</option>
                        <option>NURIII</option>
                        <option>NURIV</option>
                        <option>NURV</option>
                        <option>PRYI</option>
                        <option>PRYII</option>
                        <option>PRYIII</option>
                        <option>PRYIV</option>
                        <option>PRYV</option>
                        <option>JSSI</option>
                        <option>JSSII</option>
                        <option>JSSIII</option>
                        <option>SSSI</option>
                        <option>SSSII</option>
                        <option>SSSIII</option>
                   </select>
                </div>
                <div class="form-group">
                <input type="submit" value="Update User" name="edit_user" class="btn btn-info btn-block">
                </div>
                </form>
            </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
    </div>
</div>
</div>

      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
















































