@extends('layouts.helloapp')

@section('title', 'Person.index3')

@section('menubar')
	@parent
	インデックスページ3
@endsection

@section('content')
	<table>
	<tr><th>Person</th><th>Board</th></tr>
	@foreach ($hasItems as $item)
		<tr>
			<td>{{$item->getData()}}</td>
			<td>
				<table with="100%">
				@foreach ($item->boards as $obj)
					<tr><th>{{$obj->getData()}}</td></tr>
				@endforeach
				</table>
			</td>
		</tr>
	@endforeach
	</table>
	<div style="margin:10px;"></div>
	<table>
	<tr><th>Person</th></tr>
	@foreach ($noItems as $item)
		<tr>
			<td>{{$item->getData()}}</td>
		</tr>
	@endforeach
	</table>
@endsection

@section('footer')
	copyright 2017 tuyano.
@endsection

