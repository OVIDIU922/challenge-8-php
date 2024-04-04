<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["mail"];
    $telephone = $_POST["telephone"];
    $sujet = $_POST["sujet"];
    $message = $_POST["message"];

    // Affiche le message
    echo "Merci $prenom $nom de nous avoir contacté à propos de \"$sujet\".
          Un de nos conseillers vous contactera soit à l’adresse $email ou par téléphone au $telephone dans les plus brefs délais pour traiter votre demande : $message";
}
?>
