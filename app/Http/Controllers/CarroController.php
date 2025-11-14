<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class CarroController extends Controller
{
   
    public function index()
    {
     
        $carros = Carro::orderBy('created_at', 'desc')->paginate(10);

      
        return view('carros.index', compact('carros'));
    }

   
    public function create()
    {
        return view('carros.create');
    }

    
    public function store(Request $request)
    {
    
        $request->validate([
            'marca' => 'required|string|max:255',
            'modelo' => 'required|string|max:255',
            'ano' => 'required|integer|min:1900|max:' . (date('Y') + 1),
            'preco' => 'required|numeric|min:0',
            'cor' => 'required|string|max:50',
            'quilometragem' => 'required|integer|min:0',
            'combustivel' => ['required', Rule::in(['Gasolina', 'Etanol', 'Diesel', 'Flex', 'Eletrico'])],
            'foto_principal' => 'required|url|max:2048',
            'foto_2' => 'required|url|max:2048',
            'foto_3' => 'required|url|max:2048',
            'descricao' => 'required|string',
        ]);

        $data = $request->all();
        
  
        $carro = new Carro($data);

        $carro->user_id = Auth::id();

   
        $carro->save();

        return redirect()->route('carros.index')
            ->with('success', 'Carro cadastrado com sucesso!');
    }

  
    public function show(Carro $carro)
    {
        return view('carros.show', compact('carro'));
    }

    
    public function edit(Carro $carro)
    {
        return view('carros.edit', compact('carro'));
    }

 
    public function update(Request $request, Carro $carro)
    {
      
        $request->validate([
            'marca' => 'required|string|max:255',
            'modelo' => 'required|string|max:255',
            'ano' => 'required|integer|min:1900|max:' . (date('Y') + 1),
            'preco' => 'required|numeric|min:0',
            'cor' => 'required|string|max:50',
            'quilometragem' => 'required|integer|min:0',
            'combustivel' => ['required', Rule::in(['Gasolina', 'Etanol', 'Diesel', 'Flex', 'Eletrico'])],
            'foto_principal' => 'required|url|max:2048',
            'foto_2' => 'required|url|max:2048',
            'foto_3' => 'required|url|max:2048',
            'descricao' => 'required|string',
        ]);

  
        $carro->update($request->all());

        return redirect()->route('carros.index')
            ->with('success', 'Carro atualizado com sucesso!');
    }

 
    public function destroy(Carro $carro)
    {
        $carro->delete();

        return redirect()->route('carros.index')
            ->with('success', 'Carro removido com sucesso!');
    }
}