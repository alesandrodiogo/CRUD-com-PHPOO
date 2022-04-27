<?php
include './conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <h2>CRUD EM PHP</h2>
    <form action="cadastrar.php" method="POST">
        <label for="nome">Nome</label>
        <input type="text" name="nome" placeholder="fulano de tal"><br><br>
        <label for="data">Data Nascimento</label>
        <input type="date" name="data"><br><br>
        <label for="nummatricula">Número Matrícula</label>
        <input type="number" name="nummatricula" placeholder="001234"><br><br>
        <label for="numestudante">Número Estudante</label>
        <input type="number" name="numestudante" placeholder="35743"><br><br>
        <label for="curso">Curso</label>
        <input type="text" name="curso" placeholder="Biologia"><br><br>
        <input type="submit" value="Enviar" name="submit">
    </form><br><br>
    <hr>
    <h2>Dados Cadastrados</h2><br>
    <?php
     
    $connection = new Connection("localhost","root","","curso");

    $sql = "SELECT * FROM aluno ORDER BY id";

    $resultado = mysqli_query($connection->conn,$sql);

    while($dados =mysqli_fetch_array($resultado)){
        
         echo "ID: ".$dados['id']."<br>";
         echo "Nome: ".$dados['nome']."<br>";
         echo "Data de Nascimento: ".$dados['data_nascimento']."<br>";
         echo "Número de Matrícula: ".$dados['num_matricula']."<br>";
         echo "Número de Estudante: ".$dados['num_estudante']."<br>";
         echo "Curso: ".$dados['curso'];
         echo"<hr>";
    }
    ?>

</body>
</html>