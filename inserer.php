<?php
include("connexion.php");

$nom = $_POST['nom'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];

$sql = "INSERT INTO TContact (Nom, Telephone, Email)
        VALUES ('$nom', '$telephone', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Contact ajouté avec succès !";
} else {
    echo "Erreur : " . $conn->error;
}

echo "<br><a href='index.php'>Retour</a>";

$conn->close();
?>