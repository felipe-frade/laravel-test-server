@extends('layout.site')

@section('titulo', 'Contatos')

@section('conteudo')

<h3>Essa é a view index</h3>

@foreach($lista as $contato)
    <p>{{ $contato["nome"] }}</p>
    <p>{{ $contato["telefone"] }}</p>
@endforeach

@endsection('conteudo')
