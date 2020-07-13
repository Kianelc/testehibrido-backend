<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>


<?php include(HEADER_TEMPLATE); ?>

<?php $db = open_database(); ?>

<?php if ($db) : ?>

<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Dashboard</h1>
        <p class="lead text-muted">Sistema de cadastro de clientes</p>
        <p>
            <a href="<?php echo BASEURL; ?>customers/add.php" class="btn btn-primary my-2">Novo Cliente</a>
            <a href="<?php echo BASEURL; ?>customers" class="btn btn-secondary my-2">Gerenciar Clientes</a>
        </p>
    </div>
</section>

<?php else : ?>
	<div class="alert alert-danger" role="alert">
		<p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
	</div>

<?php endif; ?>

<?php include(FOOTER_TEMPLATE); ?>