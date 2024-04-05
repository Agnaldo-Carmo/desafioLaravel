{{-- herda a view base --}}
@extends('base')
{{-- define o conteúdo --}}
@section('content')
    {{-- caso exista a variável msg, exibe uma mensagem --}}
    @if (isset($msg))
        <h3 style="color: red">Produto não encontrado!</h3>
    @else
    {{-- senão, mostra os daddos --}}
        <h2>Mostrando dados do produto</h2>
        <p><strong>Nome:</strong> {{ $produto->nome }} </p>
        <p><strong>Categoria:</strong> {{ $produto->categoria }} </p>
        <p><strong>Valor:</strong> {{ $produto->valor }} </p>
        <p><strong>Vencimento:</strong> {{ $produto->vencimento }} </p>
        <p><strong>Quantidade:</strong> {{ $produto->quantidade }} </p>
        <p><strong>Perecivel:</strong> {{ $produto->perecivel }} </p>

        <a href="{{ route('produtos.index') }}">Voltar</a>
    @endif
@endsection
