
<?php

/**
 * 
 */
class Categories {
        
        static public function Get($id=null)
        {
                if(isset($id)){
                        return fetch_one("SELECT * FROM 2013Fall_Product_Categories WHERE id=$id");                        
                }else{
                        return fetch_all('SELECT * FROM 2013Fall_Product_Categories');                        
                }
        }
          static public function Blank()
        {
                return array( 'id'=>null, 'Name'=> null);
        }
		
		static public function Save($row)
        {
                $conn = GetConnection();
                $row2 = Categories::Encode($row, $conn);
                if($row['id']){
                        $sql =        " UPDATE 2013Fall_Product_Categories "
                                .        " Set Name='$row2[Name]' "
                                .        " WHERE id=$row2[id] ";
                }else{
                         $sql =         " Insert Into 2013Fall_Product_Categories (Name) "
                        .        " Values ('$row[Name]') ";                       
                }
                
                $conn->query($sql);
                //echo $sql; 
                $error = $conn->error;                
                $conn->close();
                //$error = "dd";
                if($error){
                        return array('db_error' => $error);
                }else {
                        return false;
                }
        }
           static public function Delete($id)
        {
                $conn = GetConnection();
                $sql =        " DELETE From 2013Fall_Product_Categories WHERE id=$id ";
                                
                $conn->query($sql);
                //echo $sql; 
                $error = $conn->error;                
                $conn->close();
                //$error = "dd";
                if($error){
                        return array('db_error' => $error);
                }else {
                        return false;
                }                
        }
		static public function Validate($row)
        {
                $errors = array();
                
                if(!$row['Name']) $errors['Name'] = 'id required';
                
                return count($errors) ? $errors : null;
        }
        
        static function Encode($row, $conn)//this encode makes it able to the strings input by user
        									// to have special characters. it encodes them
        {
                $row2 = array();
                foreach ($row as $key => $value) {
                        $row2[$key] = $conn->real_escape_string($value);                
                }
                return $row2;
        }
		
		
}//end class