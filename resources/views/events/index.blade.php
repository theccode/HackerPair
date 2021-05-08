<!DOCTYPE>
<html>
<head>
<title>Events</title>
</head>
<body>
	<ul>
		@forelse($events as $event)
			<li>{{ $event }}</li>
		@empty
			<li>No available event at the moment!</li>
		@endforelse
	</ul>
</body>
</html>
