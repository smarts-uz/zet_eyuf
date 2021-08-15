<?php

namespace zetsoft\system\targets\ziganshinalexey\Target;


use Monolog\Logger;
use yii\log\Logger as YiiLogger;
use yii\log\Target;
use zetsoft\system\Az;
use zetsoft\system\targets\Mero\Target\MonologComponent\MonologComponent;

/**
 * MonologTarget send log messages to Monolog channel.
 *
 * @author Rafael Mello <merorafael@gmail.com>
 */
class MonologTarget extends Target
{
    /**
     * @var MonologComponent Monolog component object
     */
    protected $component;

    /**
     * @var string Component name used in the configuration Yii2
     */
    public $componentName = 'monolog';

    /**
     * @var string Monolog channel name
     */
    public $channel = 'main';

    /**
     * @var array Interpret Yii 2 levels to Monolog levels
     */
    private $monologLevels = [
        YiiLogger::LEVEL_TRACE => Logger::DEBUG,
        YiiLogger::LEVEL_PROFILE_BEGIN => Logger::DEBUG,
        YiiLogger::LEVEL_PROFILE_END => Logger::DEBUG,
        YiiLogger::LEVEL_INFO => Logger::INFO,
        YiiLogger::LEVEL_WARNING => Logger::WARNING,
        YiiLogger::LEVEL_ERROR => Logger::ERROR,
    ];

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();
        $this->component = Az::$app->monolog;
    }

    /**
     * {@inheritdoc}
     */
    public function export()
    {
        $logger = $this->component->getLogger($this->channel);
        foreach ($this->messages as $message) {
            list($text, $level, $category) = $message;
            $logger->log(
                $this->monologLevels[$level],
                "[$category] $text"
            );
        }
    }
}
