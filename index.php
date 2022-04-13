<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="signin.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
    <title>Cervejas Lager</title>
    <style>
    body{
        margin:auto;
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
</head>

<div class='container'>
    <br><br><br>
    <h1>Cervejas Long Neck</h1>
    <form action="login.php" method="post">
        Login:</br>
        <input type="text" name="login" class="form-control"/></br>
        Senha:</br>
        <input type="password" name="senha"class="form-control"/></br>
        <br>
        <div class="text-center">
        <input type="submit" value="Login" class="btn btn-secondary"/>
      
        </form>
        </br>
        </br>
        <form action="form.php" method="post">
        <input type="submit" value="Cadastrar-se" class="btn btn-danger"/>
        </form>
        </div>
        <?php
        if(isset($_GET["msg"])){
            echo $_GET["msg"];
        }
?>

</body>
<div class="text-center">
<?php
include_once 'rodape.php';
?>
</div>
