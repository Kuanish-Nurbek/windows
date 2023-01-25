<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class = 'test'>
<form action="">
  <label for="">сколько юзеров хотите видеть в одной странице</label><input type="text" name="selectNum">
  <input type="submit" value="выбрать">
</form>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Имя</th>
      <th scope="col">Фамилия</th>
      <th scope="col">Ссылка для удаления юзера</th>
      <th scope="col">Ссылка для редактирования</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <th scope="row">{{$user -> id}}</th>
      <td>{{$user -> name}}</td>
      <td>{{$user -> surname}}</td>
      <td><a href='/public/users/del/{{$user -> id}}'>удалить</a></td>
      <td><a href='/public/users/rename/{{$user -> id}}'>редактировать</a></td>
    </tr>
    @endforeach

    <!-- {{$users -> onEachSide(5) -> links()}} -->
    {{$users -> links()}}
  </tbody>
</table>

<div>
  <p><a href="/public/users/add">Добавить пользователья</a></p>
</div>
</body>
</html>

