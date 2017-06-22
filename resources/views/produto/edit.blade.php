@extends('app')

@section('content')
    <div class="container">
        <h1>Editando Produto: {{$produto->descricao}}</h1>
            {!! Form::open(['url' => "produto/$produto->id/update",
                                'method'=>'put']) !!}
            <div class="form-group">
                {!! Form::label('descricao', 'Descrição:') !!}
                {!! Form::text('descricao', $produto->descricao, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('quantidade', 'Quantidade:') !!}
                {!! Form::text('quantidade', $produto->quantidade, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('valor', 'Valor unitário R$:') !!}
                {!! Form::text('valor', $produto->valor, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
    </div>
@endsection