@extends('layouts.app')

@section('header')
    <h2>Listagem de Músicas</h2>
@endsection

@section('content')
    <ul>
        @foreach($musicas as $musica)
            <li>{{ $musica->nome }} - {{ $musica->autor }} - {{ $musica->descricao }}</li>
        @endforeach
    </ul>
@endsection
