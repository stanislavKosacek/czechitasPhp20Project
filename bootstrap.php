<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$jazyk = $_GET['jazyk'] ?? 'cs';

$povoleneJazyky = ['cs', 'en'];

if (in_array($jazyk, $povoleneJazyky)) {
  require 'translate/' . $jazyk . '.php';
} else {
  require 'translate/cs.php';
}

require 'config/connection.php';

require "functions.php";
require "config/config.php";