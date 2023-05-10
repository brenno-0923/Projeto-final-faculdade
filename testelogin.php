<?php
    session_start();
    // print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['placa']))
    {
        // Acessa
        include_once('config.php');
        $email = $_POST['email'];
        $placa = $_POST['placa'];

        // print_r('Email: ' . $email);
        // print_r('<br>');
        // print_r('Senha: ' . $senha);

        $sql = "SELECT c.email, v.placa 
        FROM cliente c 
        JOIN veiculo v ON c.id_cliente = v.id_veiculo
        WHERE c.email = '$email' or v.placa = '$placa'";


        $result = $conexao->query($sql);
        if (!$result) {
            die('Erro na consulta SQL: ' . mysqli_error($conexao));
        }

        // print_r($sql);
        // print_r($result);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['email']);
            unset($_SESSION['placa']);
            header('Location: CadastroPrincipal.php');
        }
        else
        {
            $_SESSION['email'] = $email;
            $_SESSION['placa'] = $placa;
            header('Location: sistema.php');
        }
    }
    else
    {
        // Não acessa
        header('Location: CadastroPrincipal.php');
    }
?>