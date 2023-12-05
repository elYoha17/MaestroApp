<?php

namespace App\Http\Controllers;

use App\Models\Creditor;
use App\Http\Requests\StoreCreditorRequest;
use App\Http\Requests\UpdateCreditorRequest;
use Inertia\Inertia;

class CreditorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Creditors/Index');
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
    public function store(StoreCreditorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Creditor $creditor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Creditor $creditor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCreditorRequest $request, Creditor $creditor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Creditor $creditor)
    {
        //
    }
}
