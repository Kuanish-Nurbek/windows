<div>
    <table>
        <tr>
            <th>id</th>
            <th>email</th>
            <th>status</th>
            <th>remove</th>
            <th>application to be a moderator</th>
            <th>access</th>


        </tr>
        <tbody>

            @if ($users != null)
                @foreach ($users as $user )
                    <tr>
                        <td>{{$user -> id}}</td>
                        <td>{{$user -> email}}</td>
                        <td>{{$user -> status}}</td>
                        <td>
                            @if ($user -> status == 'moderator')
                                <a href="/public/admin/status/{{$user -> id}}/">remove status</a>
                            @endif
                        </td>
                        <td>
                            @if ($user -> request_moderator != 0)
                                <a href="/public/admin/accept-moderator/{{$user -> id}}">accept</a>
                            @endif
                        </td>
                        <td>
                            @if ($user -> active != 1)
                                <a href="/public/admin/activated/{{$user->id}}">activated</a>
                            @else
                                <a href="/public/admin/blocked/{{$user->id}}">blocked</a>
                            @endif
                        </td>

                    </tr>
                @endforeach
            @endif

        </tbody>
    </table>

</div>
