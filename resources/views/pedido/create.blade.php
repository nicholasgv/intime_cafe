@extends('app')

@section('content')
    <div class="container">
        <h1>Novo Pedido</h1>
        {!! Form::open(['url' => 'pedido/store']) !!}
            <div class="form-group">
                {!! Form::label('produto', 'Produto:') !!}
                {!! Form::text('produto', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('quantidade', 'Quantidade:') !!}
                {!! Form::number('quantidade', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('valorUnitario', 'Valor unitário R$:') !!}
                {!! Form::text('valorUnitario', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('valorTotal', 'Valor total R$:') !!}
                {!! Form::text('valorTotal', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}
            </div>
        {!! Form::close() !!}
    </div>
@endsection
