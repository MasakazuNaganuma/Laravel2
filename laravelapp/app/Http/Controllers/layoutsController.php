<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class layoutsController extends Controller
{
	public function index()
	{
		return view('layouts.index');
	}

	public function index2()
	{
		return view('layouts.index2');
	}

	public function index3()
	{
		return view('layouts.index3');
	}

	public function index4()
	{
		$data = [
			['name'=>'山田たろう', 'mail'=>'taro@yamada'],
			['name'=>'田中はなこ', 'mail'=>'hanako@flower'],
			['name'=>'鈴木さちこ', 'mail'=>'sachiko@happy'],
		];
		return view('layouts.index4', ['data'=>$data]);
	}

	public function index5()
	{
		return view('layouts.index5', ['message'=>'Hello!']);
	}

	public function index6()
	{
		return view('layouts.index6', ['message'=>'Hello!']);
	}

	public function index7(Request $request)
	{
		return view('layouts.index7', ['data'=>$request->data]);
	}

	public function index8(Request $request)
	{
		return view('layouts.index8');
	}

	public function index9(Request $request)
	{
		return view('layouts.index9');
	}

	public function index10(Request $request)
	{
		return view('layouts.index10');
	}

}
