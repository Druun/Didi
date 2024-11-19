<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $age = htmlspecialchars($_POST['age']);
    $datenaissance = htmlspecialchars($_POST['datenaissance']);
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $champion = htmlspecialchars($_POST['champion']);
    $nomtrollpick = htmlspecialchars($_POST['nomtrollpick']);
    $rolesChoisis = isset($_POST['role']) && is_array($_POST['role']) ? $_POST['role'] : [];
    $bottes = htmlspecialchars($_POST['bottes']);
    $objet1 = htmlspecialchars($_POST['objet1']);
    $objet2 = htmlspecialchars($_POST['objet2']);
    $objet3 = htmlspecialchars($_POST['objet3']);
    $objet4 = htmlspecialchars($_POST['objet4']);
    $objet5 = htmlspecialchars($_POST['objet5']);
    $summonersChoisis = isset($_POST['summoner']) && is_array($_POST['summoner']) ? $_POST['summoner'] : [];


    $chaineRoles = implode(", ", $rolesChoisis);
    $chaineSummoners = implode(", ", $summonersChoisis);



    $ligne = "Nom: $nom | Prenom: $prenom | Age: $age | Date naissance: $datenaissance | Pseudo: $pseudo | Champion: $champion | Nom trollpick: $nomtrollpick | Roles choisis: $chaineRoles | Bottes: $bottes | Objet 1: $objet1 | Objet 2: $objet2 | Objet 3: $objet3 | Objet 4: $objet4 | Objet 5: $objet5 | Summoners choisis: $chaineSummoners \n";
    
    $fichier = __DIR__ . './formulaires remplis/formulaire.txt';

    file_put_contents($fichier, $ligne, FILE_APPEND);

} else {
    echo "Erreur : méthode non autorisée.";
}