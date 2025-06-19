<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $message = $_POST['message'];
    $sujet = $_POST['sujet'];

    $to = "ragheb.oueslati@inetum.com"; // Remplacez par votre adresse
    $subject = "Nouveau message du formulaire : $sujet";
    $body = "Nom: $nom\nEmail: $email\nÂge: $age\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message envoyé avec succès.";
    } else {
        echo "Erreur lors de l'envoi du message.";
    }
}
?>
