
@foreach($users as $user)


<p>{{$user -> login}}</p>
<p>{{$user -> password}}</p>
<p>{{$user -> profile -> name}}</p>
<p>{{$user -> profile -> surname}}</p>


@endforeach

{{$countryName}} 

@foreach($cities as $city)


<p>{{$city -> name}}</p>


@endforeach