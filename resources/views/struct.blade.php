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

    <title>Login</title>
    <style>
        body{
            background-image: url("./homes/background.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
        .card{
            height: 500px;
            width: auto;
            position: absolute;
            align-items: center;
            margin-left: 50%;
            margin-top: 50px;
            font-family: 'Secular One', sans-serif;
            text-align: center
        }
    </style>

  </head>
  <body>
    <button type="button" onclick="window.location.href='/homecontroluser'" class="btn-close" aria-label="Close"></button>
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
            <h5 class="card-title" style="font-family: 'Secular One', sans-serif; text-align: center">STRUCT</h5>
            @php
                $tp = 0;
            @endphp
            @foreach ($item as $i)
                @php
                    $tp += $i->totalprice;
                @endphp
            @endforeach

            <form action="/save/{{$tp}}" method="POST">
                @csrf
                <span>Shipping address :</span>
                <div>
                    <input type="text" placeholder="Shipping address" name="address" style="font-family: 'Secular One', sans-serif; text-align: center">
                </div>
                <br>
                <span>Post code :</span>
                <div>
                    <input type="text" placeholder="Post code" name="post" style="font-family: 'Secular One', sans-serif; text-align: center">
                </div>
                <br>
                @foreach ($item as $i)
                    <p>INV{{$i->id}} &ensp; {{$i->category}} &ensp; {{$i->name}} x {{$i->total}} &ensp; Rp{{$i->price}}/pc : &ensp; Rp{{$i->totalprice}}</p>
                @endforeach
                <input type="submit" class="btn btn-primary" value="Save">
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>
