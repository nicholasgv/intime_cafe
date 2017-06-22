@extends('app')

@section('content')
    <div class="container">
        <a href="{{ route('pedido.create')}}"
           class="btn-sm btn-primary">Novo</a>
        <h1>Pedidos</h1>
        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>Produto</th>
                <th>Quantidade</th>
                <th>Valor unitário R$</th>
                <th>Valor total R$</th>
                <th>Ação</th>
            </tr>
            </thead>
            <tbody>
            @foreach($pedido as $ped)
                <tr>
                    <td>{{ $ped->produto}}</td>
                    <td>{{ $ped->quantidade}}</td>
                    <td>{{ $ped->valorUnitario}}</td>
                    <td>{{ $ped->valorTotal}}</td>
                    <td>
                        <a href="{{ route('pedido.edit', ['id'=>$ped->id]) }}"
                           class="btn-sm btn-success">Editar</a>
                        <a href="{{ route('pedido.destroy', ['id'=>$ped->id]) }}"
                           class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
    </div>
@endsection