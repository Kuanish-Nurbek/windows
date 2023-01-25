<form action="/public/login/user/auth">
    <input type="text" name="email">
    <input type="password" name="password">
    <input type="submit">
</form>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    {{-- {{$errors -> get('email')[0]}} --}}
    {{-- {{$errors}} --}}
@endif
