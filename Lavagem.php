<?php 
if(isset($_POST['submit']))
{

include_once('config.php');

$lavagem = $_POST['lavagem'];

$result = mysqli_query($conexao, "INSERT INTO servico (lavagem,pintura,manutencao) 
VALUES ('$lavagem','Não tem','Não tem' )");

header("Location: CadastroPrincipal.php"); // redireciona para a página do formulário de lavagem


}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script> </script> <!--Ao apertar em confirmar aparecer um alert para re confirmar-->
</head>
<body>

<form action="CadastroPrincipal.php" method="POST">
  
 <h1>Escolha o tipo de lavagem para seu veiculo:</h1> <p>   <!-- Quando apernar em alguma das opções apaercer a descrição da lavagem-->
 
 <input type="radio" id="simples" name="lavagem" value="simples">
 <label for="simples">simples</label> <p>

 <input type="radio" id="interna" name="lavagem" value="interna">
 <label for="interna">interna</label> <p>

 <input type="radio" id="detalhada" name="lavagem" value="detalhada">
 <label for="detalhada">detalhada</label> <p>

 <!-- Passar o valor da variavel 'Lavagem' de forma oculta -->  

 <input type="submit" name="submit" id="submir">

</form> 


</body>
</html>










<!-- 
    <input type="radio" id="simples" name="lavagem" onclick="mostrarTexto()">
    <label for="simples">Simples</label><br>

    <input type="radio" id="interna" name="lavagem" value="interna" onclick="mostrarTexto()">
    <label for="interna">Lavagem Interna</label><br>

    <input type="radio" id="detalhada" name="lavagem" value="detalhada" onclick="mostrarTexto()">
    <label for="detalhada">Lavagem Detalhada</label> <p>

</div>
    <div id="texto"> <!-- O texto será exibido aqui 


<button type="submit" name="submit" id="submit">Enviar0</button>
</form>

<p>
Importancia de cada limpaza para o veiculo <p>

<script>
    function mostrarTexto() {
  var opcoes = document.getElementsByName("lavagem");

  for (var i = 0; i < opcoes.length; i++) {
    if (opcoes[i].checked) {
      var texto = "";

      if (opcoes[i].value == "simples") {
        texto = "essa lavagem e foda q sio uma porra ne meu filho";
      } else if (opcoes[i].value == "interna") {
        texto = "a matutenção manutem ne papia.";
      } else if (opcoes[i].value == "detalhada") {
        texto = "a detalhada e pica tmb.";
      }

      document.getElementById("texto").innerHTML = texto;
      document.getElementById("texto").style.display = "block";
    }
  }
}
  </script>

<a href="CadastroPrincipal.html"><button type="submit">Concluido</button></a>
-- >

</body>
</html>