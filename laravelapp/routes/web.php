<?php

use App\Http\Middleware\HelloMiddleware;
use App\Http\Middleware\HelloMiddleware2;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('/', view('welcome'));
*/


Route::get('hello','HelloController@index')->middleware(HelloMiddleware::class);

/*
Route::get('hello',function () {
    return '<html><body><h1>Hello</h1><p>This is sample page.</p></body></html>';
});
*/

$html = <<<EOF
<html>
<head>
<title>Hello2</title>
<style>
body {font-size:16pt; color:#999; }
h1 { font-size:100pt; text-align:right; color:#eee;
	margin:-40px 0px -50px 0px; }
</style>
</head>
<body>
	<h1>Hello2</h1>
	<p>This is sample page2.</p>
	<p>これは、サンプルで作ったページです。</p>
</body>
</html>
EOF;

Route::get('hello2',function () use ($html) {
    return $html;
});

Route::get('hello3/{msg}',function ($msg) {

$html = <<<EOF
<html>
<head>
<title>Hello2</title>
<style>
body {font-size:16pt; color:#999; }
h1 { font-size:100pt; text-align:right; color:#eee;
	margin:-40px 0px -50px 0px; }
</style>
</head>
<body>
	<h1>Hello3</h1>
	<p>{$msg}</p>
	<p>これは、サンプルで作ったページです。</p>
</body>
</html>
EOF;

    return $html;
});


Route::get('hello4/{id?}/{pass?}',function ($id='no id', $pass='no pass') {

$html = <<<EOF
<html>
<head>
<title>Hello2</title>
<style>
body {font-size:16pt; color:#999; }
h1 { font-size:100pt; text-align:right; color:#eee;
	margin:-40px 0px -50px 0px; }
</style>
</head>
<body>
	<h1>Hello4</h1>
	<p>{$id}</p>
	<p>{$pass}</p>
	<p>これは、サンプルで作ったページです。</p>
</body>
</html>
EOF;

    return $html;
});

Route::get('layouts', 'layoutsController@index');
Route::get('layouts2', 'layoutsController@index2');
Route::get('layouts3', 'layoutsController@index3');
Route::get('layouts4', 'layoutsController@index4');
Route::get('layouts5', 'layoutsController@index5');
Route::get('layouts6', 'layoutsController@index6');

Route::get('layouts7', 'layoutsController@index7')->middleware(HelloMiddleware::class);
Route::get('layouts8', 'layoutsController@index8')->middleware(HelloMiddleware2::class);
Route::get('layouts9', 'layoutsController@index9');
Route::get('layouts10', 'layoutsController@index10')->middleware('hello4');
Route::get('layouts11', 'layoutsController@index11');
Route::get('layouts12', 'layoutsController@index12');

Route::get('layouts13', 'layoutsController@index12');

Route::get('layouts14', 'dbController@index');
Route::post('layouts14', 'dbController@post');
Route::get('layouts14/add', 'dbController@add');
Route::post('layouts14/add', 'dbController@create');
Route::get('layouts14/edit', 'dbController@edit');
Route::post('layouts14/edit', 'dbController@update');
Route::get('layouts14/del', 'dbController@del');
Route::post('layouts14/del', 'dbController@remove');
Route::get('layouts14/show', 'dbController@show');
Route::get('layouts14/show2', 'dbController@show2');
Route::get('layouts14/show3', 'dbController@show3');
Route::get('layouts14/show4', 'dbController@show4');
Route::get('layouts14/index2', 'dbController@index2');
Route::get('layouts14/show5', 'dbController@show5');
Route::get('layouts14/add2', 'dbController@add2');
Route::post('layouts14/add2', 'dbController@create2');
Route::get('layouts14/edit2', 'dbController@edit2');
Route::post('layouts14/edit2', 'dbController@update2');

Route::get('person', 'PersonController@index');
Route::get('person2', 'PersonController@index2');
Route::get('person2/find', 'PersonController@find');
Route::post('person2/find', 'PersonController@search');
Route::get('person2/find2', 'PersonController@find2');
Route::post('person2/find2', 'PersonController@search2');
Route::get('person2/find3', 'PersonController@find3');
Route::post('person2/find3', 'PersonController@search3');
Route::get('person2/find4', 'PersonController@find4');
Route::post('person2/find4', 'PersonController@search4');
Route::get('person2/add', 'PersonController@add');
Route::post('person2/add', 'PersonController@create');
Route::get('person2/edit', 'PersonController@edit');
Route::post('person2/edit', 'PersonController@update');
Route::get('person2/del', 'PersonController@delete');
Route::post('person2/del', 'PersonController@remove');


Route::get('egg5', 'egg5Controller@index');
Route::post('egg5', 'egg5Controller@post');

Route::get('egg4', 'egg4Controller@index');
Route::post('egg4', 'egg4Controller@post');

Route::get('egg3', 'egg3Controller@index');
Route::post('egg3', 'egg3Controller@post');

Route::get('egg2', 'egg2Controller@index');
Route::post('egg2', 'egg2Controller@post');

Route::get('egg', 'eggController@index');
Route::post('egg', 'eggController@post');

Route::get('hello5', 'HelloController@index');
Route::get('hello5/{id?}/{pass?}', 'HelloController@index2');

Route::get('hello6', 'Hello2Controller@index');
Route::get('hello6/other', 'Hello2Controller@other');

Route::get('hello7', 'Hello3Controller');

Route::get('hello8', 'Hello4Controller@index');

