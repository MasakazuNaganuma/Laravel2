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
}
