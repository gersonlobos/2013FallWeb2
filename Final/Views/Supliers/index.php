<?php
include_once '../../inc/_global.php';

@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];

switch ($action) {
        case 'details':
                $model  = Supliers::Get($_REQUEST['id']);
                $view   = 'details.php';   
				$title  = "Details for: $model[id] $model[name]"  ;               
                break;
                
        case 'new':
				$model = Supliers::Blank();//this blanck fuction avoids the error of trying to
										//put stuff into the text box.
                $view  = 'edit.php';
				$title  = "Create New Supplier"  ;                
                break;
        
        case 'save':
               $errors = Supliers::Validate($_REQUEST);
                if(!$errors){
                        $errors = Supliers::Save($_REQUEST);                        
                }
                if(!$errors){
                if($format == 'plain'){
                                $view = 'item.php';
                                $rs = Supliers::Get($_REQUEST['id']);
                        }else{
                                header("Location: ?status=Saved&id=$_REQUEST[id]");
                                die();                                
                        }
                }else{
                        $model = $_REQUEST;
                        $view = 'edit.php';
                        $title        = "Edit: $model[name]"        ;                        
                }   
                break;
                
        case 'edit':
                $model  = Supliers::Get($_REQUEST['id']);
                $view  = 'edit.php';   
                $title  = "Edit: $model[id] $model[name]"  ;              
                break;
                
        case 'delete':
			if(isset($_POST['id'])){
				$errors = Supliers::Delete($_REQUEST['id']);
				if(!$errors){
        			 header("Location: ?");
       				 die();
       			}              
    		 }
      		$model  = Supliers::Get($_REQUEST['id']);
    		$view   = 'details.php';    
    		$view   = 'delete.php';          
    		$title  = "Edit: $model[id] $model[name]"  ;     
                break;
        
        default:
                $model  = Supliers::Get();
                $view  = 'list.php';    
				$title  = 'Suppliers';            
                break;
}

switch ($format) {
	
		case 'dialog':
                include '../Shared/_DialogLayout.php';
                break;
        
        case 'plain':
                include $view;
                break;
        
        default:
                include '../Shared/_Layout.php';
                
                break;
}

