<?php 

$to = Config::EMAIL_USER;
$subject = $_POST['assunto'];
$message = "Email de: " . $_POST['nome'] . "\r\n" .
           "Mensagem: " . $_POST['mensagem'];

$headers = "From: " . $_POST['email'] . " " .  "\r\n" .
           "Reply-to: " . $_POST['email'] . "\r\n" .
           "X-Mailer: PHP/" . phpversion();

#mail($to, $subject, $message, $headers);

echo $to . '<hr>';
echo $subject . '<hr>';
echo $message . '<hr>';
echo $headers . '<hr>';

?>

<script>
    alert('Email enviado com sucesso!!!');
</script>

<meta http-equiv="refresh" content="0; url=contato">