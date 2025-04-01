@extends('layouts.app')

@section('title', 'Создание клиенты')

@section('content')
<x-link-button href="/clients" text="Назад" type="btn-primary"/>
<form action="{{ route('clients.store') }}" method="post">
    @csrf
    <div>
        Имя клиента
    </div>
    <input type="text" name="username">
    <div>
        Контакты клиента
    </div>
    <input type="text" name="contact">
    <x-button type="submit" text="Создать"/>
</form>
@endsection
