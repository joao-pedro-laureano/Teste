<!DOCTYPE HTML>
<html lang = "pt-br">
<head>
   <title>Exemplo</title>
   <meta charset = "UTF-8">
</head>
<body>
    <?php
require 'banco.php';


    $email=$_POST['email'];
    $senha=$_POST['senha'];
    $arquivo=$_FILES['file'];
    $arquivo=explode('.',$arquivo['name']);
    // move_uploaded_file($arquivo['tmp_name'],'C:\wamp64\www\Program'.$arquivo['name']);
    $sql = "INSERT INTO pessoas (email, senha, arquivo) VALUES (?,?, ?)";
    $q = $pdo->prepare($sql);
    $q->execute(array($email, $senha, $arquivo));
    if($email=!null && $senha && $arquivo=!null){
        echo 'O usuário foi validado com sucesso! \n';
        header('Location: http://localhost/program/user');
    }
    else{
        echo 'Algum dos itens está incorreto!';
    }

?>
</body>
 