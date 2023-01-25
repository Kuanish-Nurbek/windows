@if ( (session('histori')) != null) {{-- histori мы записали после изменения истории в контроллере  --}}
   @php
    $title = session('histori')['title'];
    $text = session('histori')['text'];
        session() -> forget('histori')   // удаляем сессию для того чтобы не было ошибки если юзер захочет изменить другую историю
   @endphp

@else           {{-- histories данного юзера мы записали в сесию в компоненте user-histories  --}}
    @foreach (session('histories') as $story)
    @if ($story['id'] == session('id'))
    @php
        $title = $story['title'];
        $text = $story['text'];
    @endphp
    @endif
    @endforeach
@endif


<x-layout>
    <div class="main-history-update history-update">
        <div class="history-update__title ">
            <h2 class="title"> Здесь вы можете обновить вашу историю</h2>
        </div>
        <form action="/public/update/make" method="POST">
            @csrf
            <label for="">title</label><input type="text" name="title" value="{{ $title }}">
            <label for="">text</label><input type="text" name="text" value="{{ $text }}">
            <input type="submit" value="обновить">
        </form>
        <p class="success">{{session('success')}}</p>
    </div>

</x-layout>

