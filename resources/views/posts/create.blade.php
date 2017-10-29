@extends('layouts.master')

@section('content')

<div class="col-sm-8 blog-main">

<h1> create a post </h1>

 
<hr>

<form method="POST" action="/posts">

        {{ csrf_field() }}

  <div class="form-group">
    <label for="title">Game Title</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>

  <div class="form-group">
    <label for="body">Discription</label>
   <textarea id="body" name="body" class="form-control"></textarea>
  </div>

  <div class="form-group">
    <label for="category">Category</label>
    <select id="category" name="category" class="form-control">
  <option value="FPS">FPS</option>
  <option value="Action">Action</option>
  <option value="Singleplayer">Singleplayer</option>
  <option value="MMO">MMO</option>
</select>
  
  </div>


  <button type="submit" class="btn btn-primary">publish</button>

  

   @include('layouts.errors')

</form>



</div>

@endsection