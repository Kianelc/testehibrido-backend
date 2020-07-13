<?php 
  require_once('functions.php'); 
  edit();
?>
<?php include(HEADER_TEMPLATE); ?>
<div class="container mt-5 px-5">
  <h2>Atualizar Cliente</h2>
  <form action="edit.php?id=<?php echo $customer['id']; ?>" method="post">
    <div class="row mt-5">
      <div class="form-group col">
        <label for="name">Nome</label>
        <input type="text" class="form-control" name="customer['name']" value="<?php echo $customer['name']; ?>">
      </div>
      <div class="form-group col">
        <label for="campo2">CPF</label>
        <input type="text" class="form-control" name="customer['cpf']" value="<?php echo $customer['cpf']; ?>">
      </div>
    </div>
    <div class="row">
      <div class="form-group col">
        <label for="campo1">Email</label>
        <input type="text" class="form-control" name="customer['email']" value="<?php echo $customer['email']; ?>">
      </div>
      <div class="form-group col">
        <label for="campo2">Telefone</label>
        <input type="text" class="form-control" name="customer['phone']" value="<?php echo $customer['phone']; ?>">
      </div>
    </div>
    <div id="actions" class="row">
      <div class="col mt-3 text-right">
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="index.php" class="btn btn-default">Cancelar</a>
      </div>
    </div>
  </form>
</div>
<?php include(FOOTER_TEMPLATE); ?>