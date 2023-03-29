<?php

namespace App\Http\Controllers;

use App\Models\persoon;
use Illuminate\Http\Request;
use Illuminate\view\View;
use Illuminate\view\Factory;

class persoonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): view
    {
        $personen = persoon::latest()->paginate(5);

        return view('persoon.index', compact('personen'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(persoon $persoon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(persoon $persoon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, persoon $persoon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(persoon $persoon)
    {
        //
    }
}
