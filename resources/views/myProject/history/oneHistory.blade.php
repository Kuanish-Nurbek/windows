
<x-layout>

    @if(!empty($history))
        <p>Title:{{$history->title}}</p>
        <p>{{$history->text}}</p>
        <p>{{$history->author}}</p>
    @endif

</x-layout>

