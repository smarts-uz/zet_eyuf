<?php

namespace zetsoft\service\gitapp;


use Gitonomy\Git\Repository;
use zetsoft\system\kernels\ZFrame;

require Root . '/vendors/gitapp/vendor/autoload.php';

/*
 *
 *
 * class Gitlib
 * @package zetsoft/service/gitapp
 * @author
 * https://packagist.org/packages/gitonomy/gitlib
 */

class Gitlib extends ZFrame
{
    #region example

    public function example()
    {

        $repository = new Repository('d:\Develop\Projects\asrorz\testing\.git');

        vd($repository);
    }

    #endregion
}
