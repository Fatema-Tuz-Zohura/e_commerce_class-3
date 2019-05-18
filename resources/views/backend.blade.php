@include('partials._doctile')

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{ asset('css/dashboard.css')}}" rel="stylesheet">
@yield('css')

  </head>
  <body>
   
   @include('backend.partials._navbar')

<div class="container-fluid">
  <div class="row">

    @include('backend.partials._sidebar')
    


    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
         @yield('content')

    </main>
  </div>
</div>

      


<script src="{{ asset('js/jquery.min.js')}}"></script>

<script src="{{ asset('js/bootstrap.min.js')}}"></script>

<script src="{{ asset('js/feather.min.js')}}"></script>

<script src="{{ asset('js/backend.min.js')}}"></script>
        
 @yield('js')     
</html>
