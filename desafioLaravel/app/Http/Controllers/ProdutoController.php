<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Produto;
class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $produtos = Produto::all();

    return view('produtos.index')->with('produtos', $produtos);    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produtos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $produto = new Produto();
            $produto->nome = $request->input('nome');
            $produto->categoria = $request->input('categoria');
            $produto->valor = $request->input('valor');
            $produto->vencimento = $request->input('vencimento');
            $produto->quantidade = $request->input('quantidade');
            $produto->perecivel = $request->input('perecivel');

            $produto->save();

            $produto = Produto::all();
            return view('produtos.index')->with('produtos', $produto)
                ->with('msg', 'Produto cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    $produto = Produto::find($id);
    if ($produto) {
        return view('produtos.show')->with('produto', $produto);
    } else {

        return view('produtos.show')->with('msg', 'Produto não encontrado!');
    }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    $produto = Produto::find($id);
    if ($produto) {
        return view('produtos.edit')->with('produto', $produto);
    } else {
        $produtos = Produto::all();
        return view('produtos.index')->with('produtos', $produto)
            ->with('msg', 'Produto não encontrado!');
    }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $produto = Produto::find($id);

         $produto->nome = $request->input('nome');
         $produto->categoria = $request->input('categoria');
         $produto->valor = $request->input('valor');
         $produto->vencimento = $request->input('vencimento');
         $produto->quantidade = $request->input('quantidade');
         $produto->perecivel = $request->input('perecivel');

         $produto->save();

         $produtos = Produto::all();
         return view('produtos.index')->with('produtos', $produto)
             ->with('msg', 'Produto atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    $produto = Produto::find($id);
    $produto->delete();
    $produto = Produto::all();
    return view('produtos.index')->with('produtos', $produto)
        ->with('msg', "Produto excluído com sucesso!");
    }
}
