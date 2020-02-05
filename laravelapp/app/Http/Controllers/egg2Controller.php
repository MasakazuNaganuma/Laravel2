<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class egg2Controller extends Controller
{
	public function index()
	{
		return view('egg2.index', ['msg'=>'']);
	}

	public function post(Request $request)
	{
		return view('egg2.index', ['msg'=>$request->msg]);

	}
}
