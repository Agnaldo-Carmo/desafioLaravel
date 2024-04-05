{{-- herda a view 'base' --}}
@extends('base')
{{-- cria a seção content, definida na base, para injetar o código --}}
@section('content')
    <h2>Cadastrar Novo Produto</h2>
    {{-- o atributo action aponta para a rota que está direcionada ao método store do controlador --}}
    <form class="form" method="POST" action="{{ route('produtos.store') }}">
        {{-- CSRF é um token de segurança para validar o formulário --}}
        @csrf
        <label for="Nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>

        <label for="Categoria">Categoria:</label>
        <input type="text" name="categoria" id="categoria" required>

        <label for="Valor">Valor:</label>
        <input type="number" step=0.01 name="valor" id="valor" required>

        <label for="Vencimento">Vencimento:</label>
        <input type="date" name="vencimento" id="vencimento" required>

        <label for="Quantidade">Quantidade:</label>
        <input type="number" name="quantidade" id="quantidade" required>

         <input type="checkbox" name="perecivel" value="false" >
         <label for="perecivel"> Produto Perecivel</label><br>


        <input type="submit" value="Salvar">
        <input type="reset" value="Limpar">
    </form>
@endsection
