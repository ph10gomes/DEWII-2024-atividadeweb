<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Veiculo;

class VeiculosController extends Controller
{
    public function showAll()
    {
        $lista = Veiculo::all();
        return view('veiculos.list', ['lista' => $lista]);
    }
    public function compose()
    {
        return view('veiculos.compose');

    }
    public function store(Request $request)
    {
        Veiculo::create([
            'fabricante' => $request->fabricante,
            'modelo' => $request->modelo,
            'cavalos' => $request->cavalos,

        ]);
        return redirect('/veiculos');

    }
    public function edit(Request $request)
    {
        $veiculo = Veiculo::find($request->id);
        return view('veiculos.compose', ['veiculo' => $veiculo]);
    }
    public function update(Request $request)
    {
        $veiculo = Veiculo::find($request->id);
        $veiculo->fabricante = $request->fabricante;
        $veiculo->modelo = $request->modelo;
        $veiculo->cavalos = $request->cavalos;
        $veiculo->save();
        return redirect('/veiculos');

        //return $this->showAll();
    }
    public function delete(Request $request)
    {
        $veiculo = Veiculo::find($request->id);
        $veiculo->delete();
        // return $this->showAll();
        return redirect('/veiculos');
    }

}
