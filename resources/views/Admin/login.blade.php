<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Admin Manna Kampus</title>

    @include('assets.scriptLink')
    @include('cssStyle.mainPageCSS')
</head>

<body style="background-color:darkcyan">

<div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h2 class="text-center text-light mt-5">Login</h2>
        <div class="text-center mb-5 text-light">Manna Kampus</div>
        <div class="card my-5 text-center">

          <form class="card-body cardbody-color p-lg-5" action="{{ route('loginaksi') }}" method="post">

            <div class="text-center">
              <img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/avatar-1295397__340.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                width="200px" alt="profile">
                <h3>Admin Page</h3>
                <br>
            </div>
            @if (session('error'))
                <div class="alert alert-danger" role="alert">
                    <b>Opps!</b> {{ session('error') }}
                </div>
            @endif
            @csrf
            <div class="form-floating">
                <input type="name" name="name" class="form-control" placeholder="Name" required="">
                <label for="floatingPassword">Name</label>
            </div>
            <br>
            <div class="form-floating">
                <input type="password" name="password" class="form-control" placeholder="Password" required="">
                <label for="floatingPassword">Password</label>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Log In</button>

            {{-- <p class="text-center">Belum punya akun? <a href="#">Register</a> sekarang!</p> --}}
          </form>
        </div>

      </div>
    </div>
  </div>
    {{-- <div class="card" style="text-align: center"><br>
        <div class="col-md-4 col-md-offset-4">
            <h2 class="text-center">Login Admin Manna Kampus</h2>
            <hr>
            @if (session('error'))
                <div class="alert alert-danger">
                    <b>Opps!</b> {{ session('error') }}
                </div>
            @endif

            <form action="{{ route('loginaksi') }}" method="post">
                @csrf
                <div class="form-floating">
                    <input type="name" name="name" class="form-control" placeholder="Name" required="">
                    <label for="floatingPassword">Name</label>
                </div>

                <div class="form-floating">
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                    <label for="floatingPassword">Password</label>
                </div>
                <br>
                <button type="submit" class="btn btn-primary btn-block">Log In</button>

                <hr>
                <p class="text-center">Belum punya akun? <a href="#">Register</a> sekarang!</p>
            </form>
        </div>
    </div> --}}
    </body>
</html>
