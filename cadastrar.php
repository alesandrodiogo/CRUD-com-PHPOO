<?php

include './conexao.php';


class Cadastro{
    
    private $nome;
    private $dataNasc;
    private $nummatricula;
    private $numestudante;
    private $curso;
    
    public function getNome(){
       return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getDataNasc(){
        return $this->dataNasc;
    }
    public function setDataNasc($dataNasc){
        $this->dataNasc = $dataNasc;
    }
    public function getNummatricula(){
        return $this->nummatricula;
    }
    public function setNummatricula($nummatricula){
        $this->nummatricula = $nummatricula;
    }
    public function getNumestudante(){
        return $this->numestudante;
    }
    public function setNumestudante($numestudante){
        $this->numestudante = $numestudante;
    }
    public function getCurso(){
        return $this->curso;
    }
    public function setCurso($curso){
        $this->curso = $curso;
    }

    
}

if(isset($_POST['submit'])){
    if(empty($_POST['nome']) || empty($_POST['data']) || empty($_POST['nummatricula']) || empty($_POST['numestudante']) || empty($_POST['curso'])){
        echo "<script>
        alert('Preencha todos os campos');
        </script>";
        echo '<span><a href="./index.php">Voltar</a></span>';
    }else{
        $cadastrar = new Cadastro();

        $connection = new Connection("localhost","root","","curso");
        

       $cadastrar->setNome($_POST['nome']);
       $cadastrar->setDataNasc($_POST['data']);
       $cadastrar->setNummatricula($_POST['nummatricula']);
       $cadastrar->setNumestudante($_POST['numestudante']);
       $cadastrar->setCurso($_POST['curso']);

        $nome= $cadastrar->getNome();
        $datanasc= $cadastrar->getDataNasc();
        $nummat= $cadastrar->getNummatricula();
        $numest= $cadastrar->getNumestudante();
        $curso= $cadastrar->getCurso();
        
        $query = mysqli_query($connection->conn,"INSERT INTO aluno(nome,data_nascimento,num_matricula,num_estudante	,curso)VALUES('$nome','$datanasc','$nummat','$numest','$curso')");  
        echo "<script>
        alert('Cadastro Feito com sucesso!');
        </script>";
        echo '<span><a href="./index.php">Voltar</a></span>';
       // header("location: ./index.php");
    }
    
}else{
    echo "<script>
    alert('Nao foi possivel cadastrar');
    </script>";
}
    



?>


