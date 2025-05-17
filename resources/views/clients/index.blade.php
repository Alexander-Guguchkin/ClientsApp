@extends('layouts.app')

@section('title', 'Клиенты')

@section('content')
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6 ">
            <x-link-button href="/clients/create" type="btn-primary">Создать клиента</x-link-button>
            <div class=" m-6 ">
                @foreach ($clients as $client)
                <x-card-clients :id="$client->id" :username="$client->username" :contact="$client->contact" :status="$client->status" created="{{ $client->created_at }}"
                    updated="{{ $client->updated_at }}" />
            @endforeach
            </div>
        </div>
      </section>
@endsection
