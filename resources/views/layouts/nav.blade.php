<div class="blog-masthead">
<div class="container">
  <nav class="nav">
    <a class="nav-link active" href="/">Home</a>
    <a class="nav-link" href="/register">register</a>
    @if (!Auth::check())
    <a class="nav-link ml-auto" href="/login">Login</a>
    
    @endif


    @if (Auth::check())
      <a class="nav-link" href="posts/create">Create</a>
      <a class="nav-link ml-auto" href="#">{{Auth::user()->name}}</a>
      <a class="nav-link ml-auto" href="/logout">logout</a>

    @endif

    
  </nav>
</div>
</div>