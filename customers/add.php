<?php 
  require_once('functions.php'); 
  add();
?>

<?php include(HEADER_TEMPLATE); ?>

<div class="container mt-5 px-5">
    <h2>Novo Cliente</h2>
    <form action="add.php" method="post" class="mt-5">
        <div class="row">
            <div class="form-group col">
                <label for="name">Nome Completo</label>
                <input type="text" class="form-control" name="customer['name']">
            </div>
            <div class="form-group col">
                <label for="campo2">CPF</label>
                <input type="text" class="form-control" name="customer['cpf']">
            </div>
        </div>
        <div class="row">
            <div class="form-group col">
                <label for="campo1">Email</label>
                <input type="text" class="form-control" name="customer['email']">
            </div>
            <div class="form-group col">
                <label for="campo2">Telefone</label>
                <input type="text" class="form-control" name="customer['phone']">
            </div>
        </div>  
        <div id="actions" class="row">
            <div class="col text-right mt-3">
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="index.php" class="btn btn-default">Cancelar</a>
            </div>
        </div>
    </form>
</div>
<?php include(FOOTER_TEMPLATE); ?>