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
                Описание клиента
            </div>
            <div>
                <textarea name="description" id="" cols="30" rows="5">{{$clients->description ?? ''}}</textarea>
            </div>
        </div>
        <x-button type="submit" text="Редактировать" />
    </form>
@endsection
