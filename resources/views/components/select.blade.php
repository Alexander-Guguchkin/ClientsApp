<select name="{{name}}" id="{{id}}">
    @foreach ( $item as $data)
        <option value="1">{{$item}}</option>
    @endforeach

    {{-- <option value="2">В бработке</option>
    <option value="3">В работе</option>
    <option value="4">Заблокирован</option>
    <option value="5">Приостоновлен</option>
    <option value="6">Архивный</option> --}}
</select>
