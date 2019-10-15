<?php
//Conexão com banco de dados
require_once 'configBD.php';

function verificar_entrada($entrada){
    $saida = htmlspecialchars($entrada);
    $saida = stripslashes($saida);
    $saida = trim($saida);
    return $saida;//retorna a saída limpa
}

//Teste se existe a ação
if(isset($_POST['action'])){
if($_POST['action'] = 'cadastro'){
//Teste se a ação é igual a cadastro
echo"\n<p>cadastro</p>";
echo"\n<pre>";
print_r($_POST);
echo"\n<\pre>";
}else if($_POST['action'] = 'login'){
//Senão, teste se ação é login
echo "\n<p>cadastro</p>";
echo "\n<pre>";
print_r($_POST);
echo "\n<\pre>";
}else if($_POST['action'] = 'senha'){
//Senão, teste se ação érecuperar senha
echo "\n<p>cadastro</p>";
echo "\n<pre>";
print_r($_POST);
echo "\n<\pre>";
}else{
echo "<h1>Alo ha!</h1>
<h2> Acesso negado</h2>";
}
}else{
    header("location:index.php");
}