<x-layout>

    <form action="/public/registr/validation">
        @if($errors -> has('email'))
        <span class=error_message>{{$errors -> get('email')[0]}}</span>
        @endif
        <label for="">email</label>
        <input type="text" name="email">
        @if($errors -> has('password'))
        <span class="error_message">{{$errors -> get('password')[0]}}</span>
        @endif
        <label for="">password</label><input type="text" name="password">
        <input type="submit" value="Зарегистрироваться">
    </form>


</x-layout>
{{--  --}}
