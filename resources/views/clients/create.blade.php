@extends('layouts.app')

@section('title', 'Создание клиенты')

@section('content')
    <x-link-button href="/clients" type="btn-primary">
        Назад
    </x-link-button>
    <form action="{{ route('clients.store') }}" method="post" class="form-wrapper">
        @csrf
        <div >
            <div>
                Имя клиента
            </div>
            <div>
                <input type="text" name="username">
            </div>
        </div>
        <div>
            <div>
                Контакты клиента
            </div>
            <div>
                <input type="text" name="contact">
            </div>
        </div>
        <div>
            <div>
                Описание клиента
            </div>
            <div>
                <textarea name="description" id="" cols="30" rows="5"></textarea>
            </div>
        </div>
        <x-button type="submit" text="Создать" />
    </form>
@endsection
