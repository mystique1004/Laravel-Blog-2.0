
@extends('main')
@section('title', '| Lady Home')
@section('content')
        <div class = "row">
        <div class="col-md-12">
        <div class="jumbotron" style="background-color:#fffcdc">
            <h1>Hello, world!</h1>
            <p class = "lead"> Watch the anime Hello World!</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Watch Now!</a></p>
            </div>
        </div>
        </div> <!-- End of Row -->
        <div class="row">
        <div class="col-md-8" style="background-color:#edf4ed";>

@foreach($posts as $post)

            <div class = "post">
            <h3>{{ $post->title }}</h3>
            <p>{{ substr($post->body, 0, 200) }} {{ strlen($post->body) > 200 ? "..." : ""}}</P>
            <a href="#" class="btn btn-primary">Read More</a>
            </div>
            
        <hr>

        @endforeach
      
        </div>
        <div class="col-md-3 col-md-offset-1" style="background-color:#dadad7;">
        <h2>Sidebar</h2>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe corporis minima repellendus, dolorem eos nam quibusdam mollitia voluptatibus beatae. Minima quia facere enim, iste ut explicabo sit? Iusto, quas est.
        
        </div>
        </div>
        @endsection