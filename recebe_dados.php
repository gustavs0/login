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
# echo"\n<p>cadastro</p>";
# echo"\n<pre>";
# print_r($_POST);
# echo"\n<\pre>";
    $nomeCompleto = verificar_entrada($_POST['nomeCompleto']);
    $nomeDoUsuario = verificar_entrada($_POST['nomeDoUsuario']);
    $emailDoUsuario = verificar_entrada($_POST['emailDoUsuario']);
    $senhaDoUsuario = verificar_entrada($_POST['senhaDoUsuario']);
    $senhaUsuarioConfirmar = verificar_entrada($_POST['senhaUsuarioConfirmar']);

    $dataCriado = date(y-m-d); //Data atual do Formato Banco de dados

//Codificando Senhas
    $senhaCodificada = sha1($senhaDoUsuario);
    $senhaConfirmarCod = sha1($senhaUsuarioConfirmar);
//Teste captura de dados
// echo "<p>Nome Completo: $nomeCompleto</p>";
// echo "<p>Nome de Usuário: $nomeDoUsuario</p>";
// echo "<p>E-mail: $emailUsuario</p>";
// echo "<p>Senha Codificada: $senhaCodificada</p>";
// echo "<p>Data de Criação: $dataCriado</p>";
if ($senhaCodificada != $senhaConfirmarCod) {
    echo "<p class='text-danger'>Senhas não conferem.</p>";
    exit();
}else{
    //as senhas conferem, verifica se o usuario ja existe no bancp de dados
    $sql = $connect->prepare("SELECT nomeDoUsuario, emailUsuario, FROM usuario WHERE nomeDoUsuario = ? OR emailUsuario = ?");
    $sql->bind_param("ss", $nomeDoUsuario, $emailDoUsuario);
    $sql->execute();
    $resultado = $sql->get_result();
    $linha = $resultado->fetch_array(MYSQLI_ASSOC);
    //Verificando a existência do usuario no banco
    if($linha['nomeDoUsuario'] == $nomeDoUsuario){
        echo"<p class= 'text-danger'> Usuario indisponível </p>";
    }elseif ($linha['emailUsuario'] == $emailDoUsuario){
        echo"<p class='text-danger'> E-mail indisponível</p>";
    }else{
        //Usuário pode ser cadastrado no banco de dados
        $sql = $connect->prepare("INSERT INTO usuario(nomeDoUsuário, nomeCompleto, emailUsuario, senhaDoUsuario, dadtaCriado values(?,?,?,?,?)");
        $sql->bind_param("sssss", $nomeDoUsuario, $nomeCompleto, $emailDoUsuario, $senhaCodificada, $dataCriado);
        if($sql->execute()){
            echo "<p class = 'text-success'>Usuario cadastrado</p>";
        }else{
            echo"<p class='text-danger'> Usuario não cadastrado</p>";
            echo "<p class='text-danger'>Algo deu Errado!!</p>";
        }
    }
    }
}else if($_POST['action'] = 'login'){
    //Senão, teste se ação é login
    echo "\n<p>cadastro</p>";
    echo "\n<pre>";
    print_r($_POST);
    echo "\n<\pre>";
}else if($_POST['action'] = 'senha'){
//Senão, teste se ação é recuperar senha
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