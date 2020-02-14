<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class dbController extends Controller
{
	public function index(Request $request)
	{
		$items = DB::select('select * from people');
		return view('layouts.index12', ['items'=> $items]);
	}

	public function post(Request $request)
	{
		$items = DB::select('select * from people');
		return view('layouts.index12', ['items'=>$items]);
	}

	public function add(Request $request)
	{
		return view('layouts.add');
	}

	public function create(Request $request)
	{
		$param = [
			'name' => $request->name,
			'mail' => $request->mail,
			'age'  => $request->age,
		];
		DB::insert('insert into people (name, mail, age) values (:name, :mail, :age)', $param);
		return redirect('/layouts14');
	}
	
	public function edit(Request $request)
	{
		$param = ['id' => $request->id];
		$item = DB::select('select * from people where id = :id', $param);
		return view('layouts.edit', ['form' => $item[0]]);
	}

	public function update(Request $request)
	{
		$param = [
			'id' => $request->id,
			'name' => $request->name,
			'mail' => $request->mail,
			'age' => $request->age,
		];
		DB::update('update people set name = :name, mail = :mail, age = :age where id = :id', $param);
		return redirect('/layouts14');
	}
}
