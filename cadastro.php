<?php
 header("location:alertcadastro.php");
  include 'openconexao.php';
  $sql = "INSERT INTO kanzaki (nome, telefone, email, data_nascimento, cidade, sexo) VALUES (?, ?, ?, ?, ?, ?)";
  $stmt = $dbconn->prepare($sql);
  $stmt->bind_param("ssssss", $nome, $telefone, $email, $data_nascimento, $cidade, $sexo);

  $nome = $_POST["nome"];
  $telefone = $_POST["telefone"];
  $email = $_POST["email"];
  $data_nascimento = $_POST["data_nascimento"];
  $cidade = $_POST["cidade"];
  $sexo = $_POST["sexo"];   
//  echo "nome . $nome" ; 
//  echo "<hr>";
//  echo "sobrenome . $sobrenome";
//  echo "<hr>";
//  echo "email . $email";
//  echo "<hr>";
//  echo "senha . $senha";
//  echo "<hr>";
//  echo "telefone . $telefone";
//  echo "<hr>";
//  echo "cep . $cep";
//  echo "<hr>";
//  echo "sexo . $sexo";
//  echo "<hr>";
//  echo "notificacao . $notificacao";
  $stmt->execute();
  $stmt->close();
  include 'closeconexao.php';
  ?>
