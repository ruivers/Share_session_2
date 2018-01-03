@extends('layouts.default')
@section('content')
    <form action="{{ asset('/check-login') }}">
        {{ csrf_field() }}
        <p><span>用户名:</span><input type="text" name="username"></p>
        <p><span>密&nbsp;&nbsp;&nbsp;码:</span><input type="password" name="pwd"></p>
        <input type="submit" id="bt" value="提交" />
    </form>
@stop