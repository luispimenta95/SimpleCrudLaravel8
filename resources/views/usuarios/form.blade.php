@extends('layouts.app')

@section('content')

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <?php
                    if (isset($mensagem)) {
                        echo $mensagem;
                        unset($mensagem);
                    }
                    ?>
                    @if(Str::contains(URL::current(), 'visualizar'))
                    <form action="{{ url('usuarios/atualizar')}}/{{$usuario->id}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome</label>
                            <input type="text" class="form-control" name="name" value="{{ $usuario->name }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Endereço de email</label>
                            <input type="email" class="form-control" name='email' value='{{$usuario->email}}'>
                        </div>

                        <button type="submit" class="btn btn-success">Atualizar</button>
                        <a href="{{ url('/usuarios')}}"> <button type="button" class="btn btn-primary">Voltar</button> </a>
                    </form>
                    @else
                    <form action="{{ url('usuarios/adicionar')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome</label>
                            <input type="text" class="form-control" name="name" placeholder="Seu nome">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Endereço de email</label>
                            <input type="email" class="form-control" name='email'>
                            <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
                        </div>

                        <button type="submit" class="btn btn-success">Cadastrar</button>
                        <a href="{{ url('/usuarios')}}"> <button type="button" class="btn btn-primary">Voltar</button> </a>
                    </form>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
