<?php
require_once("./config/conn.php");
require_once("./include/session.php");

if(isset($_POST['Submit'])){

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $image_name = $_FILES['image']['name'];
    $target = "uploads/" .$_FILES['image']['name'];

    //Prevent SQL Injection

    $firstname = mysqli_real_escape_string($conn, $firstname);
    $lastname = mysqli_real_escape_string($conn, $lastname);
    $email = mysqli_real_escape_string($conn, $email);
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

      // Form validation
   if(empty($firstname) || empty( $lastname) || empty( $email) || empty( $username) ||empty( $password)){
      $_SESSION['ErrorMessage'] = 'This fields cannot be empty';

   }
   else{

    // Move image to temporary folder
    move_uploaded_file($_FILES['image']['tmp_name'],  $target);

    // Password Encryption
    $password_strong = password_hash($password, PASSWORD_DEFAULT);

    // Insert Data into the Database
    $sql = "INSERT INTO admin_db (firstname, lastname, email, username, password, photo)
    VALUES ('$firstname', '$lastname', '$email', '$username', '$password_strong','$image_name')";
    $query_result = mysqli_query($conn, $sql);
    if($query_result){
       $_SESSION['SuccessMessage'] = 'Record successfully added';
    }
    else{
     $_SESSION['ErrorMessage'] = 'Invalid SQL';
     echo "invalid SQL";
    }
}

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./fontawesome/css/all.css">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">

<style>

<?php include("./include/stryle_admin_reg.php")?>

</style>

</head>

<style>

<?php include("./include/style.php")?>

</style>

<body>
<!--- Navbar -->
    <?php  include("./include/navbar.php");  ?>
<!---Ending of Navbar -->


<div class="main">
<div class="row">
 <div class="offset-md-2 col-md-6">
    <div class="card mt-4">
        <div class="card-header">
        <h3 class="text-center">REGISTER ADMIN</h3>

        <?php
          echo ErrorMessage();
          echo SuccessMessage();
          ?>
        </div>
        <div class="card-body">

            <form action="admin_reg.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                <input type="text" class="form-control" name="firstname" placeholder = "Firstname" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                <input type="text" class="form-control" name = "lastname" placeholder = "Lastname" id="exampleInputPassword1">
                </div>  
                <div class="mb-3">
                <input type="text" class="form-control" name = "username" placeholder = "Username" id="exampleInputPassword1">
                </div> 
                <div class="mb-3">
                <input type="password" class="form-control" name = "password" placeholder = "Password" id="exampleInputPassword1">
                </div>  
                <div class="mb-3">
                <input type="email" class="form-control" name = "email" placeholder = "Email" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="input-group mb-3">
                  <label class="input-group-text" for="inputGroupFile01">Upload</label>
                  <input type="file" class="form-control" name="image" id="inputGroupFile01">
                </div>
                <div class="d-grid gap-2">
                <button type="submit" name="Submit" class="btn btn-primary" type="button">Submit</button>
                </div>
            </div>

    </form>
            
            </div>
        </div>
        </div>
    
    </div>

</div>


   <script src=".\bootstrap\bootstrap\js\bootstrap.min.js"></script> 
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