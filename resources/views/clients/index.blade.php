@extends('app')

@section('content')
    <div class="container">
        <h3>Clientes</h3>

        <a href="{{ route('clients.create') }}" class="btn btn-default">Novo cliente</a>
        <br><br>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Ação</th>
            </tr>
            </thead>

            <tbody>
            @foreach($clients['hits']['hits'] as $client)
                <tr>
                    <td>{{$client['_id']}}</td>
                    <td>{{$client['_source']['name']}}</td>
                    <td>{{$client['_source']['cpf']}}</td>
                    <td>
                        <a href="{{route('clients.edit',['id'=> $client['_id']])}}" class="btn btn-default btn-sm">
                            Editar
                        </a>
                        <a href="{{route('clients.delete',['id'=> $client['_id']])}}" class="btn btn-default btn-sm">
                            Excluir
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection