<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css1/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css1/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="css1/style.css">

    <title>Login</title>
</head>

<body>

    <div class="d-md-flex half">
        <div class="bg" style="background-image: url('images/bg_1.jpg');"></div>
        <div class="contents">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-12">
                        <div class="form-block mx-auto">
                            <div class="text-center mb-5">
                                <h3>Login to <strong>ZAY</strong></h3>
                                @if (Session::has('fail'))
                                    <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                                @endif
                                @if (Session::has('Email'))
                                    <div class="alert alert-danger">{{ Session::get('Email') }}</div>
                                @endif
                                @if (Session::has('password'))
                                    <div class="alert alert-danger">{{ Session::get('password') }}</div>
                                @endif
                            </div>
                            <form action="{{ route('LoginCheck') }}" method="post">
                                @csrf
                                <div class="form-group first">
                                    <label for="username">Username</label>
                                    <span class="text-danger">
                                        @error('Email')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                    <input type="text" name="Email" class="form-control"
                                        placeholder="Your Email" id="username">
                                </div>
                                <div class="form-group last mb-3">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control"
                                        placeholder="Your Password" id="password">
                                </div>

                                <div class="d-sm-flex mb-5 align-items-center">
                                    <span class="ml-auto"><a href="{{ route('registration') }}"
                                            class="forgot-pass">Create New Account</a></span>
                                </div>

                                <input type="submit" value="Log In" class="btn btn-block text-white"
                                    style="background-color:#59ab6e;">

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
