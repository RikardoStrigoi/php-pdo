<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$student = new Student(
    null,
    'Ricardo Ferreira',
    new \DateTimeImmutable('1990-08-29')
);

echo $student->age();
