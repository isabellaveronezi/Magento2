<?php

namespace Mastering\SampleModule\Model;

use Monolog\Logger;
use Magento\Framework\Logger\Handler\Base;

class Debug extends Base
{
    /**
     * @var string
     */
    protected $fileName = '/var/log/debug.log';

    /**
     * @var int
     */
    protected $loggerType = Logger::DEBUG;
}

