<?php

include_once('Sql.php');
include_once('User.php');
include_once('no-sql.php');

$usuario = new User(new Sql());
$usuario2 = new User(new NoSql());
echo $usuario->save();
echo $usuario2->save();

