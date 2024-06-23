<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

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
            <div class="p-5 bg-light rounded-3 col-md-4">
                <div class="mb-3 text-center">
                    <h4>Registrasi</h4>
                    <br>
                    <hr>
                </div>
                <div class="card-body">
                    <form action="{{ route('register')}}" method="POST">
                        @csrf

                        <div class="row mb-2">
                            <label for="name" class="col-md-4 col-form-label text-md-end"></label>
                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Enter Your Name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="email" class="col-md-4 col-form-label text-md-end"></label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter Your Email" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-2 mt-2">
                            <label for="password" class="col-md-4 col-form-label text-md-end"></label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter Your Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end"></label>

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Your Password">
                            </div>
                        </div>
                        <div class="row mb-0 mt-6">
                            <hr class="mt-3">
                            <div class="col-md-12 mt-3">
                                <button type="submit" class="btn btn-block col-md-12" style="background-color: #fca838">
                                    <a href="{{ route('login')}}"></a>
                                    <i class="bi bi-box-arrow-right" ></i>
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
