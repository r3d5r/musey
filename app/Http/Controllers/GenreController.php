<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genres = Genre::all();
        return view('pages.genres.index', compact(['genres']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.genres.create', []);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Genre::create([
            'name' => $request->get('name'),
        ]);
        return redirect()->route('genres.index');
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
    public function destroy(string $id)
    {
//
    }
}
