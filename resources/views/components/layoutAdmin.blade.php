<!DOCTYPE html>
<html>
	<head>
		<x-meta.metaAdmin />
		<title>title</title>
	</head>
	<body class="className">
        <div class="nav">
            <ul>
                <li></li>
            </ul>
        </div>

	</body>
</html>

{{--
<!DOCTYPE html>
<html>
	<head>
		<x-meta.meta />
		<title>title</title>
	</head>
	<body class="className">

		<x-header.header />

		<p>layout2</p>

		<x-main.main>
			@if(isset($slot))
			{{ $slot }}
			@endif

			<x-slot:welcome>
				@if(isset($welcome))
				{{ $welcome }}
				@endif
			</x-slot>

		</x-main.main>

		<x-footer.footer />
	</body>
</html> --}}
