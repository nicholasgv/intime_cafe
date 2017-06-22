@extends('app')

@section('content')
    <div class="container">
        <h1>Novo Fornecedor</h1>
        {!! Form::open(['url' => 'fornecedor/store']) !!}
            <div class="form-group">
                {!! Form::label('nome', 'Nome:') !!}
                {!! Form::text('nome', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('produtoFornecido', 'Produto Fornecido:') !!}
                {!! Form::text('produtoFornecido', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}
            </div>
        {!! Form::close() !!}
    </div>
@endsection
