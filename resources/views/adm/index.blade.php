@extends('layout.master')

@section('content')

<!-- NAVBAR SUPERIOR -->
<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <span class="logo-text">Locadora Online</span>
            <span class="ms-2 small text-muted d-none d-sm-inline">Painel Administrativo</span>
        </a>

        <div class="d-flex align-items-center gap-3">
            <span class="text-light small d-none d-md-inline">
                Logado como: <strong>Administrador</strong>
            </span>
            <a href="#" class="btn btn-outline-light btn-sm">Voltar ao site</a>
            <button class="btn btn-danger btn-sm">Sair</button>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">

        <!-- SIDEBAR -->
        <aside class="col-12 col-md-3 col-lg-2 sidebar p-0">
            <div class="list-group list-group-flush mt-3">
                <a href="#" class="list-group-item list-group-item-action active">
                    <i class="bi bi-speedometer2 me-1"></i> Dashboard
                </a>
                <a href="#sec-filmes" class="list-group-item list-group-item-action">
                    <i class="bi bi-film me-1"></i> Gerenciar Filmes
                </a>
                <a href="#sec-usuarios" class="list-group-item list-group-item-action">
                    <i class="bi bi-people me-1"></i> Gerenciar Usuários
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    Relatórios
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    Configurações
                </a>
            </div>
        </aside>

        <!-- CONTEÚDO PRINCIPAL -->
        <main class="col-12 col-md-9 col-lg-10 content-wrapper">

            <!-- TÍTULO / RESUMO -->
            <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
                <div>
                    <h1 class="h4 mb-1">Dashboard Administrativo</h1>
                    <p class="text-muted mb-0">
                        Gerencie o catálogo de filmes e os usuários da locadora online.
                    </p>
                </div>
                <div class="mt-3 mt-md-0">
                    <span class="badge bg-success">Ambiente Ativo</span>
                </div>
            </div>

            <!-- CARDS DE RESUMO -->
            <div class="row g-3 mb-4">
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card text-bg-primary">
                        <div class="card-body">
                            <h6 class="card-title mb-1">Filmes cadastrados</h6>
                            <p class="display-6 mb-0">128</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card text-bg-success">
                        <div class="card-body">
                            <h6 class="card-title mb-1">Usuários ativos</h6>
                            <p class="display-6 mb-0">342</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card text-bg-warning">
                        <div class="card-body">
                            <h6 class="card-title mb-1">Filmes alugados hoje</h6>
                            <p class="display-6 mb-0">17</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card text-bg-dark">
                        <div class="card-body">
                            <h6 class="card-title mb-1">Pendências</h6>
                            <p class="display-6 mb-0">4</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SEÇÃO: GERENCIAR FILMES -->
            <section id="sec-filmes" class="mb-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h2 class="h5 mb-0">Gerenciar Filmes</h2>
                    <div class="d-flex gap-2">
                        <input type="text" class="form-control form-control-sm" placeholder="Buscar por título...">
                        <button class="btn btn-sm btn-outline-secondary">Buscar</button>
                        <button class="btn btn-sm btn-primary">
                            + Adicionar novo filme
                        </button>
                    </div>
                </div>

                <div class="table-responsive bg-white rounded shadow-sm p-2">
                    <table class="table table-striped mb-0 align-middle">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Título</th>
                                <th>Categoria</th>
                                <th>Ano</th>
                                <th>Classificação</th>
                                <th>Status</th>
                                <th class="text-end">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Linha exemplo 1 -->
                            <tr>
                                <td>1</td>
                                <td>O Enigma da Meia-Noite</td>
                                <td>Suspense</td>
                                <td>2023</td>
                                <td>14+</td>
                                <td><span class="badge bg-success">Disponível</span></td>
                                <td class="text-end table-actions">
                                    <button class="btn btn-sm btn-outline-secondary">Editar</button>
                                    <button class="btn btn-sm btn-outline-warning">Desativar</button>
                                    <button class="btn btn-sm btn-outline-danger">Excluir</button>
                                </td>
                            </tr>

                            <!-- Linha exemplo 2 -->
                            <tr>
                                <td>2</td>
                                <td>Aventura no Multiverso</td>
                                <td>Ação</td>
                                <td>2022</td>
                                <td>12+</td>
                                <td><span class="badge bg-success">Disponível</span></td>
                                <td class="text-end table-actions">
                                    <button class="btn btn-sm btn-outline-secondary">Editar</button>
                                    <button class="btn btn-sm btn-outline-warning">Desativar</button>
                                    <button class="btn btn-sm btn-outline-danger">Excluir</button>
                                </td>
                            </tr>

                            <!-- Linha exemplo 3 -->
                            <tr>
                                <td>3</td>
                                <td>Sombras da Cidade</td>
                                <td>Policial</td>
                                <td>2023</td>
                                <td>16+</td>
                                <td><span class="badge bg-secondary">Indisponível</span></td>
                                <td class="text-end table-actions">
                                    <button class="btn btn-sm btn-outline-secondary">Editar</button>
                                    <button class="btn btn-sm btn-outline-success">Reativar</button>
                                    <button class="btn btn-sm btn-outline-danger">Excluir</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Paginação fictícia -->
                <div class="mt-3 d-flex justify-content-end">
                    <nav>
                        <ul class="pagination pagination-sm mb-0">
                            <li class="page-item disabled"><span class="page-link">Anterior</span></li>
                            <li class="page-item active"><span class="page-link">1</span></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Próxima</a></li>
                        </ul>
                    </nav>
                </div>
            </section>

            <!-- SEÇÃO: GERENCIAR USUÁRIOS -->
            <section id="sec-usuarios" class="mb-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h2 class="h5 mb-0">Gerenciar Usuários</h2>
                    <div class="d-flex gap-2">
                        <input type="text" class="form-control form-control-sm" placeholder="Buscar por nome ou e-mail...">
                        <button class="btn btn-sm btn-outline-secondary">Buscar</button>
                        <button class="btn btn-sm btn-success">
                            + Adicionar novo usuário
                        </button>
                    </div>
                </div>

                <div class="table-responsive bg-white rounded shadow-sm p-2">
                    <table class="table table-striped mb-0 align-middle">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>Tipo</th>
                                <th>Status</th>
                                <th class="text-end">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Usuário 1 -->
                            <tr>
                                <td>1</td>
                                <td>João Silva</td>
                                <td>joao.silva@example.com</td>
                                <td>Cliente</td>
                                <td><span class="badge bg-success">Ativo</span></td>
                                <td class="text-end table-actions">
                                    <button class="btn btn-sm btn-outline-secondary">Editar</button>
                                    <button class="btn btn-sm btn-outline-warning">Desativar</button>
                                    <button class="btn btn-sm btn-outline-danger">Excluir</button>
                                </td>
                            </tr>

                            <!-- Usuário 2 -->
                            <tr>
                                <td>2</td>
                                <td>Maria Souza</td>
                                <td>maria.souza@example.com</td>
                                <td>Cliente</td>
                                <td><span class="badge bg-success">Ativo</span></td>
                                <td class="text-end table-actions">
                                    <button class="btn btn-sm btn-outline-secondary">Editar</button>
                                    <button class="btn btn-sm btn-outline-warning">Desativar</button>
                                    <button class="btn btn-sm btn-outline-danger">Excluir</button>
                                </td>
                            </tr>

                            <!-- Usuário 3 -->
                            <tr>
                                <td>3</td>
                                <td>Admin Master</td>
                                <td>admin@example.com</td>
                                <td>Administrador</td>
                                <td><span class="badge bg-primary">Admin</span></td>
                                <td class="text-end table-actions">
                                    <button class="btn btn-sm btn-outline-secondary">Editar</button>
                                    <button class="btn btn-sm btn-outline-danger">Remover acesso</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

        </main>
    </div>
</div>
@endsection
