@extends('layouts.app')

@section('title', 'Редактирование клиента')

@section('content')
<x-link-button href="/clients" text="Назад" type="btn-primary"/>
<form action="{{ route('clients.update', $clients->id) }}" method="post">
    @method('PATCH')
    @csrf
    <div>
        Имя клиента
    </div>
    <input type="text" name="username" value="{{ $clients->username ?? '' }}">
    <div>
        Контакты клиента
    </div>
    <input type="text" name="contact" value="{{ $clients->contact ?? '' }}">
    <x-button type="submit" text="Редактировать"/>
</form>
@endsection
