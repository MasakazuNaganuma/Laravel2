@extends('layouts.helloapp')

@section('title', 'Board.index2')

@section('menubar')
    @parent
    ボード・ページ2
@endsection

@section('content')
    <table>
    <tr><th>Message</th><th>Name</th></tr>
    @foreach ($items as $item)
        <tr>
            <td>{{$item->message}}</td>
            <td>{{$item->person->name}}</td>
        </tr>
    @endforeach
    </table>
@endsection

@section('footer')
copyright 2017 tuyano.
@endsection
