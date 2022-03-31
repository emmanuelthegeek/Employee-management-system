<?php
require_once("../config/conn.php");
require_once("../include/session.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

<style>

<?php include("../include/stryle_admin_reg.php")?>


body{
    background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url(../uploads/bgimg2.jpg);
    background-repeat: no-repeat;
    background-size: cover;
}
</style>

</head>

<style>

<?php include("../include/style.php")?>

</style>

<body>
<!--- Navbar -->
<div class="" style="height: 10px; background-color:blue;"></div>
    <?php  include("../include/navbar.php");  ?>
<div class="" style="height: 10px; background-color:blue;"></div>
<!---Ending of Navbar -->



<?php

if(isset($_POST['Submit'])){

  // Declare variables
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  // Prevent SQL Injection
  $username = mysqli_real_escape_string($conn, $username);
  $password = mysqli_real_escape_string($conn, $password);
  
  
  // Form Validation
  
  if(empty($username) || empty($password)){
      //$_SESSION['ErrorMessage'] = "These fields cannot be empty";
      ?>
      <script>
      //SWEETALERT POSITION HERE
      Swal.fire({
          title: 'Empty Fields',
          text: 'These fields cannot be empty!',
          icon: 'error',
          button: 'error'
        })
      </script>
      <?php
  }
  
  else{
  
      // We are going to send the admin to the dashboard
  
      $my_sql = "SELECT * FROM admin_db WHERE username = '$username'";
      $query_sql = mysqli_query($conn, $my_sql);
      $result = mysqli_num_rows($query_sql);
      if($result > 0){
          while ($row = mysqli_fetch_array( $query_sql)){
  
              // Fetch data from the database
  
              $id = $row['id'];
              $firstname = $row['firstname'];
              $lastname = $row['lastname'];
              $email = $row['email'];
              $username = $row['username'];
              $pass = $row['password'];
              $photo = $row['photo'];
  
              // Add record to session
              $_SESSION['firstname'] = $firstname;
              $_SESSION['lastname'] = $lastname;
              $_SESSION['email'] = $email;
              $_SESSION['username'] = $username;
              $_SESSION['password'] = $password;
              $_SESSION['photo'] = $photo;
              
  
              // Check password verification
              if(password_verify($password, $pass)){
                //   Redirect_to('welcome.php')
              }
              else{
                 // $_SESSION['ErrorMessage'] = "Invalid Username/Password";
                  ?>
                        <script>
                        //SWEETALERT POSITION HERE
                        Swal.fire({
                            title: 'Wrong Inputs',
                            text: 'Invalid Username/Password!',
                            icon: 'error',
                            button: 'error'
                          })
                        </script>
                  <?php
              }
  
          }
  
      }
      else{
          $_SESSION['ErrorMessage'] = "Username/Password does not exist";
      }
  
  
  
  }
  
  
  }
  




?>





<div class="main bgimg">
<div class="row">
 <div class="offset-md-2 col-md-6">
    <div class="card mt-4">
        <div class="card-header">
        <h3 class="text-center">ADMIN LOGIN</h3>

        <?php
          echo ErrorMessage();
          echo SuccessMessage();
          ?>
        </div>
        <div class="card-body">

            <form action="index.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                <input type="text" class="form-control" name="username" placeholder = "Username" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3 mb-4">
                <input type="password" class="form-control" name = "password" placeholder = "Password" id="exampleInputPassword1">
                </div>  
                <div class="d-grid gap-2 mb-3">
                <button type="submit" name="Submit" class="btn btn-primary" type="button">Submit</button>
                </div>
                <div class="d-grid gap-2">
                <button type="submit" name="Submit" class="btn btn-success" type="button">Forgotten Password?</button>
                </div>
            </div>

    </form>
            
            </div>
        </div>
        </div>
    
    </div>

</div>


   <script src="..\bootstrap\bootstrap\js\bootstrap.min.js"></script> 
   <script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>
</body>
</html>