<?php
echo file_get_contents('nome.txt');

<h1>Qual seu nome?</h1>
<form method="post">
    <input type="text" name="nome">
    <button type="submit">Enviar</button>
</form>
<?php
if(array_key_exists('nome', $_POST)){
    file_put_contents('nome.txt', $_POST['nome']);
}

$nome = file_get_contents('nome.txt');
if($nome){
    echo "<h2>O último nome foi $nome</h2>";
}
