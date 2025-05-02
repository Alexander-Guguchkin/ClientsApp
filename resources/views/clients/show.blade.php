@extends('layouts.app')

@section('title', 'Клиенты')

@section('content')
    <h1>Клиент</h1>
    <x-link-button href="/clients" type="btn-primary">
        Назад
    </x-link-button>
    <div class="client">
        <div class="info">
            <div>ID:</div>
            <div>{{ $client->id }}</div>
        </div>
        <div class="info">
            <div>Имя:</div>
            <div>{{ $client->username }}</div>
        </div>
        <div class="info">
            <div>Контакт:</div>
            <div>{{ $client->contact }}</div>
        </div>
        <div class="info">
            <div>Статус:</div>
            <div>{{ $client->status->status_name }}</div>
        </div>
        <div class="info">
            <div>Описание:</div>
            <div>{{ $client->description }}</div>
        </div>
        <div class="info">
            <div>Время создания:</div>
            <div>{{ $client->created_at }}</div>
        </div>
        <div class="info">
            <div>Время редактирования</div>
            <div>{{ $client->updated_at }}</div>
        </div>
    </div>

    <x-link-button href="/clients/edit/{{$client->id}}" type="btn-primary">Редактировать</x-link-button>
    <x-delete-button href="/clients/{{$client->id}}" text="Удалить" type="btn-primary" />
@endsection
