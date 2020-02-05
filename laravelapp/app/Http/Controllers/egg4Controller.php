<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class egg4Controller extends Controller
{
	public function index()
	{
		$data = ['one', 'two', 'three', 'four', 'five'];
		return view('egg4.index',['data'=>$data]);
	}

	public function post(Request $request)
	{
		return view('egg4.index', ['msg'=>$request->msg]);

	}
}
