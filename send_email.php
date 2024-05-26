<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Adresse e-mail où envoyer les informations
    $to = "votre_adresse_email@example.com";

    // Objet du mail
    $subject = "PRISE DE CONTACT CARBONITY";

    // Corps du mail
    $body = "Nom: $name\n";
    $body .= "Adresse e-mail: $email\n\n";
    $body .= "Message:\n$message";

    // En-têtes du mail
    $headers = "From: $name <$email>";

    // Envoi de l'e-mail
    if (mail($to, $subject, $body, $headers)) {
        echo "Votre message a été envoyé avec succès.";
    } else {
        echo "Une erreur s'est produite lors de l'envoi de votre message.";
    }
} else {
    echo "Une erreur s'est produite.";
}
?>
