<?php
$mainName = 'localhost';
$mainpass = '';
$tablename ='userAuth';
$username23 = 'root';

$conn = new mysqli($mainName, $username23, $mainpass, $tablename);
if (!$conn) {
    echo 'Not connected';
}

?>