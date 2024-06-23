<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ ('PalateParadise') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite('resources/sass/app.scss')
</head>
<body style="background-image: url('{{ Vite::asset('resources/img/ds4.jpg') }}'); background-size: cover; background-position: center; height: 100vh; display: flex; justify-content: center; align-items: center;">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 col-md-5 ">
                <div class="mb-3 text-center">
                    <h4>PalateParadise</h4>
                    <br>
                    <hr>
                </div>
                <ul class="nav nav-pills nav-justified mb-3 mt-4" id="login" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="tab-login" data-mdb-pill-init href="#pills-login" role="tab"
                          aria-controls="pills-login" aria-selected="true" style="background-color: #fca838"> Login
                        </a>
                      </li>
                    <li class="nav-item" role="presentation">
                        <a href="{{ route('register') }}" class="nav-link" id="tab-register" data-mdb-pill-init href="#pills-register" role="tab"
                        aria-controls="pills-register" aria-selected="false" style="color: #fca838" > Register
                    </a>
                    </li>
                </ul>

                <div class="tab-content mt-4">
                    <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                        <form action="">
                            <div class="text-center mb-3">
                                <p>Sign in with: </p>
                                <div class="d-flex justify-content-center text-center mt-2 pt-1">
                                    <a href="" class="text-primary"><i class="bi bi-google bi-md"></i></a>
                                    <a href="" class="text-primary"><i class="bi bi-facebook bi-md ms-4"></i></a>
                                    <a href="" class="text-primary"><i class="bi bi-twitter bi-md ms-4"></i></a>
                                </div>
                            </div>
                            <p class="text-center">or:</p>
                        </form>
                    </div>
                </div>
                <div class="card-body" style="background: rgba(225, 225, 225, 0,5)">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">

                            <div class=" center col-md-12 mt-3">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter Your Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter Your Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <hr>
                        <div class="checkbox mb-3">
                            <label for="label">
                                <input type="checkbox" value="remember-me"> Remember Me
                            </label>
                        </div>
                        <div class="row mb-0 mt-2">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-block col-md-12" style="background-color: #fca838">
                                    <i class="bi bi-box-arrow-right"></i>
                                    {{ __('Log In') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer mt-4">
                    <div class="d-flex justify-content-center link">
                        Don't have an account? <a href="{{ route('register') }}">Register</a>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="">Forgot your Password?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
