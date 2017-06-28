<?php
// exercice 1
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', 'toulouse');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    };
    //
    // $reponse = $bdd->query('SELECT * FROM clients');
    // while($donnees = $reponse->fetch()){
    //     echo '<p>nom: '. $donnees['lastName']. ' prenom: '. $donnees['firstName'];
    // };

// exercice 2
    // $reponce = $bdd->query('SELECT * FROM showTypes');
    // while ($donnees = $reponce->fetch()) {
    //     echo "<p>type de show: ".$donnees['type'];
    // };

// exercice 3
    // $reponse = $bdd->query('SELECT * FROM clients LIMIT 20');
    // while($donnees = $reponse->fetch()){
    //     echo '<p>nom: '. $donnees['lastName']. ' prenom: '. $donnees['firstName'];
    // };

// exercice 4
    // $reponse = $bdd->query('SELECT * FROM clients WHERE cardNumber');
    // while($donnees = $reponse->fetch()){
    //     echo '<p>nom: '. $donnees['lastName']. ' prenom: '. $donnees['firstName'];
    // };

// exercice 5
    // $reponse = $bdd->query('SELECT * FROM clients ORDER BY lastName');
    // while($donnees = $reponse->fetch()){
    //     if (substr($donnees['lastName'],  0, 1) == "M") {
    //         echo '<p>nom: '. $donnees['lastName']. ' prenom: '. $donnees['firstName'];
    //     };
    // };

// exercice 6
    $reponce = $bdd->query('SELECT * FROM shows ORDER BY title');
    while ($donnees = $reponce->fetch()) {
        echo '<p>'. $donnees['title'].' par '.$donnees['performer'].', le '.$donnees['date'].' à '.$donnees['startTime'];
    };


 ?>
