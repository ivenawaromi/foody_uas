@extends('layouts.app')
    @section('content')

    <div class="container-sm my-5 card border-secondary">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ Vite::asset('resources/img/logo.png')}}" class="img-fluid rounded-strart" alt="Gambar Detail">
            </div>

            <div class="col-md-8">
                <div class="card-body">
                    @if ($foods)
                        <h5 class="card-title">{{ $foods->nameFood}}</h5>
                        <p class="card-text">
                            {{ $foods->description }} <br>
                            Categories: {{ $foods->categorie->name }} <br>
                            Rp {{ intval ($foods->price). '.000'}}
                        </p>
                        <p class="card-text d-grid gap-2 d-md-flex justify-content-md-end">
                            <small>
                                <a href="{{ route('foods.index')}}" class="btn me-md-2" style="background-color: #fca838">Back</a>
                                <a href="{{ route('foods.edit', [$foods->id]) }}" class="btn me-md-2" style="background-color: #fca838">Edit</a>
                            </small>
                        </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
