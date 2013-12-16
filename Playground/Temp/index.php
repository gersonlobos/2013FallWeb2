
<!doctype html>
 
<html lang="en">
<head>
    <meta charset="utf-8" /> 
    <title>jQuery UI Autocomplete</title>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css" />
    
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" />
    
    
    <style type="text/css">
            .top-buffer { margin-top:200px; }
    </style>
    
</head>
<body>
 
<div class="row top-buffer" align="center"> 
	
		<form action="search.php" method="post">
		 <span class="label label-info">Enter city:</span>
		<input type="text" id="citysearch" />
		<input type="submit" class="btn btn-info btn-xs" value="Search" />
		
	</form>
</div>


 <script>
 jQuery(document).ready(function($){
	$('#citysearch').autocomplete({source:'suggestcity.php'});
});
 </script>
 
 
</body>
</html>