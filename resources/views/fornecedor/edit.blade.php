@extends('app')

@section('content')
    <div class="container">
        <h1>Editando Fornecedor: {{$fornecedor->nome}}</h1>
            {!! Form::open(['url' => "fornecedor/$fornecedor->id/update",
                                'method'=>'put']) !!}
            <div class="form-group">
                {!! Form::label('nome', 'Nome:') !!}
                {!! Form::text('nome', $fornecedor->nome, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('produtoFornecido', 'Produto Fornecido:') !!}
                {!! Form::text('produtoFornecido', $fornecedor->produtoFornecido, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
    </div>
@endsection