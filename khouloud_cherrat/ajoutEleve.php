<!DOCTYPE HTML>
<html>
    <body>
        <form action="" method="post" enctype="multipart/form-data">
            Prenom : <br>
            <input type="text" name="prenom" required> <br>
            Nom : <br>
            <input type="text" name="nom" required> <br>
            CNE : <br>
            <input type="text" name="cne" required> <br>
            Image : <br>
            <input type="file" name="image"><br>
            <input type="submit" name="submit" value="Sign up">
        </form>
    </body>
</html>

<?php 
    include "conexionPD.php";
   
    if(isset($_POST["submit"])){

    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $cne=$_POST['cne'];

    $file_name = $_FILES['image']['name'];
    $file_size =$_FILES['image']['size'];
    $file_tmp =$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];
    $file_error=$_FILES['image']['error'];
    $file_ext=strtolower(end(explode('.',$_FILES['image']['name']))); 
    $expensions= array("jpeg","jpg","png","jfif");
    $errors= array();


    if(file_exists($file_name)) echo "Sorry, file already exists.";
    if(in_array($file_ext,$expensions)=== false)  $errors[]="extension not allowed, please choose a JPEG or PNG file.";
    if($file_size > 2097152) $errors[]='File size must be excately 2 MB';
    if(empty($errors)==true) move_uploaded_file($file_tmp,"pictures/".$file_name); 

    $query="insert into student (pseudoLogin,password,cne,nom,prénom,image) values ('','','$cne','$nom','$prenom','$file_name')";
    $res=mysqli_query($connect,$query);
    if($res) header("location: liste.php");
    else echo "Erreur1";
}
