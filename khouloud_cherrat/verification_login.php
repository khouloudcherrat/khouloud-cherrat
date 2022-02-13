<?php
include "conexionPD.php"; echo "hy";
if(isset($_POST['submit'])){
    session_start();

    $user=$_POST['login'];
    $pass=$_POST['password'];
    
    $s="select * from student where pseudoLogin='".$user."' and passe='".$pass."'";
    $result=mysqli_query($connect,$s); 
    
    if($result){

        if($num==1){
            $_SESSION['password']=$row['passe'];
            $_SESSION['id']=$row['ID_Eleves'];
            header('location:compteEleve.php'); 
        }
        else header('location:loginEleves.php');
    }
    else echo "Login or password incorrect"; 
}
?>