 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Dashboard | User</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
       
      </ul>
      <div class="navbar-nav ml-auto">
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{ $LoggedUserInfo['name'] }}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{ route('userLogout')}}">Logout</a></li>
          </ul>
        </li>
      </div>
    </div>
  </div>
</nav>
<div class="container mt-3">
  <div class="row">
    <div class="col-md-4">
        <div class="card text-white bg-primary mb-3">
        <div class="card-header">Total Invoice</div>
        <div class="card-body">
          <h5 class="card-title">3</h5>
        </div>
      </div>
    </div>
     <div class="col-md-4">
        <div class="card text-white bg-success mb-3">
        <div class="card-header">Total Order</div>
        <div class="card-body">
          <h5 class="card-title">5</h5>
        </div>
      </div>
    </div>
     <div class="col-md-4">
        <div class="card text-white bg-warning mb-3">
        <div class="card-header">Due Ammount</div>
        <div class="card-body">
          <h5 class="card-title">1500 USD</h5>
        </div>
      </div>
    </div>
  </div>
</div>
 

  <!-- <table class="table table-hover">
                      <thead>
                        <th>Name</th>
                        <th>Email</th>
                        <th></th>
                      </thead>
                      <tbody>
                         <tr>
                            <td>{{ $LoggedUserInfo['name'] }}</td>
                            <td>{{ $LoggedUserInfo['email'] }}</td>
                            <td><a href="{{ route('userLogout')}}">Logout</a></td>
                         </tr>
                      </tbody>
      </table> -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
