<html>
<head>
	<title>Hello/Index3</title>
	<style>
	body {font-size:16pt; color:#999; }
	h1 { font-size:100pt; text-align:right; color:#f6f6f6;
		margin:-50px 0px -100px 0px; }
	</style>
</head>
<body>
	<h1>Blade/Index</h1>


	@isset ($msg)
	<p>こんにちは、{{$msg}}さん。</p>
	@else
	<p>何か書いてください。</p>
	@endisset

	@for ( $i = 0; $i < 3; $i++ )
		<p>for loop {{$i}}</p>
	@endfor

	@foreach ([0,1,2] as $i)
		<p>foreach loop {{$i}}</p>
	@endforeach

	@forelse ([0,1,2] as $i)
		<p>forelse loop {{$i}}</p>
	@empty
		<p>forelse loop empty.</p>	
	@endforelse


	<form method="POST" action="/egg3">
		{{ csrf_field() }}
		<input type="text" name="msg">
		<input type="submit">
	</form>
</body>
</html>
