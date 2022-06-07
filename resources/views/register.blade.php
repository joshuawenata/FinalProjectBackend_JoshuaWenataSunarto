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

    <style>
        body{
            background-image: url("./registers/background.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
        .card{
            height: 450px;
            width: 350px;
            position: absolute;
            align-items: center;
            margin-left: 600px;
            margin-top: 100px;
            font-family: 'Secular One', sans-serif;
        }
    </style>

  </head>
  <body>
    <button type="button" onclick="window.location.href='/'" class="btn-close" aria-label="Close"></button>
    @if($errors->any())
        <div class="alert alert-danger" role="alert" style="position: absolute; margin-left: 200px; margin-top: 250px">
            <strong>There's error on your data!</strong><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <h5 class="card-title" style="font-family: 'Secular One', sans-serif; text-align: center">REGISTER</h5>
            <h6 class="card-subtitle mb-2 text-muted" style="font-family: 'Secular One', sans-serif; text-align: center">please write your personal data!</h6>
            <form action="/register/store" method="POST">
                @csrf
                <span>Full Name </span>
                <div>
                    <input type="text" name="name" placeholder="Full Name">
                </div>
                <br>
                <span>Email </span>
                <div>
                    <input type="text" name="email" placeholder="Email">
                </div>
                <br>
                <span>Password </span>
                <div>
                    <input type="password" name="password" placeholder="Password">
                </div>
                <br>
                <span>Phone Number </span>
                <div>
                    <input type="text" name="phone" placeholder="Phone Number">
                </div>
                <br>
                <div class="text-center">
                    <input type="submit" class="btn btn-secondary" value="Register">
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>
