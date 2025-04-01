@extends('layouts.app')

@section('title', 'Клиенты')

@section('content')
    <h1>Клиенты</h1>
    <x-link-button href="/clients/create" type="btn-primary">Создать клиента</x-link-button>
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
                <div>
                    <tr>
                        <th scope="row">
                            <a href="/clients/show/{{ $client->id }}">
                                {{ $client->id }}
                            </a>
                        </th>
                        <td>
                            {{ $client->username }}
                        </td>
                        <td>{{ $client->contact }}</td>
                        <td>{{ $client->created_at }}</td>
                        <td>{{ $client->updated_at }}</td>

                    </tr>
                </div>
            @endforeach
        </tbody>
    </table>
@endsection
