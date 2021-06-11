<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>CRUD MVC</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="\css\stil.css">
   </head>
   <body>
   <div class="header">
    <h1>WorkOrder CMS</h1>
  </div>
    <div class="sidebar">
        <a class="active" href="./">Home</a>
		<a href="{{ route('manager.index')}}">Manager</a>
	  <a href="{{ route('location.index')}}">Location</a>
	    <a href="{{ route('users.index')}}">Users</a>
	  
     </div>  
     
      <div class="container">
         @yield('content')
      </div>

      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" type="text/js"></script>
   </body>
</html>