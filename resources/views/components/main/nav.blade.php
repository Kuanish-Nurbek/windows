<nav>
    @foreach($categories as $category)
        <a href="{{$category['slug']}}">{{$category['name']}}</a><br>
    @endforeach
    {{-- {{$type}}
    {{$message}} --}}
</nav>
