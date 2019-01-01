<!doctype html>
<html>
 <head>
 	<meta charset="utf-8">
 	<title>pradeep</title>
 	<link rel="stylesheet" href="/css/app.css">
 </head>
  <body>
  	@include('inc.navbar')
      
  	<div class="container>"


  	<div class="row">
            @if(Request::is('home'))
      @include('inc.showcase')
      @endif
      

  		<div class="col-md-8 col-lg-8">
        @include('inc.messages')
  			 @yield('content')

  		</div>
  		<div class="col-md-4 col-lg-4">
  			 @include('inc.sidebar')
  		</div>
  	</div>
  </div>
  <center>
       <footer id="footer" class="text-center">
      <p>copyright 2018 &copy;pradeep</p>
    </footer>
  </center>
   </body>

</html>
