@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
	@parent
	インデックスページ
@endsection

@section('content')
	<p>ここが本文のコンテンツです。</p>
	<p>これは、<middleware3>google.com</middleware3>へのリンクです。</p>
	<p>これは、<middleware3>yahoo.co.jp</middleware3>へのリンクです。</p>
@endsection

@section('footer')
	copyright 2017 tuyano.
@endsection

