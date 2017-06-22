<?php

namespace App\Http\Controllers;

use App\Fornecedores;
use App\Http\Requests\FornecedorRequest;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedor = Fornecedores::all();
        return view ('fornecedor.index', ['fornecedor'=>$fornecedor]);
    }

    public function create(){
        return view ('fornecedor.create');
    }

    public function store(FornecedorRequest $request){
        $novo_fornecedor = $request->all();
        Fornecedores::create($novo_fornecedor);
        return redirect('fornecedor');
    }

    public function destroy($id){
        Fornecedores::find($id)->delete();
        return redirect('fornecedor');
    }

    public function edit($id){
        $fornecedor = Fornecedores::find($id);
        return view ('fornecedor.edit', compact('fornecedor'));
    }

    public function update(FornecedorRequest $request, $id){
        $fornecedor = Fornecedores::find($id)->update($request->all());
        return redirect('fornecedor');
    }
}

