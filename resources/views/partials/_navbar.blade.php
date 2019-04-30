<nav class="site-header sticky-top py-1">
  <div class="container d-flex flex-column flex-md-row justify-content-between">

    <a class="py-2" href="#">

    	@include('partials._svg')

   

	</a>

		@foreach($categories as $cat)

<a class="py-2 d-none d-md-inline-block" href="{{ route('category.products', $cat->slug) }}">
	
			{{ $cat->name }}


</a>
		@endforeach


    
    <a class="py-2 d-none d-md-inline-block" href="#">Cart</a>
    <a class="py-2 d-none d-md-inline-block" href="#">Checkout</a>
    <a class="py-2 d-none d-md-inline-block" href="{{ route('login') }}">Login</a>
    <a class="py-2 d-none d-md-inline-block" href="{{ route('register') }}">Register</a>
    
</nav>