
<x-layout> 
	<x-slot:title>
		page title
	</x-slot>
<p class="{{$className}}">	variable one: {{$var1}}</p>  {{-- можно значение переменных передать как значения атрибутов --}}
<p>	variable two: {{$var2}}</p>
<p>	current date: {{date('d-m-Y',time())}}</p>  {{-- можно выполнять некоторые функции --}} 
<p>	user name: {{$userData['name']}}</p>
<p>	user age: {{-- $userData['age'] --}}</p>  {{-- коментарий который не выводится в браузер в отличие от HTML комментариев --}}
<p>	salary: {!!$userData['salary']!!}</p> {{--  {!!  ...  !!}  экранирование данных '<b>text</b>'  выведет жирный 'text' --}}
<p>position: {!!  $userData['position'] ?? 'employer' !!}</p>   						      {{-- если null то присвоим строку 'employer' --}}
<p>position: {!!  isset($userData['position']) ? $userData['position'] : 'employer' !!}</p>   {{-- если null то присвоим строку 'employer' --}} 
@if($userData['isAuth']) 		{{-- $userData['isAuth'] = must be true or false else will be error--}}
	вы авторизованы
@else 
	вы не авторизованы
@endif
<br>
@if($userData['num'] < 0)
	меньше нулья
@elseif($userData['num'] == 0)
	ноль
@else 
	больше нулья
@endif

@unless($userData['isAuth'])  {{-- кока не --}}
	вы еще не авторизованы
@endunless

@foreach($userData['arr'] as $elem) 	
	<p>Имя: {{$elem['name']}},Фамилия: {{$elem['surname']}},Возраст: {{$elem['age']}},</p>
@endforeach

{{--  в blade можно использовать также массив вида ключ => значние   --}} 
{{--  и также в цикле можно использовать сложные проверки с помощью @if...  --}} 
{{--  и также в цикле можно использовать вложенный цикл (еще один цикл внутри)  --}} 


@forelse($userData['arr'] as $elem) {{--  если массив не пусть то перебери массив, иначе то что в @empty  --}} 
	<p>{{$elem['name']}}</p>
@empty
	<p>Массив пуст</p>
@endforelse


<ul>
	@foreach($userData['nums'] as $num)
		{{ $loop->count }} {{--       количество элементов в массиве возвращает number	 --}} 
		{{ $loop->odd }} {{--    не четная итерация возвращает true or false 	--}} 
		{{ $loop->even }} {{--    четная итерация возвращает true or false 	--}} 
		{{ $loop->index }} {{--    можно узнать индекс текущей итерации (начинается с нуля) 	--}} 
		{{ $loop->iteration }} {{--    Можно узнать номер текущей итерации (начинается с единицы) 	--}} 
		{{ $loop->remaining }}  {{--    Можно узнать, сколько итераций осталось возвращает number	--}} 

		@if($loop->remaining < 2) 		{{-- в последних двух итерациях цифры будут жирными   --}} 
			@if($loop -> last)
				<li class="last"><b> {{$loop -> iteration}}) {{$num}}</b></li> {{-- к последнему элементу добавится класс last   --}} 
			@else 
				<li><b>{{$loop -> iteration}}) {{$num}}</b></li>
			@endif
		@else 
			@if($loop -> first)
				<li class="first">{{$loop -> iteration}}) {{$num}}</li> {{-- к превому элементу добавится класс first --}} 
			@else 
				<li>{{$loop -> iteration}}) {{$num}}</li>  {{--       5) какой то текст    (пример на $loop-iteration)  --}} 
			@endif
		@endif

	@endforeach
</ul>

@foreach($userData['nums'] as $num)

	@if ($num == 2) {{-- 	альтернатива по короче читай ниже   --}} 
		@continue
	@endif

	@continue($num == 2) {{-- 	если $num равно 2 то перейти к следуюшей итерации    --}} 

	{{$num}} {{--   после окончания цикла в браузере будет - 1 3    --}} 
	


	@if ($num == 3)  {{-- 	альтернатива по короче читай ниже   --}} 
		@break
	@endif


	@break($num == 3) {{-- 	если $num равно 3 то остановить цикл   --}} 

@endforeach

@for ($i = 0; $i < 10; $i++)
	значение счетчика: {{ $i }}
@endfor


{{-- 	здесь можно писать php код   --}} 
@php 
	echo 'hello';
@endphp

<ul>
	@for($i=1; $i <= $userData['daysOfMonth']; $i++)
		@if($i == $userData['today'])
			<li style="color:red">{{$i}}</li>
		@else
			<li>{{$i}}</li>
		@endif
	@endfor
</ul>


</x-layout>