


<x-layout>


    <form action="/public/login/auth">
        <label for="">email</label><input type="text" name="email" value="{{old('email')}}">
        <label for="">password</label><input type="password" name="password" value="{{old('email')}}">
        <input type="submit" value="войти">
        <span class="errorLog">{{session()->get('errorLog')}}</span>
    </form>

</x-layout>
