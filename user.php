<?php
require 'banco.php';
$sql=$pdo->query("SELECT * FROM pessoas");
$lista = $sql->fetchAll(PDO::FETCH_ASSOC);


?>

<h1>Listagem de Usuários</h1>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Email</th>
        <th>Arquivo</th>
    </tr>


<?php   foreach ($lista as $U):?>
     <tr>
        <td><?=$U['idpessoas']; ?></td>   
        <td><?=$U['email']; ?></td>
        <td><?=$U['arquivo']; ?></td>
        
     </tr>
    
    
    <?php endforeach;?>
</table>

<a href="deletar.php">Deletar Usuário</a><BR>
