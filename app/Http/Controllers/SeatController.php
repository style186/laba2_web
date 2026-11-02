<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\seats;
use App\Models\Halls;

class SeatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('seats' , [
            'seats'=> seats::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('seat_create' , [
            'halls'=> Halls::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $validated = $request->validate([
        'row_num' => 'required|integer',
        'seat_num' => 'required|integer',
        'price_category' => 'required|string|max:100',
        'hall_id' => 'integer'

    ]);
    $seat= new seats($validated);
    $seat->save();
    return redirect('/seats');
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
        return view('seat_edit', [
            'seat' => seats::all()->where('id', $id)->first(),
            'halls'=> Halls::all()
    ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
        'row_num' => 'required|integer',
        'seat_num' => 'required|integer',
        'price_category' => 'required|string|max:100',
        'hall_id' => 'integer'
    ]);

    $seat = seats::all()->where('id', $id)->first();
    $seat->row_num = $validated['row_num'];
    $seat->seat_num = $validated['seat_num'];
    $seat->price_category = $validated['price_category'];
    $seat->hall_id = $validated['hall_id'];
    $seat->save();

    return redirect('/seats');         
     
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        seats::destroy($id);
        return redirect('/seats');
    }
}
