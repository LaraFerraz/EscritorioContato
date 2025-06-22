<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura dos dados do formulário
    $nome     = htmlspecialchars(trim($_POST["nome"]));
    $email    = htmlspecialchars(trim($_POST["email"]));
    $telefone = htmlspecialchars(trim($_POST["telefone"]));
    $assunto  = htmlspecialchars(trim($_POST["assunto"]));
    $mensagem = htmlspecialchars(trim($_POST["mensagem"]));

    // Endereço que receberá o e-mail
    $destinatario = "larapfz06@gmail.com"; // <-- Substitua pelo seu e-mail
    $titulo = "Nova mensagem do site - $assunto";

    // Corpo do e-mail
    $corpo = "Nova mensagem recebida pelo formulário do site:\n\n";
    $corpo .= "Nome: $nome\n";
    $corpo .= "E-mail: $email\n";
    $corpo .= "Telefone: $telefone\n";
    $corpo .= "Assunto: $assunto\n";
    $corpo .= "Mensagem:\n$mensagem\n";

    // Cabeçalhos
    $headers = "From: $email\r\n" .
               "Reply-To: $email\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Envio
    if (mail($destinatario, $titulo, $corpo, $headers)) {
        echo "<script>alert('Mensagem enviada com sucesso!'); window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Erro ao enviar a mensagem. Tente novamente.'); history.back();</script>";
    }
} else {
    header("Location: index.php");
    exit();
}
?>