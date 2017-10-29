<?php
//require 'vendor/autoload.php';

use Carbon\Carbon;

?>

<div class="blog-post">
            <h2 class="blog-post-title">
            
            <a href="/posts/{{ $post->id}}">
            
            {{ $post->title }}
            
            </a>
            
            </h2>
            <h3> {{ $post->category }}
            </h3>
            <p class="blog-post-meta">

            {{ $post->user->name }} on
            
            {{ $post->created_at->toFormattedDateString() }}
            
            </p>

           {{ $post->body }}
           
           
           
           
           
           
           
           
                 </div><!-- /.blog-post -->


