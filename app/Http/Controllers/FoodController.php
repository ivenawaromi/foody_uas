<?php

namespace App\Http\Controllers;
use App\Models\Foods;
use App\Models\Categories;
use Validator;

use Illuminate\Http\Request;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = 'Food List';

        //ELOQUENT
        $foods = Foods::all();

        $categories = Categories::all();

        return view('food.index',
        [
            'pageTitle' => $pageTitle,
            'foods' => $foods,
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Create Food List';

        //Eloquent
        $categories = Categories::all();

        return view('food.create', compact('pageTitle', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $massages = [
            'required' => ':Attribute harus diisi.',
            'numeric' => 'Isi :attribute nominal tersebut'
        ];

        $validator = Validator::make($request->all(), [
            'nameFood' => 'required',
            'description' => 'required',
            'price'=> 'required |numeric'
        ], $massages);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        //Eloquent
        $food = New Foods;
        $food->nameFood = $request->nameFood;
        $food->description = $request->description;
        $food->price = $request->price;
        $food->categorie_id = $request->categorie;
        $food->save();

        return redirect()-> route('foods.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pageTitle = 'Detail Food';

        //Eloquent
        $foods = Foods::find($id);

        return view('food.show', compact('pageTitle', 'foods'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pageTitle = 'Edit list Food';

        //Eloquent
        $categories = Categories::all();
        $foods = Foods::find($id);

        return view('food.edit', compact('pageTitle', 'categories', 'foods' ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $massages = [
            'required' => ':Attribute harus diisi.',
            'numeric' => 'Isi :attribute nominal tersebut'
        ];

        $validator = Validator::make($request->all(), [
            'nameFood' => 'required',
            'description' => 'required',
            'price'=> 'required |numeric'
        ], $massages);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        //Eloquent
        $foods = Foods::find($id);
        $foods->nameFood = $request->nameFood;
        $foods->description = $request->description;
        $foods->price = $request->price;
        $foods->categorie_id = $request->categorie;
        $foods->save();

        return redirect()->route('foods.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Eloquent
        Foods::find($id)->delete();

        return redirect()->route('foods.index');
    }
}
