<?php

namespace zetsoft\inserts\mplace;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\cpas\CpasTeaser;

class CpasTeaserInsert extends ZInsert
{

    public function run()
    {

        $this->model = new CpasTeaser();

        $this->model->id = 1;
        $this->model->sort = null;
        $this->model->name = 'MgID';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->website = 'MgID.com';
        $this->model->pattern = '{url}cost=[PRICE]&currency=rub&external_id=[UID]&creative_id=[ID]&ad_campaign_id=[CID]&source=[SID]';
        $this->save();


        $this->model = new CpasTeaser();

        $this->model->id = 2;
        $this->model->sort = null;
        $this->model->name = 'Adskeeper';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->website = 'Ads keeper.com';
        $this->model->pattern = '{url}keyword={category_id}&cost={click_price}&external_id={click_id}&creative_id={teaser_id}&ad_campaign_id={campaign_id}&source={widget_id}';
        $this->save();


    }

}
