<?php

use Alura\Pdo\Infraestructure\Persistence\ConnectionCreator;

require 'vendor/autoload.php';

$pdo =ConnectionCreator::createConnection();

$preparedStatement = $pdo->prepare('DELETE FROM phones WHERE id=?;');
$preparedStatement->bindValue(1, 3, PDO::PARAM_INT);

var_dump($preparedStatement->execute());