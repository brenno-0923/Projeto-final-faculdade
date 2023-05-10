<?php 
if(isset($_POST['submit']))
{

include_once('config.php');

$nome = $_POST['nome'];
$placa= $_POST['placa'];
$modelo = $_POST['modelo'];
$email = $_POST['email'];
$data_cadastro= $_POST['data_cadastro'];
$horario = $_POST['horario'];



$result = mysqli_query($conexao, "INSERT INTO cliente (nome,email,data_cadastro,horario) 
VALUES ('$nome','$email','$data_cadastro','$horario')");

$result = mysqli_query($conexao, "INSERT INTO veiculo(placa,modelo) 
VALUES ('$placa','$modelo' )");


header("Location: CadastroPrincipal.php"); // redireciona para a página do formulário de lavagem


}
?>
  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div>
<form action="Registrar.php" method="POST">

    <label>Nome:</label>
    <input type="text" name="nome" id="nome">
</div> <p>

<div>
    <label>Placa do veiculo:</label>
    <input type="text" name="placa" id="placa">
</div> <p>

 <div>
    <label>Modelo do veiculo:</label>
    <input type="text" name="modelo" id="modelo">
</div> <p>

<div>
    <label>Email:</label>
    <input type="text" name="email" id="email">
</div>
        <p>
<div>
agendar?
  <input type="radio" name="agendamento" id="confirmar"><label
        for="agendamento">Sim</label> 

        <input type="radio" name="agendamento" id="negar"><label 
    for="confirmar">Não</label>
</div> <p>  

<div>
 <label>Data:</label>
 <input type="date" name="data_cadastro" id="data_cadastro"> <p>

 <label>Hora:</label>
 <input type="time" name="horario" id="horario">   

 <p>



</div>



<input type="submit" name="submit" id="submir">

   
</form>

<a href="Cliente.html"><button type="submit">cadastro finalizado</button></a> 
   

</body>
</html>