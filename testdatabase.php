<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "power tycoon";

// Connexion à la base de données
$conn = mysqli_connect($servername, $username, $password, $dbname);

//var_dump($users)

// Vérifier la connexion
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Exécuter la requête SQL
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

// Afficher les résultats sous forme de tableau
if (mysqli_num_rows($result) > 0) {
  echo "<table>";
  echo "<tr><th>ID</th><th>Email</th><th>Mot de passe</th></tr>";
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>".$row["id"]."</td><td>".$row["email"]."</td><td>".$row["password"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 résultats";
}

// Fermer la connexion
mysqli_close($conn);

?>