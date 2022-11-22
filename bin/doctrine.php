<?php
// bin/doctrine

use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Doctrine\ORM\Tools\Console\EntityManagerProvider\SingleManagerProvider;
use Uni9\StudyList\Controller\EntityManagerCreator;

// Adjust this path to your actual bootstrap.php
require __DIR__ . '/../vendor/autoload.php';

$entityManager = EntityManagerCreator::createEntity();

ConsoleRunner::run(
    new SingleManagerProvider($entityManager)
);