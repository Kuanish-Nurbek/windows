    <!DOCTYPE html>
<html>
	<head>
		<x-meta.meta />
		<title>{!! isset($title) ? $title : 'title' !!}</title>

	</head>
	<body class="className">



		<x-header.header >

        </x-header.header >



        {{-- В $slot  попадает то что в предствалениях которые ссылаются в этот layout  --}}

		<x-main.main>
			@if(isset($slot))
			{{$slot}}
			@endif
		</x-main.main>


        <div id="app">
            <example-component :users="{{\App\Models\User::query()->limit(5)-> get()}}"> </example-component>
        </div>

        {{-- @php
            dd(\App\Models\User::query()->limit(5)-> get())
        @endphp --}}

		<x-footer.footer />

        <script src='build/assets/app.822f5056.js'></script>
	</body>
</html>
