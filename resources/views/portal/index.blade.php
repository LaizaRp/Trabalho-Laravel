<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Carros</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Definindo a fonte Inter como padrão */
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap');
        body {
            font-family: 'Inter', sans-serif;
            /* Fundo do corpo ajustado para um Azul Profundo/Vibrante (similar a blue-700) */
            background-color: #0961B2; 
        }
        /* AZUL PRIMÁRIO PARA HEADER E DESTAQUES */
        .header-bg {
            background-color: #0d47a1; /* Azul Escuro */
        }
        /* GRADIENTE AZUL PARA SEÇÃO DE DESTAQUE (PAN) */
        .hero-bg-section {
            background: linear-gradient(135deg, #0d47a1, #1565c0);
            color: white;
        }
        /* Cartões de conteúdo para Azul Claro (blue-400) - Usado para Resultados de Carros */
        .card-content-bg {
            background-color: #64b5f6; 
        }
        /* Sombra para o cartão grande da seção PAN */
        .card-shadow {
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }
        /* Sombra para cartões brancos no fundo azul */
        .card-white-shadow {
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15); 
        }
        /* Estilo para links de Paginação do Laravel (Tailwind padrão é branco/cinza, ajustamos aqui para o azul) */
        .pagination .page-item.active .page-link {
            background-color: #0d47a1 !important;
            border-color: #0d47a1 !important;
            color: white !important;
        }
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
                <a href="#" class="text-white hover:text-gray-200 transition duration-150 font-medium text-sm tracking-wider uppercase">CONSULTE NOSSOS VEÍCULOS</a>
            </nav>
            
            <div class="relative">
                <a href="{{ route('login') }}" class="text-white flex items-center hover:text-gray-200 transition duration-150 font-medium text-sm tracking-wider uppercase">
                    Login
                </a>
            </div> 
            
        </div>
    </header>

    <main class="py-10">

        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center pt-8 pb-12">
            <h2 class="text-xl md:text-2xl font-semibold text-white mb-2">Facilidade e segurança são itens de série aqui.</h2>
            <p class="text-blue-200 max-w-3xl mx-auto mb-10 text-sm">
                O caminho da compra do seu veículo é sério. Por isso, você conta com o financiamento seguro e inteligente do Banco ITE.
            </p>

            <div class="flex flex-wrap justify-center gap-8 md:gap-16">
                <div class="w-full sm:w-[250px] flex flex-col items-center text-center p-6 bg-white rounded-xl card-white-shadow transition duration-300 hover:scale-105">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-600 mb-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                    </svg>
                    <p class="font-bold text-gray-800 text-base mt-2">Contrato 100% digital</p>
                    <p class="text-xs text-gray-600 mt-1">Todo o processo e assinatura do contrato sem burocracia e on line.</p>
                </div>
                
                <div class="w-full sm:w-[250px] flex flex-col items-center text-center p-6 bg-white rounded-xl card-white-shadow transition duration-300 hover:scale-105">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-600 mb-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                    </svg>
                    <p class="font-bold text-gray-800 text-base mt-2">Flexibilidade de crédito</p>
                    <p class="text-xs text-gray-600 mt-1">Taxas e condições mais confortáveis para o seu momento financeiro.</p>
                </div>
                
                <div class="w-full sm:w-[250px] flex flex-col items-center text-center p-6 bg-white rounded-xl card-white-shadow transition duration-300 hover:scale-105">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-600 mb-3" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 18.5c-3.8-1.5-6.5-5.2-6.5-9.5V6.4L12 3.5l6.5 2.9v9.6c0 4.3-2.7 8-6.5 9.5z"/>
                        <path d="M10 12l2 2 4-4"/>
                    </svg>
                    <p class="font-bold text-gray-800 text-base mt-2">Seguro ITE</p>
                    <p class="text-xs text-gray-600 mt-1">O melhor plano pra você não se preocupar com as parcelas em caso de imprevistos.</p>
                </div>
            </div>
        </section>


        <section class="hero-bg-section mt-8 mb-12 rounded-xl card-shadow overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
                
                <div class="flex flex-col md:flex-row items-center">
                    <div class="w-full md:w-1/3 p-4 text-center md:text-left">
                        <div class="flex justify-center md:justify-start mb-4">
                            <img src="https://media.istockphoto.com/id/2189452427/pt/foto/young-woman-enjoys-leisure-time-in-city-while-driving-embracing-the-steering-wheel-with-a.jpg?s=1024x1024&w=is&k=20&c=2ijnHHew7pTEWG-CclZkYRb3QXgeVel6fBP3oB4d8X4=" onerror="this.onerror=null;this.src='https://placehold.co/150x150/1565c0/ffffff?text=Pessoa+no+Carro';" alt="Pessoa feliz no carro" class="rounded-full w-32 h-32 object-cover border-4 border-white">
                        </div>
                        <p class="text-lg font-light">Vantagens pra deixar seu bolso mais tranquilo.</p>
                    </div>

                    <div class="w-full md:w-2/3 p-4">
                        <p class="text-base font-medium mb-6">
                            Com a ITE você tem vantagens e segurança que oferecemos todos os dias para nossos clientes.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <div class="bg-white/20 backdrop-blur-sm p-6 rounded-lg w-full sm:w-1/2 text-center transition duration-300 hover:bg-white/30">
                                <strong class="text-4xl font-extrabold block mb-2">100%</strong>
                                <p class="text-sm font-light">Você tem a possibilidade de financiar o valor total do veículo.</p>
                            </div>
                            <div class="bg-white/20 backdrop-blur-sm p-6 rounded-lg w-full sm:w-1/2 text-center transition duration-300 hover:bg-white/30">
                                <strong class="text-4xl font-extrabold block mb-2">60X</strong>
                                <p class="text-sm font-light">Prazo de até 5 anos pra pagar sua conquista sem se apertar.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center py-10">
            <h2 class="text-2xl font-semibold text-white mb-10">Como funciona o seu financiamento:</h2>

            <div class="flex flex-wrap justify-center gap-8">
                <div class="w-full sm:w-1/3 lg:w-1/4 flex flex-col items-center p-6 text-center bg-white rounded-xl card-white-shadow transition duration-300 hover:scale-[1.02]">
                    <div class="bg-blue-800 text-white w-10 h-10 rounded-full flex items-center justify-center font-bold text-lg mb-4">1</div>
                    <h3 class="font-bold text-gray-800 mb-2">INFORME SEUS DADOS PESSOAIS</h3>
                    <p class="text-sm text-gray-600">Com os seus dados, nós conseguimos montar propostas personalizadas para você.</p>
                </div>
                
                <div class="w-full sm:w-1/3 lg:w-1/4 flex flex-col items-center p-6 text-center bg-white rounded-xl card-white-shadow transition duration-300 hover:scale-[1.02]">
                    <div class="bg-blue-800 text-white w-10 h-10 rounded-full flex items-center justify-center font-bold text-lg mb-4">2</div>
                    <h3 class="font-bold text-gray-800 mb-2">ESCOLHA O VEÍCULO E VALORES QUE SE ENCAIXAM NA SUA RENDA</h3>
                    <p class="text-sm text-gray-600">Selecione qual veículo deseja financiar e ajuste o valor de entrada e preço do veículo para separarmos as melhores condições de financiamento.</p>
                </div>
                
                <div class="w-full sm:w-1/3 lg:w-1/4 flex flex-col items-center p-6 text-center bg-white rounded-xl card-white-shadow transition duration-300 hover:scale-[1.02]">
                    <div class="bg-blue-800 text-white w-10 h-10 rounded-full flex items-center justify-center font-bold text-lg mb-4">3</div>
                    <h3 class="font-bold text-gray-800 mb-2">DECIDA QUAL PARCELA ENCAIXA MELHOR NO SEU ORÇAMENTO</h3>
                    <p class="text-sm text-gray-600">Você está prestes a realizar seu sonho! Escolha a parcela ideal e, em seguida, um de nossos vendedores entrará em contato para dar continuidade à contratação do financiamento.</p>
                </div>
            </div>
        </section>

        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-8">
            <h2 class="text-2xl font-semibold text-white mb-6">
                {{-- Título dinâmico baseado no total de carros --}}
                Resultados Encontrados: ({{ $carros->total() }} Veículo{{ $carros->total() !== 1 ? 's' : '' }})
            </h2>

            <div class="flex flex-col lg:flex-row gap-6">
                <div class="w-full lg:w-1/4 p-4 bg-white rounded-xl card-white-shadow h-min text-gray-800">
                    
                    <form action="{{ route('portal.index') }}" method="GET"> 

                        <h3 class="flex items-center text-lg font-semibold mb-4 text-blue-800">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                            Filtros de Busca
                        </h3>

                        <div class="space-y-3">
                            
                            <label for="marca" class="block text-sm font-medium">Marca</label>
                            <select id="marca" name="marca" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 text-gray-800 focus:outline-none focus:ring-blue-800 focus:border-blue-800 sm:text-sm rounded-md border bg-gray-100">
                                <option value="">Todas as Marcas</option>
                                {{-- Loop para exibir as marcas vindas do Controller --}}
                                @foreach($marcas as $marca)
                                    <option value="{{ $marca }}" {{ request('marca') == $marca ? 'selected' : '' }}>{{ $marca }}</option>
                                @endforeach
                            </select>

                            <label for="modelo" class="block text-sm font-medium pt-2">Modelo (Busca Livre)</label>
                            <input type="text" id="modelo" name="modelo" placeholder="Ex: Onix, HB20" value="{{ request('modelo') }}" class="mt-1 block w-full p-2 border-gray-300 text-gray-800 focus:ring-blue-800 focus:border-blue-800 sm:text-sm rounded-md border bg-gray-100">

                            <p class="block text-sm font-medium pt-2">Faixa de Preço</p>
                            <div class="flex gap-2">
                                <div>
                                    <label for="preco_min" class="block text-xs text-gray-500">Mínimo</label>
                                    <input type="number" id="preco_min" name="preco_min" value="{{ request('preco_min') }}" class="mt-1 block w-full p-2 border-gray-300 text-gray-800 focus:ring-blue-800 focus:border-blue-800 sm:text-sm rounded-md border bg-gray-100">
                                </div>
                                <div>
                                    <label for="preco_max" class="block text-xs text-gray-500">Máximo</label>
                                    <input type="number" id="preco_max" name="preco_max" value="{{ request('preco_max') }}" class="mt-1 block w-full p-2 border-gray-300 text-gray-800 focus:ring-blue-800 focus:border-blue-800 sm:text-sm rounded-md border bg-gray-100">
                                </div>
                            </div>

                            <label for="combustivel" class="block text-sm font-medium pt-2">Combustível</label>
                            <select id="combustivel" name="combustivel" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 text-gray-800 focus:outline-none focus:ring-blue-800 focus:border-blue-800 sm:text-sm rounded-md border bg-gray-100">
                                <option value="">Qualquer Combustível</option>
                                {{-- Loop para exibir os combustíveis vindos do Controller --}}
                                @foreach($combustiveis as $combustivel)
                                    <option value="{{ $combustivel }}" {{ request('combustivel') == $combustivel ? 'selected' : '' }}>{{ $combustivel }}</option>
                                @endforeach
                            </select>
                            
                            {{-- Botão para Limpar Filtros --}}
                            @if(request()->except('page'))
                            <a href="{{ route('portal.index') }}" class="block w-full text-center text-sm mt-3 text-red-500 hover:text-red-700 transition duration-150">Limpar Filtros</a>
                            @endif
                        </div>

                        <button type="submit" class="w-full bg-blue-800 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded-lg mt-6 transition duration-150 shadow-md">
                            Filtrar Veículos
                        </button>
                    </form>
                </div>

                <div class="w-full lg:w-3/4">
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                        
                        {{-- Loop dinâmico que exibe os carros do BD --}}
                        @forelse($carros as $carro)
                        <div class="card-content-bg rounded-xl overflow-hidden card-shadow hover:shadow-xl transition duration-300 text-white">
                            
                            {{-- 🛑 CORREÇÃO DA IMAGEM: Assumindo que o campo no BD se chama 'foto_principal' (como na sua imagem do admin) --}}
                            <img 
                                src="{{ $carro->foto_principal ? $carro->foto_principal : 'https://placehold.co/400x250/1e88e5/ffffff?text=' . urlencode($carro->modelo) }}" 
                                onerror="this.onerror=null;this.src='https://placehold.co/400x250/1e88e5/ffffff?text=Sem+Foto';" 
                                alt="{{ $carro->marca }} {{ $carro->modelo }}" 
                                class="w-full h-40 object-cover"
                            >
                            
                            <div class="p-4">
                                <h4 class="font-bold text-lg truncate">{{ $carro->marca }} {{ $carro->modelo }} ({{ $carro->ano }})</h4>
                                <p class="text-xl font-extrabold mt-1 text-white">R$ {{ number_format($carro->preco, 2, ',', '.') }}</p> 
                                <p class="text-xs text-blue-100 mt-1">{{ number_format($carro->quilometragem, 0, ',', '.') }} Km | {{ $carro->combustivel }} | juros</p>
                                <a href="{{ route('portal.show', $carro->id) }}" class="block mt-4 text-center bg-blue-800 hover:bg-blue-900 text-white font-medium py-2 rounded-lg transition duration-150">
                                    Ver Detalhes
                                </a>
                            </div>
                        </div>
                        @empty
                            <p class="text-white text-lg col-span-full text-center">Nenhum carro encontrado com os filtros aplicados.</p>
                        @endforelse

                    </div>
                </div>
            </div>
            
            <div class="mt-8">
                {{-- Renderiza os links de paginação (1, 2, 3...) --}}
                {{ $carros->links() }}
            </div>
        </section>


    </main>

    <footer class="bg-blue-900 text-white mt-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="flex flex-wrap justify-between">
                <div class="mb-4 md:mb-0">
                    <h3 class="font-bold text-lg mb-2">Seu Portal</h3>
                    <ul class="text-sm space-y-1 text-blue-300">
                        <li><a href="#" class="hover:text-blue-100 transition">Sobre Nós</a></li>
                        <li><a href="#" class="hover:text-blue-100 transition">Fale Conosco</a></li>
                        <li><a href="#" class="hover:text-blue-100 transition">Política</a></li>
                    </ul>
                </div>
                <div class="mb-4 md:mb-0">
                    <h3 class="font-bold text-lg mb-2">Ajuda</h3>
                    <ul class="text-sm space-y-1 text-blue-300">
                        <li><a href="#" class="hover:text-blue-100 transition">Ajuda e FAQ</a></li>
                        <li><a href="#" class="hover:text-blue-100 transition">Fale Conosco</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-bold text-lg mb-2">Siga-nos</h3>
                    <div class="flex space-x-3 text-blue-300">
                        <a href="#" class="hover:text-blue-100 transition">F</a> <a href="#" class="hover:text-blue-100 transition">I</a> </div>
                </div>
            </div>
            <div class="text-center text-xs text-blue-300 pt-8 border-t border-blue-700 mt-8">
                &copy; 2023 Loja de Carros. Todos os direitos reservados.
            </div>
        </div>
    </footer>

</body>
</html>