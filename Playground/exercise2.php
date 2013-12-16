
<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap 101 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" />
    <style type="text/css">
    	body { padding-top: 70px; }
    </style>
  </head>
  <body>
   		<div class="container">
   			  	    <div class="navbar navbar-default" role="navigation">

   			<div class="navbar-header">
				<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
			    	<span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			    </button>
		      	<a class="navbar-brand" href="exercise2.php">Playground</a>
			</div>
		
			<div class="collapse navbar-collapse bs-navbar-collapse">
	            <ul class="nav navbar-nav">
	              <li class="home"><a href="exercise1.php">Home</a></li>
	              <li class="contact"><a href="contact.php">Contact</a></li>
	              <li class="links"><a href="links.php">Links</a></li>
					<li class="dropdown">
				        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
				        <ul class="dropdown-menu">
				          <li><a href="#">Action</a></li>
				          <li><a href="#">Another action</a></li>
				          <li><a href="#">Something else here</a></li>
				          <li><a href="#">Separated link</a></li>
				          <li><a href="#">One more separated link</a></li>
				        </ul>
				      </li>
      			</ul>
				<form class="navbar-form pull-right">
              <input class="span2" type="text" placeholder="Email">
              <input class="span2" type="password" placeholder="Password">
              <button type="submit" class="btn">Sign in</button>
            </form>
			</div>
		</div>
	</div>
	
	
		  	<div class="container">
  		<div class="well">
		    <h1>Hello world!</h1>
		    <a href="https://www.facebook.com/gerson.lobos" class="btn btn-lg btn-success"> Gerson Lobos</a>
		    <p> Web Programing</p>
  			
  		</div>
  		
  		
  		
  		
  		
      	</div>
      
   	</div>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript"> 
    	$(function(){
    		$(".links").addClass("active");
    	})
    </script>
  </body>
</html>