<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * Date:    21.05.2019
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */

namespace zetsoft\cncmd;

use zetsoft\system\Az;
use zetsoft\system\control\ZControlCmd;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\helpers\ZStringHelper;

class ZetController extends ZControlCmd
{

    /**
     * Function  actions
     * @mention don't change name of function to action, this will cause conflict. Don't remove system array
     * @status return all console commands
     */
    public function actionss(): array
    {
        // php zet run:apply
        return [
            'adder' => [
                'create' => '',
                'create-by-id' => '',
                'clone' => '',
                'extract' => '',
                'remove-to-recycle' => '',
            ],
            'adder-test' => [
                'create' => '',
                'create-by-id' => '',
                'clone' => '',
                'extract' => '',
                'remove-to-recycle' => '',
            ],
            'api' => [
                'test' => ' it is status',
                'run' => '',
                'rest' => '',
                'all' => '',
                'action' => '',
            ],
            'app' => [
                'eyuf-clean' => '',
            ],
            'block' => [
                'run' => '',
            ],
            'cache' => [
                'flush-all' => '',
                'flush-cache' => '',
                'flush-schema' => '',
                'flush' => '',
                'flush-opcache' => '',
                'opcache-configs' => '',
                'assets' => '',
            ],
            'call-file' => [
                'run' => '',
                'call' => '',
                'start' => '',
            ],
            'create-extention' => [
                'run' => '',
            ],
            'currency' => [
                'currency' => '',
            ],
            'deamon' => [
                'chat' => '',
                'call-cdr' => '',
                'call-cell' => '',
            ],
            'elastic' => [
                'run' => '',
                'get' => '',
                'delete' => '',
            ],
            'faker' => [
                'run' => '',
                'form' => '',
                'service' => '',
                'service-test' => '',
                'model' => '',
            ],
            'fill' => [
                'run' => '',
                'start' => '',
                'cell' => '',
                'cell-start' => '',
            ],
            'image' => [
                'run' => '',
                'resize' => '',
            ],
            'insert' => [
                'clean' => '',
                'apply' => '',
                'create' => '',
            ],
            'lang' => [
                'file' => '',
                'scan' => '',
                'model' => '',
                'lang' => '',
                'run' => '',
            ],
            'marce-ami' => [
                'run' => '',
                'call' => '',
                'start' => '',
            ],
            'migra' => [
                'run' => '',
                'clean' => '',
                'scan' => '',
                'genid' => '',
            ],
            'model' => [
                'run' => '',
                'table' => '',
                'clean' => '',
            ],
            'name' => [
                'run' => '',
                'model' => '',
            ],
            'norms' => [
                'run' => '',
                'form' => '',
                'service' => '',
                'model' => '',
            ],
            'page' => [
                'pageapp' => '',
            ],
            'queue' => [
                'clear' => '',
                'service' => '',
                'all' => '',
                'run' => '',
                'runqueue' => '',
            ],
            'react-ami' => [
                'run' => '',
                'create-by-id' => '',
                'clone' => '',
                'extract' => '',
                'remove-to-recycle' => '',
            ],
            'rest' => [
                'run' => '',
            ],
            'run' => [
                'create' => '',
                'create-table' => '',
                'apply' => '',
                'apply-empty' => '',
                'clean' => '',
            ],
            'socket' => [
                'run' => '',
                'status' => '',
                'test' => '',
                'test2' => '',
            ],
            'sorting' => [
                'run' => '',
            ],
            'sphinx' => [
                'run' => '',
                'attach' => '',
                'search' => '',
            ],
            'start-autodial' => [
                'run' => '',
            ],
            'system' => [
                'register' => ' regenerate list of help',
                'generate-names' => ' Generate value for name column if `nameAuto = true` for all Models',
            ],
            'theme' => [
                'run' => '',
            ],
            'tnt' => [
                'run' => '',
                'search' => '',
                'delete' => '',
            ],
            'unit' => [
                'run' => '',
            ],
            'visuals-app' => [
                'run' => '',
                'model' => '',
                'form' => '',
            ],
            'visuals' => [
                'run' => '',
                'model' => '',
                'form' => '',
            ],
            'visuals-db' => [
                'run' => '',
                'model' => '',
                'form' => '',
            ],
            'web' => [
                'run' => '',
                'folder' => '',
                'action' => '',
            ],
            'widget' => [
                'run' => '',
            ],
        ];
    }

    public function actionRun($argv1, $argv2 = '')
    {
        $methods = $this->actionss();
        $arguments = $this->customVariables;
        if ($argv1 === 'help') {
            echo " \033[33mPrepared arguments: ";
            $numItems = count($arguments);
            $i = 0;
            foreach ($arguments as $vars) {
                ++$i;
                if ($numItems === $i)
                    echo $vars . ".\033[0m";
                else
                    echo $vars . ', ';
            }
            echo PHP_EOL;
            echo " example:\033[34m php zet run:apply class=User app=market\033[0m" . PHP_EOL;
            echo ' List of methods: ' . PHP_EOL;
            foreach ($methods as $controller => $method) {
                echo ' ' . $controller . ':' . PHP_EOL;
                foreach ($method as $func => $comment) {
                    echo '    ' . $func . ' - ' . $comment . PHP_EOL;
                }
            }
            return;
        }
        $exploded = explode(':', $argv1);
        $explodedArguments = explode('.', $argv2);
        $implodedArguments = '';
        foreach ($explodedArguments as $args) {
            $found = false;
            foreach ($arguments as $vars) {
                if (ZStringHelper::find($args, $vars)) {
                    $implodedArguments .= '--' . $args . ' ';
                    $found = true;
                    break;
                }
            }
            if (!$found)
                $implodedArguments .= $args;
        }
        $return = "\033[33m" . "Method not given. Please run `php zet help` to get list of methods\033[0m";
        if (count($exploded) === 2) {
            $functions = '';
            foreach ($methods as $key => $method) {
                if ($exploded[0] === $key) {
                    $found = false;
                    foreach ($method as $func => $comment) {
                        $functions .= ' ' . $func . PHP_EOL;
                        if ($exploded[1] === $func) {
                            $return = shell_exec("php D:\Develop\Projects\asrorz\zetsoft\\excmd\asrorz.php cores/{$exploded[0]}/{$exploded[1]} $implodedArguments");
                            $found = true;
                            break;
                        }
                    }
                    if (!$found)
                        $return = "\033[31mThere is not like {$exploded[1]} function . List of functions for `{$exploded[0]}`:\033[0m\033[33m" . PHP_EOL . ' ' . $functions . "\033[0m";
                }
            }
        }
        echo $return;
    }
}
