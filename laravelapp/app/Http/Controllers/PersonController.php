<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
	public function index(Request $request)
	{
		$items = Person::all();
		return view('person.index', ['items' => $items]);
	}

	public function index2(Request $request)
	{
		$items = Person::all();
		return view('person.index2', ['items' => $items]);
	}

	public function find(Request $request)
	{
		return view('person.find', ['input' => '']);
	}

	public function find2(Request $request)
	{
		return view('person.find2', ['input' => '']);
	}

	public function find3(Request $request)
	{
		return view('person.find3', ['input' => '']);
	}

	public function find4(Request $request)
	{
		return view('person.find4', ['input' => '']);
	}

	public function search(Request $request)
	{
		$item = Person::find($request->input);
		$param = ['input' => $request->input, 'item' => $item];
		return view('person.find', $param);
	}

	public function search2(Request $request)
	{
		$item = Person::where('name', $request->input)->first();
		$param = ['input' => $request->input, 'item' => $item];
		return view('person.find2', $param);
	}

	public function search3(Request $request)
	{
		$item = Person::nameEqual($request->input)->first();
		$param = ['input' => $request->input, 'item' => $item];
		return view('person.find3', $param);
	}

	public function search4(Request $request)
	{
		$min = $request->input * 1;
		$max = $min + 10;
		$item = Person::ageGreaterThan($min)->ageLessThan($max)->first();
		$param = ['input' => $request->input, 'item' => $item];
		return view('person.find4', $param);
	}

}
