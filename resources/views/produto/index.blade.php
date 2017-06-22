@extends('app')

@section('content')
    <div class="container">
        <a href="{{ route('produto.create')}}"
           class="btn-sm btn-primary">Novo</a>
        <h1>Produtos</h1>
        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>Descrição</th>
                <th>Quantidade</th>
                <th>Valor unitário R$</th>
                <th>Ação</th>
            </tr>
            </thead>
            <tbody>
            @foreach($produto as $pro)
                <tr>
                    <td>{{ $pro->descricao}}</td>
                    <td>{{ $pro->quantidade}}</td>
                    <td>{{ $pro->valor}}</td>
                    <td>
                        <a href="{{ route('produto.edit', ['id'=>$pro->id]) }}"
                           class="btn-sm btn-success">Editar</a>
                        <a href="{{ route('produto.destroy', ['id'=>$pro->id]) }}"
                           class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
    </div>
@endsection