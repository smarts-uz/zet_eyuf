<?php

namespace zetsoft\inserts\arbit;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\cpas\CpasStreamItem;

class CpasStreamItemInsert extends ZInsert
{

    public function run()
    {

        $this->model = new CpasStreamItem();

        $this->model->id = 114;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'test1';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->cpas_land_id = 78;
        $this->model->cpas_trans = 79;
        $this->model->cpas_trans_form = 80;
        $this->model->cpas_stream_id = 134;
        $this->model->user_id = 350;
        $this->model->link = 'http://testing.zetsoft.uz/cpatest/test/myitem6/landing_test';
        $this->model->trans_link = 'http://testing.zetsoft.uz/cpatest/test/myitem6/landing_test';
        $this->model->track = 'http://arbit.zetsoft.uz/cpas/track/track?cpas_stream_item_id=114';
        $this->model->teaser = [
            'Mgid_com' => 'http://arbit.zetsoft.uz/track/teaser.aspx?cpas_stream_item_id=114&keyword={category_id}&cost={click_price}&external_id={click_id}&creative_id={teaser_id}&ad_campaign_id={campaign_id}&source={widget_id}',
            'Adhub_com' => 'http://arbit.zetsoft.uz/track/teaser.aspx?cpas_stream_item_id=114&external_id={click_id}&creative_id={ad_id}&ad_campaign_id={camp_id}&source={site_id}',
            'Kadam_net' => 'http://arbit.zetsoft.uz/track/teaser.aspx?cpas_stream_item_id=114&external_id=[CPA]&creative_id=[ID]&source=[SID]',
            'ads_keeper' => 'http://arbit.zetsoft.uz/track/teaser.aspx?cpas_stream_item_id=114&keyword={category_id}&cost={click_price}&external_id={click_id}&creative_id={teaser_id}&ad_campaign_id={campaign_id}&source={widget_id}',
            'Redclick_ru' => 'http://arbit.zetsoft.uz/track/teaser.aspx?cpas_stream_item_id=114&creative_id=%tizer_id%&source=%source_id%',
            'bigclick_me' => 'http://arbit.zetsoft.uz/track/teaser.aspx?cpas_stream_item_id=114&cost={BID}&currency=usd&external_id={UUID}&creative_id={TID}&ad_campaign_id={CID}&source={SID}',
            'Bodyclick_ru' => 'http://arbit.zetsoft.uz/track/teaser.aspx?cpas_stream_item_id=114&cost=[PRICE]&currency=rub&external_id=[UID]&creative_id=[ID]&ad_campaign_id=[CID]&source=[SID]',
            'LuckyAds_pro' => 'http://arbit.zetsoft.uz/track/teaser.aspx?cpas_stream_item_id=114&cost=[BID]&external_id=[CLICK_ID]&creative_id=[AD_ID]&ad_campaign_id=[AD_GROUP_ID]&source=[SITE_ID]&block=[BLOCK_ID]',
            'Visitweb_com' => 'http://arbit.zetsoft.uz/track/teaser.aspx?cpas_stream_item_id=114&cost={REAL_COST}&external_id={UID}&creative_id={AD}&ad_campaign_id={CAMP}&source={HSITE2}&sub_id_1={FORMAT}&sub_id_2={OPERATOR}&sub_id_3={SITE}',
            'Trafficstrars_com' => 'http://arbit.zetsoft.uz/track/teaser.aspx?cpas_stream_item_id=114&keyword={keywords}&cost={cost}&creative_id={creative_id}&ad_campaign_id={campaign}&source={site}+(ID:{site_id})&sub_id_1={format}+(ID:{format_id})&sub_id_2={pricing_model}&sub_id_3={adspot_name}+(ID:{adspot_id})&sub_id_4={carrier}+(ID:{carrier_id})&sub_id_5={site_host}&sub_id_6={category}+(ID:{category_id})',
            'traficfactory_biz' => 'http://arbit.zetsoft.uz/track/teaser.aspx?cpas_stream_item_id=114&keyword={categories}&cost=+{target.bid}&currency=usd&external_id={goal_tracking}&creative_id={banner.name}&ad_campaign_id={campaign.id}&source={SiteName}&sub_id_1={carrier}',
        ];
        $this->model->click = 2;
        $this->model->uniclick = 1;
        $this->model->lead = null;
        $this->model->cancel = null;
        $this->model->trash = null;
        $this->model->EPC = '';
        $this->model->CPC = '';
        $this->model->CR = '';
        $this->model->revenue = '';
        $this->model->expense = '';
        $this->model->profit = '';
        $this->model->ROI = '';
        $this->save();


        $this->model = new CpasStreamItem();

        $this->model->id = 115;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->cpas_land_id = 81;
        $this->model->cpas_trans = 79;
        $this->model->cpas_trans_form = 80;
        $this->model->cpas_stream_id = 140;
        $this->model->user_id = 372;
        $this->model->link = 'http://testing.zetsoft.uz/cpatest/test/myitem2/fatality';
        $this->model->trans_link = 'http://testing.zetsoft.uz/cpatest/test/';
        $this->model->track = '';
        $this->model->teaser = "";
        $this->model->click = null;
        $this->model->uniclick = null;
        $this->model->lead = null;
        $this->model->cancel = null;
        $this->model->trash = null;
        $this->model->EPC = '';
        $this->model->CPC = '';
        $this->model->CR = '';
        $this->model->revenue = '';
        $this->model->expense = '';
        $this->model->profit = '';
        $this->model->ROI = '';
        $this->save();


        $this->model = new CpasStreamItem();

        $this->model->id = 116;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'test';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->cpas_land_id = 81;
        $this->model->cpas_trans = null;
        $this->model->cpas_trans_form = null;
        $this->model->cpas_stream_id = 140;
        $this->model->user_id = 372;
        $this->model->link = 'http://testing.zetsoft.uz/cpatest/test/myitem2/Fatality';
        $this->model->trans_link = '';
        $this->model->track = '';
        $this->model->teaser = "";
        $this->model->click = null;
        $this->model->uniclick = null;
        $this->model->lead = null;
        $this->model->cancel = null;
        $this->model->trash = null;
        $this->model->EPC = '';
        $this->model->CPC = '';
        $this->model->CR = '';
        $this->model->revenue = '';
        $this->model->expense = '';
        $this->model->profit = '';
        $this->model->ROI = '';
        $this->save();


        $this->model = new CpasStreamItem();

        $this->model->id = 117;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'test3';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->cpas_land_id = 81;
        $this->model->cpas_trans = null;
        $this->model->cpas_trans_form = null;
        $this->model->cpas_stream_id = 140;
        $this->model->user_id = 372;
        $this->model->link = 'http://testing.zetsoft.uz/cpatest/test/myitem2/Fatality';
        $this->model->trans_link = '';
        $this->model->track = 'http://arbit.zetsoft.uz/cpas/track/track?cpas_stream_item_id=117';
        $this->model->teaser = [
            'Mgid_com' => 'http://arbit.zetsoft.uz/track/teaser.aspx?cpas_stream_item_id=117&keyword={category_id}&cost={click_price}&external_id={click_id}&creative_id={teaser_id}&ad_campaign_id={campaign_id}&source={widget_id}',
            'Adhub_com' => 'http://arbit.zetsoft.uz/track/teaser.aspx?cpas_stream_item_id=117&external_id={click_id}&creative_id={ad_id}&ad_campaign_id={camp_id}&source={site_id}',
            'Kadam_net' => 'http://arbit.zetsoft.uz/track/teaser.aspx?cpas_stream_item_id=117&external_id=[CPA]&creative_id=[ID]&source=[SID]',
            'ads_keeper' => 'http://arbit.zetsoft.uz/track/teaser.aspx?cpas_stream_item_id=117&keyword={category_id}&cost={click_price}&external_id={click_id}&creative_id={teaser_id}&ad_campaign_id={campaign_id}&source={widget_id}',
            'Redclick_ru' => 'http://arbit.zetsoft.uz/track/teaser.aspx?cpas_stream_item_id=117&creative_id=%tizer_id%&source=%source_id%',
            'bigclick_me' => 'http://arbit.zetsoft.uz/track/teaser.aspx?cpas_stream_item_id=117&cost={BID}&currency=usd&external_id={UUID}&creative_id={TID}&ad_campaign_id={CID}&source={SID}',
            'Bodyclick_ru' => 'http://arbit.zetsoft.uz/track/teaser.aspx?cpas_stream_item_id=117&cost=[PRICE]&currency=rub&external_id=[UID]&creative_id=[ID]&ad_campaign_id=[CID]&source=[SID]',
            'LuckyAds_pro' => 'http://arbit.zetsoft.uz/track/teaser.aspx?cpas_stream_item_id=117&cost=[BID]&external_id=[CLICK_ID]&creative_id=[AD_ID]&ad_campaign_id=[AD_GROUP_ID]&source=[SITE_ID]&block=[BLOCK_ID]',
            'Visitweb_com' => 'http://arbit.zetsoft.uz/track/teaser.aspx?cpas_stream_item_id=117&cost={REAL_COST}&external_id={UID}&creative_id={AD}&ad_campaign_id={CAMP}&source={HSITE2}&sub_id_1={FORMAT}&sub_id_2={OPERATOR}&sub_id_3={SITE}',
            'Trafficstrars_com' => 'http://arbit.zetsoft.uz/track/teaser.aspx?cpas_stream_item_id=117&keyword={keywords}&cost={cost}&creative_id={creative_id}&ad_campaign_id={campaign}&source={site}+(ID:{site_id})&sub_id_1={format}+(ID:{format_id})&sub_id_2={pricing_model}&sub_id_3={adspot_name}+(ID:{adspot_id})&sub_id_4={carrier}+(ID:{carrier_id})&sub_id_5={site_host}&sub_id_6={category}+(ID:{category_id})',
            'traficfactory_biz' => 'http://arbit.zetsoft.uz/track/teaser.aspx?cpas_stream_item_id=117&keyword={categories}&cost=+{target.bid}&currency=usd&external_id={goal_tracking}&creative_id={banner.name}&ad_campaign_id={campaign.id}&source={SiteName}&sub_id_1={carrier}',
        ];
        $this->model->click = null;
        $this->model->uniclick = null;
        $this->model->lead = null;
        $this->model->cancel = null;
        $this->model->trash = null;
        $this->model->EPC = '';
        $this->model->CPC = '';
        $this->model->CR = '';
        $this->model->revenue = '';
        $this->model->expense = '';
        $this->model->profit = '';
        $this->model->ROI = '';
        $this->save();


        $this->model = new CpasStreamItem();

        $this->model->id = 118;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'test2222';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->cpas_land_id = 81;
        $this->model->cpas_trans = 79;
        $this->model->cpas_trans_form = 80;
        $this->model->cpas_stream_id = 141;
        $this->model->user_id = 372;
        $this->model->link = 'http://testing.zetsoft.uz/cpatest/test/myitem2/land postback';
        $this->model->trans_link = 'http://testing.zetsoft.uz/cpatest/test/';
        $this->model->track = 'http://arbit.zetsoft.uz/cpas/track/track?cpas_stream_item_id=118';
        $this->model->teaser = [
            'Mgid_com' => 'http://arbit.zetsoft.uz/track/teaser.aspx?cpas_stream_item_id=118&keyword={category_id}&cost={click_price}&external_id={click_id}&creative_id={teaser_id}&ad_campaign_id={campaign_id}&source={widget_id}',
            'Adhub_com' => 'http://arbit.zetsoft.uz/track/teaser.aspx?cpas_stream_item_id=118&external_id={click_id}&creative_id={ad_id}&ad_campaign_id={camp_id}&source={site_id}',
            'Kadam_net' => 'http://arbit.zetsoft.uz/track/teaser.aspx?cpas_stream_item_id=118&external_id=[CPA]&creative_id=[ID]&source=[SID]',
            'ads_keeper' => 'http://arbit.zetsoft.uz/track/teaser.aspx?cpas_stream_item_id=118&keyword={category_id}&cost={click_price}&external_id={click_id}&creative_id={teaser_id}&ad_campaign_id={campaign_id}&source={widget_id}',
            'Redclick_ru' => 'http://arbit.zetsoft.uz/track/teaser.aspx?cpas_stream_item_id=118&creative_id=%tizer_id%&source=%source_id%',
            'bigclick_me' => 'http://arbit.zetsoft.uz/track/teaser.aspx?cpas_stream_item_id=118&cost={BID}&currency=usd&external_id={UUID}&creative_id={TID}&ad_campaign_id={CID}&source={SID}',
            'Bodyclick_ru' => 'http://arbit.zetsoft.uz/track/teaser.aspx?cpas_stream_item_id=118&cost=[PRICE]&currency=rub&external_id=[UID]&creative_id=[ID]&ad_campaign_id=[CID]&source=[SID]',
            'LuckyAds_pro' => 'http://arbit.zetsoft.uz/track/teaser.aspx?cpas_stream_item_id=118&cost=[BID]&external_id=[CLICK_ID]&creative_id=[AD_ID]&ad_campaign_id=[AD_GROUP_ID]&source=[SITE_ID]&block=[BLOCK_ID]',
            'Visitweb_com' => 'http://arbit.zetsoft.uz/track/teaser.aspx?cpas_stream_item_id=118&cost={REAL_COST}&external_id={UID}&creative_id={AD}&ad_campaign_id={CAMP}&source={HSITE2}&sub_id_1={FORMAT}&sub_id_2={OPERATOR}&sub_id_3={SITE}',
            'Trafficstrars_com' => 'http://arbit.zetsoft.uz/track/teaser.aspx?cpas_stream_item_id=118&keyword={keywords}&cost={cost}&creative_id={creative_id}&ad_campaign_id={campaign}&source={site}+(ID:{site_id})&sub_id_1={format}+(ID:{format_id})&sub_id_2={pricing_model}&sub_id_3={adspot_name}+(ID:{adspot_id})&sub_id_4={carrier}+(ID:{carrier_id})&sub_id_5={site_host}&sub_id_6={category}+(ID:{category_id})',
            'traficfactory_biz' => 'http://arbit.zetsoft.uz/track/teaser.aspx?cpas_stream_item_id=118&keyword={categories}&cost=+{target.bid}&currency=usd&external_id={goal_tracking}&creative_id={banner.name}&ad_campaign_id={campaign.id}&source={SiteName}&sub_id_1={carrier}',
        ];
        $this->model->click = 2;
        $this->model->uniclick = null;
        $this->model->lead = null;
        $this->model->cancel = null;
        $this->model->trash = null;
        $this->model->EPC = '';
        $this->model->CPC = '';
        $this->model->CR = '';
        $this->model->revenue = '';
        $this->model->expense = '';
        $this->model->profit = '';
        $this->model->ROI = '';
        $this->save();


        $this->model = new CpasStreamItem();

        $this->model->id = 119;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'my fata item';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->cpas_land_id = 81;
        $this->model->cpas_trans = null;
        $this->model->cpas_trans_form = null;
        $this->model->cpas_stream_id = 144;
        $this->model->user_id = 370;
        $this->model->link = '';
        $this->model->trans_link = '';
        $this->model->track = 'http://arbit.zetsoft.uz/cpas/track/track?cpas_stream_item_id=119';
        $this->model->teaser = [
            'Mgid_com' => 'http://arbit.zetsoft.uz/track/teaser.aspx?cpas_stream_item_id=119&keyword={category_id}&cost={click_price}&external_id={click_id}&creative_id={teaser_id}&ad_campaign_id={campaign_id}&source={widget_id}',
            'Adhub_com' => 'http://arbit.zetsoft.uz/track/teaser.aspx?cpas_stream_item_id=119&external_id={click_id}&creative_id={ad_id}&ad_campaign_id={camp_id}&source={site_id}',
            'Kadam_net' => 'http://arbit.zetsoft.uz/track/teaser.aspx?cpas_stream_item_id=119&external_id=[CPA]&creative_id=[ID]&source=[SID]',
            'ads_keeper' => 'http://arbit.zetsoft.uz/track/teaser.aspx?cpas_stream_item_id=119&keyword={category_id}&cost={click_price}&external_id={click_id}&creative_id={teaser_id}&ad_campaign_id={campaign_id}&source={widget_id}',
            'Redclick_ru' => 'http://arbit.zetsoft.uz/track/teaser.aspx?cpas_stream_item_id=119&creative_id=%tizer_id%&source=%source_id%',
            'bigclick_me' => 'http://arbit.zetsoft.uz/track/teaser.aspx?cpas_stream_item_id=119&cost={BID}&currency=usd&external_id={UUID}&creative_id={TID}&ad_campaign_id={CID}&source={SID}',
            'Bodyclick_ru' => 'http://arbit.zetsoft.uz/track/teaser.aspx?cpas_stream_item_id=119&cost=[PRICE]&currency=rub&external_id=[UID]&creative_id=[ID]&ad_campaign_id=[CID]&source=[SID]',
            'LuckyAds_pro' => 'http://arbit.zetsoft.uz/track/teaser.aspx?cpas_stream_item_id=119&cost=[BID]&external_id=[CLICK_ID]&creative_id=[AD_ID]&ad_campaign_id=[AD_GROUP_ID]&source=[SITE_ID]&block=[BLOCK_ID]',
            'Visitweb_com' => 'http://arbit.zetsoft.uz/track/teaser.aspx?cpas_stream_item_id=119&cost={REAL_COST}&external_id={UID}&creative_id={AD}&ad_campaign_id={CAMP}&source={HSITE2}&sub_id_1={FORMAT}&sub_id_2={OPERATOR}&sub_id_3={SITE}',
            'Trafficstrars_com' => 'http://arbit.zetsoft.uz/track/teaser.aspx?cpas_stream_item_id=119&keyword={keywords}&cost={cost}&creative_id={creative_id}&ad_campaign_id={campaign}&source={site}+(ID:{site_id})&sub_id_1={format}+(ID:{format_id})&sub_id_2={pricing_model}&sub_id_3={adspot_name}+(ID:{adspot_id})&sub_id_4={carrier}+(ID:{carrier_id})&sub_id_5={site_host}&sub_id_6={category}+(ID:{category_id})',
            'traficfactory_biz' => 'http://arbit.zetsoft.uz/track/teaser.aspx?cpas_stream_item_id=119&keyword={categories}&cost=+{target.bid}&currency=usd&external_id={goal_tracking}&creative_id={banner.name}&ad_campaign_id={campaign.id}&source={SiteName}&sub_id_1={carrier}',
        ];
        $this->model->click = null;
        $this->model->uniclick = null;
        $this->model->lead = null;
        $this->model->cancel = null;
        $this->model->trash = null;
        $this->model->EPC = '';
        $this->model->CPC = '';
        $this->model->CR = '';
        $this->model->revenue = '';
        $this->model->expense = '';
        $this->model->profit = '';
        $this->model->ROI = '';
        $this->save();


        $this->model = new CpasStreamItem();

        $this->model->id = 120;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'item1';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->cpas_land_id = 81;
        $this->model->cpas_trans = 79;
        $this->model->cpas_trans_form = 80;
        $this->model->cpas_stream_id = 145;
        $this->model->user_id = 372;
        $this->model->link = 'http://testing.zetsoft.uz/cpatest/test/myitem5/Fatality';
        $this->model->trans_link = 'http://testing.zetsoft.uz/cpatest/test/';
        $this->model->track = 'http://arbit.zetsoft.uz/cpas/track/track?cpas_stream_item_id=120';
        $this->model->teaser = [
            'Mgid_com' => 'http://arbit.zetsoft.uz/track/teaser.aspx?cpas_stream_item_id=120&keyword={category_id}&cost={click_price}&external_id={click_id}&creative_id={teaser_id}&ad_campaign_id={campaign_id}&source={widget_id}',
            'Adhub_com' => 'http://arbit.zetsoft.uz/track/teaser.aspx?cpas_stream_item_id=120&external_id={click_id}&creative_id={ad_id}&ad_campaign_id={camp_id}&source={site_id}',
            'Kadam_net' => 'http://arbit.zetsoft.uz/track/teaser.aspx?cpas_stream_item_id=120&external_id=[CPA]&creative_id=[ID]&source=[SID]',
            'ads_keeper' => 'http://arbit.zetsoft.uz/track/teaser.aspx?cpas_stream_item_id=120&keyword={category_id}&cost={click_price}&external_id={click_id}&creative_id={teaser_id}&ad_campaign_id={campaign_id}&source={widget_id}',
            'Redclick_ru' => 'http://arbit.zetsoft.uz/track/teaser.aspx?cpas_stream_item_id=120&creative_id=%tizer_id%&source=%source_id%',
            'bigclick_me' => 'http://arbit.zetsoft.uz/track/teaser.aspx?cpas_stream_item_id=120&cost={BID}&currency=usd&external_id={UUID}&creative_id={TID}&ad_campaign_id={CID}&source={SID}',
            'Bodyclick_ru' => 'http://arbit.zetsoft.uz/track/teaser.aspx?cpas_stream_item_id=120&cost=[PRICE]&currency=rub&external_id=[UID]&creative_id=[ID]&ad_campaign_id=[CID]&source=[SID]',
            'LuckyAds_pro' => 'http://arbit.zetsoft.uz/track/teaser.aspx?cpas_stream_item_id=120&cost=[BID]&external_id=[CLICK_ID]&creative_id=[AD_ID]&ad_campaign_id=[AD_GROUP_ID]&source=[SITE_ID]&block=[BLOCK_ID]',
            'Visitweb_com' => 'http://arbit.zetsoft.uz/track/teaser.aspx?cpas_stream_item_id=120&cost={REAL_COST}&external_id={UID}&creative_id={AD}&ad_campaign_id={CAMP}&source={HSITE2}&sub_id_1={FORMAT}&sub_id_2={OPERATOR}&sub_id_3={SITE}',
            'Trafficstrars_com' => 'http://arbit.zetsoft.uz/track/teaser.aspx?cpas_stream_item_id=120&keyword={keywords}&cost={cost}&creative_id={creative_id}&ad_campaign_id={campaign}&source={site}+(ID:{site_id})&sub_id_1={format}+(ID:{format_id})&sub_id_2={pricing_model}&sub_id_3={adspot_name}+(ID:{adspot_id})&sub_id_4={carrier}+(ID:{carrier_id})&sub_id_5={site_host}&sub_id_6={category}+(ID:{category_id})',
            'traficfactory_biz' => 'http://arbit.zetsoft.uz/track/teaser.aspx?cpas_stream_item_id=120&keyword={categories}&cost=+{target.bid}&currency=usd&external_id={goal_tracking}&creative_id={banner.name}&ad_campaign_id={campaign.id}&source={SiteName}&sub_id_1={carrier}',
        ];
        $this->model->click = null;
        $this->model->uniclick = null;
        $this->model->lead = null;
        $this->model->cancel = null;
        $this->model->trash = null;
        $this->model->EPC = '';
        $this->model->CPC = '';
        $this->model->CR = '';
        $this->model->revenue = '';
        $this->model->expense = '';
        $this->model->profit = '';
        $this->model->ROI = '';
        $this->save();


    }

}
