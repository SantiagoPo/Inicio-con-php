<?php

$conexion = mysqli_connect("localhost", "root", "admin", "front_back_iii");


if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$password = $_POST['password'];


$sql = "INSERT INTO usuarios (nombre, apellido, email, password) VALUES ('$nombre', '$apellido', '$email', '$password')";

if (mysqli_query($conexion, $sql)) {
    echo "<script>alert('Registro exitoso. Serás redireccionado.'); window.location.href = 'index.html';</script>";
    header("refresh:2; url=index.html");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}

mysqli_close($conexion);
?>