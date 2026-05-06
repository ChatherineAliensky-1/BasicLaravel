<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use Illuminate\Http\Request;

class FakultasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fakultas = Fakultas::orderBy('created_at', 'desc') -> get();
        //ikutin dari file web.php
        return view('fakultas.list-fakultas',compact('fakultas'));

        // cara data pas di simpan yang paling atas adalah data yang baru disimpan
        // tambahkan = orderBy('created_at', 'desc') -> get()

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('fakultas.add-fakultas');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //agar saat input data di Add Fakultas bisa tersimpan
        Fakultas::create([
            'name' => $request -> name_fakultas, 
            'dekan' => $request -> name_dekan //name_dekan di ambil dari add.fakultas.blade.php
        ]);

        return redirect('/fakultas');
    }

    /**
     * Display the specified resource.
     */
    public function show(Fakultas $fakulta)
    {
        //
        return view('fakultas.detail-fakultas', compact('fakulta'));
        // cara panggil samakan dengan fakulta
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fakultas $fakulta)
    {
        //
        return view('fakultas.edit-fakultas', [
            'fakultas' => $fakulta
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fakultas $fakulta)
    {
        //
        $fakulta->update([
            'name' => $request->name_fakultas,
            'dekan' => $request->name_dekan
        ]);
        return redirect('/fakultas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fakultas $fakulta) //awalnya $fakultas jadi $fakulta
    {
        // Cara hapus data yang sudah di simpan
        $fakulta->delete();
        return redirect()->back();


    }
}
