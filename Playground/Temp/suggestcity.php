<?php
require_once ('password.php');

if ( !isset($_REQUEST['term']) )
    exit;

$dblink = mysql_connect('localhost', 'plotkinm', $password ) or die( mysql_error() );
mysql_select_db('plotkinm_db');

$rs = mysql_query('select city, state from US_Zip_Codes where city like "'. mysql_real_escape_string($_REQUEST['term']) .'%" order by zip asc limit 0,10', $dblink);

$data = array();
if ( $rs && mysql_num_rows($rs) )
{
    while( $row = mysql_fetch_array($rs, MYSQL_ASSOC) )
    {
        $data[] = array(
            'label' => $row['city'] .', '. $row['state'] , //taking city and state
            'value' => $row['city']
        );
    }
}

echo json_encode($data);

flush();

