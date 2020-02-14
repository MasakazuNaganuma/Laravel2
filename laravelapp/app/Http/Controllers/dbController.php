<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class dbController extends Controller
{
	public function index(Request $request)
	{
		$items = DB::table('people')->get();
		return view('layouts.index12', ['items'=> $items]);
	}

	public function index2(Request $request)
	{
		$items = DB::table('people')->orderBy('age', 'asc')->get();
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

	public function add2(Request $request)
	{
		return view('layouts.add2');
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

	public function create2(Request $request)
	{
		$param = [
			'name' => $request->name,
			'mail' => $request->mail,
			'age'  => $request->age,
		];
		DB::table('people')->insert($param);
		return redirect('/layouts14');
	}
		
	public function edit(Request $request)
	{
		$param = ['id' => $request->id];
		$item = DB::select('select * from people where id = :id', $param);
		return view('layouts.edit', ['form' => $item[0]]);
	}
		
	public function edit2(Request $request)
	{
		$param = ['id' => $request->id];
		$item = DB::table('people')
			->where('id', $request->id)->first();
		return view('layouts.edit2', ['form' => $item]);
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

	public function update2(Request $request)
	{
		$param = [
			'name' => $request->name,
			'mail' => $request->mail,
			'age' => $request->age,
		];
		DB::table('people')
			->where('id', $request->id)
			->update($param);
		return redirect('/layouts14');
	}

	public function show(Request $request)
	{
		$id = $request->id;
		$item = DB::table('people')->where('id', $id)->first();

		return view('layouts.show', ['item' => $item]);
	}

	public function show2(Request $request)
	{
		$id = $request->id;
		$items = DB::table('people')->where('id', '<=', $id)->get();

		return view('layouts.show2', ['items' => $items]);
	}

	public function show3(Request $request)
	{
		$name = $request->name;
		$items = DB::table('people')
			->where('name', 'like', '%' . $name . '%')
			->orWhere('mail', 'like', '%' . $name . '%')
			->get();

		return view('layouts.show2', ['items' => $items]);
	}

	public function show4(Request $request)
	{
		$min = $request->min;
		$max = $request->max;
		$items = DB::table('people')
			->whereRaw('age >= ? and age <= ?', [$min, $max])
			->get();

		return view('layouts.show2', ['items' => $items]);
	}

	public function show5(Request $request)
	{
		$page = $request->page;
		$items = DB::table('people')
			->offset($page * 3)
			->limit(3)
			->get();

		return view('layouts.show2', ['items' => $items]);
	}

	public function del(Request $request)
	{
		$param = ['id' => $request->id];
		$item = DB::select('select * from people where id = :id', $param);

		return view('layouts.del', ['form' => $item[0]]);
	}

	public function remove(Request $request)
	{
		$param = ['id' => $request->id];
		DB::delete('delete from people where id = :id', $param);

		return redirect('/layouts14');
	}

	public function del2(Request $request)
	{
		$item = DB::table('people')->where('id', $request-id)->first();

		return view('layouts.del2', ['form' => $item]);
	}

	public function remove2(Request $request)
	{
		DB::table('people')
			->where('id', $request->id)->delete();

		return redirect('/layouts14');
	}

}
