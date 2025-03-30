<form action="{{ route('clients.store') }}" method="post">
    @csrf
    <input type="text" name="username">
    <input type="text" name="contact">
    <x-button type="submit" text="Создать"/>
</form>
