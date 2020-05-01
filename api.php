<?php

$username = 'bipin';
$servername = 'localhost';
$password = 'Bipin@123';
$dbname = 'amazing_information';

$con = new mysqli($servername, $username, $password, $dbname);

if($con->connect_error){
    die('Connection Failed',$con->connect_error)
}

$sql = 'SELECT * FROM Countries';
$result = $con -> query($sql);

$data = array();
while($row = mysqli_fetch_assoc($result))
{
    $data[] = $row;
}

echo json_encode($data);

?>
