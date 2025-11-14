@extends('layouts.app')

<style>

    body {
        background-color: #0961B2 !important; 
    }


    .card {
        background-color: white !important; 
        border: none !important; 
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15) !important; 
        border-radius: 0.75rem !important; 
    }

 
   .container .col-md-8 h1 {
    color: white !important; 
    font-weight: 700 !important;
    text-align: center !important; 
    margin-bottom: 1.5rem !important; 
}
   
    .container > .row > .justify-content-center > .col-md-8 > hr {
        border-top: 1px solid #64b5f6 !important; 
        margin-bottom: 1.5rem !important;
        opacity: 0.5; 
    }
   
    .form-label {
        color: #1a1a1a !important; 
        font-weight: 500; 
    }
  
    h5 {
        color: #1a1a1a !important; 
        font-weight: 600 !important; 
    }

   
    .form-control:focus, .form-select:focus, .form-control.is-invalid:focus, .form-select.is-invalid:focus {
        border-color: #0d47a1 !important; 
        box-shadow: 0 0 0 0.25rem rgba(13, 71, 161, 0.25) !important; 
    }
 
    .invalid-feedback {
        color: #e3342f !important; 
    }

    .form-control.is-invalid, .form-select.is-invalid {
        border-color: #e3342f !important;
    }


    .btn-success {
        background-color: #0d47a1 !important; 
        border-color: #0d47a1 !important;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.15); 
        transition: background-color 0.15s ease-in-out; 
    }
    .btn-success:hover {
        background-color: #0961B2 !important; 
        border-color: #0961B2 !important;
    }


    .btn-secondary {
        background-color: #e9ecef !important; 
        border-color: #e9ecef !important;
        color: #343a40 !important; 
        box-shadow: none !important; 
        transition: background-color 0.15s ease-in-out;
    }
    .btn-secondary:hover {
        background-color: #dae0e5 !important; 
        border-color: #dae0e5 !important;
    }

    .alert-success {
        background-color: #4CAF50 !important; 
        color: white !important;
        border-color: #4CAF50 !important;
    }
    .alert-danger {
        background-color: #f44336 !important; 
        color: white !important;
        border-color: #f44336 !important;
    }
</style>

