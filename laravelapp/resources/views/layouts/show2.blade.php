@extends('layouts.helloapp')

@section('title', 'Show2')

@section('menubar')
    @parent
    詳細ページ2
@endsection

@section('content')
	@if ($items != null)
		@foreach($items as $item)
		<table width="400px">
			<tr><th width="50px">id:</th>
			<td width="50px">{{$item->id}}</td>
			<th width="50px">name:</th>
			<td>{{$item->name}}</td></tr>
		</table>
		@endforeach
	@endif
@endsection

@section('footer')
copyright 2017 tuyano.
@endsection
