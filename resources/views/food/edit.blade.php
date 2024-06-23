@extends('layouts.app')
    @section('content')
    <div class="container-sm mt-5">
        <form action="{{ route('foods.update', ['food' => $foods->id]) }}" method="POST">
            @csrf
            @method('put')
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 border col-xl-6">
                    <div class="mb-3 text-center">
                        <i class="bi bi-egg-fried fs-1"></i>
                        <h4>Edit Food List</h4>
                    </div>

                    <hr>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="nameFood" class="form-label">Name Food</label>
                            <input class="form-control @error('nameFood') is-invalid @enderror" type="text" name="nameFood" id="nameFood" value="{{ $errors->any() ? old('nameFood') : $foods->nameFood }}" placeholder="Enter Name Food">
                            @error('nameFood')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input class="form-control @error('price') is-invalid @enderror" type="decimal" name="price" id="price" value="{{ $errors->any() ?  old('price') : $foods->price }}" placeholder="Enter Price">
                            @error('price')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="categorie" class="form-label">Categories</label>
                            <select name="categorie" id="categorie" class="form-select">
                                @php
                                    $selected = "";
                                    if ($errors->any())
                                        $selected = old('categorie');
                                    else {
                                        $selected = $foods->categorie_id;
                                    }
                                @endphp
                                @foreach ($categories as $categorie )
                                    <option value="{{ $categorie->id}}" {{ $selected == $categorie->id ? 'selected' : ''}}>{{ $categorie->name}}</option>
                                @endforeach
                            </select>
                            @error('categorie')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" placeholder="Enter Description" cols="10" rows="10">{{ $errors->any() ? old('description') : $foods->description }}</textarea>
                            @error('description')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                    </div>

                    <hr>
                    <div class="row">
                        <div class="col-md-6 d-grid">
                            <a href="{{ route('foods.index') }}" class="btn btn-outline-warning btn-lg mt-3"><i class="bi bi-arrow-bar-left me-2"></i>Cancel</a>
                        </div>
                        <div class="col-md-6 d-grid">
                            <button type="submit" class="btn btn-success btn-lg mt-3"><i class="bi bi-check2-circle mt-3"></i>Edit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
