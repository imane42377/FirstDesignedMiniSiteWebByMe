<?php
    $conn = mysqli_connect("localhost", "root", "", "magasin");

    $req = "SELECT idClt, nomClt, villeClt FROM client";
    $ress = mysqli_query($conn, $req);

    echo "<link rel='stylesheet' href='ClientStyle.css'>";
    echo "<table class='table'>";
    echo "<tr class='head'><td> NOM </td><td> Ville </td><td> Supprimer </td><td> Modifier </td></tr>";

    foreach ($ress as $row) {
        echo "<tr class='tdata'>
                <td>" . $row['nomClt'] . "</td>
                <td>" . $row['villeClt'] . "</td>
                <td><a href='suppClient.php?id=" . $row['idClt'] . "'>supp</a></td>
                <td><a href='formUpdate.php?id=" . $row['idClt'] . "&nom=" . $row['nomClt'] . "&ville=" . $row['villeClt'] . "'>modifier</a></td>
              </tr>";
    }

    echo "</table>";
    echo "<a href='formAddClt.php' class='image'>Ajouter un client</a>";
?>
