<?php
     require 'banco.php';

    $email = $_POST['email'];
   
    $sql = "DELETE FROM pessoas WHERE email=?";
    $q = $pdo->prepare($sql);
    $q->execute(array($email));
    sleep(3);
    echo 'Deletado com Sucesso';
    sleep(3);
    header('Location: http://localhost/program/user');
    
?>