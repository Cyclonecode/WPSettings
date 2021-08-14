<?php

namespace Cyclonecode\Plugin\Logger;

class FileLogger extends AbstractLogger
{
    private $logFile = 'log.txt';
    private $format = 'Y-m-d H:i:s';

    public function setDateFormat(string $format)
    {
        $this->format = $format;
    }

    public function setLogFile(string $file)
    {
        $this->logFile = $file;
    }

    protected function addEntry(int $level, string $message)
    {
        $trace = debug_backtrace();
        $context = $trace[1];
        $content = $message . ' : ' . date($this->format, time()) . ' ' . $context['file'] . ':' . $context['line'] . PHP_EOL;
        $fp = @fopen($this->logFile, 'a+');
        if ($fp) {
            fwrite($fp, $content);
            fflush($fp);
            fclose($fp);
        }
    }

    public function log(string $message)
    {
        $this->addEntry(self::LOG, $message);
    }

    public function debug(string $message)
    {
        $this->addEntry(self::DEBUG, $message);
    }

    public function warn(string $message)
    {
        $this->addEntry(self::WARNING, $message);
    }

    public function notice(string $message)
    {
        $this->addEntry(self::NOTICE, $message);
    }
}
