@extends('layout')

@section('content')

	<div class="container" id="main">

	<h2 class="title">Add New Time Entry</h2>
	@if(!$errors->isEmpty())
		<div class="alert alert-danger">
			<strong>Error:</strong>
			@if($errors->count() == 1)
				{{{ $errors->first() }}}
			@else
				<ul>
					@foreach($errors->getMessages() as $msg)
						<li>{{{ $msg[0] }}}</li>
					@endforeach
				</ul>
			@endif
		</div>
	@endif

	@if(!isset($editThis))
		{{ Form::open(array('url' => 'log/save', 'method' => 'post', 'role' => 'form', 'class' => 'form-horizontal', 'style' => 'max-width:500px')) }}
	@else
		{{ Form::model($editThis, array('url' => 'log/save/'.$editThis->LID, 'method' => 'post', 'role' => 'form', 'class' => 'form-horizontal', 'style' => 'max-width:500px')) }}
	@endif
	  <div class="form-group">
		{{ Form::label('entryname', 'What will you be recording?', array('class' => 'col-sm-4 control-label')) }}
		<div class="col-sm-8">
			{{ Form::text('entryname', 'Not Used Yet', array('class' => 'form-control', 'placeholder' => 'Name')) }}
		</div>
	  </div>
	  <div class="form-group">
		{{ Form::label('startDateTime', 'Start', array('class' => 'col-sm-4 control-label')) }}
		<div class="col-sm-8">
			{{ Form::text('startDateTime', null, array('class' => 'form-control', 'placeholder' => 'yyyy-mm-dd hh:mm')) }}
		</div>
	  </div>
	  <div class="form-group">
		{{ Form::label('endDateTime', 'End', array('class' => 'col-sm-4 control-label')) }}
		<div class="col-sm-8">
			{{ Form::text('endDateTime', null, array('class' => 'form-control', 'placeholder' => 'yyyy-mm-dd hh:mm')) }}
		</div>
	  </div>
	  <div class="form-group">
		{{ Form::label('category', 'Category', array('class' => 'col-sm-4 control-label')) }}
		<div class="col-sm-8">
			{{ Form::text('category', null, array('class' => 'form-control')) }}
		</div>
	  </div>
	  <div class="form-group">
		{{ Form::label('notes', 'Notes', array('class' => 'col-sm-4 control-label')) }}
		<div class="col-sm-8">
			{{ Form::textarea('notes', null, array('class' => 'form-control')) }}
		</div>
	  </div>
	  <div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			{{ Form::submit('Submit', array('class' => 'btn btn-default')) }}
		</div>
	</div>
	{{ Form::close() }}
	
	</div>
	
@stop