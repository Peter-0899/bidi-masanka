<?php
include("connexion.php");

$id = $_GET['id'];

$sql = "DELETE FROM TContact WHERE IDC=$id";

if ($conn->query($sql) === TRUE) {
    echo "Contact supprimé avec succès !";
} else {
    echo "Erreur : " . $conn->error;
}

echo "<br><a href='afficher.php'>Retour</a>";

$conn->close();
?>