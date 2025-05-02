@extends('layouts.app')

@section('title', 'Редактирование клиента')

@section('content')
    <x-link-button href="/clients" type="btn-primary">
        Назад
    </x-link-button>
    <form action="{{ route('clients.update', $clients->id) }}" method="post" class="form-wrapper">
        @method('PATCH')
        @csrf
        <div>
            <div>
                Имя клиента
            </div>
            <input type="text" name="username" value="{{ $clients->username ?? '' }}">
        </div>
        <div>
            <div>
                Контакты клиента
            </div>
            <input type="text" name="contact" value="{{ $clients->contact ?? '' }}">
        </div>
        <div>
            <div>
                Статус клиента
            </div>
            <div>
                <select name="status_id" id="status_id">
                    <option value="1" @selected($clients->status_id == 1)>Новый</option>
                    <option value="2" @selected($clients->status_id == 2)>В обработке</option>
                    <option value="3" @selected($clients->status_id == 3)>В работе</option>
                    <option value="4" @selected($clients->status_id == 4)>Заблокирован</option>
                    <option value="5" @selected($clients->status_id == 5)>Приостоновлен</option>
                    <option value="6" @selected($clients->status_id == 6)>Архивный</option>
                </select>
            </div>
        </div>
        <div>
            <div>
                Описание клиента
            </div>
            <div>
                <textarea name="description" id="" cols="30" rows="5">{{$clients->description ?? ''}}</textarea>
            </div>
        </div>

        <x-button type="submit" text="Редактировать" />
    </form>
@endsection
