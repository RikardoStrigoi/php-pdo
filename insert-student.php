<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infraestructure\Persistence\ConnectionCreator;

require 'vendor/autoload.php';

$pdo = ConnectionCreator::createConnection();

$student = new Student(
    null,
    'Heloise Ferreira',
    new \DateTimeImmutable('2011-08-01')
);

$sqlInsert = "INSERT INTO students (name, birth_date) VALUES (:name, :birth_date);";
$statement = $pdo->prepare($sqlInsert);
$statement->bindValue(':name', $student->name());
$statement->bindValue(':birth_date', $student->birthDate()->format('Y-m-d'));

if ($statement->execute()) {
    echo "Aluno Incluído";
}