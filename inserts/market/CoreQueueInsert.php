<?php

namespace zetsoft\inserts\market;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\core\CoreQueue;

class CoreQueueInsert extends ZInsert
{

    public function run()
    {

        $this->model = new CoreQueue();

        $this->model->id = 44;
        $this->model->sort = null;
        $this->model->name = '>reactphp>childProcess>ping mail.ru -t';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->app = null;
        $this->model->namespace = 'reactphp';
        $this->model->service = 'childProcess';
        $this->model->method = 'runCommand';
        $this->model->args = 'ping mail.ru -t';
        $this->model->cmd = 'OUT > ,T:\\PHP\\Projects\\zetsoft>call d:\\Develop\\Projects\\server\\php7\\nssm-ALL.cmd ,OUT > ,Message: ,###		STARTING		=>	 | actionRun,Host: 10.10.3.207 | PC: 10.10.3.207 | User: 127.0.0.1 | asrorz | WORKPC,CMD | INFO | 30-07-2020 04:48:36 | 18.64MB/22MB | 14852,ERR > Exception \'yii\\base\\UnknownPropertyException\' with message \'Getting unknown property: zetsoft\\system\\module\\ZCmdApp::reactphp\',in T:\\PHP\\Projects\\zetsoft\\vendor\\yiisoft\\yii2\\base\\Component.php:154,Stack trace:,#0 T:\\PHP\\Projects\\zetsoft\\vendor\\yiisoft\\yii2\\di\\ServiceLocator.php(77): yii\\base\\Component->__get(),#1 T:\\PHP\\Projects\\zetsoft\\service\\utility\\Execs.php(276): yii\\di\\ServiceLocator->__get(),#2 T:\\PHP\\Projects\\zetsoft\\service\\utility\\Execs.php(250): zetsoft\\service\\utility\\Execs->service(),#3 T:\\PHP\\Projects\\zetsoft\\cncmd\\ALL\\cores\\QueueController.php(77): zetsoft\\service\\utility\\Execs->serviceRun(),#4 [internal function]: zetsoft\\cncmd\\ALL\\cores\\QueueController->actionRun(),#5 T:\\PHP\\Projects\\zetsoft\\vendor\\yiisoft\\yii2\\base\\InlineAction.php(57): call_user_func_array(),#6 T:\\PHP\\Projects\\zetsoft\\vendor\\yiisoft\\yii2\\base\\Controller.php(157): yii\\base\\InlineAction->runWithParams(),#7 T:\\PHP\\Projects\\zetsoft\\vendor\\yiisoft\\yii2\\console\\Controller.php(164): yii\\base\\Controller->runAction(),#8 T:\\PHP\\Projects\\zetsoft\\vendor\\yiisoft\\yii2\\base\\Module.php(528): yii\\console\\Controller->runAction(),#9 T:\\PHP\\Projects\\zetsoft\\vendor\\yiisoft\\yii2\\console\\Application.php(180): yii\\base\\Module->runAction(),#10 T:\\PHP\\Projects\\zetsoft\\vendor\\yiisoft\\yii2\\console\\Application.php(147): yii\\console\\Application->runAction(),#11 T:\\PHP\\Projects\\zetsoft\\vendor\\yiisoft\\yii2\\base\\Application.php(386): yii\\console\\Application->handleRequest(),#12 T:\\PHP\\Projects\\zetsoft\\configs\\ALL.php(135): yii\\base\\Application->run(),#13 T:\\PHP\\Projects\\zetsoft\\excmd\\ALL\\asrorz.php(13): require(\'T:\\\\PHP\\\\Projects...\'),#14 {main},';
        $this->model->status = 'finished';
        $this->model->session = '';
        $this->model->pid = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new CoreQueue();

        $this->model->id = 35;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->app = null;
        $this->model->namespace = 'calls';
        $this->model->service = 'marceAMI';
        $this->model->method = 'call';
        $this->model->args = '124';
        $this->model->cmd = 'OUT > 
D:\\Develop\\Projects\\asrorz\\zetsoft>call d:\\Develop\\Projects\\server\\php7\\nssm-ALL.cmd 
OUT > Message: 

###		STARTING		=>	 | actionRun
Host: 10.10.3.71 | PC: 127.0.0.1 | User: 127.0.0.1 | asrorz | PC71CMD | INFO | 03-07-2020 11:29:18 | 18.95MB/22MB | 21548\\\\\\\\\\\\\\\\\\\\\\\"online\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:275
OUT > \\\\\\\\\\\\\\\\\\\\\\\"0 Status extention\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:281
OUT > \\\\\\\\\\\\\\\\\\\\\\\"304 called\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:302
\\\\\\\\\\\\\\\\\\\\\\\"304Call endedsuccess\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:303
\\\\\\\\\\\\\\\\\\\\\\\"online\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:275
OUT > \\\\\\\\\\\\\\\\\\\\\\\"8 Status extention\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:281
OUT > \\\\\\\\\\\\\\\\\\\\\\\"online\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:275
\\\\\\\\\\\\\\\\\\\\\\\"8 Status extention\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:281
OUT > \\\\\\\\\\\\\\\\\\\\\\\"online\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:275
\\\\\\\\\\\\\\\\\\\\\\\"1 Status extention\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:281
OUT > \\\\\\\\\\\\\\\\\\\\\\\"online\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:275
\\\\\\\\\\\\\\\\\\\\\\\"1 Status extention\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:281
OUT > \\\\\\\\\\\\\\\\\\\\\\\"online\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:275
\\\\\\\\\\\\\\\\\\\\\\\"0 Status extention\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:281
OUT > \\\\\\\\\\\\\\\\\\\\\\\"304 called\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:302
\\\\\\\\\\\\\\\\\\\\\\\"304Call endedsuccess\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:303
\\\\\\\\\\\\\\\\\\\\\\\"online\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:275
OUT > \\\\\\\\\\\\\\\\\\\\\\\"8 Status extention\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:281
OUT > \\\\\\\\\\\\\\\\\\\\\\\"online\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:275
\\\\\\\\\\\\\\\\\\\\\\\"1 Status extention\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:281
OUT > \\\\\\\\\\\\\\\\\\\\\\\"online\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:275
\\\\\\\\\\\\\\\\\\\\\\\"0 Status extention\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:281
OUT > \\\\\\\\\\\\\\\\\\\\\\\"306 called\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:302
\\\\\\\\\\\\\\\\\\\\\\\"306Call endederror\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:303
\\\\\\\\\\\\\\\\\\\\\\\"online\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:275
\\\\\\\\\\\\\\\\\\\\\\\"0 Status extention\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:281
';
        $this->model->status = 'process';
        $this->model->session = 'ea439086d5558e691104139d1433ebdf83b5bbeb800100d7ae32539bea4d8645';
        $this->model->pid = 14240;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new CoreQueue();

        $this->model->id = 34;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->app = null;
        $this->model->namespace = 'calls';
        $this->model->service = 'marceAMI';
        $this->model->method = 'call';
        $this->model->args = '124';
        $this->model->cmd = 'OUT > 
D:\\Develop\\Projects\\asrorz\\zetsoft>call d:\\Develop\\Projects\\server\\php7\\nssm-ALL.cmd 
OUT > Message: 

###		STARTING		=>	 | actionRun
Host: 10.10.3.71 | PC: 127.0.0.1 | User: 127.0.0.1 | asrorz | PC71CMD | INFO | 03-07-2020 11:26:09 | 18.95MB/22MB | 29556OUT > \\\\\\\\\\\\\\\\\\\\\\\"online\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:275
\\\\\\\\\\\\\\\\\\\\\\\"0 Status extention\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:281
OUT > \\\\\\\\\\\\\\\\\\\\\\\"309 called\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:302
\\\\\\\\\\\\\\\\\\\\\\\"309Call endedsuccess\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:303
\\\\\\\\\\\\\\\\\\\\\\\"online\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:275
OUT > \\\\\\\\\\\\\\\\\\\\\\\"0 Status extention\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:281
\\\\\\\\\\\\\\\\\\\\\\\"304 called\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:302
\\\\\\\\\\\\\\\\\\\\\\\"304Call endederror\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:303
\\\\\\\\\\\\\\\\\\\\\\\"online\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:275
\\\\\\\\\\\\\\\\\\\\\\\"8 Status extention\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:281
OUT > \\\\\\\\\\\\\\\\\\\\\\\"online\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:275
\\\\\\\\\\\\\\\\\\\\\\\"1 Status extention\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:281
OUT > \\\\\\\\\\\\\\\\\\\\\\\"online\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:275
\\\\\\\\\\\\\\\\\\\\\\\"1 Status extention\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:281
OUT > \\\\\\\\\\\\\\\\\\\\\\\"online\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:275
\\\\\\\\\\\\\\\\\\\\\\\"1 Status extention\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:281
OUT > \\\\\\\\\\\\\\\\\\\\\\\"online\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:275
\\\\\\\\\\\\\\\\\\\\\\\"1 Status extention\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:281
OUT > \\\\\\\\\\\\\\\\\\\\\\\"online\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:275
\\\\\\\\\\\\\\\\\\\\\\\"1 Status extention\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:281
OUT > \\\\\\\\\\\\\\\\\\\\\\\"online\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:275
\\\\\\\\\\\\\\\\\\\\\\\"1 Status extention\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:281
OUT > \\\\\\\\\\\\\\\\\\\\\\\"online\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:275
\\\\\\\\\\\\\\\\\\\\\\\"0 Status extention\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:281
';
        $this->model->status = 'process';
        $this->model->session = 'ea439086d5558e691104139d1433ebdf83b5bbeb800100d7ae32539bea4d8645';
        $this->model->pid = 17740;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new CoreQueue();

        $this->model->id = 31;
        $this->model->sort = null;
        $this->model->name = '>calls>marceAMI>124';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->app = null;
        $this->model->namespace = 'calls';
        $this->model->service = 'marceAMI';
        $this->model->method = 'call222';
        $this->model->args = '124';
        $this->model->cmd = 'OUT > 
D:\\Develop\\Projects\\asrorz\\zetsoft>call d:\\Develop\\Projects\\server\\php7\\nssm-ALL.cmd 
OUT > Message: 

###		STARTING		=>	 | actionRun
Host: 10.10.3.71 | PC: 127.0.0.1 | User: 127.0.0.1 | asrorz | PC71CMD | INFO | 03-07-2020 10:22:58 | 18.95MB/22MB | 27496OUT > \\\\\\\\\\\\\\\\\\\\\\\"0 status\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:322
OUT > \\\\\\\\\\\\\\\\\\\\\\\"error\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:337
\\\\\\\\\\\\\\\\\\\\\\\"4444\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:338
\\\\\\\\\\\\\\\\\\\\\\\"called\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:339
\\\\\\\\\\\\\\\\\\\\\\\"0 status\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:322
\\\\\\\\\\\\\\\\\\\\\\\"error\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:337
\\\\\\\\\\\\\\\\\\\\\\\"4444\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:338
\\\\\\\\\\\\\\\\\\\\\\\"called\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:339
\\\\\\\\\\\\\\\\\\\\\\\"0 status\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:322
OUT > \\\\\\\\\\\\\\\\\\\\\\\"error\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:337
\\\\\\\\\\\\\\\\\\\\\\\"4444\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:338
\\\\\\\\\\\\\\\\\\\\\\\"called\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:339
Message: 

###	ENDING		=>	 | actionRun
Host: 10.10.3.71 | PC: 127.0.0.1 | User: 127.0.0.1 | asrorz | PC71CMD | INFO | 03-07-2020 10:23:02 | 22.39MB/24MB | 27496';
        $this->model->status = 'finished';
        $this->model->session = 'ea439086d5558e691104139d1433ebdf83b5bbeb800100d7ae32539bea4d8645';
        $this->model->pid = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new CoreQueue();

        $this->model->id = 32;
        $this->model->sort = null;
        $this->model->name = '>calls>marceAMI>124';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->app = null;
        $this->model->namespace = 'calls';
        $this->model->service = 'marceAMI';
        $this->model->method = 'call';
        $this->model->args = '124';
        $this->model->cmd = 'OUT > 
D:\\Develop\\Projects\\asrorz\\zetsoft>call d:\\Develop\\Projects\\server\\php7\\nssm-ALL.cmd 
OUT > Message: 

###		STARTING		=>	 | actionRun
Host: 10.10.3.71 | PC: 127.0.0.1 | User: 127.0.0.1 | asrorz | PC71CMD | INFO | 03-07-2020 10:23:39 | 18.95MB/22MB | 26892OUT > \\\\\\\\\\\\\\\\\\\\\\\"dnd\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:275
';
        $this->model->status = 'process';
        $this->model->session = 'ea439086d5558e691104139d1433ebdf83b5bbeb800100d7ae32539bea4d8645';
        $this->model->pid = 26776;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new CoreQueue();

        $this->model->id = 33;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->app = null;
        $this->model->namespace = 'calls';
        $this->model->service = 'marceAMI';
        $this->model->method = 'call';
        $this->model->args = '124';
        $this->model->cmd = 'OUT > 
D:\\Develop\\Projects\\asrorz\\zetsoft>call d:\\Develop\\Projects\\server\\php7\\nssm-ALL.cmd 
OUT > Message: 

###		STARTING		=>	 | actionRun
Host: 10.10.3.71 | PC: 127.0.0.1 | User: 127.0.0.1 | asrorz | PC71CMD | INFO | 03-07-2020 11:25:47 | 18.95MB/22MB | 29316OUT > \\\\\\\\\\\\\\\\\\\\\\\"online\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:275
\\\\\\\\\\\\\\\\\\\\\\\"0 Status extention\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:281
OUT > \\\\\\\\\\\\\\\\\\\\\\\"309 called\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:302
\\\\\\\\\\\\\\\\\\\\\\\"309Call endederror\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:303
\\\\\\\\\\\\\\\\\\\\\\\"online\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:275
\\\\\\\\\\\\\\\\\\\\\\\"0 Status extention\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:281
OUT > \\\\\\\\\\\\\\\\\\\\\\\"304 called\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:302
\\\\\\\\\\\\\\\\\\\\\\\"304Call endederror\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:303
\\\\\\\\\\\\\\\\\\\\\\\"online\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:275
\\\\\\\\\\\\\\\\\\\\\\\"1 Status extention\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:281
OUT > \\\\\\\\\\\\\\\\\\\\\\\"online\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:275
\\\\\\\\\\\\\\\\\\\\\\\"1 Status extention\\\\\\\\\\\\\\\\\\\\\\\"D:\\Develop\\Projects\\asrorz\\zetsoft\\service\\calls\\MarceAMI.php:281
';
        $this->model->status = 'process';
        $this->model->session = 'ea439086d5558e691104139d1433ebdf83b5bbeb800100d7ae32539bea4d8645';
        $this->model->pid = 1256;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new CoreQueue();

        $this->model->id = 30;
        $this->model->sort = null;
        $this->model->name = '>calls>marceAMI>124';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->app = null;
        $this->model->namespace = 'calls';
        $this->model->service = 'marceAMI';
        $this->model->method = 'call222';
        $this->model->args = '124';
        $this->model->cmd = '';
        $this->model->status = 'queue';
        $this->model->session = '';
        $this->model->pid = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new CoreQueue();

        $this->model->id = 23;
        $this->model->sort = null;
        $this->model->name = '>calls>marceAMI>124';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->app = null;
        $this->model->namespace = 'calls';
        $this->model->service = 'marceAMI';
        $this->model->method = 'call';
        $this->model->args = '124';
        $this->model->cmd = '';
        $this->model->status = 'queue';
        $this->model->session = 'ea439086d5558e691104139d1433ebdf83b5bbeb800100d7ae32539bea4d8645';
        $this->model->pid = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new CoreQueue();

        $this->model->id = 22;
        $this->model->sort = null;
        $this->model->name = '>calls>marceAMI>124';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->app = null;
        $this->model->namespace = 'calls';
        $this->model->service = 'marceAMI';
        $this->model->method = 'call';
        $this->model->args = '124';
        $this->model->cmd = '';
        $this->model->status = 'queue';
        $this->model->session = 'ea439086d5558e691104139d1433ebdf83b5bbeb800100d7ae32539bea4d8645';
        $this->model->pid = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new CoreQueue();

        $this->model->id = 29;
        $this->model->sort = null;
        $this->model->name = '>calls>marceAMI>124';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->app = null;
        $this->model->namespace = 'calls';
        $this->model->service = 'marceAMI';
        $this->model->method = 'call222';
        $this->model->args = '124';
        $this->model->cmd = '';
        $this->model->status = 'queue';
        $this->model->session = '';
        $this->model->pid = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new CoreQueue();

        $this->model->id = 28;
        $this->model->sort = null;
        $this->model->name = '>calls>marceAMI>124';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->app = null;
        $this->model->namespace = 'calls';
        $this->model->service = 'marceAMI';
        $this->model->method = 'call222';
        $this->model->args = '124';
        $this->model->cmd = '';
        $this->model->status = 'queue';
        $this->model->session = '';
        $this->model->pid = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new CoreQueue();

        $this->model->id = 26;
        $this->model->sort = null;
        $this->model->name = '>calls>marceAMI>124';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->app = null;
        $this->model->namespace = 'calls';
        $this->model->service = 'marceAMI';
        $this->model->method = 'call222';
        $this->model->args = '124';
        $this->model->cmd = '';
        $this->model->status = 'queue';
        $this->model->session = '';
        $this->model->pid = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new CoreQueue();

        $this->model->id = 25;
        $this->model->sort = null;
        $this->model->name = '>calls>marceAMI>124';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->app = null;
        $this->model->namespace = 'calls';
        $this->model->service = 'marceAMI';
        $this->model->method = 'call222';
        $this->model->args = '124';
        $this->model->cmd = '';
        $this->model->status = 'queue';
        $this->model->session = '';
        $this->model->pid = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new CoreQueue();

        $this->model->id = 24;
        $this->model->sort = null;
        $this->model->name = '>calls>marceAMI>124';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->app = null;
        $this->model->namespace = 'calls';
        $this->model->service = 'marceAMI';
        $this->model->method = 'call222';
        $this->model->args = '124';
        $this->model->cmd = '';
        $this->model->status = 'queue';
        $this->model->session = 'ea439086d5558e691104139d1433ebdf83b5bbeb800100d7ae32539bea4d8645';
        $this->model->pid = null;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new CoreQueue();

        $this->model->id = 27;
        $this->model->sort = null;
        $this->model->name = '>reactphp>childprocess>ping mail.ru -t';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->app = null;
        $this->model->namespace = 'reactphp';
        $this->model->service = 'childprocess';
        $this->model->method = 'runcommand';
        $this->model->args = 'ping mail.ru -t';
        $this->model->cmd = '
Pinging MAIL.ru [217.69.139.200] with 32 bytes of data:
Reply from 217.69.139.200: bytes=32 time=117ms TTL=50
Reply from 217.69.139.200: bytes=32 time=118ms TTL=50
Reply from 217.69.139.200: bytes=32 time=119ms TTL=50
Reply from 217.69.139.200: bytes=32 time=117ms TTL=50
Reply from 217.69.139.200: bytes=32 time=119ms TTL=50
Reply from 217.69.139.200: bytes=32 time=167ms TTL=50
Reply from 217.69.139.200: bytes=32 time=117ms TTL=50
Reply from 217.69.139.200: bytes=32 time=120ms TTL=50
Reply from 217.69.139.200: bytes=32 time=129ms TTL=50
Reply from 217.69.139.200: bytes=32 time=118ms TTL=50
Reply from 217.69.139.200: bytes=32 time=117ms TTL=50
Reply from 217.69.139.200: bytes=32 time=119ms TTL=50
Reply from 217.69.139.200: bytes=32 time=134ms TTL=50
Reply from 217.69.139.200: bytes=32 time=117ms TTL=50
Reply from 217.69.139.200: bytes=32 time=120ms TTL=50
Reply from 217.69.139.200: bytes=32 time=118ms TTL=50
Reply from 217.69.139.200: bytes=32 time=117ms TTL=50
Reply from 217.69.139.200: bytes=32 time=125ms TTL=50
Reply from 217.69.139.200: bytes=32 time=120ms TTL=50
Reply from 217.69.139.200: bytes=32 time=121ms TTL=50
Reply from 217.69.139.200: bytes=32 time=119ms TTL=50
Reply from 217.69.139.200: bytes=32 time=118ms TTL=50
Reply from 217.69.139.200: bytes=32 time=120ms TTL=50
Reply from 217.69.139.200: bytes=32 time=118ms TTL=50
';
        $this->model->status = 'queue';
        $this->model->session = '46373dfd849ab32c1f5b9feab04f516034e3ac01dcdc5f756544220c5a715d6c';
        $this->model->pid = 29316;
        $this->model->deleted_at = null;
        $this->model->deleted_by = null;
        $this->model->deleted_text = '';
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


    }

}
