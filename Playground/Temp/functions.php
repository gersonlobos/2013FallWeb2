<?
require_once ('password.php');
function GetConnection()
{
        global $password;
        $conn = new mysqli('localhost', 'plotkinm', $password, 'plotkinm_db');
        if($conn->error)
        {
                throw new Exception($conn->error, 1);
        }
        return $conn;
}
