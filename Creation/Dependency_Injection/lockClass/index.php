<?php
require 'Chest.php';
require 'Lock.php';

$lock = new Lock();

$chest = new Chest($lock);


$chest->close();
$chest->open();

?>