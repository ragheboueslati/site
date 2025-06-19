use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // ou smtp.office365.com
    $mail->SMTPAuth = true;
    $mail->Username = 'ragheboueslati@gmail.com';
    $mail->Password = 'Driss1900$_'; // utilisez un mot de passe d'application
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom($_POST['email'], $_POST['nom']);
    $mail->addAddress('raghebouesalti@gmail.com');

    $mail->Subject = 'Nouveau message : ' . $_POST['sujet'];
    $mail->Body = "Nom: {$_POST['nom']}\nEmail: {$_POST['email']}\nÂge: {$_POST['age']}\nMessage:\n{$_POST['message']}";

    echo 'Message envoyé avec succès.';
} catch (Exception $e) {
    echo "Erreur : {$mail->ErrorInfo}";
}
