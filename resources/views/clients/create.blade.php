@extends('layouts.app')

@section('title', 'Клиенты')

@section('content')
<x-link-button href="/clients" text="Назад"/>
<form action="{{ route('clients.store') }}" method="post">
    @csrf
    <input type="text" name="username">
    <input type="text" name="contact">
    <x-button type="submit" text="Создать"/>
</form>
@endsection
