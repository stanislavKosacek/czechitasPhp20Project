<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

$jazyk = $_SESSION["jazyk"] ?? 'cs';

$povoleneJazyky = ['cs' => "Čeština", 'en' => "English"];

if (array_key_exists($jazyk, $povoleneJazyky)) {
  require 'translate/' . $jazyk . '.php';
} else {
  require 'translate/cs.php';
}

require 'config/connection.php';

require "functions.php";
require "config/config.php";