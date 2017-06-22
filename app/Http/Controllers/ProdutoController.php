<?php

namespace App\Http\Controllers;

use App\Produtos;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(){
        $produto = Produtos::all();
        return view ('produto.index', ['produto'=>$produto]);
    }

    public function create(){
        return view ('produto.create');
    }

    public function store(request $request){
        $novo_produto = $request->all();
        Produtos::create($novo_produto);
        return redirect('produto');
    }

    public function destroy($id){
        Produtos::find($id)->delete();
        return redirect('produto');
    }

    public function edit($id){
        $produto = Produtos::find($id);
        return view ('produto.edit', compact('produto'));
    }

    public function update(request $request, $id){
        $produto = Produtos::find($id)->update($request->all());
        return redirect('produto');
    }
}
