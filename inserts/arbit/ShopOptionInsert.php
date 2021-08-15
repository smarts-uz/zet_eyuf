<?php

namespace zetsoft\inserts\arbit;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\shop\ShopOption;

class ShopOptionInsert extends ZInsert
{

    public function run()
    {

        $this->model = new ShopOption();

        $this->model->id = 13;
        $this->model->sort = null;
        $this->model->name = '500 x 500';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 1;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 1;
        $this->model->sort = null;
        $this->model->name = 'gold ru';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 4;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 2;
        $this->model->sort = null;
        $this->model->name = 'white ru';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 4;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 5;
        $this->model->sort = null;
        $this->model->name = 'black ru';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 4;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 8;
        $this->model->sort = null;
        $this->model->name = 'blue ru';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 4;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 15;
        $this->model->sort = null;
        $this->model->name = '4gb ru';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 5;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 14;
        $this->model->sort = null;
        $this->model->name = '3gb ru';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 5;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 4;
        $this->model->sort = null;
        $this->model->name = 'FULL HD 4k ru';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 6;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 3;
        $this->model->sort = null;
        $this->model->name = 'HD ru';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 6;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 7;
        $this->model->sort = null;
        $this->model->name = 'Full HD ru';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 6;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 11;
        $this->model->sort = null;
        $this->model->name = '180GR';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 3;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 10;
        $this->model->sort = null;
        $this->model->name = '167GR';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 3;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 6;
        $this->model->sort = null;
        $this->model->name = '16GB ru';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 3;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 12;
        $this->model->sort = null;
        $this->model->name = '64GB';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 3;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 9;
        $this->model->sort = null;
        $this->model->name = '128GB';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 3;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 18;
        $this->model->sort = null;
        $this->model->name = 'M';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 9;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 19;
        $this->model->sort = null;
        $this->model->name = 'Xl';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 9;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 20;
        $this->model->sort = null;
        $this->model->name = 'veskoz';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 10;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 21;
        $this->model->sort = null;
        $this->model->name = 'atlas';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 10;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 22;
        $this->model->sort = null;
        $this->model->name = 'узкая';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 12;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 23;
        $this->model->sort = null;
        $this->model->name = 'беспроводные наушники';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 13;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 24;
        $this->model->sort = null;
        $this->model->name = 'смартфон';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 14;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 25;
        $this->model->sort = null;
        $this->model->name = 'смартфон';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 14;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 26;
        $this->model->sort = null;
        $this->model->name = 'цветной, сенсорный';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 17;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 27;
        $this->model->sort = null;
        $this->model->name = '3';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 25;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 28;
        $this->model->sort = null;
        $this->model->name = 'GSM 900/1800/1900, 3G, 4G LTE';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 39;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 29;
        $this->model->sort = null;
        $this->model->name = 'HiSilicon Kirin 990 5G';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 44;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 30;
        $this->model->sort = null;
        $this->model->name = '4100 мА⋅ч';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 59;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 31;
        $this->model->sort = null;
        $this->model->name = 'есть';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 29;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 32;
        $this->model->sort = null;
        $this->model->name = 'вкладыши';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 14;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 33;
        $this->model->sort = null;
        $this->model->name = 'динамические';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 32;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 34;
        $this->model->sort = null;
        $this->model->name = 'есть';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 75;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 35;
        $this->model->sort = null;
        $this->model->name = 'есть';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 34;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 36;
        $this->model->sort = null;
        $this->model->name = 'без крепления';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 37;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 37;
        $this->model->sort = null;
        $this->model->name = '13 мм';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 38;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 38;
        $this->model->sort = null;
        $this->model->name = 'есть';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 41;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 39;
        $this->model->sort = null;
        $this->model->name = '2';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 43;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 40;
        $this->model->sort = null;
        $this->model->name = 'Android 9.0';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 16;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 41;
        $this->model->sort = null;
        $this->model->name = 'Samsung Exynos 7904';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 18;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 42;
        $this->model->sort = null;
        $this->model->name = 'Bluetooth';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 46;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 43;
        $this->model->sort = null;
        $this->model->name = '8';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 19;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 44;
        $this->model->sort = null;
        $this->model->name = '5.0';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 47;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 45;
        $this->model->sort = null;
        $this->model->name = 'Cortex-A53/A73';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 20;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 46;
        $this->model->sort = null;
        $this->model->name = 'Handsfree, Headset';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 49;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 47;
        $this->model->sort = null;
        $this->model->name = '14 нм';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 21;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 48;
        $this->model->sort = null;
        $this->model->name = '32 ГБ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 22;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 49;
        $this->model->sort = null;
        $this->model->name = 'есть';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 50;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 50;
        $this->model->sort = null;
        $this->model->name = '2 ГБ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 5;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 51;
        $this->model->sort = null;
        $this->model->name = 'есть';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 53;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 53;
        $this->model->sort = null;
        $this->model->name = 'есть';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 55;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 55;
        $this->model->sort = null;
        $this->model->name = '120 ч';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 60;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 56;
        $this->model->sort = null;
        $this->model->name = 'да';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 28;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 57;
        $this->model->sort = null;
        $this->model->name = '5 ч';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 62;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 58;
        $this->model->sort = null;
        $this->model->name = 'глянцевый';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 6;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 59;
        $this->model->sort = null;
        $this->model->name = '15 ч';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 64;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 61;
        $this->model->sort = null;
        $this->model->name = 'есть';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 65;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 63;
        $this->model->sort = null;
        $this->model->name = 'есть';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 68;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 64;
        $this->model->sort = null;
        $this->model->name = '224';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 35;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 65;
        $this->model->sort = null;
        $this->model->name = 'есть';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 70;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 66;
        $this->model->sort = null;
        $this->model->name = 'есть';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 72;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 67;
        $this->model->sort = null;
        $this->model->name = 'Mali-G71 MP2';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 36;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 70;
        $this->model->sort = null;
        $this->model->name = 'nano SIM';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 45;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 71;
        $this->model->sort = null;
        $this->model->name = '1';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 48;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 73;
        $this->model->sort = null;
        $this->model->name = '1';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 25;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 74;
        $this->model->sort = null;
        $this->model->name = '8 МП';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 56;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 75;
        $this->model->sort = null;
        $this->model->name = 'автофокус';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 57;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 77;
        $this->model->sort = null;
        $this->model->name = 'есть';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 61;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 78;
        $this->model->sort = null;
        $this->model->name = 'есть';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 63;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 79;
        $this->model->sort = null;
        $this->model->name = 'есть';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 66;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 80;
        $this->model->sort = null;
        $this->model->name = 'есть';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 67;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 81;
        $this->model->sort = null;
        $this->model->name = 'есть';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 69;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 82;
        $this->model->sort = null;
        $this->model->name = 'акселерометр';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 71;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 85;
        $this->model->sort = null;
        $this->model->name = '6150 мА⋅ч';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 52;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 86;
        $this->model->sort = null;
        $this->model->name = '245.2x149.4x7.5 мм';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 77;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 87;
        $this->model->sort = null;
        $this->model->name = '470 г';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 2;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 88;
        $this->model->sort = null;
        $this->model->name = 'металл';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 79;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 89;
        $this->model->sort = null;
        $this->model->name = 'нет';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 80;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 90;
        $this->model->sort = null;
        $this->model->name = 'процессор Samsung Exynos 7904, звуковая система Dolby Atmos, детский режим, системы навигации Beidou и Galileo';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 81;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 91;
        $this->model->sort = null;
        $this->model->name = '2019';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 82;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 92;
        $this->model->sort = null;
        $this->model->name = 'Android 9.0';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 16;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 93;
        $this->model->sort = null;
        $this->model->name = 'Android 10';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 96;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 95;
        $this->model->sort = null;
        $this->model->name = '8';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 19;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 96;
        $this->model->sort = null;
        $this->model->name = 'Cortex-A53';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 20;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 97;
        $this->model->sort = null;
        $this->model->name = 'классический';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 98;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 98;
        $this->model->sort = null;
        $this->model->name = '12 нм';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 21;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 99;
        $this->model->sort = null;
        $this->model->name = '128 ГБ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 22;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 100;
        $this->model->sort = null;
        $this->model->name = '2';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 99;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 101;
        $this->model->sort = null;
        $this->model->name = '4 ГБ LPDDR4';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 23;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 102;
        $this->model->sort = null;
        $this->model->name = 'nano SIM';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 100;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 105;
        $this->model->sort = null;
        $this->model->name = 'попеременный';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 101;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 106;
        $this->model->sort = null;
        $this->model->name = 'да';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 28;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 107;
        $this->model->sort = null;
        $this->model->name = 'есть';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 102;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 108;
        $this->model->sort = null;
        $this->model->name = 'TFT IPS, глянцевый';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 17;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 109;
        $this->model->sort = null;
        $this->model->name = 'емкостный, мультитач';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 33;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 110;
        $this->model->sort = null;
        $this->model->name = 'PowerVR GE8320';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 36;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 111;
        $this->model->sort = null;
        $this->model->name = '206 г';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 103;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 112;
        $this->model->sort = null;
        $this->model->name = 'есть, Wi-Fi 802.11ac, WiFi Direct';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 40;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 113;
        $this->model->sort = null;
        $this->model->name = 'есть, Bluetooth 5.0';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 42;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 114;
        $this->model->sort = null;
        $this->model->name = '1';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 26;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 115;
        $this->model->sort = null;
        $this->model->name = '8 МП';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 56;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 116;
        $this->model->sort = null;
        $this->model->name = 'мультитач, емкостный';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 104;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 117;
        $this->model->sort = null;
        $this->model->name = 'есть, 5 МП';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 58;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 118;
        $this->model->sort = null;
        $this->model->name = 'есть';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 61;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 119;
        $this->model->sort = null;
        $this->model->name = '6.57 дюйм';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 105;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 120;
        $this->model->sort = null;
        $this->model->name = 'есть';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 63;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 121;
        $this->model->sort = null;
        $this->model->name = 'есть';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 63;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 122;
        $this->model->sort = null;
        $this->model->name = '2400x1080';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 106;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 123;
        $this->model->sort = null;
        $this->model->name = '401';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 107;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 124;
        $this->model->sort = null;
        $this->model->name = '20:9';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 109;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 125;
        $this->model->sort = null;
        $this->model->name = 'есть';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 108;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 126;
        $this->model->sort = null;
        $this->model->name = 'есть';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 66;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 127;
        $this->model->sort = null;
        $this->model->name = 'есть';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 110;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 128;
        $this->model->sort = null;
        $this->model->name = 'есть';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 67;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 129;
        $this->model->sort = null;
        $this->model->name = 'есть';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 69;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 131;
        $this->model->sort = null;
        $this->model->name = 'AAC, WMA, WAV, MP3';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 73;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 132;
        $this->model->sort = null;
        $this->model->name = 'AAC, WMA, WAV, MP3';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 73;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 133;
        $this->model->sort = null;
        $this->model->name = 'AAC, WMA, WAV, MP3';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 73;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 134;
        $this->model->sort = null;
        $this->model->name = '40 МП, 12 МП, 8 МП';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 111;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 135;
        $this->model->sort = null;
        $this->model->name = 'WMV, MKV, H.264, MOV, MP4';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 74;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 136;
        $this->model->sort = null;
        $this->model->name = 'F/1.60, F/2.20, F/2.40';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 112;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 138;
        $this->model->sort = null;
        $this->model->name = 'есть';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 83;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 139;
        $this->model->sort = null;
        $this->model->name = 'тыльная, светодиодная';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 113;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 140;
        $this->model->sort = null;
        $this->model->name = 'автофокус, оптическая стабилизация';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 114;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 141;
        $this->model->sort = null;
        $this->model->name = 'опционально';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 115;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 142;
        $this->model->sort = null;
        $this->model->name = 'опционально';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 115;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 143;
        $this->model->sort = null;
        $this->model->name = 'есть (MP4)';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 116;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 144;
        $this->model->sort = null;
        $this->model->name = '3840x2160';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 117;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 145;
        $this->model->sort = null;
        $this->model->name = 'есть';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 119;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 146;
        $this->model->sort = null;
        $this->model->name = 'есть, 32 МП';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 118;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 54;
        $this->model->sort = null;
        $this->model->name = '10.1';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 27;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 60;
        $this->model->sort = null;
        $this->model->name = 'емкостный';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 35;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 62;
        $this->model->sort = null;
        $this->model->name = 'емкостный';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 33;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 83;
        $this->model->sort = null;
        $this->model->name = 'AAC';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 73;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 68;
        $this->model->sort = null;
        $this->model->name = 'есть';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 40;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 69;
        $this->model->sort = null;
        $this->model->name = 'есть';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 42;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 84;
        $this->model->sort = null;
        $this->model->name = 'MKV';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 74;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 72;
        $this->model->sort = null;
        $this->model->name = '3G';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 51;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 76;
        $this->model->sort = null;
        $this->model->name = 'есть';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 58;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 103;
        $this->model->sort = null;
        $this->model->name = 'есть';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 24;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 104;
        $this->model->sort = null;
        $this->model->name = '10.3';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 27;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 147;
        $this->model->sort = null;
        $this->model->name = 'MP3, AAC, WAV, WMA';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 120;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 137;
        $this->model->sort = null;
        $this->model->name = 'USB-C';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 86;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 150;
        $this->model->sort = null;
        $this->model->name = 'Wi-Fi 802.11ac, Wi-Fi Direct, Bluetooth 5.1, USB, NFC';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 123;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 149;
        $this->model->sort = null;
        $this->model->name = 'B1/B2/B3/B4/B5/B7/B8/B18/B19/B20/B26/B28';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 123;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 151;
        $this->model->sort = null;
        $this->model->name = 'BeiDou, A-GPS, Galileo, ГЛОНАСС, GPS';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 123;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 130;
        $this->model->sort = null;
        $this->model->name = 'акселерометр';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 86;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 152;
        $this->model->sort = null;
        $this->model->name = 'есть';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 128;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 153;
        $this->model->sort = null;
        $this->model->name = '8';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 129;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 154;
        $this->model->sort = null;
        $this->model->name = '5000 мА⋅ч';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 59;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 155;
        $this->model->sort = null;
        $this->model->name = '244.2x153.3x8.1 мм';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 77;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 156;
        $this->model->sort = null;
        $this->model->name = '460 г';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 78;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 157;
        $this->model->sort = null;
        $this->model->name = 'Mali-G76 MP16';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 130;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 158;
        $this->model->sort = null;
        $this->model->name = 'металл';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 79;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 159;
        $this->model->sort = null;
        $this->model->name = 'нет';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 80;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 160;
        $this->model->sort = null;
        $this->model->name = '256 ГБ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 131;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 161;
        $this->model->sort = null;
        $this->model->name = '8 ГБ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 132;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 162;
        $this->model->sort = null;
        $this->model->name = 'мультитач, емкостный';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 133;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 163;
        $this->model->sort = null;
        $this->model->name = '401';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 134;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 164;
        $this->model->sort = null;
        $this->model->name = '20:9';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 135;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 165;
        $this->model->sort = null;
        $this->model->name = 'есть';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 136;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 166;
        $this->model->sort = null;
        $this->model->name = 'сбоку';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 137;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 167;
        $this->model->sort = null;
        $this->model->name = 'есть';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 138;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 168;
        $this->model->sort = null;
        $this->model->name = '75.8x162.7x8.8 мм';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 139;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 169;
        $this->model->sort = null;
        $this->model->name = '75.8x162.7x8.8 мм';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 140;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 170;
        $this->model->sort = null;
        $this->model->name = 'смартфон, зарядное устройство, USB-кабель, инструмент для извлечения карт, защитная пленка, защитный чехол, переходник Type-C—3,5 мм для наушников';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 141;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 171;
        $this->model->sort = null;
        $this->model->name = 'двойная фронтальная камера: 32 МП (диафрагма f/2.0, фиксированный фокус) + 8 МП (диафрагма f/2.2, фиксированный фокус)';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 142;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 172;
        $this->model->sort = null;
        $this->model->name = '2020-02-25';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 143;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 173;
        $this->model->sort = null;
        $this->model->name = '2020-03-03';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 144;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 174;
        $this->model->sort = null;
        $this->model->name = 'ноутбук';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 146;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 175;
        $this->model->sort = null;
        $this->model->name = 'DOS';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 149;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 176;
        $this->model->sort = null;
        $this->model->name = '15.6 \\\\\\\\\\\\\\\\\\\\\"';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 159;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 177;
        $this->model->sort = null;
        $this->model->name = '1920x1080';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 160;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 178;
        $this->model->sort = null;
        $this->model->name = 'есть';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 155;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 179;
        $this->model->sort = null;
        $this->model->name = 'IPS';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 165;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 180;
        $this->model->sort = null;
        $this->model->name = 'нет';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 169;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 181;
        $this->model->sort = null;
        $this->model->name = 'нет';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 170;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 182;
        $this->model->sort = null;
        $this->model->name = 'есть';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 171;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 183;
        $this->model->sort = null;
        $this->model->name = 'нет';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 172;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 184;
        $this->model->sort = null;
        $this->model->name = 'встроенная';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 175;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 185;
        $this->model->sort = null;
        $this->model->name = 'AMD Radeon RX Vega 10';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 177;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 186;
        $this->model->sort = null;
        $this->model->name = 'нет';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 178;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 187;
        $this->model->sort = null;
        $this->model->name = 'HDD+SSD';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 184;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 188;
        $this->model->sort = null;
        $this->model->name = 'DVD нет';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 192;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 189;
        $this->model->sort = null;
        $this->model->name = 'microSD';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 176;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 190;
        $this->model->sort = null;
        $this->model->name = 'есть';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 194;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 191;
        $this->model->sort = null;
        $this->model->name = '802.11ac';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 196;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 192;
        $this->model->sort = null;
        $this->model->name = 'есть';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 198;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 193;
        $this->model->sort = null;
        $this->model->name = 'нет';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 202;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 194;
        $this->model->sort = null;
        $this->model->name = 'нет';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 204;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 195;
        $this->model->sort = null;
        $this->model->name = 'нет';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 186;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 196;
        $this->model->sort = null;
        $this->model->name = 'нет';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 215;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 197;
        $this->model->sort = null;
        $this->model->name = 'есть';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 191;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 198;
        $this->model->sort = null;
        $this->model->name = 'нет';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 193;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 199;
        $this->model->sort = null;
        $this->model->name = 'есть';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 195;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 200;
        $this->model->sort = null;
        $this->model->name = 'нет';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 197;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 201;
        $this->model->sort = null;
        $this->model->name = 'нет';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 199;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 202;
        $this->model->sort = null;
        $this->model->name = 'есть';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 201;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 203;
        $this->model->sort = null;
        $this->model->name = 'нет';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 203;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 52;
        $this->model->sort = null;
        $this->model->name = 'есть';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 24;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 204;
        $this->model->sort = null;
        $this->model->name = '23.8\\\\\\\\\\\\\\\\\\\\\"';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 217;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 205;
        $this->model->sort = null;
        $this->model->name = '1920x1080';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 218;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 206;
        $this->model->sort = null;
        $this->model->name = 'глянцевый';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 219;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 207;
        $this->model->sort = null;
        $this->model->name = 'матовый';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 219;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 208;
        $this->model->sort = null;
        $this->model->name = 'TN';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 220;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 209;
        $this->model->sort = null;
        $this->model->name = 'IPS';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 220;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 210;
        $this->model->sort = null;
        $this->model->name = '*VA';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 220;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 211;
        $this->model->sort = null;
        $this->model->name = '8';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 221;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 212;
        $this->model->sort = null;
        $this->model->name = '6';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 221;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 213;
        $this->model->sort = null;
        $this->model->name = '4';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 221;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 214;
        $this->model->sort = null;
        $this->model->name = '12 МБ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 222;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 215;
        $this->model->sort = null;
        $this->model->name = '4 МБ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 222;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 216;
        $this->model->sort = null;
        $this->model->name = 'летние';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 229;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 217;
        $this->model->sort = null;
        $this->model->name = '215';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 231;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 218;
        $this->model->sort = null;
        $this->model->name = '225';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 231;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 219;
        $this->model->sort = null;
        $this->model->name = '245';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 231;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 220;
        $this->model->sort = null;
        $this->model->name = '255';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 231;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 221;
        $this->model->sort = null;
        $this->model->name = '265';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 231;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 222;
        $this->model->sort = null;
        $this->model->name = '65';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 232;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 223;
        $this->model->sort = null;
        $this->model->name = '75';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 232;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 224;
        $this->model->sort = null;
        $this->model->name = '16';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 230;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 225;
        $this->model->sort = null;
        $this->model->name = 'нет';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 227;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 226;
        $this->model->sort = null;
        $this->model->name = 'для внедорожника';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 228;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 227;
        $this->model->sort = null;
        $this->model->name = 'летние';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 223;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 228;
        $this->model->sort = null;
        $this->model->name = '16';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 226;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 229;
        $this->model->sort = null;
        $this->model->name = '215';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 224;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 230;
        $this->model->sort = null;
        $this->model->name = '65';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 225;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 231;
        $this->model->sort = null;
        $this->model->name = 'нет';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 233;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 232;
        $this->model->sort = null;
        $this->model->name = 'нет';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 234;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 233;
        $this->model->sort = null;
        $this->model->name = 'беззеркальная со сменной оптикой';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 235;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 234;
        $this->model->sort = null;
        $this->model->name = 'байонет Nikon Z';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 236;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 235;
        $this->model->sort = null;
        $this->model->name = '21.51 млн';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 237;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 236;
        $this->model->sort = null;
        $this->model->name = '20.9 млн';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 239;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 237;
        $this->model->sort = null;
        $this->model->name = 'APS-C (23.5 x 15.7 мм)';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 241;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 238;
        $this->model->sort = null;
        $this->model->name = 'автоматический';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 244;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 239;
        $this->model->sort = null;
        $this->model->name = 'встроенная';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 248;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 240;
        $this->model->sort = null;
        $this->model->name = 'прогулочная ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 240;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 241;
        $this->model->sort = null;
        $this->model->name = 'с 6 месяцев ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 245;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 242;
        $this->model->sort = null;
        $this->model->name = '   25 кг';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 247;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 243;
        $this->model->sort = null;
        $this->model->name = 'алюминий';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 255;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 244;
        $this->model->sort = null;
        $this->model->name = 'книжка';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 256;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 245;
        $this->model->sort = null;
        $this->model->name = 'складывание одной рукой';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 256;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 246;
        $this->model->sort = null;
        $this->model->name = 'прогулочная';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 240;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 247;
        $this->model->sort = null;
        $this->model->name = '4';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 257;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 248;
        $this->model->sort = null;
        $this->model->name = ' передние и задние одинарные';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 257;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 249;
        $this->model->sort = null;
        $this->model->name = '15 кг';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 247;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 250;
        $this->model->sort = null;
        $this->model->name = '11 кг';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 243;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 251;
        $this->model->sort = null;
        $this->model->name = 'алюминий';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 255;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 252;
        $this->model->sort = null;
        $this->model->name = 'книжка';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 256;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 253;
        $this->model->sort = null;
        $this->model->name = 'пружины';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 251;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 254;
        $this->model->sort = null;
        $this->model->name = '37x24 см';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 252;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 255;
        $this->model->sort = null;
        $this->model->name = '94 см';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 253;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 256;
        $this->model->sort = null;
        $this->model->name = 'бампер';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 254;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 257;
        $this->model->sort = null;
        $this->model->name = 'регулировка наклона спинки';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 254;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 258;
        $this->model->sort = null;
        $this->model->name = 'регулировка высоты подножки';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 254;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 259;
        $this->model->sort = null;
        $this->model->name = 'дождевик';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 258;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 260;
        $this->model->sort = null;
        $this->model->name = 'накидка на ноги';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 258;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 261;
        $this->model->sort = null;
        $this->model->name = 'солнцезащитный козырек';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 258;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 262;
        $this->model->sort = null;
        $this->model->name = 'есть';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 259;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 263;
        $this->model->sort = null;
        $this->model->name = 'ткань';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 261;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 264;
        $this->model->sort = null;
        $this->model->name = 'NVIDIA GeForce GTX 1660 SUPER';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 262;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 265;
        $this->model->sort = null;
        $this->model->name = 'GV-N166SOC-6GD';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 263;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 266;
        $this->model->sort = null;
        $this->model->name = 'PCI-E 16x 3.0';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 264;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 267;
        $this->model->sort = null;
        $this->model->name = '1830 МГц';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 265;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 268;
        $this->model->sort = null;
        $this->model->name = '6144 МБ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 266;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 269;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 267;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 270;
        $this->model->sort = null;
        $this->model->name = 'GDDR6';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 267;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 271;
        $this->model->sort = null;
        $this->model->name = 'поддержка HDCP';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 268;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 272;
        $this->model->sort = null;
        $this->model->name = 'HDMI, DisplayPort x3';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 268;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 273;
        $this->model->sort = null;
        $this->model->name = '2.0b';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 269;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 274;
        $this->model->sort = null;
        $this->model->name = '1.4';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 270;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 275;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = null;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 276;
        $this->model->sort = null;
        $this->model->name = '+0,5';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 271;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 277;
        $this->model->sort = null;
        $this->model->name = '+0,75';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 271;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 278;
        $this->model->sort = null;
        $this->model->name = '+1';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 271;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 279;
        $this->model->sort = null;
        $this->model->name = '+1,25';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 271;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 280;
        $this->model->sort = null;
        $this->model->name = '8,4';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 274;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 281;
        $this->model->sort = null;
        $this->model->name = 'прозрачные';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 275;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 282;
        $this->model->sort = null;
        $this->model->name = 'две недели';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 276;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 283;
        $this->model->sort = null;
        $this->model->name = '14 мм';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 279;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 284;
        $this->model->sort = null;
        $this->model->name = 'арабика';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 272;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 285;
        $this->model->sort = null;
        $this->model->name = 'средняя';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 273;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 286;
        $this->model->sort = null;
        $this->model->name = '38%';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 282;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 287;
        $this->model->sort = null;
        $this->model->name = 'Бразилия';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 277;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 288;
        $this->model->sort = null;
        $this->model->name = 'вакуумная';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 278;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 289;
        $this->model->sort = null;
        $this->model->name = '100% арабика';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 280;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 290;
        $this->model->sort = null;
        $this->model->name = '18 мес.';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 281;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 292;
        $this->model->sort = null;
        $this->model->name = '2 шт.';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 285;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 293;
        $this->model->sort = null;
        $this->model->name = '+0,5';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 286;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 294;
        $this->model->sort = null;
        $this->model->name = ' +0,75';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 286;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 295;
        $this->model->sort = null;
        $this->model->name = '+1';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 286;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 296;
        $this->model->sort = null;
        $this->model->name = '+1,25';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 286;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 297;
        $this->model->sort = null;
        $this->model->name = 'да';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 287;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 298;
        $this->model->sort = null;
        $this->model->name = 'да';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 288;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 299;
        $this->model->sort = null;
        $this->model->name = 'да';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 289;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 300;
        $this->model->sort = null;
        $this->model->name = 'Black';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 294;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 301;
        $this->model->sort = null;
        $this->model->name = 'red';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 294;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 302;
        $this->model->sort = null;
        $this->model->name = 'автокресло';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 295;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 303;
        $this->model->sort = null;
        $this->model->name = '0/1/2/3 (до 36 кг)';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 296;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 304;
        $this->model->sort = null;
        $this->model->name = 'поддержка головы новорожденного, защита от боковых ударов';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 298;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 305;
        $this->model->sort = null;
        $this->model->name = 'анатомическая подушка';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 299;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 306;
        $this->model->sort = null;
        $this->model->name = ' мягкие накладки на внутренние ремни';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 299;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 307;
        $this->model->sort = null;
        $this->model->name = 'пятиточечные';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 300;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 308;
        $this->model->sort = null;
        $this->model->name = 'наклон спинки';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 301;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 309;
        $this->model->sort = null;
        $this->model->name = ' высота подголовника';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 301;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 310;
        $this->model->sort = null;
        $this->model->name = '7';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 302;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 311;
        $this->model->sort = null;
        $this->model->name = '2';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 303;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 312;
        $this->model->sort = null;
        $this->model->name = 'Isofix';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 304;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 313;
        $this->model->sort = null;
        $this->model->name = 'Isofix';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 304;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 314;
        $this->model->sort = null;
        $this->model->name = 'автомобильные ремни';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 304;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 315;
        $this->model->sort = null;
        $this->model->name = 'поворотный механизм';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 305;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 316;
        $this->model->sort = null;
        $this->model->name = 'спиной или лицом вперед';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 306;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 317;
        $this->model->sort = null;
        $this->model->name = 'трехточечные';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 307;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 318;
        $this->model->sort = null;
        $this->model->name = 'принтер этикеток';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 308;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 319;
        $this->model->sort = null;
        $this->model->name = 'термопечать';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 310;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 320;
        $this->model->sort = null;
        $this->model->name = 'UPC/EAN-128';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 311;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 321;
        $this->model->sort = null;
        $this->model->name = 'ITF-14 ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 311;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 322;
        $this->model->sort = null;
        $this->model->name = 'Codabar';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 311;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 323;
        $this->model->sort = null;
        $this->model->name = 'Code 93';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 311;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 324;
        $this->model->sort = null;
        $this->model->name = 'EAN-13';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 311;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 325;
        $this->model->sort = null;
        $this->model->name = 'EAN-8';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 311;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 326;
        $this->model->sort = null;
        $this->model->name = 'MSI/Plessey';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 311;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 327;
        $this->model->sort = null;
        $this->model->name = 'принтер';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 312;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 328;
        $this->model->sort = null;
        $this->model->name = 'CD-диск';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 312;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 329;
        $this->model->sort = null;
        $this->model->name = 'USB кабель';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 312;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 330;
        $this->model->sort = null;
        $this->model->name = 'блок питания';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 312;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 331;
        $this->model->sort = null;
        $this->model->name = 'есть';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 313;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 332;
        $this->model->sort = null;
        $this->model->name = 'Windows';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 314;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 333;
        $this->model->sort = null;
        $this->model->name = 'Linux';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 314;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 334;
        $this->model->sort = null;
        $this->model->name = 'Android';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 314;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 335;
        $this->model->sort = null;
        $this->model->name = 'Apple iOS';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 314;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 336;
        $this->model->sort = null;
        $this->model->name = '203 dpi';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 315;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 337;
        $this->model->sort = null;
        $this->model->name = 'кассовый аппарат';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 318;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 338;
        $this->model->sort = null;
        $this->model->name = '82 мм';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 316;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 339;
        $this->model->sort = null;
        $this->model->name = 'сеть';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 317;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 340;
        $this->model->sort = null;
        $this->model->name = '1xUSB';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 319;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 341;
        $this->model->sort = null;
        $this->model->name = 'RS-232';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 319;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 342;
        $this->model->sort = null;
        $this->model->name = 'встроенный принтер чеков';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 320;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 343;
        $this->model->sort = null;
        $this->model->name = 'платформа ОФД';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 321;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 344;
        $this->model->sort = null;
        $this->model->name = 'термопечать';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 322;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 345;
        $this->model->sort = null;
        $this->model->name = 'холодильный шкаф';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 323;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 346;
        $this->model->sort = null;
        $this->model->name = 'механическое';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 324;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 347;
        $this->model->sort = null;
        $this->model->name = 'хранение';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 325;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 348;
        $this->model->sort = null;
        $this->model->name = 'автоматическая';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 326;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 349;
        $this->model->sort = null;
        $this->model->name = '290 л';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 327;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 350;
        $this->model->sort = null;
        $this->model->name = '1.2 кВт*ч/сутки';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 328;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 351;
        $this->model->sort = null;
        $this->model->name = 'Внутренняя память';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 3;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 355;
        $this->model->sort = null;
        $this->model->name = 'shop_option_1';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 1;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 353;
        $this->model->sort = null;
        $this->model->name = '4GB';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 1;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 352;
        $this->model->sort = null;
        $this->model->name = '2GB';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 1;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 354;
        $this->model->sort = null;
        $this->model->name = '8GB';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 3;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 148;
        $this->model->sort = null;
        $this->model->name = 'есть, 3.5 мм';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 123;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 357;
        $this->model->sort = null;
        $this->model->name = 'Собачий корм';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 349;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 358;
        $this->model->sort = null;
        $this->model->name = 'Airpods i7';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 123;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 359;
        $this->model->sort = null;
        $this->model->name = 'Airpods i9';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 15;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 360;
        $this->model->sort = null;
        $this->model->name = 'с 8 месяцев';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 245;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 361;
        $this->model->sort = null;
        $this->model->name = 'Собачий корми';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 12;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 364;
        $this->model->sort = null;
        $this->model->name = '1 kg';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 78;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 94;
        $this->model->sort = null;
        $this->model->name = '2300 МГц';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 291;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 367;
        $this->model->sort = null;
        $this->model->name = 'СС крем';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 352;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 368;
        $this->model->sort = null;
        $this->model->name = 'Да';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 354;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 369;
        $this->model->sort = null;
        $this->model->name = 'кремовая';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 355;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 370;
        $this->model->sort = null;
        $this->model->name = '50 г';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 356;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 371;
        $this->model->sort = null;
        $this->model->name = 'для всех типов';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 357;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 372;
        $this->model->sort = null;
        $this->model->name = 'восстановление, увлажнение, защита от солнца, выравнивание поверхности кожи, улучшение цвета';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 358;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 373;
        $this->model->sort = null;
        $this->model->name = 'SPF 30';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 359;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 374;
        $this->model->sort = null;
        $this->model->name = 'блеск для губ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 361;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 375;
        $this->model->sort = null;
        $this->model->name = 'увлажнение';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 362;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 376;
        $this->model->sort = null;
        $this->model->name = 'шиммер';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 363;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 377;
        $this->model->sort = null;
        $this->model->name = 'витамин E';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 364;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 378;
        $this->model->sort = null;
        $this->model->name = 'альк';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 365;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 379;
        $this->model->sort = null;
        $this->model->name = 'палетка';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 366;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 380;
        $this->model->sort = null;
        $this->model->name = ' 1920x1080';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 367;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 383;
        $this->model->sort = null;
        $this->model->name = 'темная';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 369;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 384;
        $this->model->sort = null;
        $this->model->name = 'средний';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 370;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 385;
        $this->model->sort = null;
        $this->model->name = 'Гватемала';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 371;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 386;
        $this->model->sort = null;
        $this->model->name = 'вакуумная ';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 372;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 387;
        $this->model->sort = null;
        $this->model->name = 'капсулы';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 373;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 388;
        $this->model->sort = null;
        $this->model->name = 'кофе';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 374;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 389;
        $this->model->sort = null;
        $this->model->name = 'американо';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 375;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 390;
        $this->model->sort = null;
        $this->model->name = 'Tassimo';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 376;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 391;
        $this->model->sort = null;
        $this->model->name = '205 мл';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 377;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 392;
        $this->model->sort = null;
        $this->model->name = 'натуральный';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 378;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 393;
        $this->model->sort = null;
        $this->model->name = 'Кофе в капсулах Tassimo Jacobs Americano Classico';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 379;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 394;
        $this->model->sort = null;
        $this->model->name = ' Колумбия';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 380;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 395;
        $this->model->sort = null;
        $this->model->name = 'стеклянная банка';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 381;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 396;
        $this->model->sort = null;
        $this->model->name = 'обжарка: средняя';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 382;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 397;
        $this->model->sort = null;
        $this->model->name = 'кофе натуральный растворимый сублимированный (100% арабика)';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 383;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 398;
        $this->model->sort = null;
        $this->model->name = 'гель';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 384;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 399;
        $this->model->sort = null;
        $this->model->name = 'для обработки кожи';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 386;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 400;
        $this->model->sort = null;
        $this->model->name = 'детям до 6 лет применять только под присмотром взрослых';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 388;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 401;
        $this->model->sort = null;
        $this->model->name = 'перчатки';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 389;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 402;
        $this->model->sort = null;
        $this->model->name = 'смотровые';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 390;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 403;
        $this->model->sort = null;
        $this->model->name = 'нитрил';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 391;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 404;
        $this->model->sort = null;
        $this->model->name = 'нестерильные';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 392;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 406;
        $this->model->sort = null;
        $this->model->name = 'неопудренные';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 393;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 407;
        $this->model->sort = null;
        $this->model->name = 'манжета с валиком';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 394;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 408;
        $this->model->sort = null;
        $this->model->name = 'ванночка';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 395;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 409;
        $this->model->sort = null;
        $this->model->name = 'массажная поверхность и 4 ролика с шипами для релаксации стоп, размер в разложенном виде: 50х41х42 см, размер в сложенном виде: 50х41х7 см';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 396;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 410;
        $this->model->sort = null;
        $this->model->name = 'Татуировка';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 397;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 411;
        $this->model->sort = null;
        $this->model->name = 'Сеть';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 398;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 412;
        $this->model->sort = null;
        $this->model->name = 'Нет';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 399;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 413;
        $this->model->sort = null;
        $this->model->name = 'Модульные';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 400;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 414;
        $this->model->sort = null;
        $this->model->name = 'Dragonhawk';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 401;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 415;
        $this->model->sort = null;
        $this->model->name = 'Китай';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 399;
        $this->save();


        $this->model = new ShopOption();

        $this->model->id = 416;
        $this->model->sort = null;
        $this->model->name = 'манжета с валиком_416';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->shop_option_type_id = 394;
        $this->save();


    }

}
