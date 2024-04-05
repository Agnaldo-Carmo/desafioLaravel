{{-- herda a view 'base' --}}
@extends('base')
{{-- cria a seção content, definida na base, para injetar o código --}}
@section('content')
    <h2>Atualizar um Produto</h2>
    {{-- o atributo action aponta para a rota que está direcionada ao método store do controlador --}}
    <form class="form" id="update-form" method="POST" action="{{ route('produtos.update', $produto->id) }}">
        {{-- CSRF é um token de segurança para validar o formulário --}}
        @csrf
        {{-- o método de atualização é o PUT --}}
        @method('PUT')
         <label for="Nome">Nome:</label>
         <input type="text" name="nome" id="nome" required>
         <label for="Categoria">Categoria:</label>
         <input type="text" name="categoria" id="categoria" required>
         <label for="Valor">Valor:</label>
         <input type="number" name="valor" id="valor" required>
         <label for="Vencimento">Vencimento:</label>
         <input type="date" name="vencimento" id="vencimento" required>
         <label for="Quantidade">Quantidade:</label>
         <input type="number" name="quantidade" id="quantidade" required>
         <input type="checkbox" name="perecivel" value="false" >
         <label for="perecivel"> Produto Perecicel</label><br>
    </form>
    {{-- note que os botões estão fora dos forms. O atributo form indica qual form o botão pertence --}}
    <button form="update-form" type="submit">Salvar</button>
    <button form="delete-form" type="submit" value="Excluir" >Excluir</button>
    {{-- form para exclusão --}}
    <form method="POST" class="form" id="delete-form" action="{{ route('produtos.destroy', $produto->id) }}">
        @csrf
        {{-- o método HTTP para exclusão deve ser o DELETE --}}
        @method('DELETE')
    </form>
@endsection
