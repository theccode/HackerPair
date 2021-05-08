<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		{!! HTML::style('css/app.css') !!}
		<title>Welcome to HackerPair</title>
	</head>
	<body>
		<div>
			@yield('content')
		</div>
		<div>
{{--			@section('advertisement')
			<p>Score some HackerPair swag in our store!</p>
			@show --}}
			@section('advertisement')
				@parent
					<p>
						HackerPair members always get 10% off at Tron Cafe!
					</p>
			@endsection
		</div>
	</body>
</html>
