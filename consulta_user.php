<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cervejas Long Neck</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>    
</body>
</html>
<div class="text-center">
<h1>Cervejas Long Neck</h1>
    <hr>  
 </div> 

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
    table {
  
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 60%;
}

td, th {

  border: 2px solid black;
  text-align: center;
  padding: 15px;
}

tr:nth-child(even) {
  background-color: white;
}
tr {
    background-color: DarkGray;
}

</style>

<?php

echo"<h1>Consultar Cervejas Long Neck</h1>";

include_once 'conexao.php';

$sql = "select * from produto ORDER BY nome ASC";

$rs = mysqli_query($con,$sql);

?>
    
    <input id="myInput" type="text" placeholder="Procure..">
<br><br>
    
    <table>

<tr>
    <th>Nome</th>
    <th>Marca</th>
    <th>Nota</th>
    <th>Comentário</th>

<tr>               

<?php        
while($linha = mysqli_fetch_array($rs)){
?>
<tbody id="myTable">
<tr>
    <td><?php echo $linha["nome"]; ?></td>
    <td><?php echo $linha["marca"]; ?></td>
    <td><?php echo $linha["nota"]; ?></td>
    <td><?php echo $linha["comentario"]; ?></td>
</tr>
<?php          } ?>
<?php 

mysqli_close($con); ?>
</table>
</style>
<script>
    function excluir(id){
        if(confirm('Deseja realmente excluir este produto?')){;
        location.href='excluir.php?id='+id;
    }
    }
    </script>

<div class="text-center">
<?php include_once 'rodape.php'; ?>
</div>