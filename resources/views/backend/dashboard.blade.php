@extends('backend')

@section('content')


<div class="container">


	<div class="alert alert-info">

	you have been logged in as  {{auth()->user()->email}}
	

</div>
	



        </div>


@stop