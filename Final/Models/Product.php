
<?php

/**
 * 
 */
class Product {
        
        static public function Get($id=null)
        {
                if(isset($id)){
                        return fetch_one("SELECT * FROM 2013Fall_Products WHERE id=$id");                        
                }else{
                        return fetch_all('SELECT * FROM 2013Fall_Products');                        
                }
				
        }
          static public function Blank()
        {
                return array( 'id'=>null, 'Name'=> null,'Price'=> null,'Description'=>null,'product_stock'=> null,'Supliers_id'=>null,'Product_Category_id'=> null
                ,'Picture_Url' => null );
        }
		
		static public function Save($row)
        {
                $conn = GetConnection();
                $row2 = Product::Encode($row, $conn);
                if($row['id']){
                        $sql =        " UPDATE 2013Fall_Products "
                                .        " Set Name='$row2[Name]', Price='$row2[Price]',Description='$row[Description]',
                          product_stock='$row2[product_stock]',Supliers_id='$row2[Supliers_id]', Product_Category_id='$row2[Product_Category_id]' , Picture_Url='$row2[Picture_Url]'"
                                .        " WHERE id=$row2[id] ";
                }else{
                         $sql =         " Insert Into 2013Fall_Products (Name, Price, Description,product_stock,Supliers_id,Product_Category_id,Picture_Url) "
                        .        " Values ('$row[Name]', '$row[Price]','$row[Description]','$row[product_stock]','$row[Supliers_id]','$row[Product_Category_id]','$row[Picture_Url]') ";                       
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
                $sql =        " DELETE From 2013Fall_Products WHERE id=$id ";
                                
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
                if(!is_numeric( $row['Price'])) $errors['Price'] = 'must be a number';
                if(!$row['Price']) $errors['Price'] = 'id required';
				if(!$row['Description']) $errors['Description'] = 'id required';
				if(!is_numeric( $row['product_stock'])) $errors['product_stock'] = 'must be a number';
				if(!$row['product_stock']) $errors['product_stock'] = 'id required';
                
				if(!is_numeric( $row['Product_Category_id'])) $errors['Product_Category_id'] = 'must be a number';
				if(!$row['Product_Category_id']) $errors['Product_Category_id'] = 'id required';
				
				if(!is_numeric( $row['Supliers_id'])) $errors['Supliers_id'] = 'must be a number';
				if(!$row['Supliers_id']) $errors['Supliers_id'] = 'id required';
				
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