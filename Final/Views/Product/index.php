<?php
include_once '../../inc/_global.php';

@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];

switch ($action) {
        case 'details':
                $model  = Product::Get($_REQUEST['id']);
                $view   = 'details.php';   
				$title  = "Details for:  $model[Name]"  ;               
                break;
                
        case 'new':
				$model = Product::Blank();//this blanck fuction avoids the error of trying to
										//put stuff into the text box.
                $view  = 'edit.php';
				$title  = "Create New Product"  ;                
                break;
        
        case 'save':
				//$_REQUEST['photo'] = $_FILES['photo'];
                $errors = Product::Validate($_REQUEST);
                if(!$errors){
                        $errors = Product::Save($_REQUEST);                        
                }
                if(!$errors){
                        header("Location: ?");
                        die();
                }                        
                        $model = $_REQUEST;
                        $view = 'edit.php';
						$title  = "Edit: $model[Name]"  ;
                break;
                
        case 'edit':
                $model  = Product::Get($_REQUEST['id']);
                $view  = 'edit.php';   
                $title  = "Edit:  $model[Name]"  ;              
                break;
                
        case 'delete':
			if(isset($_POST['id'])){
				$errors = Product::Delete($_REQUEST['id']);
				if(!$errors){
        			 header("Location: ?");
       				 die();
       			}              
    		 }
      		$model  = Product::Get($_REQUEST['id']);
    		$view   = 'details.php';    
    		$view   = 'delete.php';          
    		$title  = "Edit:  $model[product_name]"  ;     
                break;
        
        default:
                $model  = Product::Get();
                $view  = 'list.php';    
				$title  = 'Products';            
                break;
}

switch ($format) {
	
		case 'dialog':
                include '../Shared/_DialogLayout.php';
                break;
        
        case 'min':
                include $view;
                break;
        
        default:
                include '../Shared/_Layout.php';
                
                break;
}

