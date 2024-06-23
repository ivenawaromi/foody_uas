@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container mt-4">
        <div class="row mb-0">
            <div class="col-lg-9 col-xl-10">
                <h4 class="mb-3">{{ $pageTitle }}</h4>
            </div>
            <div class="col-lg-3 col-xl-2">
                <div class="d-grid gap-2">
                    <button type="button" class="btn btn-md" style="background-color: #fca838" data-bs-toggle="modal" data-bs-target="#createEmployee">
                        <i class="bi bi-plus-circle me-1"></i>Create Food
                    </button>
                    <div class="modal fade" id="createEmployee" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="{{ route('foods.store') }}" method="POST">
                                    @csrf
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Input Food</h5>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="nameFood" class="form-label">Name Food</label>
                                            <input class="form-control @error('nameFood') is-invalid @enderror" type="text" name="nameFood" id="nameFood" value="{{ old('nameFood') }}" placeholder="Enter Name Food">
                                            @error('nameFood')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="price" class="form-label">Price</label>
                                            <input class="form-control @error('price') is-invalid @enderror" type="decimal" name="price" id="price" value="{{ old('price') }}" placeholder="Enter Price">
                                            @error('price')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="categorie" class="form-label">Categories</label>
                                            <select name="categorie" id="categorie" class="form-select">
                                                @foreach ($categories as $categorie)
                                                    <option value="{{ $categorie->id }}" {{ old('categorie') == $categorie->id ? 'selected' : ''}}>{{ $categorie->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('categorie')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="description" class="form-label">Description</label>
                                            <textarea name="description" id="description" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror" type="text" value="{{ old('description') }} " placeholder="Enter Description"></textarea>
                                            @error('description')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="cv" class="form-label">Upload Gambar</label>
                                            <input type="file" class="form-control" name="cv" id="cv">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn" style="background-color: #fca838">Save changes</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @foreach ($foods as $food)
        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">{{ $food->nameFood}}</h5>
                <p class="card-text">
                    {{ $food->description }} <br>
                    Category : {{ $food->categorie->name }} <br>
                    Rp {{ intval($food->price) . '.000' }}
                </p>
                <a href="{{ route('foods.show', ['food'=> $food->id]) }}" class="btn btn-outline-warning btn-sm me-1" >See</a>
                <a href="{{ route('foods.edit', ['food'=> $food->id]) }}" class="btn btn-outline-warning btn-sm me-1">Edit</a>
                <form action="{{ route('foods.destroy', ['food' => $food->id]) }}" method="POST" class="btn row">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-outline-warning btn-sm me-1">Delete</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
