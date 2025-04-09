@extends('layouts.app')

@section('title', 'Главная страница')

@section('content')
    <h1>Главная</h1>
    <p>Количество клиентов {{$users}}</p>
    <p>Количество новых клиентов за сегодня {{$newClients}}</p>
@endsection
