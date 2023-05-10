<?php
    session_start();
    include_once('config.php');

    if (!isset($_SESSION['email']) || !isset($_SESSION['placa'])) {
        unset($_SESSION['email']);
        unset($_SESSION['placa']);
        header('Location: CadastroPrincipal.php');
        exit();
    }

    $logado = $_SESSION['email'];

    $sql = "SELECT * FROM cliente";
    $result = $conexao->query($sql);

    if (!$result) {
        die('Erro na consulta: ' . mysqli_error($conexao));
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
    Dados do usuário:

    <div class="tabelas">
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>id_cliente</th>
                    <th>nome</th>
                    <th>email</th>
                    <th>data_cadastro</th>
                    <th>horario</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($user_data = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $user_data['id_cliente']; ?></td>
                        <td><?php echo $user_data['nome']; ?></td>
                        <td><?php echo $user_data['email']; ?></td>
                        <td><?php echo $user_data['data_cadastro']; ?></td>
                        <td><?php echo $user_data['horario']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
