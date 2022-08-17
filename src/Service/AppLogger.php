<?php

namespace App\Service;
use think\facade\Log;
class AppLogger
{
    const TYPE_LOG4PHP = 'log4php';
    const TYPE_THINKLOG = 'think-log';

    private $logger;
    private $logType;

    public function __construct($type = self::TYPE_LOG4PHP)
    {
        if ($type == self::TYPE_LOG4PHP) {
            $this->logger = \Logger::getLogger("Log");
            $this->logType = self::TYPE_LOG4PHP;
        }
        elseif($type == self::TYPE_THINKLOG){
            $this->logger = Log::init();
            $this->logType = self::TYPE_THINKLOG;
        }
    }

    public function info($message = '')
    {
        if($this->logType == self::TYPE_THINKLOG){
            $message = strtoupper($message);
        }
        $this->logger->info($message);
    }

    public function debug($message = '')
    {
        if($this->logType == self::TYPE_THINKLOG){
            $message = strtoupper($message);
        }
        $this->logger->debug($message);
    }

    public function error($message = '')
    {
        if($this->logType == self::TYPE_THINKLOG){
            $message = strtoupper($message);
        }
        $this->logger->error($message);
    }
}