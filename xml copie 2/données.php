<?php
    require_once 'examen.php';
    require_once 'professeur.php';
    require_once 'examen.php';
    
    $professeur = new Professeur("Mr Ousmane Racine", "LY");
    $q1 = new Question(1, 3, "C'est quoi ton problème?", "repCourte");
    $q2 = new Question(2, 0, "Comment tu t'appelles?", "repCourte");
    $questions1 = array($q1, $q2);
    $exo1 = new Exercice(1, 10, $questions1);
    $q3 = new Question(1, 0, "C'est toi le patron?", "repUnique", ["oui", "non"]);
    $q4 = new Question(2, 0, "Quelles sont les couleurs du drapeau guineen?", "repMultiple", ["rouge", "jaune", "vert", "bleu", "blanc"]);
    $exo2 = new Exercice(1, 10, array($q3, $q4));
    $exercices = array($exo1, $exo2);
    $examen = new Examen("Inf", "DIC2", "1","2021-10-30", $professeur, $exercices);
    Examen::add($examen);
?>