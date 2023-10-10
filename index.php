<?php
$servername = "localhost:3306";
$username = "root";
$password = "Hbouki.2002";
$dbname = "arbre_competence";

try {
    $conn = new PDO("mysql:host=$servername;dbname=" . $dbname, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM `personne`";
    $result = $conn->query($sql);

    echo "<div class='table-responsive'>";
    echo "<table class='table table-striped'>";
    echo "<tr><th>ID</th><th>Full Name</th><th>Email</th></tr>";

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $row['Id'] . "</td>";
        echo "<td>" . $row['Nom'] . "</td>";
        echo "<td>" . $row['CNE'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    echo "</div>";

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// phpinfo();
?>
