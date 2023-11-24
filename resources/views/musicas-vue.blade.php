@extends('layouts.app')

@section('header')
    <h2>Músicas com Vue.js</h2>
@endsection

@section('content')
    <musica-list></musica-list>
    <script src="{{ mix('js/musicas-vue.js') }}" defer></script>
@endsection
