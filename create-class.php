<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infraestructure\Persistence\ConnectionCreator;
use Alura\Pdo\Infraestructure\Repository\PdoStudentRepository;

require 'vendor/autoload.php';

$connection = ConnectionCreator::createConnection();

$studentRepository = new PdoStudentRepository($connection);

$connection->beginTransaction();

try {
    $aStudent = new Student(null, 'Ariana Ferreira', new DateTimeImmutable('1997-03-31'));

    $studentRepository->save($aStudent);

    $anotherStudent = new Student(null, 'Jonathan Luiz', new DateTimeImmutable('1994-02-21'));

    $studentRepository->save($anotherStudent);

    $connection->commit();
} catch (RuntimeException $e) {
    echo $e->getMessage();
    $connection->rollBack();
}