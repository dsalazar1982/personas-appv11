<?php

namespace App\Http\Controllers;

use App\Models\Comuna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ComunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        //$comunas = Comuna::all();
        $comunas = DB::table('tb_comunas')
        ->join('tb_municipios', 'tb_comunas.muni_codi', '=', 'tb_municipios.muni_codi')
        ->select('tb_comunas.*', 'tb_municipios.muni_nomb')
        ->get();
        return view('comuna.index', ['comunas' => $comunas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $municipios = DB::table('tb_municipios')
        ->orderBy('muni_nomb')
        ->get();
        return view('comuna.new', ['municipios' => $municipios]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $comuna = new Comuna();
        $comuna->comu_nomb = $request->comuna;
        $comuna->muni_codi = $request->municipio;
        $comuna->save();

        $comunas = DB::table('tb_comunas')
        ->join('tb_municipios', 'tb_comunas.muni_codi', '=', 'tb_municipios.muni_codi')
        ->select('tb_comunas.*', 'tb_municipios.muni_nomb')
        ->get();

        return view('comuna.index', ['comunas' => $comunas]);
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
