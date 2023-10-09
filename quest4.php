<?php
$pdo = new \PDO('mysql:host=localhost;dbname=pdo_quest', 'elie', 'potter');
$query = "SELECT * FROM friend";
$statement = $pdo->query($query);
$friends = $statement->fetchAll();

$query = "SELECT * FROM friend";
$statement = $pdo->query($query);

// On veut afficher notre résultat via un tableau associatif (PDO::FETCH_ASSOC)
$friendsObject = $statement->fetchAll(PDO::FETCH_OBJ);

foreach($friendsObject as $friend) {
    echo $friend->firstname . ' ' . $friend->lastname;
}
?>