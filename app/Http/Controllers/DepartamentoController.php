<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Pais;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $departamentos = DB::table('tb_departamentos')
        ->join('tb_paises', 'tb_departamentos.pais_codi', '=', 'tb_paises.pais_codi')
        ->select('tb_departamentos.*', 'tb_paises.pais_nomb')
        ->get();

        return view('departamento.index', ['departamentos' => $departamentos]);
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

        return view('departamento.new', ['paises' => $paises]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $departamento = new Departamento();
        $departamento->depa_nomb = $request->departamento;
        $departamento->pais_codi = $request->pais;
        $departamento->save();

        $departamentos = DB::table('tb_departamentos')
        ->join('tb_paises', 'tb_departamentos.pais_codi', '=', 'tb_paises.pais_codi')
        ->select('tb_departamentos.*', 'tb_paises.pais_nomb')
        ->get();

        return view('departamento.index', ['departamentos' => $departamentos]);
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
        $departamento = Departamento::find($id);
        $paises = DB::table('tb_paises')
        ->orderBy('pais_nomb')
        ->get();

        return view('departamento.edit', ['departamento' => $departamento, 'paises' => $paises]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $departamento = Departamento::find($id);

        $departamento->depa_nomb = $request->departamento;
        $departamento->pais_codi = $request->pais;
        $departamento->save();

        $departamentos = DB::table('tb_departamentos')
        ->join('tb_paises', 'tb_departamentos.pais_codi', '=', 'tb_paises.pais_codi')
        ->get();

        return view('departamento.index', ['departamentos' => $departamentos]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $departamento = Departamento::find($id);
        $departamento->delete();

        $departamentos = DB::table('tb_departamentos')
        ->join('tb_paises', 'tb_departamentos.pais_codi', '=', 'tb_paises.pais_codi')
        ->select('tb_departamentos.*', 'tb_paises.pais_nomb')
        ->get();

        return view('departamento.index', ['departamentos' => $departamentos]);
    }
}
