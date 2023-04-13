<?php 
    if(isset ($POST['CADASTRAR'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $check_senha = $_POST['check_senha'];
    }


    if($senha != $check_senha){
        die("Senhas não corresondem");
    }

    $host = "localhost";
    $user = "root";
    $senha = "";
    $banco = "infor_user";

    $con = mysqli_connect($host, $user, $senha, $banco);

    if(!$con){
        echo "deu erro";
 
        $sql = "INSERT  cad_usuario (nome, email, senha)VALUES('$nome', '$email', '$senha')";
 
        $rs = mysqli_query($con, $sql);
 
        if($rs){
         echo "Você foi cadastrado com sucesso. ";
        }
     }
 

?>