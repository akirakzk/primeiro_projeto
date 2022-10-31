<?php
include 'openconexao.php';
include 'navbar.php';
$sql = "SELECT * FROM kanzaki";
$result = mysqli_query($dbconn, $sql);
?>
<style>
    body{
        background-color: rgb(125, 133, 207);
    }
</style>
<div class="line"></div>
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Telefone</th>
      <th scope="col">Email</th>
      <th scope="col">Data de Nascimento</th>
      <th scope="col">Cidade</th>
      <th scope="col">Sexo</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($result as $line) {
      $kanzaki_id = $line['id'];
    ?>

      <tr class="table-dark">
        <td scope="row"><?= $line['nome'] ?></td>
        <td scope="row"><?= $line['telefone'] ?></td>
        <td scope="row"><?= $line['email'] ?></td>
        <td scope="row"><?= $line['data_nascimento'] ?></td>
        <td scope="row"><?= $line['cidade'] ?></td>
        <td scope="row"><?= $line['sexo'] ?></td>
        <td scope="row">
          <a href="editarcadastro.php?kanzaki_id=<?= $kanzaki_id; ?>" class="btn btn-outline-secondary">Editar</a>
          <a href="delete.php?kanzaki_id=<?= $kanzaki_id; ?>" class="btn btn-outline-secondary" onclick="return confirm('Tem certeza que quer excluir?')">Deletar</a>
        </td>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>
<?php
mysqli_free_result($result);
include 'closeconexao.php';
?>