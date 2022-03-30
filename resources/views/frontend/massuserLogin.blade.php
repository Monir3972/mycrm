<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>User| Login</title>
  </head>
  <body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <p class="text-center fw-bold">User Login</p>
                        </div>
                        <form class="form p-3" action="{{ route('confirmLogin') }}" method="POST">
                                                         @if(Session::get('fail'))
                                                           <div class="alert alert-danger">
                                                              {{ Session::get('fail') }}
                                                           </div>
                                                        @endif
                                                      @csrf
                                                        <div class="form-group mb-2">
                                                            <label class="form-label fw-bold" for="email">Email</label>
                                                            <input type="text" class="form-control" name="email" placeholder="Enter Your Username" value="{{ old('email') }}">
                                                           <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                                                        </div>
                                                        <div class="form-group mb-2">
                                                            <label class="form-label fw-bold" for="password">Password</label>
                                                            <input type="password" class="form-control" name="password" placeholder="Enter your login password">
                                                            <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                                                        </div>
                                                      <!--   <div class="form-group mb-2">
                                                            <p>Not Registerd? Please<a href="" class="btn btn-warning btn-sm mt-3">Click Here</a></p>
                                                        </div> -->
                                                        <div class="d-grid gap-2">
                                                            <input type="submit" class="btn btn-success" value="Login">
                                                        </div>
                         </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
     

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
                                                