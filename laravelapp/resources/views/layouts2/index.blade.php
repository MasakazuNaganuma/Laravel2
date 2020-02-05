@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
	@parent
	インデックスページ
@endsection

@section('content')
	<p>ここが本文のコンテンツです。</p>
	<p>Controller value<br>'message' = {{$message}}</p>
	<p>ViewComposer value<br>'view_message' = {{$view_message}}</p>
<!--
	<p>必要なだけ記述できます。</p>

	@component('components.message')
		@slot('msg_title')
		CAUTION!2
		@endslot

		@slot('msg_content')
		これはメッセージの表示です。2
		@endslot
	@endcomponent

	@include('components.message',['msg_title'=>'OK','msg_content'=>'サブビューです。'])
-->
@endsection

@section('footer')
	copyright 2017 tuyano.
@endsection

