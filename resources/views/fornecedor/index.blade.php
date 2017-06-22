@extends('app')

@section('content')
    <div class="container">
        <a href="{{ route('fornecedor.create')}}"
           class="btn-sm btn-primary">Novo</a>
        <h1>Fornecedores</h1>
        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Produto Fornecido</th>
                <th>Ação</th>
            </tr>
            </thead>
            <tbody>
            @foreach($fornecedor as $for)
                <tr>
                    <td>{{ $for->nome }}</td>
                    <td>{{ $for->produtoFornecido }}</td>
                    <td>
                        <a href="{{ route('fornecedor.edit', ['id'=>$for->id]) }}"
                           class="btn-sm btn-success">Editar</a>
                        <a href="{{ route('fornecedor.destroy', ['id'=>$for->id]) }}"
                           class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
    </div>
@endsection