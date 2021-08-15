<?php

namespace zetsoft\inserts\arbit;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\shop\ShopProduct;

class ShopProductInsert extends ZInsert
{

    public function run()
    {

        $this->model = new ShopProduct();

        $this->model->id = 39;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Настольная игра ';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->shop_category_id = 2201;
        $this->model->package = '';
        $this->model->shop_option = "";
        $this->model->text = '';
        $this->model->image = [
            'orig.webp',
            'orig (1).webp',
            'orig (2).webp',
            'orig (3).webp',
            'orig (4).webp',
        ];
        $this->model->shop_option_ids = [
            '117',
            '118',
            '120',
            '123',
            '126',
            '127',
        ];
        $this->model->shop_brand_id = null;
        $this->model->related = [
            '19',
            '38',
            '40',
            '44',
        ];
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 12;
        $this->model->size = [
            'width' => '14',
            'height' => '21',
            'length' => '12',
        ];
        $this->model->offer = [
            'discount',
        ];
        $this->model->rating = 3.5;
        $this->model->measure = 'pcs';
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 23;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Кисть';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->shop_category_id = 2225;
        $this->model->package = '';
        $this->model->shop_option = "";
        $this->model->text = '<p>Zetsoftda ishlab chiqarilgan</p>';
        $this->model->image = [
            'orig.webp',
            'orig (1).webp',
            'orig (2).webp',
        ];
        $this->model->shop_option_ids = [
            '206',
            '207',
            '208',
            '210',
            '211',
            '212',
        ];
        $this->model->shop_brand_id = null;
        $this->model->related = [
            '21',
        ];
        $this->model->shelf_life = 3;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 12;
        $this->model->size = [
            'width' => '14',
            'height' => '15',
            'length' => '13',
        ];
        $this->model->offer = [
            'new',
        ];
        $this->model->rating = 3.5;
        $this->model->measure = 'pcs';
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 15;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'CC крем';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->shop_category_id = 2225;
        $this->model->package = '';
        $this->model->shop_option = "";
        $this->model->text = '';
        $this->model->image = [
            'orig.webp',
            'orig (1).webp',
            'orig (2).webp',
            'orig (3).webp',
        ];
        $this->model->shop_option_ids = [
            '205',
            '206',
            '207',
            '209',
            '211',
            '212',
            '213',
        ];
        $this->model->shop_brand_id = null;
        $this->model->related = [
            '39',
        ];
        $this->model->shelf_life = 3;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 0.5;
        $this->model->size = [
            'width' => '1',
            'height' => '0.5',
            'length' => '1',
        ];
        $this->model->offer = [
            'new',
            'popular',
        ];
        $this->model->rating = 3.5;
        $this->model->measure = 'pcs';
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 36;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Райдер';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->shop_category_id = 1816;
        $this->model->package = '';
        $this->model->shop_option = "";
        $this->model->text = '';
        $this->model->image = [
            'orig.webp',
            'orig (1).webp',
            'orig (2).webp',
            'orig (3).webp',
        ];
        $this->model->shop_option_ids = [
            '163',
            '164',
            '165',
            '166',
        ];
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = null;
        $this->model->size = [
            'width' => '14',
            'height' => '21',
            'length' => '12',
        ];
        $this->model->offer = [
            'popular',
        ];
        $this->model->rating = 3.5;
        $this->model->measure = 'pcs';
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 27;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Автомобильная смазка';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->shop_category_id = 1298;
        $this->model->package = '';
        $this->model->shop_option = "";
        $this->model->text = '';
        $this->model->image = [
            'orig.webp',
            'orig (1).webp',
            'orig (2).webp',
            'orig (3).webp',
            'orig (5).webp',
        ];
        $this->model->shop_option_ids = [
            '122',
        ];
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = 12;
        $this->model->shelf_life_unit = '';
        $this->model->weight = 15;
        $this->model->size = [
            'width' => '16',
            'height' => '14',
            'length' => '20',
        ];
        $this->model->offer = [
            'deal_of_day',
            'popular',
        ];
        $this->model->rating = 3.5;
        $this->model->measure = 'l';
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 19;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Палетка теней ';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->shop_category_id = 984;
        $this->model->package = '';
        $this->model->shop_option = "";
        $this->model->text = '';
        $this->model->image = [
            'orig.webp',
            'orig (4).webp',
            'orig (3).webp',
            'orig (2).webp',
            'orig (1).webp',
        ];
        $this->model->shop_option_ids = [
            '32',
            '33',
            '34',
            '35',
            '36',
            '37',
            '38',
            '39',
            '40',
            '41',
            '42',
            '43',
            '44',
        ];
        $this->model->shop_brand_id = 5;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 1;
        $this->model->size = [
            'width' => '15',
            'height' => '12',
            'length' => '20',
        ];
        $this->model->offer = [
            'new',
            'popular',
        ];
        $this->model->rating = 3.5;
        $this->model->measure = 'pcs';
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 31;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Гладилка РемоКолор';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->shop_category_id = 978;
        $this->model->package = '';
        $this->model->shop_option = "";
        $this->model->text = '<p>Zetsoftda ishlab chiqarilgan</p>';
        $this->model->image = [
            'orig.webp',
            'orig (4).webp',
        ];
        $this->model->shop_option_ids = [
            '1',
            '2',
            '5',
            '8',
            '204',
            '206',
            '207',
        ];
        $this->model->shop_brand_id = 3;
        $this->model->related = [
            '33',
        ];
        $this->model->shelf_life = 3;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 12;
        $this->model->size = [
            'width' => '21',
            'height' => '15',
            'length' => '14',
        ];
        $this->model->offer = [
            'new',
            'discount',
        ];
        $this->model->rating = 3.5;
        $this->model->measure = 'pcs';
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 38;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Настольная игра ';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->shop_category_id = 524;
        $this->model->package = '';
        $this->model->shop_option = "";
        $this->model->text = '';
        $this->model->image = [
            'orig.webp',
            'orig (1).webp',
        ];
        $this->model->shop_option_ids = [
            '102',
            '103',
            '104',
            '105',
            '106',
            '107',
        ];
        $this->model->shop_brand_id = null;
        $this->model->related = [
            '39',
            '40',
            '41',
        ];
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 12;
        $this->model->size = [
            'width' => '14',
            'height' => '21',
            'length' => '12',
        ];
        $this->model->offer = [
            'discount',
        ];
        $this->model->rating = 3.5;
        $this->model->measure = 'pcs';
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 35;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Ножницы-кусторез';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->shop_category_id = 1837;
        $this->model->package = '';
        $this->model->shop_option = "";
        $this->model->text = '';
        $this->model->image = [
            'orig.webp',
            'orig (1).webp',
            'orig (2).webp',
            'orig (4).webp',
        ];
        $this->model->shop_option_ids = "";
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 12;
        $this->model->size = [
            'width' => '14',
            'height' => '21',
            'length' => '12',
        ];
        $this->model->offer = [
            'discount',
        ];
        $this->model->rating = 3.5;
        $this->model->measure = 'pcs';
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 50;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = ' Умные часы и браслеты ZO\'R';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->shop_category_id = 2627;
        $this->model->package = '';
        $this->model->shop_option = "";
        $this->model->text = '<p>Zetsoftda ishylab chiqarilgan</p>';
        $this->model->image = "";
        $this->model->shop_option_ids = [
            '1',
            '2',
            '8',
            '13',
            '57',
            '352',
            '353',
        ];
        $this->model->shop_brand_id = null;
        $this->model->related = [
            '1',
        ];
        $this->model->shelf_life = 3;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 25;
        $this->model->size = [
            'width' => '25',
            'height' => '45',
            'length' => '35',
        ];
        $this->model->offer = [
            'discount',
        ];
        $this->model->rating = 4;
        $this->model->measure = 'pcs';
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 57;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Аксессуары для телефонов';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->shop_category_id = 2619;
        $this->model->package = '';
        $this->model->shop_option = "";
        $this->model->text = '';
        $this->model->image = [
            'orig (1).webp',
            'orig (2).webp',
            'orig (3).webp',
            'orig.webp',
        ];
        $this->model->shop_option_ids = [
            '1',
            '2',
            '8',
        ];
        $this->model->shop_brand_id = null;
        $this->model->related = [
            '1',
        ];
        $this->model->shelf_life = 3;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 25;
        $this->model->size = [
            'width' => '21',
            'height' => '38',
            'length' => '48',
        ];
        $this->model->offer = [
            'deal_of_day',
        ];
        $this->model->rating = 3.5;
        $this->model->measure = 'pcs';
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 58;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->shop_category_id = 2619;
        $this->model->package = '';
        $this->model->shop_option = "";
        $this->model->text = '';
        $this->model->image = [
            'orig (1).webp',
            'orig (2).webp',
            'orig (3).webp',
            'orig.webp',
        ];
        $this->model->shop_option_ids = [
            '1',
            '2',
            '5',
        ];
        $this->model->shop_brand_id = null;
        $this->model->related = [
            '1',
        ];
        $this->model->shelf_life = 3;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 25;
        $this->model->size = [
            'width' => '30',
            'height' => '25',
            'length' => '48',
        ];
        $this->model->offer = [
            'deal_of_day',
        ];
        $this->model->rating = 3.5;
        $this->model->measure = 'pcs';
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 116;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'asd';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->shop_category_id = 2529;
        $this->model->package = '';
        $this->model->shop_option = "";
        $this->model->text = '<p>asd</p>,';
        $this->model->image = "";
        $this->model->shop_option_ids = [
            '11',
        ];
        $this->model->shop_brand_id = null;
        $this->model->related = [
            '15',
        ];
        $this->model->shelf_life = 1;
        $this->model->shelf_life_unit = 'hour';
        $this->model->weight = 1;
        $this->model->size = [
            'width' => '1',
            'height' => '1',
            'length' => '1',
        ];
        $this->model->offer = "";
        $this->model->rating = 2.5;
        $this->model->measure = 'pcs';
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 24;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Гидравлическая жидкость';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->shop_category_id = 978;
        $this->model->package = '';
        $this->model->shop_option = "";
        $this->model->text = '';
        $this->model->image = [
            'orig.webp',
            'orig (1).webp',
        ];
        $this->model->shop_option_ids = [
            '1',
            '2',
            '5',
            '8',
            '204',
            '206',
            '207',
        ];
        $this->model->shop_brand_id = 6;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = null;
        $this->model->size = [
            'width' => '15',
            'height' => '12',
            'length' => '14',
        ];
        $this->model->offer = [
            'new',
            'popular',
        ];
        $this->model->rating = 3.5;
        $this->model->measure = 'l';
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 37;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Измельчитель электрический';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->shop_category_id = 978;
        $this->model->package = '';
        $this->model->shop_option = "";
        $this->model->text = '';
        $this->model->image = [
            'orig.webp',
            'orig (1).webp',
            'orig (2).webp',
            'orig (4).webp',
        ];
        $this->model->shop_option_ids = [
            '179',
            '181',
            '182',
            '183',
            '184',
            '185',
            '186',
            '187',
            '188',
        ];
        $this->model->shop_brand_id = 9;
        $this->model->related = [
            '15',
            '19',
            '20',
            '39',
        ];
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 12;
        $this->model->size = [
            'width' => '14',
            'height' => '21',
            'length' => '12',
        ];
        $this->model->offer = [
            'discount',
        ];
        $this->model->rating = 3.5;
        $this->model->measure = 'pcs';
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 29;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Компрессор';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->shop_category_id = 978;
        $this->model->package = '';
        $this->model->shop_option = "";
        $this->model->text = '';
        $this->model->image = [
            'orig.webp',
            'orig (1).webp',
            'orig (2).webp',
            'orig (3).webp',
        ];
        $this->model->shop_option_ids = [
            '1',
            '2',
            '5',
            '8',
            '206',
            '207',
        ];
        $this->model->shop_brand_id = 12;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 14;
        $this->model->size = [
            'width' => '12',
            'height' => '13',
            'length' => '15',
        ];
        $this->model->offer = [
            'new',
            'popular',
            'discount',
        ];
        $this->model->rating = 3.5;
        $this->model->measure = 'pcs';
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 34;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Электрическая воздуходувка';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->shop_category_id = 978;
        $this->model->package = '';
        $this->model->shop_option = "";
        $this->model->text = '';
        $this->model->image = [
            'orig.webp',
            'orig (1).webp',
            'orig (2).webp',
            'orig (3).webp',
        ];
        $this->model->shop_option_ids = [
            '155',
            '156',
            '157',
            '158',
            '159',
            '160',
            '161',
            '162',
        ];
        $this->model->shop_brand_id = 5;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 12;
        $this->model->size = [
            'width' => '14',
            'height' => '21',
            'length' => '12',
        ];
        $this->model->offer = [
            'popular',
            'discount',
        ];
        $this->model->rating = 3.5;
        $this->model->measure = 'pcs';
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 41;
        $this->model->sort = null;
        $this->model->name = 'Настольная игра';
        $this->model->title = 'Настольная игра';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->shop_category_id = 978;
        $this->model->package = '';
        $this->model->shop_option = "";
        $this->model->text = '';
        $this->model->image = [
            '1.webp',
            ' 2.webp',
            '3.webp',
            '4.webp',
        ];
        $this->model->shop_option_ids = [
            '1',
            '2',
            '5',
            '8',
            '206',
            '207',
            '204',
        ];
        $this->model->shop_brand_id = 6;
        $this->model->related = [
            '1',
            '15',
            '19',
            '20',
            '21',
        ];
        $this->model->shelf_life = 3;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 12;
        $this->model->size = [
            'width' => '14',
            'height' => '21',
            'length' => '12',
        ];
        $this->model->offer = [
            'new',
            'deal_of_day',
            'popular',
            'discount',
        ];
        $this->model->rating = 3.5;
        $this->model->measure = 'pcs';
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 20;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Блеск для губ';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->shop_category_id = 2225;
        $this->model->package = '';
        $this->model->shop_option = "";
        $this->model->text = '<table>	<tbody>		<tr>			<td>			<p>Cortex-A53/A73, Handsfree, Headset, 14 нм, 32 ГБ, есть, 2 ГБ, есть, есть, есть, 10.1, 120 ч,</p>			</td>			<td>&nbsp;</td>		</tr>	</tbody></table>';
        $this->model->image = [
            'orig.webp',
            'orig (1).webp',
            'orig (2).webp',
            'orig (5).webp',
        ];
        $this->model->shop_option_ids = [
            '205',
            '206',
            '207',
            '208',
            '209',
            '210',
            '211',
            '212',
        ];
        $this->model->shop_brand_id = null;
        $this->model->related = [
            '30',
        ];
        $this->model->shelf_life = 3;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 15;
        $this->model->size = [
            'width' => '10',
            'height' => '12',
            'length' => '9',
        ];
        $this->model->offer = [
            'new',
            'popular',
        ];
        $this->model->rating = 3.5;
        $this->model->measure = 'pcs';
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 56;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->shop_category_id = 2619;
        $this->model->package = '';
        $this->model->shop_option = "";
        $this->model->text = '';
        $this->model->image = [
            'orig (1).webp',
            'orig (2).webp',
            'orig (4).webp',
            'orig.webp',
        ];
        $this->model->shop_option_ids = [
            '1',
            '5',
            '353',
            '352',
        ];
        $this->model->shop_brand_id = null;
        $this->model->related = [
            '1',
        ];
        $this->model->shelf_life = 3;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 25;
        $this->model->size = [
            'width' => '30',
            'height' => '25',
            'length' => '48',
        ];
        $this->model->offer = [
            'deal_of_day',
        ];
        $this->model->rating = 4;
        $this->model->measure = 'pcs';
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 55;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Благодаря плавно закругленным краям и совершенному дизайну, смартфон Apple iPhone XR 128 ГБ Blue, будет удобно лежать в руке. Передняя и задняя панель выполнены из высокопрочного стекла, а рамка – из хирургической стали. ';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->shop_category_id = 2619;
        $this->model->package = '';
        $this->model->shop_option = "";
        $this->model->text = '<p>Эта модель оснащена фронтальной 7-мегапиксельной камерой Grey, с помощью которой вы сможете делать потрясающие селфи в стиле &laquo;Боке&raquo;, а также общаться с друзьями и родственниками в видеочатах. Уникальный сенсор TrueDepth сканирует до 50 лицевых мышц, позволяя создать анимированную копию Animoji, которая повторяет каждое ваше движение и мимику, а после отправлять ее в сообщениях или мессенджерах. Стабильную работу технологии распознавания лица Face ID обеспечивает небольшой модуль, расположенный в верхней части экрана, в котором помимо фотокамеры имеются датчики света и приближения, проектор точек и динамик. На лицо проецируется 30 000 невидимых точек и на основе полученных сведений, создается точная структурная копия. Для того, чтобы ограничить доступ к личным данным, вам нужно всего лишь взглянуть на экран. Также с ее помощью у вас появится возможность оплачивать покупки посредством платежного Apple Pay.</p>';
        $this->model->image = [
            'Apple_iPhone_XR_128_Gb_Blue.jpg',
            'PpWQiWYcJqqAKyY_1CSw3-x__u3vgbRB.jpg',
        ];
        $this->model->shop_option_ids = [
            '1',
            '2',
            '8',
            '353',
            '352',
            '161',
        ];
        $this->model->shop_brand_id = null;
        $this->model->related = [
            '1',
        ];
        $this->model->shelf_life = 3;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 25;
        $this->model->size = [
            'width' => '46',
            'height' => '28',
            'length' => '30',
        ];
        $this->model->offer = [
            'deal_of_day',
        ];
        $this->model->rating = 4;
        $this->model->measure = 'pcs';
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 40;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Настольная игра ';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->shop_category_id = 984;
        $this->model->package = '';
        $this->model->shop_option = "";
        $this->model->text = '';
        $this->model->image = [
            'orig.webp',
            'orig (2).webp',
            'orig (5).webp',
            '1 — копия.jpg',
            '1 (1).jpg',
            '12.jpg',
        ];
        $this->model->shop_option_ids = [
            '131',
            '132',
            '134',
            '137',
            '139',
        ];
        $this->model->shop_brand_id = 5;
        $this->model->related = [
            '1',
            '15',
            '20',
            '21',
            '27',
        ];
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 12;
        $this->model->size = [
            'width' => '',
            'height' => '',
            'length' => '',
        ];
        $this->model->offer = [
            'popular',
            'discount',
        ];
        $this->model->rating = 2;
        $this->model->measure = 'kg';
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 113;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Кофе в зернах';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->shop_category_id = 524;
        $this->model->package = '';
        $this->model->shop_option = "";
        $this->model->text = '<p>Zetsoftda ishlab chiqarilgan</p><p>&nbsp;</p>';
        $this->model->image = [
            'orig (1).webp',
            'orig (2).webp',
            'orig (3).webp',
        ];
        $this->model->shop_option_ids = [
            '381',
            '383',
            '384',
            '385',
            '386',
        ];
        $this->model->shop_brand_id = 16;
        $this->model->related = [
            '19',
        ];
        $this->model->shelf_life = 3;
        $this->model->shelf_life_unit = '';
        $this->model->weight = 15;
        $this->model->size = [
            'width' => '5',
            'height' => '5',
            'length' => '3',
        ];
        $this->model->offer = [
            'discount',
        ];
        $this->model->rating = 4;
        $this->model->measure = 'kg';
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 112;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Max Factor Блеск для губ';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->shop_category_id = 524;
        $this->model->package = '';
        $this->model->shop_option = "";
        $this->model->text = '<p>фвфвымва</p>';
        $this->model->image = [
            'orig.webp',
            'orig (1).webp',
            'orig (2).webp',
            'orig (5).webp',
        ];
        $this->model->shop_option_ids = [
            '377',
            '378',
        ];
        $this->model->shop_brand_id = null;
        $this->model->related = [
            '19',
            '20',
        ];
        $this->model->shelf_life = 3;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 5;
        $this->model->size = [
            'width' => '3',
            'height' => '2',
            'length' => '1',
        ];
        $this->model->offer = [
            'new',
        ];
        $this->model->rating = 2.5;
        $this->model->measure = 'pcs';
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 114;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Перчатки ZO\'R';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->shop_category_id = 709;
        $this->model->package = '';
        $this->model->shop_option = "";
        $this->model->text = '<p>Zetsoftda ishlab chiqarilgan</p>,';
        $this->model->image = [
            'orig.webp',
            'orig (1).webp',
        ];
        $this->model->shop_option_ids = [
            '401',
            '402',
            '404',
            '406',
            '407',
        ];
        $this->model->shop_brand_id = 5;
        $this->model->related = [
            '21',
        ];
        $this->model->shelf_life = 3;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = null;
        $this->model->size = [
            'width' => '2,5',
            'height' => '1,2',
            'length' => '3,2',
        ];
        $this->model->offer = [
            'new',
            'popular',
            'free_delivery',
        ];
        $this->model->rating = 3.5;
        $this->model->measure = 'pcs';
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 33;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Мотоблок бензиновый';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->shop_category_id = 978;
        $this->model->package = '';
        $this->model->shop_option = "";
        $this->model->text = '<p>Двойная основная камера с объективами 13 Мп + 2 Мп (портретный объектив), позволяет запечатлеть мир во всей его красе. Функции фазового автофокуса и цифровой зум создадут потрясающие снимки, делая их чёткими и насыщенными. Разработчики также предусмотрели интересные режимы съёмки - сюжетный режим, панорама, с настройками баланса белого, экспокоррекции и автоспуска. Более того, второй модуль камеры снимает видео в широком формате Full HD. Фронтальная 8-мегапиксельная селфи-камера делает отличные снимки разрешением фото 3264х2448. Для внесения индивидуальности каждому снимку, вы сможете экспериментировать с различными эффектами и фильтрами, добавлять забавные стикеры и наклейки.</p>';
        $this->model->image = [
            'orig (2).webp',
        ];
        $this->model->shop_option_ids = [
            '1',
            '2',
            '5',
            '8',
            '204',
            '207',
        ];
        $this->model->shop_brand_id = 3;
        $this->model->related = [
            '1',
        ];
        $this->model->shelf_life = 3;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 12;
        $this->model->size = [
            'width' => '14',
            'height' => '21',
            'length' => '12',
        ];
        $this->model->offer = [
            'new',
            'discount',
        ];
        $this->model->rating = 3.5;
        $this->model->measure = 'pcs';
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 32;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Аккумуляторная дрель-шуруповерт';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->shop_category_id = 978;
        $this->model->package = '';
        $this->model->shop_option = "";
        $this->model->text = '';
        $this->model->image = [
            'orig (1).webp',
        ];
        $this->model->shop_option_ids = [
            '1',
            '2',
            '5',
            '8',
            '206',
            '207',
            '204',
        ];
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 12;
        $this->model->size = [
            'width' => '14',
            'height' => '21',
            'length' => '12',
        ];
        $this->model->offer = [
            'new',
            'deal_of_day',
            'popular',
            'top_sell',
            'discount',
            'super_offer',
            'free_delivery',
        ];
        $this->model->rating = 3.5;
        $this->model->measure = 'pcs';
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 21;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Гель для бровей и ресниц';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->shop_category_id = 978;
        $this->model->package = '';
        $this->model->shop_option = "";
        $this->model->text = '<p>Двойная основная камера с объективами 13 Мп + 2 Мп (портретный объектив), позволяет запечатлеть мир во всей его красе. Функции фазового автофокуса и цифровой зум создадут потрясающие снимки, делая их чёткими и насыщенными. Разработчики также предусмотрели интересные режимы съёмки - сюжетный режим, панорама, с настройками баланса белого, экспокоррекции и автоспуска. Более того, второй модуль камеры снимает видео в широком формате Full HD. Фронтальная 8-мегапиксельная селфи-камера делает отличные снимки разрешением фото 3264х2448. Для внесения индивидуальности каждому снимку, вы сможете экспериментировать с различными эффектами и фильтрами, добавлять забавные стикеры и наклейки.</p>';
        $this->model->image = [
            'orig (3).webp',
        ];
        $this->model->shop_option_ids = [
            '1',
            '2',
            '5',
            '8',
            '204',
            '206',
            '207',
        ];
        $this->model->shop_brand_id = 1;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 12;
        $this->model->size = [
            'width' => '15',
            'height' => '11',
            'length' => '14',
        ];
        $this->model->offer = [
            'new',
        ];
        $this->model->rating = 3.5;
        $this->model->measure = 'pcs';
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 26;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Трансмиссионное масло';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->shop_category_id = 364;
        $this->model->package = '';
        $this->model->shop_option = "";
        $this->model->text = '';
        $this->model->image = [
            'orig.webp',
            'orig (1).webp',
            'orig (2).webp',
        ];
        $this->model->shop_option_ids = [
            '1',
            '2',
            '5',
            '8',
            '13',
        ];
        $this->model->shop_brand_id = null;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 12;
        $this->model->size = [
            'width' => '10',
            'height' => '11',
            'length' => '16',
        ];
        $this->model->offer = "";
        $this->model->rating = 3.5;
        $this->model->measure = 'pcs';
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 115;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Дезинфицирующие средства ZO\'R';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->shop_category_id = 706;
        $this->model->package = '';
        $this->model->shop_option = "";
        $this->model->text = '<p>Zetsoftda ishlab chiqarilgan</p>,';
        $this->model->image = [
            'orig (3).webp',
        ];
        $this->model->shop_option_ids = [
            '398',
            '399',
            '400',
        ];
        $this->model->shop_brand_id = 5;
        $this->model->related = [
            '15',
        ];
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 25;
        $this->model->size = [
            'width' => '21',
            'height' => '5',
            'length' => '13',
        ];
        $this->model->offer = [
            'new',
            'deal_of_day',
            'popular',
            'discount',
        ];
        $this->model->rating = 3.5;
        $this->model->measure = 'pcs';
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 28;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Шнек ELITECH';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->shop_category_id = 978;
        $this->model->package = '';
        $this->model->shop_option = "";
        $this->model->text = '';
        $this->model->image = [
            'orig.webp',
            'orig (4).webp',
        ];
        $this->model->shop_option_ids = [
            '1',
            '2',
            '5',
            '8',
            '204',
            '206',
            '207',
        ];
        $this->model->shop_brand_id = 5;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 12;
        $this->model->size = [
            'width' => '21',
            'height' => '14',
            'length' => '13',
        ];
        $this->model->offer = [
            'new',
            'discount',
        ];
        $this->model->rating = 3.5;
        $this->model->measure = 'pcs';
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 30;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Лазерный дальномер';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->shop_category_id = 978;
        $this->model->package = '';
        $this->model->shop_option = "";
        $this->model->text = '';
        $this->model->image = [
            'orig.webp',
            'orig (1).webp',
            'orig (2).webp',
            'orig (3).webp',
        ];
        $this->model->shop_option_ids = [
            '80',
            '85',
            '86',
            '87',
            '88',
            '89',
            '91',
            '93',
        ];
        $this->model->shop_brand_id = 6;
        $this->model->related = "";
        $this->model->shelf_life = null;
        $this->model->shelf_life_unit = '';
        $this->model->weight = 15;
        $this->model->size = [
            'width' => '14',
            'height' => '12',
            'length' => '13',
        ];
        $this->model->offer = [
            'deal_of_day',
            'popular',
        ];
        $this->model->rating = 3.5;
        $this->model->measure = 'pcs';
        $this->save();


        $this->model = new ShopProduct();

        $this->model->id = 1;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = 'Samsung Galaxy A10s ';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->user_company_id = null;
        $this->model->shop_category_id = 1379;
        $this->model->package = '';
        $this->model->shop_option = "";
        $this->model->text = '<p>Двойная основная камера с объективами 13 Мп + 2 Мп (портретный объектив), позволяет запечатлеть мир во всей его красе. Функции фазового автофокуса и цифровой зум создадут потрясающие снимки, делая их чёткими и насыщенными. Разработчики также предусмотрели интересные режимы съёмки - сюжетный режим, панорама, с настройками баланса белого, экспокоррекции и автоспуска. Более того, второй модуль камеры снимает видео в широком формате Full HD. Фронтальная 8-мегапиксельная селфи-камера делает отличные снимки разрешением фото 3264х2448. Для внесения индивидуальности каждому снимку, вы сможете экспериментировать с различными эффектами и фильтрами, добавлять забавные стикеры и наклейки.</p>';
        $this->model->image = [
            'Samsung_Galaxy_A10s_32Gb.jpg',
            'Samsung_Galaxy_A10s_32Gb-black.jpg',
            'Samsung_Galaxy_A10s_32Gb-blue.jpg',
            'Samsung_Galaxy_A10s_32Gb-red.jpg',
        ];
        $this->model->shop_option_ids = [
            '1',
            '4',
            '5',
            '6',
            '11',
            '13',
        ];
        $this->model->shop_brand_id = null;
        $this->model->related = [
            '1',
        ];
        $this->model->shelf_life = 2020;
        $this->model->shelf_life_unit = 'year';
        $this->model->weight = 5;
        $this->model->size = [
            'width' => '200',
            'height' => '100',
            'length' => '80',
        ];
        $this->model->offer = [
            'new',
            'deal_of_day',
        ];
        $this->model->rating = 3.5;
        $this->model->measure = 'pcs';
        $this->save();


    }

}
