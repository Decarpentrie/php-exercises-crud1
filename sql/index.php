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

    $reponce = $bdd->query('SELECT * FROM showTypes');
    while ($donnees = $reponce->fetch()) {
        echo "<p>type de show: ".$donnees['type'];
    };


 ?>
