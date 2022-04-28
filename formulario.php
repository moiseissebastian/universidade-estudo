<?php
$nome = $_POST['nome'];
$email_visitante = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

$email_de = 'info@seuwebsite.com'

$email_assunto = 'Novo Formulário Submetido'

$email_corpo = "Nome do Usuário: $nome.\n".
                "E-mail do Usuário: $email_visitante.\n".
                 "Assunto: $assunto.\n".
                 "Mensagem do Usuário: $mensagem.\n";

$para = 'moiseissebastian1@gmail.com';

$headers = "MIME-Version: 1.0\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\n";
$headers .= "From: $nome <$email_de>";
$headers .= "Reply-To: $email_visitante \r\n";

mail($para, $email_assunto ,$email_corpo, $cabecalhos);

header("Location: contato.html");
echo "<meta http-equiv='refresh' content='10;URL../contato.html'>";
?>
