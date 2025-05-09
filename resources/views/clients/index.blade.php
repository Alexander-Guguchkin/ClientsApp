@extends('layouts.app')

@section('title', 'Клиенты')

@section('content')

{{-- @dd($clients) --}}
    <h1>Клиенты</h1>
    <x-link-button href="/clients/create" type="btn-primary">Создать клиента</x-link-button>

    @foreach ($clients as $client)
        <x-card-clients :id="$client->id" :username="$client->username" :contact="$client->contact" :status="$client->status" created="{{ $client->created_at }}"
            updated="{{ $client->updated_at }}" />
    @endforeach
@endsection
