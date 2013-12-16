<?php

if ( !isset($_REQUEST['term']) )
    exit;

$dblink = mysql_connect('localhost', 'lobosg1', 's024206' ) or die( mysql_error() );
mysql_select_db('lobosg1_db');

$rs = mysql_query('SELECT * FROM 2013Fall_Products');
//print_r($rs);
$data = array();
if ( $rs && mysql_num_rows($rs) )
{
    while( $row = mysql_fetch_array($rs, MYSQL_ASSOC) )
    {
        $data[] = array(
            'label' => $row['Name'] 
        );
    }
} 

$json_data = json_encode($data);
echo $json_data;
//print_r($json_data);

flush();