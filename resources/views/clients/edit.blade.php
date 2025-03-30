@extends('layouts.app')

@section('title', 'Клиенты')

@section('content')
<x-link-button href="/clients" text="Назад"/>
<form action="{{ route('clients.update', $clients->id) }}" method="post">
    @method('PATCH')
    @csrf
    <input type="text" name="username" value="{{ $clients->username ?? '' }}">
    <input type="text" name="contact" value="{{ $clients->contact ?? '' }}">
    <x-button type="submit" text="Редактировать"/>
</form>
@endsection
