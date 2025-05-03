<div class="sidebar">
    <div class="nav-list">
        <x-nav-item text="Доска"/>
        <x-nav-item text="Клиенты" href="/clients"/>
        <x-nav-item text="Пользователи" href="/users"/>
    </div>
    @auth
        <div class="user-info">
            <x-nav-item text="{{auth()->user()->name }}"/>
        </div>
    @endauth
</div>
