@extends('app')

@section('content')
    <div class="container">
        <h1>Novo Produto</h1>
        {!! Form::open(['url' => 'produto/store']) !!}
            <div class="form-group">
                {!! Form::label('descricao', 'Descrição:') !!}
                {!! Form::text('descricao', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('quantidade', 'Quantidade:') !!}
                {!! Form::number('quantidade', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('valor', 'Valor unitário R$:') !!}
                {!! Form::text('valor', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}
            </div>
        {!! Form::close() !!}
    </div>
@endsection
