<?php

namespace Cyclonecode\Plugin\Logger;

use Cyclonecode\Plugin\Common\Singleton;

abstract class AbstractLogger extends Singleton implements LoggerInterface
{
    public static $levels = [
        self::LOG => 'LOG',
        self::DEBUG => 'DEBUG',
        self::NOTICE => 'NOTICE',
        self::WARNING => 'WARNING',
        self::CRITICAL => 'CRITICAL',
    ];
}
