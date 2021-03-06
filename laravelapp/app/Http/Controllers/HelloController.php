<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    //

	public function index(Request $request)
	{
		$user = Auth::user();
		$sort = $request->sort;
		$items = Person::orderBy($sort, 'asc')->simplePaginate(5);
		$param = ['items' => $items, 'sort' => $sort, 'user' => $user];
		return view('hello.index', $param);
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

	public function getAuth(Request $request)
	{
		$param = ['message' => 'ログインして下さい。'];
		return view('hello.auth', $param);
	}

	public function postAuth(Request $request)
	{
		$email = $request->email;
		$password = $request->password;
		if (Auth::attempt(['email' => $email, 
			'password' => $password])) {
			$msg = 'ログインしました。（' . Auth::user()->name . '）';
		} else {
			$msg = 'ログインに失敗しました。';
		}
		return view('hello.auth', ['message' => $msg]);
	}
}
