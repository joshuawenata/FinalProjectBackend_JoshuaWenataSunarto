<!DOCTYPE html>
<html lang="en">
  <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Home Page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">

        <style>
            body{
                background-image: url("./homes/background1.jpg");
                background-repeat: no-repeat;
                background-size: cover;
            }
            nav{
                background-color : #d8e7f5;
            }
            #logo{
                margin-left: 30px;
            }
            #avatar{
                vertical-align: middle;
                width: 50px;
                height: 50px;
                border-radius:50%;
            }
            #catalog{
                margin-left: 30px;
                margin-top: 10px;
                font-weight: bold;
            }
            .card{
                height: 400px;
                width: 18rem;
                margin-top: 50px;
                margin-left: 80px;
                text-align: center;
                background-color: #e3fcff;
            }
        </style>
  </head>
  <body>
    @php
        Auth::logout();
    @endphp
    <nav class="navbar navbar-expand-lg navbar-light" style="position: sticky; top: 0; z-index: 1">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto ">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="./homes/avatar.png" id="avatar" width="70" height="50">
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/logoutl">Login</a></li>
                <li><a class="dropdown-item" href="/logoutr">Create Another Account</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="/logout">Logout</a></li>
              </ul>
            </li>
            <li class="nav-item">
                @foreach ($name as $n)
                    <p style="font-weight: bold; margin-left: 20px; margin-top: 18px">{{$n->name}}</p>
                @endforeach
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <br>
    <div class="row row-cols-md-2 g-5">
        @foreach ($item as $i)
            <div class="card h-100" style="align-items: center;">
                <img src={{$i->photo}} class="card-img-top" style="height: 150px; width: 150px; margin-top: 50px;">
                <div class="card-body">
                    <p class="card-title" style="font-weight: bold">{{$i->name}}</p>
                    <p>category: {{$i->category}}</p>
                    <p>price: Rp {{$i->price}}</p>
                    <p>stock: {{$i->stock}}</p>
                    <form action="/addtoCart/{{$i->id}}" method="POST">
                        @csrf
                        <span>Item count :</span>
                        <div>
                            <input type="text" placeholder="item count to buy" name="total" style="font-family: 'Secular One', sans-serif; text-align: center">
                        </div>
                        <br>
                        <input type="submit" class="btn btn-primary" value="add to cart">
                    </form>
                </div>
            </div>
        @endforeach
    </div>
    <div style="position: sticky; bottom: 1rem; padding-left: 85rem">
        <a href="/struct">
            <img src="./homes/cart.png" style="height: 150px; width:150px; border-radius: 50%">
        </a>
    </div>
  </body>
</html>
