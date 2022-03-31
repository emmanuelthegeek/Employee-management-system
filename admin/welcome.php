<?php
require_once("../config/conn.php");
require_once("../include/session.php")
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <title>Employee</title>
</head>

<!-- style -->
<?php include("../include/style.php")?>
<!-- End style -->


<body>

<!-- Navbar -->
<?php include("../include/navbar.php")?>
<!-- End Navbar -->


<!-- sidebar -->
<?php include("../include/sidebar.php")?>
<!-- End sidebar -->


<div class="main">
</div>

<!-- Fontawesome -->
<div class="main">
<!-- <i class="fa-brands fa-twitter fa-4x"></i>
<i class="fa-brands fa-apple fa-4x"></i> -->


<!-- Cards -->
<?php include("../include/cards.php")?>
<!-- End Cards -->



<script src="../bootstrap/js/bootstrap.min.js"></script>
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