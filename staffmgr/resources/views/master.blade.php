<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Tasker</title>
<link rel="stylesheet" href="{{'css/bootstrap.min.css'}}">
</head>
	<body>
		<div class="container">
			<div class="page-header">
				<div class="text-left">
				<a href={{route('/')}}>Tasker</a>
				</div>
				<div class="text-right">
					@if(Auth::check())
					Logged in as
					<strong>{{{Auth::user()->name}}}</strong> [
					<strong>{{{App\department::find(Auth::user()->deptID)->name}}}
					</strong>Department]
					<a href={{route('logout')}}>Log Out</a>
					@else
					<a href={{route('login')}}>Log In</a>
					@endif
				</div>
					@yield('header')
			</div>
					@if(Session::has('message'))
				<div class="alert alert-success">
					{{Session::get('message')}}
				</div>
					@endif
					@if(Session::has('error'))
				<div class="alert alert-warning">
				{{Session::get('error')}}
				</div>
			@endif
			@yield('content')
		</div>
	</body>
</html>