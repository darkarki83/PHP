<?php
// Include necessary files
require_once '../app/App.php';

// Process CSV files and calculate totals
$transactions = App::processCSVFiles();
$totals = App::calculateTotals($transactions);

// Include the transactions view
include '../views/transactions.php';
?>
