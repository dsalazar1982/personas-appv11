<?php

namespace App\Http\Controllers;

use App\Models\Pais;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paises = Pais::all();

        return view('pais.index', [
            'paises' => $paises,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $paises = DB::table('tb_paises')
        ->orderBy('pais_nomb')
        ->get();

        return view('pais.new', ['paises' => $paises]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $pais = new Pais();
        $pais->pais_codi = $request->id;
        $pais->pais_nomb = $request->pais;
        $pais->pais_capi = $request->capital;
        $pais->save();

        $paises = DB::table('tb_paises')
        ->get();

        return view('pais.index', ['paises' => $paises]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Pais $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $pais = Pais::find($id);
        $paises = DB::table('tb_paises')
        ->orderBy('pais_nomb')
        ->get();

        return view('pais.edit', ['pais' => $pais, 'paises' => $paises]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $pais = Pais::find($id);

        $pais->pais_nomb = $request->pais;
        $pais->pais_capi = $request->capital;
        $pais->save();

        $paises = DB::table('tb_paises')
        ->get();

        return view('pais.index', ['paises' => $paises]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $pais = Pais::find($id);
        $pais->delete();

        $paises = DB::table('tb_paises')
        ->get();

        return view('pais.index', ['paises' => $paises]);
    }
}
