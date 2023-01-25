<form action="" >
    <label for="">name</label><input type="text" name="name" value="{{old('name')}}">
    <label for="">surname</label><input type="text" name="surname" value="{{old('surname')}}">
    <input type="submit">
</form>
@if(!empty($textLog)) <p>{{$textLog}}</p>  @endif