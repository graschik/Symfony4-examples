<?php
declare(strict_types=1);

namespace App\Service;

class Calculator
{
    private $logger;

    public function __construct(Logger $logger)
    {
        $this->logger=$logger;
    }

    public function sum(int $a, int $b)
    {
        $this->logger->log('Stasik loh');

        return $a + $b;
    }
}