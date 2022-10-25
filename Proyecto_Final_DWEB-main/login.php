<?php

session_start();

require 'config/database.php';

if (!empty($_POST['usuario']) && !empty($_POST['password'])) {
  $records = $conn->prepare('SELECT id_login, usuario, contra FROM login1 WHERE usuario = usuario;');
  require_once "vistas.php";
  $records->bindParam('usuario', $_POST['usuario']);
  $records->execute();
  $results = $records->fetch(PDO::FETCH_ASSOC);
  require_once "vistas.php";

  $message = '';

  if (count($results) > 0 && password_verify($_POST['password'], $results['contra'])) {
    $_SESSION['id_login'] = $results['id_login'];
  } else {
    $message = 'Sorry, those credentials do not match';
  }
}

?>

