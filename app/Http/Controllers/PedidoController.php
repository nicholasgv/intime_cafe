<?php

namespace App\Http\Controllers;

use App\Pedidos;
use App\Produtos;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function index() {
        $pedido = Pedidos::all();
        return view('pedido.index', ['pedido' => $pedido]);
    }

    public function create(){
        return view ('pedido.create');
    }

    public function store(request $request){
        $novo_pedido = $request->all();
        Pedidos::create($novo_pedido);
        return redirect('pedido');
    }

    public function destroy($id){
        Pedidos::find($id)->delete();
        return redirect('pedido');
    }

    public function edit($id){
        $pedido = Pedidos::find($id);
        return view ('pedido.edit', compact('pedido'));
    }

    public function update(request $request, $id){
        $pedido = Pedidos::find($id)->update($request->all());
        return redirect('pedido');
    }

    public function findProduto(){
        $produto = Produtos::all();
    }
}
