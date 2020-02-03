<?php
/**
 * Setup the required classes and show the page.
 */

// Where are the files?
define("ROOT_PATH", realpath(__DIR__ . "/.."));

// Include the configuration file
require ROOT_PATH . "/config/config.php";

// Save the invoice search value
$search = $_SESSION["invoice_search"] ?? null;

// Import the main page
require ROOT_PATH . "/view/header.php";
require ROOT_PATH . "/view/main.php";
