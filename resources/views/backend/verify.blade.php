@extends('backend')

@section('content')

@if(session('resent'))


<div class="jumbotron">
	



<div class="alert alert-success" role="alert">

	{{__('A freash verification link has been sent to your email address.')  }}
	
	
</div>

@endif

{{__('Before processing, please check your email address for a verification link.')  }}

{{__('If you did not receive the email.')  }},<a href="{{ route('verification.resend') }}">{{ __('click here for request the link')}}</a>

</div>
@stop