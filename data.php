<?php
$host="127.0.0.1";
$username='root';
$password= '';
$dbname= 'first';
$conn = new mysqli($host,$username,$password,$dbname);
if ($conn) {
    echo' working';
}


?>