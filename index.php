<?php
include("conexao.php");

$resultado = mysqli_query($conn, "SELECT * FROM usuarios");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>CRUD PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>Cadastro de Usuários</h1>

    <form action="salvar.php" method="POST">
        <input type="text" name="nome" placeholder="Nome" required>
        <input type="email" name="email" placeholder="E-mail" required>
        <button type="submit">Salvar</button>
    </form>

    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>

        <?php while($usuario = mysqli_fetch_assoc($resultado)){ ?>
        <tr>
            <td><?= $usuario['id']; ?></td>
            <td><?= $usuario['nome']; ?></td>
            <td><?= $usuario['email']; ?></td>
            <td>
                <a href="editar.php?id=<?= $usuario['id']; ?>">Editar</a>
                <a href="excluir.php?id=<?= $usuario['id']; ?>">Excluir</a>
            </td>
        </tr>
        <?php } ?>

    </table>

</div>

</body>
</html>