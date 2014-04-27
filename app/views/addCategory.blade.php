@extends('layout')

@section('header')
<link href="{{ URL::asset('css/addCategory.css') }}" rel="stylesheet"/>
<link href="{{ URL::asset('css/spectrum.css') }}" rel="stylesheet"/>
<script src="{{ URL::asset('js/spectrum.js') }}"></script>
<script src="{{ URL::asset('js/moment.min.js') }}"></script>
<link href="{{ URL::asset('css/spectrum.css') }}" rel="stylesheet"/>

@stop

@section('content')
	<div class="container" id="main">
	<h2 class="title">Add A New Category</h2>
	@if(!$errors->isEmpty())
		<div class="alert alert-danger">
			<strong>Error:</strong>
			@if($errors->count() == 1)
				{{ $errors->first() }}
			@else
				<ul>
					@foreach($errors->getMessages() as $msg)
						<li>{{ $msg[0] }}</li>
					@endforeach
				</ul>
			@endif
		</div>
	@endif

		{{ Form::open(array('url' => 'log/saveCat', 'method' => 'post', 'role' => 'form', 'class' => 'form-horizontal', 'style' => 'max-width:500px')) }}

	<div class="form-group">
		{{ Form::label('categoryName', 'What Category is this?', array('class' => 'col-sm-4 control-label')) }}
		<div class="col-sm-8">
			<div class="input-group">
				{{ Form::text('categoryName', '', array('id' => 'newcat', 'class' => 'form-control', 'placeholder' => 'New Category Name')) }}

				<span class="input-group-btn">
					<button id="colorPicker" class="btn btn-default" type="button"><span id="colorPickerIcon" class="fa fa-tint"></span></button>
				</span>
				{{ Form::hidden('color', '', array('id' => 'color', 'class' => 'form-control', 'placeholder' => '#CCCCCC')) }}
			</div>
		</div>
	</div>

	<div class="form-group">
		{{ Form::label('superCategory', 'Parent Category', array('class' => 'col-sm-4 control-label')) }}
		<div class="col-sm-8">
			{{Form::select('superCategory', array('0' => ''), 'NULL', array('id' => 'superCategory', 'class' => 'form-control'));}}
	    </div>
	</div>

	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			{{ Form::submit('Submit', array('class' => 'btn btn-default')) }}
		</div>
	</div>
	{{ Form::close() }}
	
	</div>

	<script>
	$(function(){
		
		$("#colorPicker").spectrum({
		    color: getRandomColor(),
		    change: function(color) {
					console.log(color.toHex()); // #ff0000
					$("#color").val(color.toHex());
			}
		});

		var i = 0;
		var currDate = new Date();
		
		$("input[id$=DateTime]").each(function(k, v){

			var mins = currDate.getMinutes();
			var addMins = mins + (i++) * 15;
			currDate.setMinutes(addMins);
			$(v).val(moment(currDate).format('YYYY-MM-DD HH:mm'));

		});

		var $cats = $("#superCategory");

		$.getJSON("/api/log/categories", function(data){
			console.log(data);
			$.each(data, function(k, v){
				$cats.append(new Option(v.name, v.cid));
			});
			
		});

		function getRandomColor(){
			return "#"+((Math.random() * (0xffffff)) << 0).toString(16);
		}

	});
	</script>

@stop