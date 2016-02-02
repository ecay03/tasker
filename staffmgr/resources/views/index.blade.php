@extends('master')
@section('header')
	Welcome to Tasker - Your Chosen Staff Management Tool
@stop

@section('content')
	<!-- If he/she is signed in, display the tasklist, 
	if not, display login form. -->
	@if(Auth::check() && Auth::user()->is_admin)

	Tasks Defined:
	<?php 

	$tasks = DB::table('tasks')->get();
	
	?>

		<table>
		  <thead>
		    <tr>
		      <th><?php ?></th>
		    </tr>
		  </thead>
		  <tbody>
		<?php foreach ($tasks as $row => $data){?>
		    <tr>
		      <td>
		      <?php	echo $data->details  ; ?>
		       </td>
		       <td><a href="{{route('/'.$data->id.'/edit')}}">
		       		<?php echo 'Edit';?></a>
		       </td>	
		       <td>
		       		<?php echo 'Delete';}?>
		       </td>
		    </tr>
		  </tbody>
		</table>

	@elseif(Auth::check())
	<!-- show tasks of the department -->
	<!-- select * tasks from department where departmentID = department -->
	Your Tasks Are:
	<?php 
	$deptID = Auth::user()->deptID;

	$tasks = DB::table('tasks')->where('deptID', '=', $deptID)->get();
	
	?>

		<table>
		  <thead>
		    <tr>
		      <th><?php //echo implode('</th><th>', array_keys($tasks)); ?></th>
		    </tr>
		  </thead>
		  <tbody>
		<?php foreach ($tasks as $row => $data){?>
		    <tr>
		      <td><?php // echo implode('</th><th>', $tasks);
		       	echo $data->details  ; }?>
		       </td>
		    </tr>
		  </tbody>
		</table>
	@else
		Please Log In to view tasks.
	@endif
@stop