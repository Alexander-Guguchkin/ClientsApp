<div class="sidebar">
    <div class="nav-list">
        <x-nav-item text="Доска"/>
        <x-nav-item text="Клиенты" href="/clients"/>
        <x-nav-item text="Пользователи" href="/users"/>
        <div class="bg-gray-100 p-4">
            <h1">123132</h1>
        </div>
    </div>
    @auth
        <div class="user-info">
            <x-nav-item text="{{auth()->user()->name }}"/>
        </div>
    @endauth
</div>
