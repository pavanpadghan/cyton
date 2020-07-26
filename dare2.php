<?php
session_start();
include 'db.php';
if(isset($_POST['submit'])){
$name = $_POST['name'];
$_SESSION['name'] = $name;
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    
    <title>Love Lite </title>
 
  </head >
  <body style=" background-color:white;">
    
    
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#" style="color:dark whitesmoke;"> <h4> Love Lite </h4> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#" style="color: red;">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"style="color:red;" >Disclaimer</a>
    
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" style="color: red;" tabindex="-1" aria-disabled="true">Privacy Policy</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"style="color:red;" >Terms and Conditions</a>
            <li class="nav-item">
                <a class="nav-link" href="#"style="color:red;" >About Us</a>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search anything" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
    
    
      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
 
 <!--          main post         -->
 <br> <br> <h1>   2) Which game you like  ?   </h1> 
<br> 
<form action="" method="post">
<div class="form-check">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="cricket" checked>
    <label class="form-check-label" for="exampleRadios1">
       <h4>  a) PUBG  </h4>  <br>
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="badminton">
    <label class="form-check-label" for="exampleRadios2">
       <h4>  b) GTA 5  </h4> <br>
    </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="football">
  <label class="form-check-label" for="exampleRadios2">
     <h4> c) GTA SANANDREAS  </h4>  <br>
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="hockey">
  <label class="form-check-label" for="exampleRadios2">
    <h4>   d) NFS  </h4>  <br>
  </label> <br> <br> 

  <button type="submit"  name="thissubmit"  class="circle btn-primary" style="float:left;" > <h4>   Prev   </h4>       </button>
<button type="submit" name="thissubmit" class="circle  btn-primary" style="float:right;" > <h4>   Next    </h4>       </button>
  </form>
</div>

  </div>



<br> <br> <br> <br> <br> <br> 
</div>

<footer style=" background-color:black;"> 

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  
  <a class="navbar-brand" href="#" style="color:dark whitesmoke;"> <h1>  </h1> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#" style="color:white;">  Home   <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"style="color:white;" >Disclaimer</a>

      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" style="color: white;" tabindex="-1" aria-disabled="true">Privacy Policy</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="#"style="color:white;" >Terms and Conditions</a>
          <li class="nav-item">
            <a class="nav-link" href="#"style="color:white;" >About Us</a>
          <br> <br>
          
         
             </footer>
          <center>   <h5 style="color: black;">   @Love Lite 2020 All Rights Reserved  </h5></center>  
            </body>   </html>

            <?php

            if(isset($_POST['thissubmit'])){
              $name = $_SESSION['name'];
              $answer = $_POST['exampleRadios'];
              $query = "INSERT INTO `users`(`id`,`name`,`Q1`) VALUES ('','$name', '$answer')";
              $result = mysqli_query($conn,$query);
              echo "code is running";
            }

            ?>