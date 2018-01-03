@extends('layouts.default')
@section('content')
    登录成功!<br />
    {{ $id }}<br />
    session-value :   {{ session('name') }}
@stop