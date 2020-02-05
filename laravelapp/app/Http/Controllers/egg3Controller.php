<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class egg3Controller extends Controller
{
	public function index()
	{
		return view('egg3.index');
	}

	public function post(Request $request)
	{
		return view('egg3.index', ['msg'=>$request->msg]);

	}
}
