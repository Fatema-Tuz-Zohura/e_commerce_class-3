
@include('partials._doctile')

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('css')
  </head>
  <body>
   
 @include('partials._about-project')


@include('partials._navbar')


<main role="main">

@includeWhen($hero, 'partials._hero')

  <div class="album py-5 bg-light">
    <div class="container">

     @yield('content') 
        
    </div>
  </div>

</main>
@include('partials._footer')

<script src="{{ asset('js/jquery.min.js')}}"></script>
<script src="{{ asset('js/bootstrap.min.js')}}"></script> 
@yield('js')    

     </body>
</html>
