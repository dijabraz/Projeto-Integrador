<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <title>Cervejas Long Neck</title>
</head>
<div class="text-center">
<h1>Cervejas Long Neck</h1>
    <hr>  
 </div> 
<style>
    body{
        display:table;
        background:Gainsboro;
    }
    #container{
        margin:auto;
        width:960px;
        float:left;
    }
    #topo{
        width:960px;
        float:left;
        height:20px;
        padding:10px;

    }
</style>
<body>
    
</body>
</html>

<?php

// resgate de dados da URL
$id = base64_decode($_GET["id"]);

// montar a instrução para selecionar o registro na base de dados
$sql = "select * from produto where idproduto=".$id;

// abrir a conexão com o banco
include_once 'conexao.php';

//executar
$rs =mysqli_query($con,$sql);
if(mysqli_num_rows($rs)==1){
    $reg = mysqli_fetch_array($rs);
}
?>
<br>
<body class="container">
<h2>Atualizar Cerveja</h2>


<form action="atualizar.php" method="post">

<div class="form-group col-4">
Nome:<br>
<input type="text" value="<?php echo $reg["nome"]; ?>" name="nome" id="nome" class="form-control">
</div>
<br>
<div class="form-group col-4">
Marca:<br>
<input type="text" value="<?php echo $reg["marca"]; ?>" name="marca" id="tipo" class="form-control">
</div>
<br>
<div class="form-group col-4">
Nota:<br>
<select name="nota" id="nota" class="form-control">
    <option value="<?php echo $reg["nota"]; ?>"><?php echo $reg["nota"]; ?></option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
</select>
</div>
<br>
<div class="form-group col-4">
Comentario da Cerveja:<br>
<textarea name="comentario" id="comentario" class="form-control" value="<?php echo $reg["comentario"]; ?>"><?php echo $reg["comentario"]; ?></textarea>
<br>
</div>
<input type="hidden" name="id" value="<?php echo $reg["idproduto"]; ?>">
<input type="submit" value="Atualizar" class="btn btn-secondary">
<input type="reset" value="Limpar Dados" class="btn btn-danger">
</form>






<div class="text-center">
<?php include_once 'rodape.php'; ?>
</div>
</div>