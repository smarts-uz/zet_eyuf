<?php

namespace zetsoft\inserts\mplace;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\cpas\CpasStreamItem;

class CpasStreamItemInsert extends ZInsert
{

    public function run()
    {

        $this->model = new CpasStreamItem();

        $this->model->id = 2;
        $this->model->sort = null;
        $this->model->name = 'ыфва';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->cpas_land_id = null;
        $this->model->cpas_trans = null;
        $this->model->cpas_trans_form = null;
        $this->model->cpas_stream_id = null;
        $this->model->user_id = null;
        $this->model->link = '';
        $this->model->trans_link = '';
        $this->model->track = '';
        $this->model->teaser = [
            'Mgid_com' => 'http.example.uz/track/teaser.aspx?cpas_stream_item_id=2&keyword={category_id}&cost={click_price}&external_id={click_id}&creative_id={teaser_id}&ad_campaign_id={campaign_id}&source={widget_id}',
            'Adhub_com' => 'http.example.uz/track/teaser.aspx?cpas_stream_item_id=2&external_id={click_id}&creative_id={ad_id}&ad_campaign_id={camp_id}&source={site_id}',
            'Kadam_net' => 'http.example.uz/track/teaser.aspx?cpas_stream_item_id=2&external_id=[CPA]&creative_id=[ID]&source=[SID]',
            'ads_keeper' => 'http.example.uz/track/teaser.aspx?cpas_stream_item_id=2&keyword={category_id}&cost={click_price}&external_id={click_id}&creative_id={teaser_id}&ad_campaign_id={campaign_id}&source={widget_id}',
            'Redclick_ru' => 'http.example.uz/track/teaser.aspx?cpas_stream_item_id=2&creative_id=%tizer_id%&source=%source_id%',
            'bigclick_me' => 'http.example.uz/track/teaser.aspx?cpas_stream_item_id=2&cost={BID}&currency=usd&external_id={UUID}&creative_id={TID}&ad_campaign_id={CID}&source={SID}',
            'Bodyclick_ru' => 'http.example.uz/track/teaser.aspx?cpas_stream_item_id=2&cost=[PRICE]&currency=rub&external_id=[UID]&creative_id=[ID]&ad_campaign_id=[CID]&source=[SID]',
            'LuckyAds_pro' => 'http.example.uz/track/teaser.aspx?cpas_stream_item_id=2&cost=[BID]&external_id=[CLICK_ID]&creative_id=[AD_ID]&ad_campaign_id=[AD_GROUP_ID]&source=[SITE_ID]&block=[BLOCK_ID]',
            'Visitweb_com' => 'http.example.uz/track/teaser.aspx?cpas_stream_item_id=2&cost={REAL_COST}&external_id={UID}&creative_id={AD}&ad_campaign_id={CAMP}&source={HSITE2}&sub_id_1={FORMAT}&sub_id_2={OPERATOR}&sub_id_3={SITE}',
            'Trafficstrars_com' => 'http.example.uz/track/teaser.aspx?cpas_stream_item_id=2&keyword={keywords}&cost={cost}&creative_id={creative_id}&ad_campaign_id={campaign}&source={site}+(ID:{site_id})&sub_id_1={format}+(ID:{format_id})&sub_id_2={pricing_model}&sub_id_3={adspot_name}+(ID:{adspot_id})&sub_id_4={carrier}+(ID:{carrier_id})&sub_id_5={site_host}&sub_id_6={category}+(ID:{category_id})',
            'traficfactory_biz' => 'http.example.uz/track/teaser.aspx?cpas_stream_item_id=2&keyword={categories}&cost=+{target.bid}&currency=usd&external_id={goal_tracking}&creative_id={banner.name}&ad_campaign_id={campaign.id}&source={SiteName}&sub_id_1={carrier}',
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

        $this->model->id = 1;
        $this->model->sort = null;
        $this->model->name = 'ыафвывфа';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->cpas_land_id = null;
        $this->model->cpas_trans = null;
        $this->model->cpas_trans_form = null;
        $this->model->cpas_stream_id = null;
        $this->model->user_id = null;
        $this->model->link = '';
        $this->model->trans_link = '';
        $this->model->track = '';
        $this->model->teaser = [
            'Mgid_com' => 'http.example.uz/track/teaser.aspx?cpas_stream_item_id=1&keyword={category_id}&cost={click_price}&external_id={click_id}&creative_id={teaser_id}&ad_campaign_id={campaign_id}&source={widget_id}',
            'Adhub_com' => 'http.example.uz/track/teaser.aspx?cpas_stream_item_id=1&external_id={click_id}&creative_id={ad_id}&ad_campaign_id={camp_id}&source={site_id}',
            'Kadam_net' => 'http.example.uz/track/teaser.aspx?cpas_stream_item_id=1&external_id=[CPA]&creative_id=[ID]&source=[SID]',
            'ads_keeper' => 'http.example.uz/track/teaser.aspx?cpas_stream_item_id=1&keyword={category_id}&cost={click_price}&external_id={click_id}&creative_id={teaser_id}&ad_campaign_id={campaign_id}&source={widget_id}',
            'Redclick_ru' => 'http.example.uz/track/teaser.aspx?cpas_stream_item_id=1&creative_id=%tizer_id%&source=%source_id%',
            'bigclick_me' => 'http.example.uz/track/teaser.aspx?cpas_stream_item_id=1&cost={BID}&currency=usd&external_id={UUID}&creative_id={TID}&ad_campaign_id={CID}&source={SID}',
            'Bodyclick_ru' => 'http.example.uz/track/teaser.aspx?cpas_stream_item_id=1&cost=[PRICE]&currency=rub&external_id=[UID]&creative_id=[ID]&ad_campaign_id=[CID]&source=[SID]',
            'LuckyAds_pro' => 'http.example.uz/track/teaser.aspx?cpas_stream_item_id=1&cost=[BID]&external_id=[CLICK_ID]&creative_id=[AD_ID]&ad_campaign_id=[AD_GROUP_ID]&source=[SITE_ID]&block=[BLOCK_ID]',
            'Visitweb_com' => 'http.example.uz/track/teaser.aspx?cpas_stream_item_id=1&cost={REAL_COST}&external_id={UID}&creative_id={AD}&ad_campaign_id={CAMP}&source={HSITE2}&sub_id_1={FORMAT}&sub_id_2={OPERATOR}&sub_id_3={SITE}',
            'Trafficstrars_com' => 'http.example.uz/track/teaser.aspx?cpas_stream_item_id=1&keyword={keywords}&cost={cost}&creative_id={creative_id}&ad_campaign_id={campaign}&source={site}+(ID:{site_id})&sub_id_1={format}+(ID:{format_id})&sub_id_2={pricing_model}&sub_id_3={adspot_name}+(ID:{adspot_id})&sub_id_4={carrier}+(ID:{carrier_id})&sub_id_5={site_host}&sub_id_6={category}+(ID:{category_id})',
            'traficfactory_biz' => 'http.example.uz/track/teaser.aspx?cpas_stream_item_id=1&keyword={categories}&cost=+{target.bid}&currency=usd&external_id={goal_tracking}&creative_id={banner.name}&ad_campaign_id={campaign.id}&source={SiteName}&sub_id_1={carrier}',
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

        $this->model->id = 3;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '222';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->cpas_land_id = null;
        $this->model->cpas_trans = null;
        $this->model->cpas_trans_form = null;
        $this->model->cpas_stream_id = null;
        $this->model->user_id = null;
        $this->model->link = '';
        $this->model->trans_link = '';
        $this->model->track = '';
        $this->model->teaser = [
            'Mgid_com' => 'http.example.uz/track/teaser.aspx?cpas_stream_item_id=3&keyword={category_id}&cost={click_price}&external_id={click_id}&creative_id={teaser_id}&ad_campaign_id={campaign_id}&source={widget_id}',
            'Adhub_com' => 'http.example.uz/track/teaser.aspx?cpas_stream_item_id=3&external_id={click_id}&creative_id={ad_id}&ad_campaign_id={camp_id}&source={site_id}',
            'Kadam_net' => 'http.example.uz/track/teaser.aspx?cpas_stream_item_id=3&external_id=[CPA]&creative_id=[ID]&source=[SID]',
            'ads_keeper' => 'http.example.uz/track/teaser.aspx?cpas_stream_item_id=3&keyword={category_id}&cost={click_price}&external_id={click_id}&creative_id={teaser_id}&ad_campaign_id={campaign_id}&source={widget_id}',
            'Redclick_ru' => 'http.example.uz/track/teaser.aspx?cpas_stream_item_id=3&creative_id=%tizer_id%&source=%source_id%',
            'bigclick_me' => 'http.example.uz/track/teaser.aspx?cpas_stream_item_id=3&cost={BID}&currency=usd&external_id={UUID}&creative_id={TID}&ad_campaign_id={CID}&source={SID}',
            'Bodyclick_ru' => 'http.example.uz/track/teaser.aspx?cpas_stream_item_id=3&cost=[PRICE]&currency=rub&external_id=[UID]&creative_id=[ID]&ad_campaign_id=[CID]&source=[SID]',
            'LuckyAds_pro' => 'http.example.uz/track/teaser.aspx?cpas_stream_item_id=3&cost=[BID]&external_id=[CLICK_ID]&creative_id=[AD_ID]&ad_campaign_id=[AD_GROUP_ID]&source=[SITE_ID]&block=[BLOCK_ID]',
            'Visitweb_com' => 'http.example.uz/track/teaser.aspx?cpas_stream_item_id=3&cost={REAL_COST}&external_id={UID}&creative_id={AD}&ad_campaign_id={CAMP}&source={HSITE2}&sub_id_1={FORMAT}&sub_id_2={OPERATOR}&sub_id_3={SITE}',
            'Trafficstrars_com' => 'http.example.uz/track/teaser.aspx?cpas_stream_item_id=3&keyword={keywords}&cost={cost}&creative_id={creative_id}&ad_campaign_id={campaign}&source={site}+(ID:{site_id})&sub_id_1={format}+(ID:{format_id})&sub_id_2={pricing_model}&sub_id_3={adspot_name}+(ID:{adspot_id})&sub_id_4={carrier}+(ID:{carrier_id})&sub_id_5={site_host}&sub_id_6={category}+(ID:{category_id})',
            'traficfactory_biz' => 'http.example.uz/track/teaser.aspx?cpas_stream_item_id=3&keyword={categories}&cost=+{target.bid}&currency=usd&external_id={goal_tracking}&creative_id={banner.name}&ad_campaign_id={campaign.id}&source={SiteName}&sub_id_1={carrier}',
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
