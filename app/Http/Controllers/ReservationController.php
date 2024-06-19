<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use Illuminate\Support\Str;
use Validator;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = 'Resevation List';

        // ELOQUENT
        $reservations = Reservation::all();
        return view(
            'resev.index',
            [
                'pageTitle' => $pageTitle,
                'reservations' => $reservations
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Reservation';

        // ELOQUENT
        $reservations = Reservation::all();

        return view('resev.create', compact('pageTitle', 'reservations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'email' => 'Isi :attribute dengan format yang benar',
            'numeric' => 'Isi :attribute dengan angka'
        ];

        $validator = Validator::make($request->all(), [
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'resev_date' => 'required'
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // ELOQUENT
        $reservation = new Reservation;
        $reservation->firstname = $request->firstName;
        $reservation->lastname = $request->lastName;
        $reservation->email = $request->email;
        $reservation->phone = $request->phone;
        $reservation->resev_date = $request->resev_date;
        $reservation->order_id = Str::random(5); // Menggunakan string acak dengan panjang 5 karakter
        $reservation->save();

        return redirect()->route('resev.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $order_id)
    {
        $reservation = Reservation::where('order_id', $order_id)->firstOrFail();
        $reservation->delete();

        return redirect()->route('resev.index')->with('success', 'Reservation deleted successfully');
    }
}
