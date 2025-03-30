<form action={{$href}} method="POST">
    @method('DELETE')
    @csrf
    <button class={{$type}}>
        {{$text}}
    </button>
</form>
