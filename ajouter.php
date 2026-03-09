<!DOCTYPE html>
<html>
<head>
    <title>Ajouter Contact</title>
</head>
<body>

<h2>Ajouter un Contact</h2>

<form method="POST" action="inserer.php">
    Nom : <input type="text" name="nom" required><br><br>
    Téléphone : <input type="text" name="telephone" required><br><br>
    Email : <input type="email" name="email" required><br><br>
    <input type="submit" value="Ajouter">
</form>

<br>
<a href="index.php">Retour</a>

</body>
</html>