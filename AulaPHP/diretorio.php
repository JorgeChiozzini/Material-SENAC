<?php
if(!is_dir('img')){
    mkdir('img');
}
$arquivos = scandir('img');
echo '<ul>';
foreach($arquivos as $a){
    echo '<li>' . $a . '</li>';
}
echo '</ul>';

//Criar
$fh = fopen('img/teste1.txt', 'r');
if($fh){
    fclose($fh);
}

$fh = fopen('img/teste2.txt', 'w+');
if($fh){
    fclose($fh);
}

$fh = fopen('img/teste3.txt', 'x+');
if($fh){
    fclose($fh);
}

$fh = fopen('img/teste3.txt', 'x');
if($fh){
    fclose($fh);
}
//
<h1>Qual seu nome?</h1>
<form method="post">
    <input type="text" name="nome">
    <button type="submit">Enviar</button>
</form>
<?php
if(array_key_exists('nome', $_POST)){
    $fh = fopen('nome.txt', 'w');
    fwrite($fh, $_POST['nome']);
    fclose($fh);
}

//Excluir
if(unlink('img/teste2.txt')){
  echo "Removido com sucesso!";
} else {
  echo "Erro ao remover!";
}

//Mover
rename('img/teste3.txt', 'img/teste.txt'); // renomeia teste3 para teste

rename('nome.txt', 'img/nome.txt'); // move o arquivo nome.txt para dentro do diretório img

//Ler
$fh = fopen('nome.txt', 'r');
$nome = fread($fh, filesize('nome.txt'));
echo $nome;
fclose($fh);


