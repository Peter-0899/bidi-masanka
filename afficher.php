<?php
include("connexion.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Liste des Contacts</title>
</head>
<body>

<h2>Liste des Contacts</h2>

<form method="GET">
    Rechercher : <input type="text" name="recherche">
    <input type="submit" value="Chercher">
</form>

<br>

<table border="1">
<tr>
    <th>Nom</th>
    <th>Téléphone</th>
    <th>Email</th>
    <th>Actions</th>
</tr>

<?php
if (isset($_GET['recherche'])) {
    $rech = $_GET['recherche'];
    $sql = "SELECT * FROM TContact WHERE Nom LIKE '%$rech%'";
} else {
    $sql = "SELECT * FROM TContact";
}

$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$row["Nom"]."</td>";
    echo "<td>".$row["Telephone"]."</td>";
    echo "<td>".$row["Email"]."</td>";
    echo "<td>
            <a href='modifier.php?id=".$row["IDC"]."'>Modifier</a> |
            <a href='supprimer.php?id=".$row["IDC"]."'>Supprimer</a>
          </td>";
    echo "</tr>";
}
?>

</table>

<br>
<a href="index.php">Retour</a>

</body>
</html>

<?php
$conn->close();
?>