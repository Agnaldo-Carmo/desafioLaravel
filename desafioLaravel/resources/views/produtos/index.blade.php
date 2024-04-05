{{-- herda a view 'base' --}}
@extends('base')
{{-- cria a seção content, definida na base, para injetar o código --}}
@section('content')
    <h2>Produtos Cadastrados</h2>
    @if (!isset($produtos))
        <h3 style="color: red">Nenhum Registro Encontrado!</h3>
        {{-- senão, monta a tabela com o dados --}}
    @else
        <table class="data-table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Categoria</th>
                    <th>Valor</th>
                    <th>Vencimento</th>
                    <th>Quantidade</th>
                    <th>Perecivel</th>


                    <th colspan="2">Opções</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produtos as $p)
                    <tr>
                        <td>{{ $p->nome }} </td>
                        <td>{{ $p->categoria }} </td>
                        <td>{{ $p->valor }} </td>
                        <td>{{ $p->vencimento }} </td>
                        <td>{{ $p->quantidade }} </td>
                        <td>{{ $p->perecivel }} </td>

                        {{-- vai para a rota show, passando o id como parâmetro --}}
                        <td> <a href="{{ route('produtos.show', $p->id) }}">Exibir</a> </td>
                        <td> <a href="{{ route('produtos.edit', $p->id) }}">Editar</a> </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    {{-- mostra a qtde de veículos cadastrados. --}}
                    <td colspan="5">Produtos Cadastrados: {{ $produtos->count() }}</td>
                </tr>
            </tfoot>
        </table>
    @endif
    @if(isset($msg))
        <script>
            alert("{{$msg}}");
        </script>
    @endif
@endsection
