<!-- resources/views/home.blade.php -->
@extends('app') <!-- Usando o layout app.blade.php -->

@section('content')
    <div class="container">
        <h1>Bem-vindo ao Sistema de Força de Vendas!</h1>
        <p>Essa é a página inicial do sistema. Aqui você poderá visualizar os dados de clientes, produtos e muito mais.</p>
        <button class="btn btn-primary">Cadastrar Novo Cliente</button>
        <button class="btn btn-secondary">Visualizar Clientes</button>
    </div>
@endsection
