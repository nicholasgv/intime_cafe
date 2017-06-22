@extends('app')

@section('content')
    <div class="container">
        <h1>Editando Pedido: {{$pedido->produto}}</h1>
            {!! Form::open(['url' => "pedido/$pedido->id/update",
                                'method'=>'put']) !!}
        <div class="form-group">
            {!! Form::label('produto', 'Produto:') !!}
            {!! Form::text('produto', $pedido->produto, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('quantidade', 'Quantidade:') !!}
            {!! Form::number('quantidade', $pedido->quantidade, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('valorUnitario', 'Valor unitário R$:') !!}
            {!! Form::text('valorUnitario', $pedido->valorUnitario, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('valorTotal', 'Valor total R$:') !!}
            {!! Form::text('valorTotal', $pedido->valorTotal, ['class'=>'form-control']) !!}
        </div>
            <div class="form-group">
                {!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
    </div>
@endsection