<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class eggController extends Controller
{
    //
	//public function index($id='zero', Request $request)
	public function index()
	{
		$data = [

			'msg'=>'お名前を入れてください。'

		];
		return view('egg.index', $data);
	}

	public function post(Request $request)
	{
		$msg = $request->msg;
		$data = [
			'msg'=>'こんにちは、' . $msg . 'さん！',
		];
		return view('egg.index', $data);

	}
}
