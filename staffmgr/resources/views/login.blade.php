@extends('master')
@section('header')<h2>Please Log In</h2>@stop
@section('content')
<div class="form-group">
<form action={{route('login')}} method="post">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
  Username: <input type="text" name="name"><br>
  Password: <input type="password" name="password"><br>
  <input type="submit" value="Login">
</form>
</div>
</div>
@stop