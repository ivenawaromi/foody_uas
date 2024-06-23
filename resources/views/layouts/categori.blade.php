<br>
    <div class="container">
        <br>
        <h4 class="text-center mt-4">Categories</h4>
        <br>
        <div class="row">
            <div class="col my-2 text-center">
                <a href="{{ route('foods.index') }}" class="bd-placeholder-img" type="button">
                    <img src="{{ Vite::asset('resources/img/aptz5.jpg' )}}" alt="Appetizer" class="rounded-circle" width="140" height="140">
                </a>
                <h5> Appetizer</h5>
            </div>
            <div class="col my-2 text-center">
                <a href="{{ route('foods.index') }}" class="bd-placeholder-img" type="button">
                    <img src="{{ Vite::asset('resources/img/sp1.jpg')}}" alt="Soup" class="rounded-circle" width="140" height="140">
                </a>
                <h5>Soup</h5>
            </div>
            <div class="col my-2 text-center">
                <a href="{{ route('foods.index') }}" class="bd-placeholder-img" type="button">
                    <img src="{{ Vite::asset('resources/img/mc4.jpg')}}" alt="Main Course" class="rounded-circle" width="140" height="140">
                </a>
                <h5>Main Course</h5>
            </div>
            <div class="col my-2 text-center">
                <a href="{{ route('foods.index')}}" class="bd-placeholder-img" type="button">
                    <img src="{{ Vite::asset('resources/img/ds1.jpg')}}" alt="Dessert" class="rounded-circle" width="140" height="140">
                </a>
                <h5>Dessert</h5>
            </div>
        </div>
    </div>
