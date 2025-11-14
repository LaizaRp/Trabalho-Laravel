@extends('layouts.app')

@section('content')


<style>
    body {
        /* A cor do seu tema azul */
        background-color: #0961B2 !important; 
    }
</style>

<div class="container py-4">
    
   
    <div class="card p-4 shadow-lg border-primary border-3 rounded-lg bg-white">
        
        <div class="d-flex justify-content-between align-items-center mb-4">
           
            <h1 class="mb-0 text-primary">
                <i class="fas fa-warehouse me-2"></i> Estoque de Veículos
            </h1>
            
           
            <a href="{{ route('carros.create') }}" class="btn btn-primary btn-lg shadow-sm">
                <i class="fas fa-plus-circle me-2"></i> Cadastrar Novo Carro
            </a>
        </div>
        
       
        <p class="lead text-muted">Veiculos disponiveis em nossa Loja.</p>

        
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

       
        @forelse ($carros as $carro)
           
            <div class="card mb-3 shadow-sm border-primary border-2 rounded-lg"> 
                <div class="row g-0 align-items-center">
                    
                   
                    <div class="col-md-2 p-3">
                        @php
                            $fotoUrl = $carro->foto_principal ?: 'https://placehold.co/200x150/e0e0e0/555555?text=S%2F+Foto';
                        @endphp
                        
                        <img src="{{ $fotoUrl }}" 
                              class="img-fluid rounded shadow-sm border border-secondary object-fit-cover w-100" 
                              alt="{{ $carro->marca }} {{ $carro->modelo }}"
                              style="height: 100px; max-width: 150px;" 
                              onerror="this.onerror=null; this.src='https://placehold.co/200x150/e0e0e0/555555?text=S%2F+Foto';">
                    </div>

                  
                    <div class="col-md-10">
                        <div class="card-body py-3">
                            
                            <div class="d-flex justify-content-between align-items-center">
                              
                                <div>
                                    <h4 class="card-title mb-1 text-primary">{{ $carro->marca }} {{ $carro->modelo }} ({{ $carro->ano }})</h4>
                                    <h5 class="text-success fw-bold">R$ {{ number_format($carro->preco, 2, ',', '.') }}</h5>
                                    <p class="card-text text-muted mb-0"><small>{{ Str::limit($carro->descricao, 60) ?? 'Sem descrição.' }}</small></p>
                                </div>

                               
                                <div class="d-none d-sm-block text-end me-3">
                                    <span class="badge text-bg-secondary me-2">{{ $carro->cor ?? 'Cor N/A' }}</span>
                                    <span class="badge text-bg-secondary me-2">{{ number_format($carro->quilometragem, 0, ',', '.') }} Km</span>
                                    <span class="badge text-bg-secondary">{{ $carro->combustivel }}</span>
                                </div>

                               
                                <div class="btn-group flex-shrink-0" role="group">
                                    <a href="{{ route('carros.edit', $carro->id) }}" class="btn btn-sm btn-warning">
                                        <i class="fas fa-edit"></i> Editar
                                    </a>
                                    <form action="{{ route('carros.destroy', $carro->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este carro?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger rounded-start-0">
                                            <i class="fas fa-trash-alt"></i> Remover
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
           
            <div class="alert alert-info text-center" role="alert">
                Nenhum carro cadastrado no estoque. <a href="{{ route('carros.create') }}">Clique aqui para cadastrar o primeiro!</a>
            </div>
        @endforelse
    
    </div> 

</div>


<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
@endsection