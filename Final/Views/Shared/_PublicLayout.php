<!DOCTYPE html>
<html>
  <head>
    <title>My Website - <?=@$title?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" />
    <style type="text/css" media="screen">
        .navbar-nav>li>a.compact {
                padding-top: 5px;
                padding-bottom: 5px;
        }
        .navbar-form{
                max-width: 500px;
        }
    </style>
  </head>
  <body>
          <header>
                  <div class="container">
                          <h1>Clothing Store</h1>
                  </div>
          </header>
          
   <div class="container">
            <div class="navbar navbar-default" role="navigation">
                           <div class="navbar-header">
                                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".nav-c">
                                    <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                              <a class="navbar-brand" href="#">Home</a>
                        </div>
                
                        <div class="collapse navbar-collapse nav-c">
                    <ul class="nav navbar-nav">
                                        <li class="dropdown">
                                                <a href="#" class="dropdown-toggle compact" data-toggle="dropdown">
                                                        <small>Shop by<br /></small>
                                                        Department <b class="caret"></b>
                                                </a>
                                        <ul class="dropdown-menu">
                                       <!-- <li><a href="../Home">Other Home</a></li> -->
                                          <li><a href="../Keywords/">Keywords</a></li>
                                          <li><a href="../Users/">Users</a></li>
                                          <li><a href="../Categories/">Categories</a></li>
                                          <li><a href="../Product/">Products</a></li>
                                          <li><a href="../Supliers/">Supliers</a></li>
                                        </ul>
                                        </li>
                                                <form class="navbar-form navbar-left" role="search">
                                                      <div class="input-group">
                                                        <input type="text" id="search_input" class="form-control" placeholder="Search">
                                                       
                                                        <span class="input-group-btn">
                                                                <button type="submit" class="btn btn-default">Search</button>
                                                        </span>
                                                </div>
                                            </form>
                                        <li class="dropdown">
                                                <a href="#" class="dropdown-toggle compact" data-toggle="dropdown">
                                                        <small>Gerson Lobos<br /></small>
                                                        Your Account <b class="caret"></b>
                                                </a>
                                        <ul class="dropdown-menu">
                                          <li><a href="#">Sign In</a></li>
                                        </ul>
                                        </li>
                                <p class="navbar-text pull-right" id="shopping-cart">
                                        <a href="#" class="navbar-link">Cart</a>
                                </p>
                        </div>
                </div>
        </div>

        <? include $view; ?>




    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
     <script>
		 jQuery(document).ready(function($){
			$('#search_input').autocomplete({source:'../../Models/ProductSuggest.php'});
		 });
 </script>
    <? if(function_exists('Scripts')) Scripts(); ?>
 </body>
</html>
