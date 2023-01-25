<form action="" method="POST">
    @csrf
    <label for="">new name</label><input type="text" name="new_name">
    <label for="">new surname</label><input type="text" name="new_surname">
    <input type="submit">
</form>
<p><a href="/public/users">< назад</a></p>



@if(!empty($text))
    <p>{{$text}}</p>
@endif
