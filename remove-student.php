<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infraestructure\Persistence\ConnectionCreator;

require 'vendor/autoload.php';

$pdo =ConnectionCreator::createConnection();

$preparedStatement = $pdo->prepare('DELETE FROM students WHERE id=?;');
$preparedStatement->bindValue(1, 4, PDO::PARAM_INT);

var_dump($preparedStatement->execute());