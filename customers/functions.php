<?php

require_once('../config.php');
require_once(DBAPI);

$customers = null;
$customer = null;

// Listagem de clientes
function index() {
    global $customers;
	$customers = find_all('customers');
}

// Cadastro de clientes
function add() {
    if (!empty($_POST['customer'])) {  
      $customer = $_POST['customer'];
      save('customers', $customer);
      header('location: index.php');
    }
}