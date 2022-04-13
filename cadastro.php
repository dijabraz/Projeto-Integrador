<?php 

// 1 resgatar os dados vindo do formulario
            $nome = $_POST["nome"];
            $marca = $_POST["marca"];
            $nota = $_POST["nota"];
            $comentario = $_POST["comentario"];
            
 // 2 abrir a conexão com o banco de dados
 include_once 'conexao.php';

 // 3 montar a instrução para gravar no banco
 $sql ="insert into produto values
 (null,'".$nome."','".$marca."','".$nota."','".$comentario."')";

 // 4 gravar
 $result = mysqli_query($con,$sql);

 if($result){
    $msg = "Gravado com sucesso!";
}else{
    $msg = "Erro ao Gravar!";
}

    // 5 fechar a conexão com o banco
    mysqli_close($con);
    echo"<script>alert('".$msg."');
    location.href='painel.php';
    </script>";

    ?>
    <?php include_once 'rodape.php'; ?>