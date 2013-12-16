
   		<?
   		$pages = array(
   		
   		array(
		'url' => 'index.php',
		'section' => 'home',
		'title' => 'Home'
		),
		array(
		'url' => 'links.php' ,
		'section' => 'links',
		'title' => 'Links'
		),
		array(
		'url'=>  'contact.php',
		'section' => 'contact',
		'title' => 'Contact Us'
		)
   		
   		 );
   		
   		
   		?>
   		
   			<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
   			<div class="container">

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
	              
	              
	              <? foreach ($pages as $name => $data): ?>
						  
						  <li class= "<?$data['section'] ?> <? if($location == $data['section']) echo "active"?> " >
						  	<a href="<?=$data['url']?>"> <?=$data['title']?> </a>
						  	</li>
					<?  endforeach; ?>
	              
	              
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