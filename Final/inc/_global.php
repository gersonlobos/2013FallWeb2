<?php
include_once('_password.php');
session_start();
include_once __DIR__ . '/../Models/Keywords.php';
include_once __DIR__ . '/../Models/Users.php';
include_once __DIR__ . '/../Models/Product.php';
include_once __DIR__ . '/../Models/Categories.php';
include_once __DIR__ . '/../Models/Supliers.php';
include_once __DIR__ . '/../Models/Products.php';
include_once __DIR__ . '/../Models/Auth.php';
//include_once __DIR__ . '/../Models/ProductSuggest.php';

function GetConnection()
{
	global $sql_password;
	$conn = new mysqli('localhost', 'lobosg1', $sql_password, 'lobosg1_db');
	
	return $conn;
}


function fetch_all($sql)
{
        $ret = array();
        $conn = GetConnection();
        $result = $conn->query($sql);
		echo $conn->error;
        
        while ($rs = $result->fetch_assoc()) {
                $ret[] = $rs;
        }
        
        $conn->close();
        return $ret;
}

function fetch_one($sql)
{
        $arr = fetch_all($sql);
        return $arr[0];
}