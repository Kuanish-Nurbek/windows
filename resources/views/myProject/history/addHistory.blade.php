

<x-layout>

    <div class="add-history__title">
        <h1>Здесь вы можете добавить свою историю</h1>
    </div>
    <form action="/public/add_history/add_validation">

        @if ($errors -> has('title'))
            <span class=error_message>{{$errors -> get('title')[0]}}</span>
        @endif
        <label for="">Title</label><input type="text" name="title" value="{{old('title')}}">

        @if ($errors -> has('text'))
            <span class=error_message>{{$errors -> get('text')[0]}}</span>
        @endif
        <label for="">Text</label><input type="text" name="text" value="{{old('text')}}">
        <input type="submit" value="добавить историю" >
    </form>

    @if(session('success'))
       <p class="success">{{session('success')}}</p>
    @endif


</x-layout>
