<?php

namespace App\Http\Controllers;

use App\Models\Carro; 
use Illuminate\Http\Request;

class PortalController extends Controller
{
 

    public function index(Request $request)
    {
    
        $query = Carro::query();

   
        if ($request->filled('marca')) {
            $query->where('marca', $request->input('marca'));
        }

        if ($request->filled('modelo')) {
           
            $query->where('modelo', 'like', '%' . $request->input('modelo') . '%');
        }

        if ($request->filled('preco_min')) {
            $query->where('preco', '>=', $request->input('preco_min'));
        }

        if ($request->filled('preco_max')) {
            $query->where('preco', '<=', $request->input('preco_max'));
        }

        if ($request->filled('combustivel')) {
            $query->where('combustivel', $request->input('combustivel'));
        }

      
        $carros = $query->paginate(9)->appends($request->query());
        $marcas = Carro::distinct()->pluck('marca')->sort();
        $combustiveis = Carro::distinct()->pluck('combustivel')->sort();


        return view('portal.index', [
            'carros' => $carros,
            'marcas' => $marcas,
            'combustiveis' => $combustiveis,
        ]);
    }
    

    public function show($id)
    {
 
        $carro = Carro::findOrFail($id); 

    
        return view('portal.show', compact('carro'));
    }
}