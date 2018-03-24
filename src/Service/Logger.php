<?php
/**
 * Created by PhpStorm.
 * User: allse
 * Date: 23.03.2018
 * Time: 18:01
 */
declare(strict_types=1);

namespace App\Service;


class Logger
{
    public function log(string $messages)
    {
        var_dump($messages);
    }
}