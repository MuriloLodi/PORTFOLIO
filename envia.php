<?php 

    $nome = addcslashes($_POST['nome']);
    $email = addcslashes($_POST['email']);
    $telefone = addcslashes($_POST['telefone']);
    $msg = addcslashes($_POST['msg']);

    $para = "murilohlodi@gmail.com";

    $assunto = "Fala Comigo - Portfólio";

    $corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Celular".$telefone."\n"."Mensagem".$msg;

    $cabeca = "From: murlxff@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para,$assunto,$corpo,$cabeca)){
        echo("E-mail enviado com sucesso!")
    }else{
        echo("Houve um erro ao enviar o E-mail!");
    }
?>