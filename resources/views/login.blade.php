@extends('layout.master');


@section('content')
    ;

    <div class="conteiner">
        <form class="row g-3 needs-validation" novalidate="" action="{{ url('login') }}" method="POST">
            @csrf

            <div class="col-12">
                <label for="yourUsername" class="form-label">Usuario</label>
                <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                    <input type="text" name="username" class="form-control" id="yourUsername" required="">
                    <div class="invalid-feedback">Por favor insira um usuário!</div>
                </div>
            </div>

            <div class="col-12">
                <label for="yourPassword" class="form-label">Senha</label>
                <input type="password" name="password" class="form-control" id="yourPassword" required="">
                <div class="invalid-feedback">Por favor insira uma senha!</div>
            </div>
            {!! msnAlertaSession('success', session()) !!}
            {!! msnAlertaSession('error', $errors) !!}
            <div class="col-12">
                <button class="btn btn-primary w-100" type="submit">Entrar</button>
            </div>
        </form>
    </div>
@endsection;
