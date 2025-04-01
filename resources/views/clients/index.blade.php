@extends('layouts.app')

@section('title', 'Клиенты')

@section('content')
    <h1>Клиенты</h1>
    <x-link-button href="clients/create" type="btn-primary" text="Создать"/>
    <table>
        <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Имя клиента</th>
                <th scope="col">Контакты</th>
                <th scope="col">Дата создания</th>
                <th scope="col">Дата редактирования</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
                <tr>
                    <th scope="row">{{$client->id}}</th>
                    <td>{{$client->username}}</td>
                    <td>{{$client->contact}}</td>
                    <td>{{$client->created_at}}</td>
                    <td>{{$client->updated_at}}</td>
                    <td><x-link-button href="clients/edit/{{$client->id}}" type="btn-primary" text="редактировать"/></td>
                    <td><x-delete-button href="clients/{{$client->id}}" type="btn-primary" text="удалить"/></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
