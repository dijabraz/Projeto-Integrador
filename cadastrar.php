
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
            document.getElementById('ibge').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
            document.getElementById('ibge').value=(conteudo.ibge);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";
                document.getElementById('ibge').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };

    </script>
</head>
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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Document</title>
</head>
<div class="text-center">
<h1>Cervejas Long Neck</h1>
    <hr>  
 </div> 
<body class="container">
<h2>Cadastrar Cervejas Long Neck </h2>

<form action="cadastro.php" method="post">
<div class="row">
<div class="form-group col-5">
Nome:
<input type="text" name="nome" id="nome" class="form-control" required>
</div>
<div class="form-group col-5">
Marca:
<input type="text" name="marca" id="marca" class="form-control"required>
</div>
<div class="form-group col-5">
Nota:
<select name="nota" id="nota" class="form-control"required>
    <option value="">Selecione</option>
    <option value="0">0</option>
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
<form method="get" action="cadastro.php">
<div class="form-group col-2">
        <label>Cep:
        <input name="cep" type="text" id="cep" value="" size="40" maxlength="9"
               onblur="pesquisacep(this.value);"class="form-control" /></label><br />
        </div>
        <div class="form-group col-3">
        <label>Rua:
        <input name="rua" type="text" id="rua" size="40" class="form-control" /></label><br />
        </div>
        <div class="form-group col-3">
        <label>Bairro:
        <input name="bairro" type="text" id="bairro" size="40" class="form-control"/></label><br />
        </div>
        <div class="form-group col-4">
        <label>Cidade:
        <input name="cidade" type="text" id="cidade" size="40" class="form-control"/></label><br />
        </div>
        <div class="form-group col-5">
        <label>Estado:
        <input name="uf" type="text" id="uf" size="33"class="form-control" /></label><br />
        </div>
        <div class="form-group col-4">
        <label>IBGE:
        <input name="ibge" type="text" id="ibge" size="40" class="form-control"/></label><br />
        </div>
      </form>
      <div class="form-group col-5">

</div>
<div class="form-group col-10">
Comentário:
<textarea name="comentario" id="comentario" class="form-control"></textarea>
<br>
</div>
<div class="form-group col-3">
<input type="hidden" name="acao" value="incluir">
<button type="submit" class="btn btn-secondary col-10" id='botao'> 
			      Cadastrar
			    </button>
                </div>
<div class="form-group col-3">
<button type="reset" class="btn btn-danger col-10 " id='botao'>Limpar
          </button>
          </div>
</form>
</div>
<div class="text-center">
<?php include_once 'rodape.php'; ?>
</div>
</body>
</html>

