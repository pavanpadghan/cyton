<?php
session_start();
$pageNo = 1;
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
 <br> <br> <h1 id="question">   1) Which subject you like most ?   </h1> 
<br> 
<form action="" method="post">
<div class="form-check">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="cricket" checked>
    <label class="form-check-label" for="exampleRadios1">
       <h4 id="option1">  a) Biology    </h4>  <br>
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="badminton">
    <label class="form-check-label" for="exampleRadios2">
       <h4 id="option2">  b) Chemistry  </h4> <br>
    </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="football">
  <label class="form-check-label" for="exampleRadios2">
     <h4 id="option3"> c) Physics  </h4>  <br>
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="hockey">
  <label class="form-check-label" for="exampleRadios2">
    <h4 id="option4">   d) Math  </h4>  <br>
  </label> <br> <br> 

  <button type="button" id="prevBtn" class="circle btn-primary" style="float:left;" > <h4>   Prev   </h4>       </button>
<button type="button" name="next" id="nextBtn" class="circle  btn-primary" style="float:right;" > <h4>   Next    </h4>       </button>
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


            <!-- next button, next page -->

<script>
let currentQuestion = 1;
// 10 questions
let question1 = "1) Which pet do you like?";
let option11 = "a) dog";
let option12 = "b) cat";
let option13 = "c) elephant";
let option14 = "d) lion";

let question2 = "2) Which is your favourite hero?";
let option21 = "a) akshay kumar";
let option22 = "b) ranbir kapoor";
let option23 = "c) shahrukh khan";
let option24 = "d) salman khan";

let question3 = "3) Which is your favourite colour?";
let option31 = "a) red";
let option32 = "b) brown";
let option33 = "c) green";
let option34 = "d) black";

let question4 = "";
let option41 = "";
let option42 = "";
let option43 = "";
let option44 = "";

let question5 = "";
let option51 = "";
let option52 = "";
let option53 = "";
let option54 = "";

let question6 = "";
let option61 = "";
let option62 = "";
let option63 = "";
let option64 = "";

let question7 = "";
let option71 = "";
let option72 = "";
let option73 = "";
let option74 = "";

let question8 = "";
let option81 = "";
let option82 = "";
let option83 = "";
let option84 = "";

let question9 = "";
let option91 = "";
let option92 = "";
let option93 = "";
let option94 = "";

let question10 = "";
let option101 = "";
let option102 = "";
let option103 = "";
let option104 = "";




document.getElementById('nextBtn').addEventListener("click", nextBtn);
document.getElementById('prevBtn').addEventListener("click", prevBtn);

// questions and their options
let question = document.getElementById('question');
let option1 = document.getElementById('option1');
let opton2 = document.getElementById('option2');
let option3 = document.getElementById('option3');
let option4 = document.getElementById('option4');

function switchQueston(){
  switch (currentQuestion) {
  case 0:
    day = "Sunday";
    break;
  case 1:
    question.innerHTML = question1;
    option1.innerHTML = option11;
    option2.innerHTML = option12;
    option3.innerHTML = option13;
    option4.innerHTML = option14;

    break;
  case 2:
    question.innerHTML = question2;
    option1.innerHTML = option21;
    option2.innerHTML = option22;
    option3.innerHTML = option23;
    option4.innerHTML = option24;
    break;
  case 3:
    question.innerHTML = question3;
    option1.innerHTML = option31;
    option2.innerHTML = option32;
    option3.innerHTML = option33;
    option4.innerHTML = option34;
    break;
  case 4:
    question.innerHTML = question4;
    option1.innerHTML = option41;
    option2.innerHTML = option42;
    option3.innerHTML = option43;
    option4.innerHTML = option44;
    break;
  case 5:
    question.innerHTML = question5;
    option1.innerHTML = option51;
    option2.innerHTML = option52;
    option3.innerHTML = option53;
    option4.innerHTML = option54;
    break;
  case 6:
    question.innerHTML = question6;
    option1.innerHTML = option61;
    option2.innerHTML = option62;
    option3.innerHTML = option63;
    option4.innerHTML = option64;
  case 7:
    question.innerHTML = question7;
    option1.innerHTML = option71;
    option2.innerHTML = option72;
    option3.innerHTML = option73;
    option4.innerHTML = option74;
  case 8:
    question.innerHTML = question8;
    option1.innerHTML = option81;
    option2.innerHTML = option82;
    option3.innerHTML = option83;
    option4.innerHTML = option84;
  case 9:
    question.innerHTML = question9;
    option1.innerHTML = option91;
    option2.innerHTML = option92;
    option3.innerHTML = option93;
    option4.innerHTML = option94;
  case 10:
    question.innerHTML = question10;
    option1.innerHTML = option101;
    option2.innerHTML = option102;
    option3.innerHTML = option103;
    option4.innerHTML = option104;
}
}

function prevBtn() {
  if (currentQuestion > 1 && currentQuestion < 11) {
    currentQuestion = currentQuestion - 1;

  }
  switchQueston();
  console.log(currentQuestion);
  console.log('click on previous button');

}

function nextBtn() {
  if (currentQuestion > 0 && currentQuestion < 10) {
    currentQuestion = currentQuestion + 1;

  }
  switchQueston();
  console.log('click on next button');
  console.log(currentQuestion);


}

</script>
