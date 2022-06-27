<?php
session_start();
if((!isset($_SESSION['loggedin'])) && (!isset($_SESSION['drloggedin']))){
    header("location: login.php");
  }
?> 
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="partials/footer.css">
  <link rel="stylesheet" href="partials/navbar.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&family=Ubuntu:wght@300&display=swap');

    * {
      margin: 0px;
      padding: 0px;
    }

    .image {
      width: 150px;
      height: 150px;
      margin: 10px 20px;
    }

    .card {
      width: 700px;
      margin: 20px auto;
      margin-top: 0px;
      height: 200px;
      display: flex;
      align-items: center;
      background: floralwhite;
      border-radius: 10px;
      box-shadow: rgb(104 92 92 / 47%) 0px 10px 10px 0px;
    }

    .card-text {
      margin: 0px 25px;
    }

    .card-text p {
      font-size: 20px;
      font-family: 'Ubuntu', sans-serif;
    }

    .card-text h1 {
      font-family: 'Ubuntu', sans-serif;
    }

    .image img {
      width: 150px;
      height: 150px;
      border-radius: 10px;
    }
    #image {
    position: fixed;
    z-index: -1;
    width: 50%;
    top: 100px;
    left: 60%;
}
  </style>
  
</head>

<body>
  <?php require 'partials/navbar.php'?>
  <img id="image" src="images/analyze.svg">
  <div class="content">

    <div class="card">
      <div class="image"><img
          src="images/dpicon.jpg">
      </div>
      <div class="card-text">
        <a href="http://localhost/iHealth/doctorpages/drprofile.php?drusername=sammeerdubey">
          <h1>Dr. Sammer Dubey</h1>
        </a>
        <p><b>Cardiologist</b></p>
        <p>Monday-Friday</p>
        <p>10:00AM-11:00AM</p>
      </div>
    </div>
    
    <div class="card">
      <div class="image"><img
          src="images/dpicon.jpg">
      </div>
      <div class="card-text">
        <a href="http://localhost/iHealth/doctorpages/drprofile.php?drusername=sudhadeshmukh">
          <h1>Dr. Sudha Deshmukh </h1>
        </a>
        <p><b> Test Tube Baby (IVF &ICSI) & <br>Advance Gynaec. Endoscopic Surgery </b></p>
        <p>Mondays</p>
        <p> 8:00AM-11:00AM</p>
      </div>
    </div>
    <div class="card">
      <div class="image"><img
          src="images/dpicon.jpg">
      </div>
      <div class="card-text">
        <a href="http://localhost/iHealth/doctorpages/drprofile.php?drusername=maheshsancheti">
          <h1>Dr.Mahesh Sancheti</h1>
        </a>
        <p><b>Pediatrician</b></p>
        <p>Monday-Friday</p>
        <p>10:00AM-12:00PM</p>
      </div>
    </div>
    <div class="card">
      <div class="image"><img
          src="images/dpicon.jpg">
      </div>
      <div class="card-text">
        <a href="http://localhost/iHealth/doctorpages/drprofile.php?drusername=sureshyadav">
          <h1>Dr. Suresh Yadav</h1>
        </a>
        <p><b>Homopathic </b></p>
        <p>Monday And Tuesday</p>
        <p>8:00AM-12:00PM</p>
      </div>
    </div>
    <div class="card">
      <div class="image"><img
          src="images/dpicon.jpg">
      </div>
      <div class="card-text">
        <a href="http://localhost/iHealth/doctorpages/drprofile.php?drusername=vishalzambani">
          <h1>Dr.Vishal Zambani</h1>
        </a>
        <p><b>Oncologists </b></p>
        <p>Monday-Wednesday</p>
        <p>11:00AM-1:00PM</p>
      </div>
    </div>
    <div class="card">
      <div class="image"><img
          src="images/dpicon.jpg">
      </div>
      <div class="card-text">
        <a href="http://localhost/iHealth/doctorpages/drprofile.php?drusername=anupamakawalkar">
          <h1>Dr.Anupama Kawalkar</h1>
        </a>
        <p><b>Orthopedic Surgeon </b></p>
        <p>Monday-Friday</p>
        <p>7:00AM-10:00AM</p>
      </div>
    </div>
    
    <?php require 'partials/footer.html'?>
  </div>
</body>

</html>