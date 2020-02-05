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
}
