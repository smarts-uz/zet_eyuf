<?php

namespace zetsoft\system\targets\ziganshinalexey\Handler\Factory;


use Monolog\Handler\SyslogHandler;
use Monolog\Logger;
use zetsoft\system\targets\ziganshinalexey\Exception\ParameterNotFoundException;

class SyslogFactory extends AbstractFactory
{
    /**
     * {@inheritdoc}
     */
    protected function checkParameters()
    {
        $this->config = array_merge(
            [
                'level' => Logger::DEBUG,
                'facility' => LOG_USER,
                'logopts' => LOG_PID,
                'bubble' => true,
            ],
            $this->config
        );

        $parametersRequired = ['ident'];
        foreach ($parametersRequired as &$parameter) {
            if (!isset($this->config[$parameter])) {
                throw new ParameterNotFoundException(
                    sprintf("Parameter '%s' not found in handler configuration", $parameter)
                );
            }
        }

        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function createHandler()
    {
        return new SyslogHandler(
            $this->config['ident'],
            $this->config['facility'],
            $this->config['level'],
            $this->config['bubble'],
            $this->config['logopts']
        );
    }
}
