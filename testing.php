<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./fontawesome/css/all.css">
    <title>Employee</title>
</head>
<style>
    .nav-link, .navbar-brand{
        color: white !important;
    }
</style>

<style>
body {
  font-family: "Lato", sans-serif;
}

/* Fixed sidenav, full height */
.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: #f1f1f1;
}

/* Main content */
.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

/* Add an active class to the active dropdown button */
.active {
  background-color: green;
  color: white;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}

/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>

<body>

    <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Embila</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>


<!-- sidebar -->

<div class="sidenav">
  <a href="#about">About</a>
  <a href="#services">Services</a>
  <a href="#clients">Clients</a>
  <a href="#contact">Contact</a>
  <button class="dropdown-btn">Dropdown 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
  <a href="#contact">Search</a>
</div>

<div class="main">
<h1>Sidebar Dropdown</h1>
</div>

<!-- Fontawesome -->

<div class="main">
<!-- <i class="fa-brands fa-twitter fa-4x"></i>
<i class="fa-brands fa-apple fa-4x"></i> -->



<!-- Cards -->
<div class="container">
    <div class="row">
        <div class="row">

            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-header bg-primary text-white">
                    <div class="row align-items-center">
                      <div class="col">
                      <i class="fa-brands fa-apple fa-4x"></i>
                      </div>  
                      <div class="col">
                          <h3 class="display-6">EMPLOYEE</h3>
                      </div>
                      </div>
                    </div>
                </div>  
            </div>


            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-header bg-success text-white">
                    <div class="row align-items-center">
                      <div class="col">
                      <i class="fa-solid fa-wheelchair-move fa-4x"></i>
                      </div>  
                      <div class="col">
                          <h3 class="display-6">EMPLOYMNT</h3>
                      </div>
                      </div>
                    </div>
                </div>  
            </div>

            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-header bg-warning text-white">
                    <div class="row align-items-center">
                      <div class="col">
                      <i class="fa-solid fa-pen-to-square fa-4x"></i>
                      </div>  
                      <div class="col">
                          <h3 class="display-6">EDUCATION</h3>
                      </div>
                      </div>
                    </div>
                </div>  
            </div>

            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-header bg-danger text-white">
                    <div class="row align-items-center">
                      <div class="col">
                      <i class="fa-solid fa-users fa-4x"></i>
                      </div>  
                      <div class="col">
                          <h3 class="display-6">EXPERIENCE</h3>
                      </div>
                      </div>
                    </div>
                </div>  
            </div>


        </div>
    </div>
</div>
</div>


<script src="./bootstrap/js/bootstrap.min.js"></script>
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