<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Scopes\ScopePerson;

class Person extends Model
{
	public function getData()
	{
		return $this->id . ': ' . $this->name . ' (' . $this->age . ')';
	}

	public function scopeNameEqual($query, $str)
	{
		return $query->where('name', $str);
	}

	public function scopeAgeGreaterThan($query, $n)
	{
		return $query->where('age', '>=', $n);
	}

	public function scopeAgeLessThan($query, $n)
	{
		return $query->where('age', '<=', $n);
	}

// List6-15 グローバルスコープを作成する
//	protected static function boot()
//	{
//		parent::boot();
//
//		static::addGlobalScope('age', function (Builder $builder){
//			$builder->where('age', '>', 20);
//		});
//	}

//	List6-17 Personモデルクラスの修正
//	protected static function boot()
//	{
//		parent::boot();
//		static::addGlobalScope(new ScopePerson);
//	}

//	List6-18 モデルを修正する
	protected $guarded = array('id');

	public static $rules = array(
		'name' => 'required',
		'mail' => 'email',
		'age'  => 'integer|min:0|max:150'
	);

//List6-35 Personモデルの修正
	public function board()
	{
		return $this->hasOne('App\Board');
	}


}
