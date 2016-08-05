@extends('app')

@section('content')
    <div class="container">
        <h3>Editar cliente</h3>

        {!! Form::open(['route'=>['clients.update', $client['_id']], 'class'=>'form']) !!}
        {{ method_field('PUT') }}
        <div class="form-group">
            {!! Form::label('name', 'Nome:') !!}
            {!! Form::text('name', $client['_source']['name'], ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('cpf', 'CPF:') !!}
            {!! Form::text('cpf', $client['_source']['cpf'], ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Editar', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
    </div>

@endsection