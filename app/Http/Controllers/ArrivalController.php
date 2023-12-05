<?php

namespace App\Http\Controllers;

use App\Models\Arrival;
use App\Http\Requests\StoreArrivalRequest;
use App\Http\Requests\UpdateArrivalRequest;
use Inertia\Inertia;

class ArrivalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Arrivals/Index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArrivalRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Arrival $arrival)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Arrival $arrival)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArrivalRequest $request, Arrival $arrival)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Arrival $arrival)
    {
        //
    }
}
