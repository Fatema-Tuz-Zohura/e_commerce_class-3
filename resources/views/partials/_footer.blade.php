<footer class="text-muted">
  <div class="container">
    <p class="float-right">
      <a href="#">Back to top</a>
    </p>
 
    <p>New to our website?Go to login page to <a href="{{ route('login') }}">login</a> or sign up page to <a href="{{ route('register') }}">Sign in</a>.</p>

    <p>Copyright &copy; {{ config('app.name') }}. {{ date('Y') }}</p>
  </div>
</footer>