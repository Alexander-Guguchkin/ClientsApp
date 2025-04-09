@extends('layouts.app')

@section('title', 'Главная страница')

@section('content')
@dd($data)

    <h1>Главная</h1>
    <p>Количество клиентов {{$users}}</p>
@endsection
