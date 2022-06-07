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
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" onclick="window.location.href='/update/edit/{{$i->id}}'" class="btn btn-success">Update</button>
                        <button type="button" onclick="window.location.href='/delete/{{$i->id}}'" class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="card" style="height: 425px">
            <a href="/add">
                <img src="./admins/add.png" class="card-img-top" style="height: 150px; width: 150px; margin-top: 100px; margin-bottom: 50px">
            </a>
            <div class="card-body">
                <p class="card-title" style="font-weight: bold">Add Items</p>
            </div>
        </div>
    </div>

  </body>
</html>
