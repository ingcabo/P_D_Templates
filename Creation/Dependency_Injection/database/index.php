<?php
require 'Database.php';
require 'User.php';

$db = new Database();

$user = new User($db);

$user->create(['username'=>'carlos']);





?>