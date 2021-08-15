<?php
/*
* Author: Madaminov Shaykhnazar
*
*/

namespace zetsoft\service\tests;
use zetsoft\service\spatie\ImageOptimizer;
use zetsoft\system\helpers\ZTest;
use zetsoft\system\kernels\ZFrame;

class ImageOptim extends ZFrame
{
    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
    }
    public function assertTest(){
        ZTest::assertEquals(1, 1);
    }
    /**
     * @param $pathToImage
     * This method will be optimizate self given picture and don't save old
     */
    public function Imager($pathToImage){
        $optimizerChain = OptimizerChainFactory::create();
        $optimizerChain->optimize($pathToImage);
    }

    /**
     * @param $pathToImage
     * @param $pathToOutput
     * This method created new optimizated picture and save old
     */
    public function ImagerSaveOld($pathToImage, $pathToOutput){
        $optimizerChain = OptimizerChainFactory::create();
        $optimizerChain->optimize($pathToImage, $pathToOutput);
    }


}
