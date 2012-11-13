@layout('master')

@section('content')
	<h1>Helloooooo</h1>
	{{ Form::open('/') }}
		{{ Form::label('name', 'Sorry to disapoint you')}}
		{{ Form::text('name') }}
		{{ Form::label('device', 'but your')}}
		{{ Form::text('device') }}
		{{ Form::label('disarmed', 'has been')}}
		{{ Form::text('disarmed') }}
		{{ Form::submit('Skicka')}}
	{{ Form::close() }}
@endsection