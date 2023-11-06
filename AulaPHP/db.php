<?php
//Conectar MySQL
$db = new PDO('mysql:host=localhost;dbname=meu_banco;charset=utf8', 'root', 'root');
$resultado = $db->query('SELECT * FROM usuarios');
$linha = $resultado->fetch();

echo $linha['nome'];

//Consulta
$db = new PDO('mysql:host=localhost;dbname=meu_banco;charset=utf8', 'root', 'root');
$consulta = $db->query('SELECT * FROM usuarios');
$usuarios = $consulta->fetchAll();

echo '<h1>Lista de usuários</h1>';
echo '<ul>';
foreach($usuarios as $u) {
    echo '<li>';
    echo $u['nome'] . ' - ' . $u['email'];
    echo '</li>';
}
echo '</ul>';

//Inserir 
$db = new PDO('mysql:host=localhost;dbname=meu_banco;charset=utf8', 'root', 'root');
$linhas_afetadas = $db->exec("INSERT INTO `usuarios` (`email`, `nome`, `senha`) VALUES ('andre@dasilva.com', 'André', '456789')");

if($linhas_afetadas > 0){
    echo $linhas_afetadas . ' linhas foram afetadas';
} else {
    echo 'Nenhuma linha foi afetada!';
}
//Alterar
$db = new PDO('mysql:host=localhost;dbname=meu_banco;charset=utf8', 'root', 'root');
$linhas_afetadas = $db->exec("UPDATE `usuarios` SET `email` = 'jose@dasilva.com', `nome` = 'José' WHERE `id` = 1");

if($linhas_afetadas > 0){
    echo $linhas_afetadas . ' linhas foram afetadas';
} else {
    echo 'Nenhuma linha foi afetada!';
}

//Apagar
$db = new PDO('mysql:host=localhost;dbname=meu_banco;charset=utf8', 'root', 'root');
$linhas_afetadas = $db->exec("DELETE FROM `usuarios` WHERE `id` = 2");

if($linhas_afetadas > 0){
    echo $linhas_afetadas . ' linhas foram afetadas';
} else {
    echo 'Nenhuma linha foi afetada!';
}