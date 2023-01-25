
<x-layout>


    <div class="main-histories">
        <div class="main-histories__title">
            <h2 class="main-histories__title_text title">Истории наших пользователей</h2>
        </div>
        <form action="/public/histories/change_select" style="display: block; text-align:right;" method="POST">
            @csrf
            <select name=select-item id="" style="display: inline-block">
                <option name=select-item value="5"  {!! session('selectedNum') == 5 ? 'selected' : ''!!}>5</option>
                <option name=select-item value="10" {!! session('selectedNum') == 10 ? 'selected' : ''!!}>10</option>
                <option name=select-item value="20"  {!! session('selectedNum') == 20 ? 'selected' : ''!!}>20</option>
                <option name=select-item value="30"  {!! session('selectedNum') == 30 ? 'selected' : ''!!}>30</option>
                <option name=select-item value="50"  {!! session('selectedNum') == 50 ? 'selected' : ''!!}>50</option>
            </select>
            <label for="">истории на одной странице</label>
            <input type="submit" name="" id="" value="изменить" class="_btn">
        </form>
        @if(!empty($histories))
            @foreach ($histories as $history)
                <p><a href="/public/history/{{$history -> id}}">{{$history -> title}}</a></p>
            @endforeach

            {{$histories -> links()}}

            {{-- @if (!empty($histories -> links()))
                {{$histories -> links()}}
            @endif --}}

        @endif
    </div>

    {{-- @foreach ($histories as $history )
    {{$history}}
    @endforeach --}}

</x-layout>