@section('content')
<div class="container py-4">
<div class="row justify-content-center">
<div class="col-md-8">
<h1 class="mb-4">Cadastrar Novo Carro</h1>
<hr>

            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            
        
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Ops!</strong> Houve alguns problemas com sua entrada.<br><br>
                    <ul class="mb-0"> 
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="card shadow-sm">
                <div class="card-body">
                    
                    <form action="{{ route('carros.store') }}" method="POST">
                        @csrf 

                        {{-- MARCA --}}
                        <div class="mb-3">
                            <label for="marca" class="form-label">Marca</label>
                            <input type="text" 
                                    class="form-control @error('marca') is-invalid @enderror" 
                                    id="marca" 
                                    name="marca" 
                                    value="{{ old('marca') }}" 
                                    placeholder="Ex: Fiat, Ford, Hyundai"
                                    required>
                            @error('marca')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

              
                        <div class="mb-3">
                            <label for="modelo" class="form-label">Modelo</label>
                            <input type="text" 
                                    class="form-control @error('modelo') is-invalid @enderror" 
                                    id="modelo" 
                                    name="modelo" 
                                    value="{{ old('modelo') }}" 
                                    placeholder="Ex: Palio, Fiesta, HB20"
                                    required>
                            @error('modelo')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row">
                     
                            <div class="col-md-6 mb-3">
                                <label for="ano" class="form-label">Ano</label>
                                <input type="number" 
                                        class="form-control @error('ano') is-invalid @enderror" 
                                        id="ano" 
                                        name="ano" 
                                        value="{{ old('ano') }}" 
                                        placeholder="Ex: 2025"
                                        min="1900" 
                                        max="{{ date('Y') + 1 }}"
                                        required>
                                @error('ano')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                   
                            <div class="col-md-6 mb-3">
                                <label for="preco" class="form-label">Preço (R$)</label>
                                <input type="number" 
                                        class="form-control @error('preco') is-invalid @enderror" 
                                        id="preco" 
                                        name="preco" 
                                        step="0.01" 
                                        value="{{ old('preco') }}" 
                                        placeholder="Ex: 22500.00"
                                        required>
                                @error('preco')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row">
                       
                            <div class="col-md-6 mb-3">
                                <label for="cor" class="form-label">Cor</label>
                                <input type="text" 
                                        class="form-control @error('cor') is-invalid @enderror" 
                                        id="cor" 
                                        name="cor" 
                                        value="{{ old('cor') }}" 
                                        placeholder="Ex: Prata, Preto, Vermelho"
                                        required>
                                @error('cor')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="quilometragem" class="form-label">Quilometragem (Km)</label>
                                <input type="number" 
                                        class="form-control @error('quilometragem') is-invalid @enderror" 
                                        id="quilometragem" 
                                        name="quilometragem" 
                                        value="{{ old('quilometragem') }}" 
                                        placeholder="Ex: 15000"
                                        required>
                                @error('quilometragem')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                           
                            <div class="col-md-6 mb-3">
                                <label for="combustivel" class="form-label">Combustível</label>
                                <select class="form-control @error('combustivel') is-invalid @enderror" 
                                        id="combustivel" 
                                        name="combustivel"
                                        required>
                                    <option value="">Selecione...</option>
                                    <option value="Gasolina" {{ old('combustivel') == 'Gasolina' ? 'selected' : '' }}>Gasolina</option>
                                    <option value="Etanol" {{ old('combustivel') == 'Etanol' ? 'selected' : '' }}>Etanol</option>
                                    <option value="Diesel" {{ old('combustivel') == 'Diesel' ? 'selected' : '' }}>Diesel</option>
                                    <option value="Flex" {{ old('combustivel') == 'Flex' ? 'selected' : '' }}>Flex</option>
                                    <option value="Eletrico" {{ old('combustivel') == 'Eletrico' ? 'selected' : '' }}>Elétrico</option>
                                </select>
                                @error('combustivel')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                        <h5 class="mt-4 mb-3">Links das Fotos (Mínimo 3)</h5>

                
                        <div class="mb-3">
                            <label for="foto_principal" class="form-label">URL da Foto Principal</label>
                            <input type="url" 
                                    class="form-control @error('foto_principal') is-invalid @enderror" 
                                    id="foto_principal" 
                                    name="foto_principal" 
                                    value="{{ old('foto_principal') }}"
                                    placeholder="Ex: https://link.da/foto1.jpg"
                                    required>
                            @error('foto_principal')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

           
                        <div class="mb-3">
                            <label for="foto_2" class="form-label">URL da Foto 2</label>
                            <input type="url" 
                                    class="form-control @error('2') is-invalid @enderror" 
                                    id="foto_2" 
                                    name="foto_2" 
                                    value="{{ old('foto_2') }}"
                                    placeholder="Ex: https://link.da/foto_2.jpg"
                                    required>
                            @error('foto_2')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- FOTO 3 (Link) --}}
                        <div class="mb-3">
                            <label for="foto_3" class="form-label">URL da Foto 3</label>
                            <input type="url" 
                                    class="form-control @error('foto_3') is-invalid @enderror" 
                                    id="foto_3" 
                                    name="foto_3" 
                                    value="{{ old('foto_3') }}"
                                    placeholder="Ex: https://link.da/foto3.jpg"
                                    required>
                            @error('foto_3')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                 
                        <div class="mb-3">
                            <label for="descricao" class="form-label">Descrição</label>
                            <textarea class="form-control @error('descricao') is-invalid @enderror" 
                                    id="descricao" 
                                    name="descricao" 
                                    rows="3"
                                    placeholder="Detalhes opcionais sobre o carro.">{{ old('descricao') }}</textarea>
                            @error('descricao')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-between pt-2">
                            <a href="{{ route('carros.index') }}" class="btn btn-secondary">Voltar</a>
                            <button type="submit" class="btn btn-success">Salvar Carro</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection