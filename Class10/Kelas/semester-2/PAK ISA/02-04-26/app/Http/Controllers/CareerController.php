<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Career;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Career::orderBy('career_date')->get();
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
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'career_date' => 'required|date',
        ]);

        $career = Career::create($request->all());
        return response()->json($career, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Career::findOrFail($id);
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
        $career = Career::findOrFail($id);
        $career->update($request->all());
        return response()->json($career);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Career::destroy($id);
        return response()->json(['message' => 'Deleted']);
    }
}
