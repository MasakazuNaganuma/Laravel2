<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    //

	public function index(Request $request)
	{
		return view('hello.index',['data'=>$request->data]);
	}

/*
	public function index() {
		return <<<EOF
<html>
<head>
<title>Hello/Index</title>
<style>
body {font-size:16pt; color:#999; }
h1 { font-size:100pt; text-align:right; color:#eee;
	margin:-40px 0px -50px 0px; }
</style>
</head>
<body>
	<h1>Index</h1>
	<p>これは、Helloコントローラのindexアクションです。</p>
</body>
</html>
EOF;
	}
*/

	public function index2($id='noname', $pass='unknown') {
	
		return <<<EOF
<html>
<head>
<title>Hello/Index</title>
<style>
body {font-size:16pt; color:#999; }
h1 { font-size:100pt; text-align:right; color:#eee;
	margin:-40px 0px -50px 0px; }
</style>
</head>
<body>
	<h1>Index</h1>
	<p>これは、Helloコントローラのindexアクションです。</p>
	<ul>
		<li>ID: {$id}</li>
		<li>PASS: {$pass}</li>
	</ul>
</body>
</html>
EOF;
	}

	public function rest(Request $request)
	{
		return view('hello.rest');
	}

}
