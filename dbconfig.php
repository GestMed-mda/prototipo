<?php
$host= "localhost";
$user= "root";
$password = "";
$datbase= "gestmed";
$link = mysqli_connect("localhost", "root", "", "gestmed");


if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

mysqli_select_db( $link ,"gestmed");
?>


