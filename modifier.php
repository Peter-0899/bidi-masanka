<?php
include("connexion.php");

$id = $_GET['id'];
$sql = "SELECT * FROM TContact WHERE IDC=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Modifier Contact</title>
</head>
<body>

<h2>Modifier Contact</h2>

<form method="POST" action="update.php">
    <input type="hidden" name="id" value="<?php echo $row['IDC']; ?>">
   
    Nom : <input type="text" name="nom" value="<?php echo $row['Nom']; ?>" required><br><br>
    Téléphone : <input type="text" name="telephone" value="<?php echo $row['Telephone']; ?>" required><br><br>
    Email : <input type="email" name="email" value="<?php echo $row['Email']; ?>" required><br><br>
   
    <input type="submit" value="Modifier">
</form>

</body>
</html>