@layout('master')

@section('content')
	<h1>sorrytodisapointyou.com</h1>
	
	<section id="post-quote">
	{{ Form::open('/') }}
		{{ Form::label('name', 'Sorry to disapoint you')}}
		{{ Form::text('name') }}
		{{ Form::label('device', 'but your')}}
		{{ Form::text('device') }}
		{{ Form::label('disarmed', 'has been')}}
		{{ Form::text('disarmed') }}
		{{ Form::submit('Skicka')}}
	{{ Form::close() }}
	{{ $errors->has() ? '<div class="errors">Sorry to disapoint you, but the form is invalid.</div>' : '' }}
	</section>
	
	<section id="latest-quotes">
		<ul>
		@foreach ($quotes as $quote)
			<li>Sorry to disapoint you {{ $quote->name }} but your {{ $quote->device }} has been {{ $quote->disarmed }}</li>
		@endforeach
		</ul>
	</section>

@endsection