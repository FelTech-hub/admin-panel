<?php 
    ob_start();
    session_start();
    include("includes/config.php");

    if(isset($_POST['admin'])){

    $userName = mysqli_real_escape_string($connection, $_POST['userName']);

    $pass = mysqli_real_escape_string($connection, $_POST['pass']);

    
    // Check user is exist in the database
    $query    = "SELECT * FROM access WHERE userName='{$userName}'
                AND pass='{$pass}' ";
    $result = mysqli_query($connection, $query) or die( "QUERY FAILED". mysqli_error($connection));
    $rows = mysqli_num_rows($result);
    if ($rows == 0) {
        echo "<div class='alert alert-danger'>
            <strong>Incorrect name/password</strong>
        </div>";
    } else {
        
        $_SESSION['userName'] = $userName;

        // Redirect to user dashboard page
        header("Location: admin_panel.php");
        mysqli_close($connection);

    }
   

}
?>