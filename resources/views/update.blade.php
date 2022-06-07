<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Update Item</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">

    <style>
        .card{
            font-family: 'Secular One', sans-serif;
        }
    </style>
  </head>
  <body>
    <div class="card text-center">
        <div class="card-header">
          Admin Page
        </div>
        <div class="card-body" style="height: 660px">
            @if($errors->any())
                <div class="alert alert-danger" role="alert" style="position: absolute; z-index: 1;margin-left: 200px; margin-top: 250px">
                    <strong>There's error on your data!</strong><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
          <h5 class="card-title" style="margin-top: 70px">Update Item</h5>
          <br>
          <div>
              <form action="/update/updates/{{$temp->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                {{method_field('PUT')}}
                <span>category :</span>
                <div>
                    <input type="text" placeholder="category" name="category" value="{{$temp->category}}">
                </div>
                <br>
                <span>name :</span>
                <div>
                    <input type="text" placeholder="name" name="name" value="{{$temp->name}}">
                </div>
                <br>
                <span>price :</span>
                <div>
                    <input type="text" placeholder="price" name="price" value="{{$temp->price}}">
                </div>
                <br>
                <span>stock :</span>
                <div>
                    <input type="text" placeholder="stock" name="stock" value="{{$temp->stock}}">
                </div>
                <br>
                <span>photo :</span>
                <div>
                    <input type="file" name="photo">
                </div>
                <br>
                <div>
                    <input type="submit" value="Update" class="btn btn-primary text-center">
                </div>
              </form>
          </div>
        </div>
        <div class="card-footer text-muted">
          Put item information!
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>
