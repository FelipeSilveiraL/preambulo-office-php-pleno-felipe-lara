@extends('layout.master')

@section('content')
    <!-- HEADER / NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <!-- Logo / Nome da locadora -->
            <a class="navbar-brand d-flex align-items-center" href="#">
                <!-- Se quiser trocar por uma imagem, substitua o span por <img> -->
                <span class="logo-text">Locadora Online</span>
            </a>

            <!-- Botão de menu (mobile) -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Itens do menu -->
            <div class="collapse navbar-collapse" id="navbarMain">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <!-- Links genéricos de navegação -->
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Catálogo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Meu Perfil</a>
                    </li>
                </ul>

                <!-- Botão de Login -->
                <div class="d-flex">
                    <a href="{{ url('deslogar') }}" class="btn btn-outline-light">Sair</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- CONTEÚDO PRINCIPAL -->
    <main class="py-4">
        <div class="container">

            <!-- Boas-vindas / resumo -->
            <div class="row mb-4">
                <div class="col-12 col-lg-8">
                    <h1 class="h3 mb-2">Bem-vindo à Locadora Online</h1>
                    <p class="text-muted mb-0">
                        Aqui você confere seus filmes alugados e descobre novos títulos para maratonar.
                    </p>
                </div>
                <div class="col-12 col-lg-4 text-lg-end mt-3 mt-lg-0">
                    <span class="badge bg-success mb-1">Plano Ativo</span>
                    <p class="mb-0 text-muted">
                        Último acesso: 17/11/2025
                    </p>
                </div>
            </div>

            <!-- Listas de filmes -->
            <div class="row g-4">

                <!-- COLUNA: FILMES ALUGADOS -->
                <div class="col-12 col-lg-6">
                    <h2 class="h5 section-title">Meus filmes alugados</h2>

                    <!-- Card 1 -->
                    <div class="card mb-3 movie-card">
                        <div class="row g-0">
                            <div class="col-4">
                                <!-- Poster fictício -->
                                <img src="https://via.placeholder.com/400x600?text=Filme+1" class="img-fluid rounded-start"
                                    alt="Poster do filme 1">
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <h5 class="card-title mb-1">O Enigma da Meia-Noite</h5>
                                    <p class="card-text mb-1"><small class="text-muted">Suspense · 2023 · 14+</small></p>
                                    <p class="card-text mb-2">
                                        Você tem acesso a este filme até <strong>20/11/2025</strong>.
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="badge bg-primary">Alugado</span>
                                        <a href="#" class="btn btn-sm btn-outline-primary">Assistir agora</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="card mb-3 movie-card">
                        <div class="row g-0">
                            <div class="col-4">
                                <img src="https://via.placeholder.com/400x600?text=Filme+2" class="img-fluid rounded-start"
                                    alt="Poster do filme 2">
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <h5 class="card-title mb-1">Aventura no Multiverso</h5>
                                    <p class="card-text mb-1"><small class="text-muted">Ação · 2022 · 12+</small></p>
                                    <p class="card-text mb-2">
                                        Expira em <strong>2 dias</strong>. Não perca o final dessa história!
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="badge bg-warning text-dark">Quase expirando</span>
                                        <a href="#" class="btn btn-sm btn-outline-primary">Continuar assistindo</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- COLUNA: FILMES PARA ALUGAR -->
                <div class="col-12 col-lg-6">
                    <h2 class="h5 section-title">Sugeridos para você</h2>

                    <div class="row row-cols-1 row-cols-md-2 g-3">

                        <!-- Card Disponível 1 -->
                        <div class="col">
                            <div class="card h-100 movie-card">
                                <img src="https://via.placeholder.com/400x600?text=Filme+3" class="card-img-top"
                                    alt="Poster do filme 3">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title">Código do Tempo</h5>
                                    <p class="card-text flex-grow-1">
                                        Um hacker descobre um algoritmo capaz de alterar o passado.
                                    </p>
                                    <p class="mb-2">
                                        <small class="text-muted">Ficção Científica · 2024</small>
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="fw-semibold">R$ 7,90</span>
                                        <a href="#" class="btn btn-sm btn-success">Alugar</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card Disponível 2 -->
                        <div class="col">
                            <div class="card h-100 movie-card">
                                <img src="https://via.placeholder.com/400x600?text=Filme+4" class="card-img-top"
                                    alt="Poster do filme 4">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title">Café com Histórias</h5>
                                    <p class="card-text flex-grow-1">
                                        Em uma pequena cafeteria, desconhecidos cruzam destinos inesperados.
                                    </p>
                                    <p class="mb-2">
                                        <small class="text-muted">Drama · 2021</small>
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="fw-semibold">R$ 5,90</span>
                                        <a href="#" class="btn btn-sm btn-success">Alugar</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card Disponível 3 -->
                        <div class="col">
                            <div class="card h-100 movie-card">
                                <img src="https://via.placeholder.com/400x600?text=Filme+5" class="card-img-top"
                                    alt="Poster do filme 5">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title">Risadas em Família</h5>
                                    <p class="card-text flex-grow-1">
                                        Uma comédia leve para assistir com toda a família.
                                    </p>
                                    <p class="mb-2">
                                        <small class="text-muted">Comédia · 2020</small>
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="fw-semibold">R$ 4,90</span>
                                        <a href="#" class="btn btn-sm btn-success">Alugar</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card Disponível 4 -->
                        <div class="col">
                            <div class="card h-100 movie-card">
                                <img src="https://via.placeholder.com/400x600?text=Filme+6" class="card-img-top"
                                    alt="Poster do filme 6">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title">Sombras da Cidade</h5>
                                    <p class="card-text flex-grow-1">
                                        Um detetive precisa desvendar um caso em meio a segredos urbanos.
                                    </p>
                                    <p class="mb-2">
                                        <small class="text-muted">Policial · 2023</small>
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="fw-semibold">R$ 6,90</span>
                                        <a href="#" class="btn btn-sm btn-success">Alugar</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> <!-- /row sugeridos -->
                </div>
            </div>
        </div>
    </main>
@endsection
