<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">

    <title>Welcome</title>
    <style>
        body{
            background-image: url("./welcomes/background.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
        .bg-custom1 {
            background-color: #fccc00;
        }
        .bg-custom2 {
            background-color: #638cff;
        }
        .bg-custom3 {
            background-color: #22dba8;
        }
        #card1{
            margin-top: 100px;
            margin-left: 200px;
            border-radius: 30px;
            position: absolute;
        }
        #card2{
            margin-top: 400px;
            margin-left: 200px;
            border-radius: 30px;
            position: absolute;
        }
        #img1{
            height: 200px;
            width: auto;
            border-top-left-radius: 30px;
            border-top-right-radius: 30px;
        }
        #img2{
            height: 200px;
            width: auto;
            border-top-left-radius: 30px;
            border-top-right-radius: 30px;
        }
        .card-text{
            text-align: center;
        }
        .carousel-inner{
            height: 500px;
            width: 700px;
            border-radius: 30px;
        }
        #c1,#c2,#c3{
            height: 500px;
            width: 700px;
            border-radius: 30px;
        }
        #carouselExampleControls{
            position: absolute;
            margin-top: 170px;
            margin-left: 600px;
            border-radius: 30px;
        }
    </style>
  </head>
  <body>
    @php
        Auth::logout();
    @endphp
    <h1 style="position: absolute; margin-left: 700px; margin-top: 50px; font-family: 'Secular One', sans-serif; color: white">PT SYSTERIC</h1>
    <h1 style="position: absolute; margin-left: 800px; margin-top: 100px; font-family: 'Lobster', cursive;">buy, wait, delivered!</h1>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./supermarket/1.jpg" class="d-block w-100" alt="..." id="c1">
          </div>
          <div class="carousel-item">
            <img src="./supermarket/2.jpg" class="d-block w-100" alt="..." id="c2">
          </div>
          <div class="carousel-item">
            <img src="./supermarket/3.jpg" class="d-block w-100" alt="..." id="c3">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>

    <a href="/register" style="color: black">
        <div class="card bg-custom1" style="width: 18rem;" id="card1">
            <img src="./welcomes/register.jpg" class="card-img-top" id="img1">
            <div class="card-body">
            <p class="card-text" style="font-weight: bold">Register Account</p>
            </div>
        </div>
    </a>
    <a href="/loginuser" style="color: black">
        <div class="card bg-custom2" style="width: 18rem;" id="card2">
            <img src="./welcomes/login.jpg" class="card-img-top" id="img2">
            <div class="card-body">
            <p class="card-text" style="font-weight: bold">Login</p>
            </div>
        </div>
    </a>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>
