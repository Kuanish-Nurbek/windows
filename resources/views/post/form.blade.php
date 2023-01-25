<form action = '/public/login/1/nurbek' method="GET">
    @csrf
    <input name="id">
    <input name="name">
    <input name="surname">
    <input type="submit">
</form>

@php if(!empty($name)){
    echo "<p>$name</p>";
}

@endphp