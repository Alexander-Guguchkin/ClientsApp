@extends('layouts.app')

@section('title', 'Редактирование пользователя')

@section('content')
    <x-link-button href="/users" type="btn-primary">
        Назад
    </x-link-button>
    <form action="{{ route('users.update', $user->id) }}" method="post" class="form-wrapper">
        @method('PATCH')
        @csrf
        <div>
            <div>
                Имя клиента
            </div>
            <input type="text" name="name" value="{{ $user->name ?? '' }}">
        </div>
        <div>
            <div>
                Контакты клиента
            </div>
            <input type="email" name="email" value="{{ $user->email ?? '' }}">
        </div>
        <div>
            <div>
                Пароль пользователя
            </div>
            <input type="password" name="password">
        </div>
          <x-button type="submit" text="Редактировать" />
    </form>
@endsection
