<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class egg5Controller extends Controller
{
	public function index()
	{
		$data = ['one', 'two', 'three', 'four', 'five'];
		return view('egg5.index',['data'=>$data]);
	}

	public function post(Request $request)
	{
		return view('egg5.index', ['msg'=>$request->msg]);

	}
}
