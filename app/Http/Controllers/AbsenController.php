<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use Illuminate\Http\Request;

class AbsenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $absens = Absen::all(); 

        // Pass the data to the 'index' view
        return view('absen.index', compact('absens'));  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('absen.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'divisi' => 'required',
            'posisi' => 'required',
            ]);
    
            Absen::create([
                'name' => $request ->name,
                'divisi' => $request -> divisi,
                'posisi' => $request -> posisi,
    
            ]);

        return redirect()->back()->with('success', 'Berhasil menambahkan data absen');
    }

    /**
     * Display the specified resource.
     */
    public function show(Absen $absen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Absen $absen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Absen $absen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Absen $absen)
    {
        //
    }
}
