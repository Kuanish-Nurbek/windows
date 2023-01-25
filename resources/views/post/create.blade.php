

<h1>Создание поста блога</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    {{$errors -> get('title')[0]}}
    {{-- {{$errors}} --}}
@endif

<form action="/public/post" method="POST">
    @csrf
    <label for="">title</label><input type="text" name="title" value="{{old('title')}}" class="@error('title','post') is-invalid @enderror">
    <label for="">body</label><input type="text" name="body" value="{{old('body')}}" class="@error('body','post') is-invalid @enderror">
    <label for="">birth date</label><input type="text" name="birth_date" value="{{old('birth_date')}}" class="@error('body','post') is-invalid @enderror">
    <input type="submit">
</form>

@error('body','post')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

@error('title','post')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

@error('birth_date','post')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
