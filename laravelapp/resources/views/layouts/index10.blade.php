@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
	@parent
	インデックスページ
@endsection

@section('content')
	<p>ここが本文のコンテンツです。</p>
	<p>これは、<middleware3>google.com</middleware3>へのリンクです。</p>
	<p>これは、<middleware4>yahoo.co.jp</middleware4>へのリンクです。</p>
	<p>これは、<middleware5>shiny-tokyo.com</middleware5>へのリンクです。</p>
@endsection

@section('footer')
	copyright 2017 tuyano.
@endsection

