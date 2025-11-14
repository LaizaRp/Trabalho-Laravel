<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $carro->marca }} {{ $carro->modelo }} - Detalhes</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap');
        body {
            font-family: 'Inter', sans-serif;
            background-color: #0961B2; 
        }
        .header-bg { background-color: #0d47a1; }
        .detail-card-bg { background-color: #ffffff; }
        .highlight-blue { background-color: #1e40af; }
        .highlight-blue:hover { background-color: #1e3a8a; }
        .icon-color { color: #1d4ed8; }
        .card-shadow { box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2); }
        .fade { transition: opacity 0.3s ease-in-out; } /* Esta classe não é mais usada pelo JS, mas pode ser mantida */
    </style>
</head>
<body>

<header class="header-bg shadow-lg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center h-16">
        <div class="flex items-center text-white text-xl font-bold">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2V5z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 19h12M6 19a2 2 0 00-2 2h16a2 2 0 00-2-2m-8 0v-2" />
            </svg>
            Loja de Carros
        </div>
        <nav class="hidden md:flex space-x-8">
            <a href="{{ route('portal.index') }}" class="text-white hover:text-gray-200 transition duration-150 font-medium text-sm tracking-wider uppercase">VOLTAR À LISTA</a>
        </nav>
    </div>
</header>

<main class="py-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-6">
        <a href="{{ route('portal.index') }}" class="text-blue-200 hover:text-white transition duration-150 text-sm">
            &lt; Voltar para a lista de veículos
        </a>
    </div>

    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="detail-card-bg rounded-xl overflow-hidden card-shadow p-6 md:p-10">
            <div class="flex flex-col lg:flex-row gap-8">
                
                <div class="w-full lg:w-2/3">
                    <h1 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-2 leading-tight">
                        {{ $carro->marca }} {{ $carro->modelo }} ({{ $carro->ano }})
                    </h1>
                    <p class="text-xl font-semibold text-blue-600 mb-6">
                        {{ $carro->versao ?? 'Versão Indisponível' }}
                    </p>

                    <div class="rounded-lg overflow-hidden mb-4 shadow-md">
                        <img 
                            src="{{ $carro->foto_principal ? $carro->foto_principal : 'https://placehold.co/800x500/1e88e5/ffffff?text=Sem+Foto+Detalhe' }}" 
                            alt="{{ $carro->marca }} {{ $carro->modelo }}" 
                            class="w-full h-auto lg:h-[450px] object-cover"
                        >
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-6">
                        
                        @if($carro->foto_2)
                        <div class="rounded-lg overflow-hidden shadow-md">
                            <img 
                                src="{{ $carro->foto_2 }}" 
                                alt="Foto 2 - {{ $carro->marca }} {{ $carro->modelo }}" 
                                class="w-full h-64 object-cover"
                            >
                        </div>
                        @endif

                        @if($carro->foto_3)
                        <div class="rounded-lg overflow-hidden shadow-md">
                            <img 
                                src="{{ $carro->foto_3 }}" 
                                alt="Foto 3 - {{ $carro->marca }} {{ $carro->modelo }}" 
                                class="w-full h-64 object-cover"
                            >
                        </div>
                        @endif

                    </div>
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 text-center mb-10">
                        <div class="bg-gray-100 p-3 rounded-lg flex flex-col items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 icon-color mb-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="text-xs font-semibold text-gray-600">KM</span>
                            <span class="font-bold text-gray-800">{{ number_format($carro->quilometragem, 0, ',', '.') }}</span>
                        </div>
                        <div class="bg-gray-100 p-3 rounded-lg flex flex-col items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 icon-color mb-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h.01M16 16h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="text-xs font-semibold text-gray-600">Ano</span>
                            <span class="font-bold text-gray-800">{{ $carro->ano }}</span>
                        </div>
                        <div class="bg-gray-100 p-3 rounded-lg flex flex-col items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 icon-color mb-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.828 0l-4.243-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span class="text-xs font-semibold text-gray-600">Cor</span>
                            <span class="font-bold text-gray-800">{{ $carro->cor ?? 'Não Informada' }}</span>
                        </div>
                        <div class="bg-gray-100 p-3 rounded-lg flex flex-col items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 icon-color mb-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 19V6l12-3v14" />
                            </svg>
                            <span class="text-xs font-semibold text-gray-600">Combustível</span>
                            <span class="font-bold text-gray-800">{{ $carro->combustivel }}</span>
                        </div>
                    </div>

                    <h2 class="text-2xl font-bold text-gray-800 mb-4 border-b pb-2">Descrição do Veículo</h2>
                    <div class="text-gray-700 leading-relaxed mb-8 prose">
                        <p>{{ $carro->descricao ?? 'Nenhuma descrição disponível para este veículo.' }}</p>
                    </div>

                    <h2 class="text-2xl font-bold text-gray-800 mb-4 border-b pb-2">Ficha Técnica</h2>
                    <div class="border rounded-lg overflow-hidden mb-6">
                        <dl class="divide-y divide-gray-200 text-gray-700">
                            <div class="px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 bg-gray-50">
                                <dt class="text-sm font-medium">Marca</dt>
                                <dd class="mt-1 text-sm sm:col-span-2 sm:mt-0 font-semibold">{{ $carro->marca }}</dd>
                            </div>
                            <div class="px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium">Modelo</dt>
                                <dd class="mt-1 text-sm sm:col-span-2 sm:mt-0 font-semibold">{{ $carro->modelo }}</dd>
                            </div>
                            <div class="px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 bg-gray-50">
                                <dt class="text-sm font-medium">Ano / Modelo</dt>
                                <dd class="mt-1 text-sm sm:col-span-2 sm:mt-0 font-semibold">{{ $carro->ano }} / {{ $carro->ano_modelo ?? $carro->ano }}</dd>
                            </div>
                            <div class="px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium">Cor</dt>
                                <dd class="mt-1 text-sm sm:col-span-2 sm:mt-0 font-semibold">{{ $carro->cor ?? 'Não Informada' }}</dd>
                            </div>
                        </dl>
                    </div>
                </div>

                <div class="w-full lg:w-1/3">
                    <div class="sticky top-10 p-6 bg-white rounded-xl shadow-lg border border-gray-200">
                        <div class="mb-6 pb-4 border-b">
                            <p class="text-2xl font-medium text-gray-500">Preço à Vista:</p>
                            <strong class="text-4xl font-extrabold text-blue-800 block mt-1">
                                R$ {{ number_format($carro->preco, 2, ',', '.') }}
                            </strong>
                        </div>

                        <h3 class="text-xl font-bold text-gray-800 mb-4">Simule seu Financiamento ITE</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<footer class="bg-blue-900 text-white mt-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 text-center text-blue-300 text-xs border-t border-blue-700 mt-8">
        &copy; 2023 Loja de Carros. Todos os direitos reservados.
    </div>
</footer>

</body>
</html>