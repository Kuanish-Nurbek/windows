
<x-layout>
    <table class="moderator-table">
        <tr>
            <th>id</th>
            <th>author</th>
            <th>title</th>
            <th>text</th>
            <th>status</th>
            <th>action</th>
            <th>date of publication</th>
            <th>date of update</th>
        </tr>
        <tbody>
            @foreach ($histories as $history)
                <tr>
                    <td>{{$history->id}}</td>
                    <td>{{$history->author}}</td>
                    <td>{{$history->title}}</td>
                    <td>{{$history->text}}</td>
                    <td>{!! $history->active == 1 ? 'опубликован' : 'в проверке' !!}</td>
                    <td>
                        @if ($history -> active != 1)
                            <a href="/public/histories_for_moderator/publication/{{$history -> id}}">опубликовать</a>
                        @else
                            <a href="/public/histories_for_moderator/check/{{$history -> id}}">в проверку</a>
                        @endif
                    </td>
                    <td>{{$history -> date_of_made}}</td>
                    <td>{{$history -> updated_at}}</td>

                </tr>
            @endforeach

        </tbody>
    </table>



</x-layout>

