@extends('layouts.app')

@section('title','Listagem de usuários')

@section('content')
    <h1>
        Listagem de usuários!
        ( <a href="{{ route('users.create') }}">+</a> )
    </h1>

    <form action="{{ route('users.index') }}" method="GET">
        <input type="text" name="search" id="search" placeholder="Pesquisar">
        <button>Pesquisar</button>
    </form>

    <ul>
        @foreach ($users as $user)
        <li>
            {{$user->name}} - {{$user->email}}
            | <a href="{{ route('users.edit', $user->id) }}">Editar</a>
            | <a href="{{ route('users.show', $user->id) }}">Detalhes</a>
        </li>
        @endforeach
    </ul>
@endsection
