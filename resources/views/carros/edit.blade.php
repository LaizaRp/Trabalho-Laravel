@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <h2 class="mb-4 text-center">Editar Carro: {{ $carro->marca }} {{ $carro->modelo }}</h2>
            
            <div class="card shadow-lg">
                <div class="card-body p-4">

         
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('carros.update', $carro->id) }}" method="POST">
                        @csrf
                        @method('PUT') 

            
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="marca" class="form-label fw-bold">Marca</label>
                                <input type="text" class="form-control" id="marca" name="marca" value="{{ old('marca', $carro->marca) }}" required placeholder="Ex: Fiat, Ford, Hyundai">
                            </div>
                            <div class="col-md-6">
                                <label for="modelo" class="form-label fw-bold">Modelo</label>
                                <input type="text" class="form-control" id="modelo" name="modelo" value="{{ old('modelo', $carro->modelo) }}" required placeholder="Ex: Palio, Fiesta, HB20">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="ano" class="form-label fw-bold">Ano</label>
                                <input type="number" class="form-control" id="ano" name="ano" value="{{ old('ano', $carro->ano) }}" required placeholder="Ex: 2025">
                            </div>
                            <div class="col-md-6">
                                <label for="preco" class="form-label fw-bold">Preço (R$)</label>
                                <input type="text" class="form-control" id="preco" name="preco" value="{{ old('preco', number_format($carro->preco, 2, '.', '')) }}" required placeholder="Ex: 22500.00">
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="cor" class="form-label fw-bold">Cor</label>
                                <input type="text" class="form-control" id="cor" name="cor" value="{{ old('cor', $carro->cor) }}" required placeholder="Ex: Prata, Preto, Vermelho">
                            </div>
                            <div class="col-md-4">
                                <label for="quilometragem" class="form-label fw-bold">Quilometragem (Km)</label>
                                <input type="number" class="form-control" id="quilometragem" name="quilometragem" value="{{ old('quilometragem', $carro->quilometragem) }}" required min="0" placeholder="Ex: 15000">
                            </div>
                            <div class="col-md-4">
                                <label for="combustivel" class="form-label fw-bold">Combustível</label>
                                <select class="form-select" id="combustivel" name="combustivel" required>
                                    <option value="">Selecione...</option>
                                    @foreach (['Gasolina', 'Etanol', 'Diesel', 'Flex', 'Eletrico'] as $comb)
                                        <option value="{{ $comb }}" {{ old('combustivel', $carro->combustivel) == $comb ? 'selected' : '' }}>
                                            {{ $comb }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

               
                        <h5 class="mt-4 mb-3">URLs das Fotos</h5>
                        <div class="mb-3">
                            <label for="foto_principal" class="form-label fw-bold">Foto Principal (URL)</label>
                            <input type="url" class="form-control" id="foto_principal" name="foto_principal" value="{{ old('foto_principal', $carro->foto_principal) }}" required placeholder="Cole o link da imagem principal (ex: imgur.com/foto1.jpg)">
                        </div>
                        <div class="mb-3">
                            <label for="foto_2" class="form-label fw-bold">Foto 2 (URL)</label>
                            <input type="url" class="form-control" id="foto_2" name="foto_2" value="{{ old('foto_2', $carro->foto_2) }}" required placeholder="Cole o link da segunda imagem (ex: imgur.com/foto2.jpg)">
                        </div>
                        <div class="mb-3">
                            <label for="foto_3" class="form-label fw-bold">Foto 3 (URL)</label>
                            <input type="url" class="form-control" id="foto_3" name="foto_3" value="{{ old('foto_3', $carro->foto_3) }}" required placeholder="Cole o link da terceira imagem (ex: imgur.com/foto3.jpg)">
                        </div>

                  
                        <div class="mb-4">
                            <label for="descricao" class="form-label fw-bold">Descrição</label>
                            <textarea class="form-control" id="descricao" name="descricao" rows="3" placeholder="Detalhes opcionais sobre o carro.">{{ old('descricao', $carro->descricao) }}</textarea>
                        </div>
                 
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('carros.index') }}" class="btn btn-secondary">Voltar</a>
                            <button type="submit" class="btn btn-success">Salvar Alterações</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection