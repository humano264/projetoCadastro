<?php
    include('conexao.php');
    $id_usuario = $_POST['id_usuario']; //Esses são os nomes no formulario na aba "Name = '...'"
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $fone = $_POST['fone'];
    $senha = $_POST['senha'];

    echo "<h1>Alteração de dados</h1>"; //Campos do tipo Varchar sempre tem aspas simples
    echo "<p>Usuário: $nome</p>";
    $sql = "UPDATE usuario SET 
    nome_usuario='$nome',
    email_usuario='$email', 
    fone_usuario='$fone',
    senha_usuario='$senha' 
    WHERE id_usuario=$id_usuario;
    ";
    echo $sql."<br>";
    $result = mysqli_query($con,$sql); //a variavel result vai ter o resultado, se deu certo ou n
    if($result){
        echo "Dados Alterados com sucesso!<br>";}
    else{
        echo "Erro ao alterar dados: ".mysqli_error($con)."<br>";}
?>
<a href="index.php">Voltar</a>