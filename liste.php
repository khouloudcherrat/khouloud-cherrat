<?php 
include "conexionPD.php"; 

$s="select * from student";
$result=mysqli_query($connect,$s);
echo "BIENVENUE";
?>

<?php
    if (isset($_GET["deconnexion"])) {
        if ($_GET["deconnexion"] == true) {
                session_unset();
                header("location:loginForm.html");
        }
    }
?>
<!DOCTYPE HTML>
<html>
    <body>
        <br><a href="liste.php?deconnexion=true">Déconnexion</a><br>
        <a href="ajoutEleve.php">Ajout d'un élève</a><br>
       
        <table>
            <tr>
                <th>CNE</th>
                <th>NOM</th>
                <th>PRENOM</th>
                <th>IMAGE</th>
            </tr>

            <?php while($row=mysqli_fetch_assoc($result)) {?>
                <tr>
                    <td><?php echo $row['cne']; ?> </td>
                    <td><?php echo $row['nom']; ?> </td>
                    <td><?php echo $row['prénom']; ?> </td>
                    <td> <img src=<?php echo "pictures/".$row['image']; ?> height="100" width="100" ></td>
                </tr>
            <?php } ?> 
        </table>
    </body>
</html>

