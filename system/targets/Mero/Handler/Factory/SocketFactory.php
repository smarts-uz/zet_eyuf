<?php

namespace zetsoft\system\targets\Mero\Handler\Factory;

use Monolog\Handler\SocketHandler;
use Monolog\Logger;
use zetsoft\system\targets\Mero\Exception\ParameterNotFoundException;


class SocketFactory extends AbstractFactory
{
    /**
     * {@inheritdoc}
     */
    protected function checkParameters()
    {
        $this->config = array_merge(
            [
                'level' => Logger::DEBUG,
                'bubble' => true,
            ],
            $this->config
        );

        $parametersRequired = ['connection_string'];
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
        $handler = new SocketHandler(
            $this->config['connection_string'],
            $this->config['level'],
            $this->config['bubble']
        );
        if (isset($this->config['timeout'])) {
            $handler->setTimeout($this->config['timeout']);
        }
        if (isset($this->config['connection_timeout'])) {
            $handler->setConnectionTimeout($this->config['connection_timeout']);
        }
        if (isset($this->config['persistent'])) {
            $handler->setPersistent($this->config['persistent']);
        }

        return $handler;
    }
}
