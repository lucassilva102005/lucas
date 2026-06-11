<?php
include("conexao.php");

$id = $_GET['id'];

$resultado = mysqli_query($conn,
"SELECT * FROM usuarios WHERE id=$id");

$usuario = mysqli_fetch_assoc($resultado);
?>

<form action="atualizar.php" method="POST">

    <input type="hidden" name="id"
    value="<?= $usuario['id']; ?>">

    <input type="text" name="nome"
    value="<?= $usuario['nome']; ?>">

    <input type="email" name="email"
    value="<?= $usuario['email']; ?>">

    <button type="submit">Atualizar</button>

</form>