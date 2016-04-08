<?php

namespace LaravelDoctrine\ODM\Loggers;

use Doctrine\ORM\Configuration;
use Doctrine\ORM\EntityManagerInterface;
use LaravelDoctrine\ODM\Loggers\File\DoctrineFileLogger;
use Psr\Log\LoggerInterface as Log;

class FileLogger implements Logger
{
    /**
     * @var Log
     */
    protected $logger;

    /**
     * @param Log $logger
     */
    public function __construct(Log $logger)
    {
        $this->logger = $logger;
    }

    /**
     * @param EntityManagerInterface $em
     * @param Configuration          $configuration
     */
    public function register(EntityManagerInterface $em, Configuration $configuration)
    {
        $logger = new DoctrineFileLogger($this->logger);
        $configuration->setSQLLogger($logger);
    }
}
