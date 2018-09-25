@extends('layout.app')

{!! Form::open(['url' => 'contact/submit']) !!}
    <div class="form-group">
		{{Form::label('name', 'Name')}}
		{{Form::text('username')}}
    </div>
    
    	@if (count($errors) > 0)
			
				@foreach ($errors->all() as $error)
				<div class="alert alert-danger">
					{{$error}}
				</div>		
				@endforeach
			
    	@endif
    
    {{Form::submit('Click Me!')}}
{!! Form::close() !!}

<div class="container">
	@foreach($messages as $message)
		<ul>
			<li>
				{{$message->username}}
			</li>
		</ul>
	@endforeach
</div>


