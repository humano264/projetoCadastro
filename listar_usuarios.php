<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        include('conexao.php');
        $sql = "SELECT * FROM usuario";
        // mysqli_query => executa um comando no banco de dados
        $result = mysqli_query($con, $sql);
        // mysqli_fetch_array => retorna apenas uma linha dos registros retornados
        $row = mysqli_fetch_array($result);
    ?>
    <h1>Consulta de usuários</h1>
    <table align="center" border="1" width="500" bgcolor="pink">
        <tr> Cabeçalho
            <th>Código</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Senha</th>
            <th>Alterar</th>
            <th>Excluir</th>
        </tr>
        <?php
            do{
            echo "<tr>";
            echo "<td>".$row['id_usuario']."</td>";
            echo "<td>".$row['nome_usuario']."</td>";
            echo "<td>".$row['email_usuario']."</td>";
            echo "<td>".$row['fone_usuario']."</td>";
            echo "<td>".$row['senha_usuario']."</td>";
            echo "<td><a href='altera_usuario.php?id_usuario="
            .$row['id_usuario']."'> Alterar </a> </td>"; //vai pegar o valor do id exibido 
            echo "<td><a 
            href='excluir_usuario.php?id_usuario=".$row['id_usuario']."'>Excluir</a>
            </td>";
            // do while na linha atual (Como se eu pegasse o valor do contador) e usar ele
            // como condição do WHERE do banco

            echo "</tr>";
        } while($row = mysqli_fetch_array($result));
        // sempre que estiver algum registro ele vai mostrar, ou seja
        // quando acabar os dados ele para de monstrar(uma repetição).     
        ?>
        <a href="index.php">Voltar</a>
    </table>
</body>
</html>