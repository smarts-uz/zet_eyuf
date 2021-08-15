<?php

namespace zetsoft\service\gitapp;

require Root.'/vendors/gitapp/vendor/autoload.php';


use GitElephant\Repository;
use zetsoft\system\kernels\ZFrame;

/*
 * class Gitelephant
 * @package zetsoft/service/gitapp
 * @author by Keldiyor
 * https://packagist.org/packages/cypresslab/gitelephant
 */

class Gitelephant extends ZFrame
{

    // ishladi
    public function example()
    {

         $repo = new Repository('d:\Develop\Projects\asrorz\testing');
//       or the factory method
         $repo = Repository::open('d:\Develop\Projects\asrorz\testing');
         vd($repo);



    }

}
