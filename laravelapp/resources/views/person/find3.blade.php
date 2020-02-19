@extends('layouts.helloapp')

@section('title', 'Person.find3')

@section('menubar')
	@parent
	検索ページ3
@endsection

@section('content')
	<form action="/person2/find3" method="post">
	{{ csrf_field() }}
	<input type="text" name="input" value="{{$input}}">
	<input type="submit" value="find3">
	</form>
	@if (isset($item))
		<table>
		<tr><th>Data</th></tr>
		<tr>
			<td>{{$item->getData()}}</td>
		</tr>
		</table>
	@endif
@endsection

@section('footer')
	copyright 2017 tuyano.
@endsection

