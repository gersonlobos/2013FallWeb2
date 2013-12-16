
<?php
include_once '../../inc/_global.php';

@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];

switch ($action) {
        case 'details':
                $model  = Categories::Get($_REQUEST['id']);
                $view         = 'details.php';
                $title        = "Details for: $model[Name]"        ;        
                break;
                
        case 'new':
                $model = Categories::Blank();
                $view         = 'edit.php';                
                $title        = "Create Category"        ;        
                break;
        
        case 'save':
                $errors = Categories::Validate($_REQUEST);
                if(!$errors){
                        $errors = Categories::Save($_REQUEST);                        
                }
                if(!$errors){
                if($format == 'plain'){
                                $view = 'item.php';
                                $rs = Categories::Get($_REQUEST['id']);
                        }else{
                                header("Location: ?status=Saved&id=$_REQUEST[id]");
                                die();                                
                        }
                }else{
                        $model = $_REQUEST;
                        $view = 'edit.php';
                        $title        = "Edit: $model[Name] "        ;                        
                }        ;        
                break;
                
        case 'edit':
                $model  = Categories::Get($_REQUEST['id']);
                $view         = 'edit.php';                
                $title        = "Edit:  $model[Name]"        ;        
                break;
                
        case 'delete':
                if(isset($_POST['id'])){
                        $errors = Categories::Delete($_REQUEST['id']);                        
                        if(!$errors){
                                header("Location: ?");
                                die();
                        }                                                        
                }
                $model  = Categories::Get($_REQUEST['id']);
                $view         = 'delete.php';                                        
                $title        = "Edit:  $model[Name]"        ;        
                break;
        
        default:
                $model  = Categories::Get();
                $view         = 'list.php';
                $title        = 'Categories';                
                break;
}

switch ($format) {
        case 'dialog':
                include '../Shared/_DialogLayout.php';                                
                break;
        
        default:
                include '../Shared/_Layout.php';                
                break;
}