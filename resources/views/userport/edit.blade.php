@extends('layouts.userport')

@section('title','Page Title')

@section('sidebar')
    @parent
    <p>追加的侧边栏</p>

@endsection

@section('content')
    <p>主体内容</p>
    @markdown('# Foo')
@endsection