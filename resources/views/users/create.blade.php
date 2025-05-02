@extends('layouts.app')

@section('title', 'Создание пользователя')

@section('content')
    <x-link-button href="/users" type="btn-primary">
        Назад
    </x-link-button>
    <form action="{{ route('users.store') }}" method="post" class="form-wrapper">
        @csrf
        <div >
            <div>
                Имя пользователя
            </div>
            <div>
                <input type="text" name="name">
            </div>
        </div>
        <div>
            <div>
                email пользователя
            </div>
            <div>
                <input type="email" name="email">
            </div>
        </div>
        <div>
            <div>
                Пароль пользователя
            </div>
            <div>
                <input type="password" name="password">
            </div>
        </div>
        <x-button type="submit" text="Создать" />
    </form>
@endsection
