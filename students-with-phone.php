<?php

use Alura\Pdo\Infraestructure\Persistence\ConnectionCreator;
use Alura\Pdo\Infraestructure\Repository\PdoStudentRepository;

require_once 'vendor/autoload.php';

$connection = ConnectionCreator::createConnection();

$repository = new PdoStudentRepository($connection);

$studentList = $repository->studentsWithPhones();

var_dump($studentList);