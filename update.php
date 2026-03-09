<?php
include("connexion.php");

$id = $_POST['id'];
$nom = $_POST['nom'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];

$sql = "UPDATE TContact
        SET Nom='$nom', Telephone='$telephone', Email='$email'
        WHERE IDC=$id";

if ($conn->query($sql) === TRUE) {
    echo "Modification réussie !";
} else {
    echo "Erreur : " . $conn->error;
}

echo "<br><a href='afficher.php'>Retour</a>";

$conn->close();
?>