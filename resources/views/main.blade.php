<!doctype html>
<html lang="en">

@include('partials._head')
  <body>
@include('partials._nav')

    <div class = "container" >
    @include('partials._messages')
        @yield('content')
<hr>
@include('partials._footer')

       
    </div> <!-- end of div -->

@include('partials._javascript')
  

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>