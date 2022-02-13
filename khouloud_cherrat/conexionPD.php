<?php

$connect=mysqli_connect('localhost','root','','login') ; //return true or false

if(!$connect){
    echo "conexion error : ".mysqli_connect_error();
}

?>