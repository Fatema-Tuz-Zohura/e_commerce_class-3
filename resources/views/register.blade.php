@extends('frontend')

@section('content')

	
@if($errors->any())

      <div class="alert alert-danger">

	       <ul>
		
              @foreach($errors->all() as $error)

		            <li>{{ $error }}</li>

	       </ul>
              @endforeach

      </div>

@endif


@if(session()->has('massage'))

<div class="alert alert-info">

{{ session('massage') }}

  
</div>


@endif


<div class="row">
  <form action="{{ route('register') }}" method="post">

          @csrf


<div class="form-group">
    <label for="first_name">First Name</label>
      <input name="first_name" type="text" class="form-control" id="first_name" placeholder="Enter your first name" value="{{ old('first_name') }}">
        </div>


      <div class="form-group">
        <label for="last_name">Last Name</label>
          <input name="last_name" type="text" class="form-control" id="last_name" placeholder="Enter your last name"value="{{ old('last_name') }}">
            </div>
  
          <div class="form-group">
            <label for="email">Email</label>
              <input name="email" type="text" class="form-control" id="email" placeholder="Enter your email"value="{{ old('email') }}">
                </div>


              <div class="form-group">
                <label for="password">Password</label>
                  <input name="password" type="text" class="form-control" id="password" placeholder="Enter your password">
                      </div>


            <button type="submit" class="btn btn-primary">register</button>

          </form>
    </div>
@stop