<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome PalateParadise</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    <div class="position-fixed px-4 pt-5 my-5 text-center border-bottom bg-white">
        <h1 class="display-4 fw-bold">PalateParadise</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">
                Welcome! <br>
                Find a variety of delicious and inspiring dishes here. From classic recipes to modern creations, we are ready to pamper your taste buds.
                Let's explore the culinary world together and discover unforgettable flavors. <br>
                Enjoy your Food!
            </p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                <a class="btn btn-lg px-4 me-sm-6" style="background-color: #fca838" href="{{ route('home')}}">See All</a>
            </div>
        </div>
        <div class="overflow-hidden" style="max-height: 50vh;">
            <div class="container px-5">
                <img src="{{ Vite::asset('resources/img/cover1.png')}}" class="img-fluid mb-4" alt="Example image" width="700" height="500" loading="lazy">
            </div>
        </div>
    </div>
    @vite('resources/js/app.js')
</body>
</html>
