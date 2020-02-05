<html>
<head>
	<title>Hello/Index</title>
	<style>
	body {font-size:16pt; color:#999; }
	h1 { font-size:100pt; text-align:right; color:#f6f6f6;
		margin:-50px 0px -100px 0px; }
	</style>
</head>
<body>
	<h1>Blade/Index</h1>
	<p>This is a sample page with blade-template.</p>
	<h2>{{$msg}}</h2>
	@php
		$aaa = "aaa\nbbb";
	@endphp
	<h2>{!!nl2br(e($aaa))!!}</h2>
	<h2>{{$aaa}}</h2>
	<form method="POST" action="/egg">
		{{ csrf_field() }}
		<input type="text" name="msg">
		<input type="submit">
	</form>
</body>
</html>

