@extends('frontend')

@section('content')


<div class="jumbotron bg-success my-4">
<div class="row">

  <div class="col-md-6">
    
  

	
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




  <form action="{{ route('login') }}" method="post">

          @csrf

  


          <div class="form-group">
            <label for="email">Email</label>
              <input name="email" type="text" class="form-control" id="email" placeholder="Enter your email"value="{{ old('email') }}">
                </div>


              <div class="form-group">
                <label for="password">Password</label>
                  <input name="password" type="text" class="form-control" id="password" placeholder="Enter your password">
                      </div>


            <button type="submit" class="btn btn-primary">login</button>

          </form>
 
     </div>
 
  </div>
</div>
  

          <a class="btn btn-link" href="{{ route('password.request') }}">

            {{__('Forgot Your Password?')}}
            
          </a>

          </div>


   
@stop