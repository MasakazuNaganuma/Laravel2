<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    //

	public function index(Request $request)
	{
		$items = DB::table('people')->simplePaginate(5);
		return view('hello.index',['items'=> $items]);
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

	public function ses_get(Request $request)
	{
		$sesdata = $request->session()->get('msg');
		return view('hello.session', ['session_data' => $sesdata]);
	}

	public function ses_put(Request $request)
	{
		$msg = $request->input;
		$request->session()->put('msg', $msg);
		return redirect('hello/session');
	}
	

}
