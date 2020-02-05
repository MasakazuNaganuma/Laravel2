<html>
<head>
	<title>Hello/Index2</title>
	<style>
	body {font-size:16pt; color:#999; }
	h1 { font-size:100pt; text-align:right; color:#f6f6f6;
		margin:-50px 0px -100px 0px; }
	</style>
</head>
<body>
	<h1>Blade/Index</h1>

	@if ($msg != '')
	<p>こんにちは、{{$msg}}さん。</p>
	@else
	<p>何か書いてください。</p>
	@endif

	@unless ($msg != '')
	<p>何か書いてくださいな。(unless)</p>
	@endunless

	@empty ($msg)
	<p>msgは空です。</p>
	@endempty

	@isset ($msg)
	<p>msgは定義済です。</p>
	@else
	<p>msgは未定義です。</p>
	@endisset

	<form method="POST" action="/egg2">
		{{ csrf_field() }}
		<input type="text" name="msg">
		<input type="submit">
	</form>
</body>
</html>
