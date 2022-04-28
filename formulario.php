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

$cabecalhos = "Para: $email_de \r\n";

$cabecalhos .= "Responder-a: $email_visitante \r\n"

mail($para,$email_assunto,$email_corpo,$cabecalhos);

header("Localização: contato.html");

?>