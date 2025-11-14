@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-lg-10">

 
            <h1 class="mb-4 text-center">{{ $carro->marca }} {{ $carro->modelo }} ({{ $carro->ano }})</h1>
            
            <div class="card shadow-lg mb-4">
                <div class="card-body p-0">
                    
                 
                    @php
        
                        $fotos = array_filter([
                            $carro->foto_principal,
                            $carro->foto_2,
                            $carro->foto_3,
                        ]);
                       
                        $has_controls = count($fotos) > 1;
                    @endphp

                    <div id="carrouselFotos" class="carousel slide" data-bs-ride="carousel">
                        
                        <div class="carousel-inner rounded-top">
                            @forelse ($fotos as $key => $foto)
                                <div class="carousel-item @if ($key === 0) active @endif">
                                   
                                    <img src="{{ $foto }}" 
                                         class="d-block w-100 object-fit-cover" 
                                         alt="Foto do carro {{ $key + 1 }}" 
                                         style="height: 500px; max-height: 500px;"
                                         onerror="this.onerror=null; this.src='https://placehold.co/1000x500/cccccc/333333?text=Imagem+Nao+Encontrada'; this.alt='Imagem Nao Encontrada';">
                                </div>
                            @empty
                               
                                <div class="carousel-item active">
                                    <img src="https://placehold.co/1000x500/cccccc/333333?text=Nenhuma+Foto+Cadastrada" 
                                         class="d-block w-100 object-fit-cover" 
                                         alt="Nenhuma Foto Cadastrada" 
                                         style="height: 500px; max-height: 500px;">
                                </div>
                            @endforelse
                        </div>

                        @if ($has_controls)
                           
                            <button class="carousel-control-prev" type="button" data-bs-target="#carrouselFotos" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Anterior</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carrouselFotos" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Próximo</span>
                            </button>
                        @endif
                        
                    </div>
                  

                </div>
            </div> 

            
            <div class="card shadow-lg">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 border-end">
                            <h4 class="mb-3">Informações Principais</h4>
                            <p class="lead text-success fw-bold">R$ {{ number_format($carro->preco, 2, ',', '.') }}</p>
                            
                            <ul class="list-unstyled">
                                <li><span class="fw-bold">Marca:</span> {{ $carro->marca }}</li>
                                <li><span class="fw-bold">Modelo:</span> {{ $carro->modelo }}</li>
                                <li><span class="fw-bold">Ano:</span> {{ $carro->ano }}</li>
                                <li><span class="fw-bold">Cor:</span> {{ $carro->cor }}</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h4 class="mb-3">Detalhes Adicionais</h4>
                            <ul class="list-unstyled">
                                <li><span class="fw-bold">Km:</span> {{ number_format($carro->quilometragem, 0, ',', '.') }}</li>
                                <li><span class="fw-bold">Combustível:</span> {{ $carro->combustivel }}</li>
                                <li><span class="fw-bold">Cadastrado por:</span> {{ $carro->user->name ?? 'Admin' }}</li>
                                <li><span class="fw-bold">Data de Cadastro:</span> {{ $carro->created_at->format('d/m/Y H:i') }}</li>
                            </ul>
                        </div>
                    </div>

                    <h4 class="mt-4 mb-2">Descrição</h4>
                    <p class="text-muted">{{ $carro->descricao ?? 'Nenhuma descrição detalhada fornecida.' }}</p>
                    
                    <hr>

                   
                    <div class="d-flex justify-content-between mt-4">
                        <a href="{{ route('carros.index') }}" class="btn btn-secondary btn-lg">Voltar à Lista</a>
                        
                       
                        <a href="{{ route('carros.edit', $carro->id) }}" class="btn btn-primary btn-lg">Editar Carro</a>
                        
                      
                        <form action="{{ route('carros.destroy', $carro->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este carro?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-lg">Excluir</button>
                        </form>
                    </div>
                </div>
            </div> 

        </div>
    </div>
</div>
@endsection