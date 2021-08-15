<?php

namespace zetsoft\inserts\eyuf;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\pays\PaysCurrency;

class PaysCurrencyInsert extends ZInsert
{

    public function run()
    {

        $this->model = new PaysCurrency();

        $this->model->id = 3;
        $this->model->name = '';
        $this->model->cbu = [
            'chf' => '000',
            'gbp' => '0000',
            'jpy' => '00000',
            'kzt' => '123123123',
            'rub' => '0000',
            'usd' => '000',
            'euro' => '0000',
        ];
        $this->model->cbu_sell = [
            'chf' => '123',
            'gbp' => '12331',
            'jpy' => '1231',
            'kzt' => '12123',
            'rub' => '3212',
            'usd' => '12',
            'euro' => '21312',
        ];
        $this->model->bank = [
            'chf' => '21231',
            'gbp' => '231',
            'jpy' => '123123',
            'kzt' => '213',
            'rub' => '123',
            'usd' => '123213',
            'euro' => '213',
        ];
        $this->model->bank_sell = [
            'chf' => '123',
            'gbp' => '12123',
            'jpy' => '231222',
            'kzt' => '21212',
            'rub' => '12312',
            'usd' => '213',
            'euro' => '123',
        ];
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PaysCurrency();

        $this->model->id = 5;
        $this->model->name = '';
        $this->model->cbu = [
            'chf' => '000',
            'gbp' => '0000',
            'jpy' => '00000',
            'kzt' => '123123123',
            'rub' => '0000sdfsad',
            'usd' => '13131313',
            'euro' => '0000',
        ];
        $this->model->cbu_sell = [
            'chf' => '123',
            'gbp' => '12331',
            'jpy' => '1231',
            'kzt' => '12123',
            'rub' => '3212131',
            'usd' => '12',
            'euro' => '21312',
        ];
        $this->model->bank = [
            'chf' => '21231',
            'gbp' => '231',
            'jpy' => '123123',
            'kzt' => '213',
            'rub' => '123',
            'usd' => '123213',
            'euro' => '213',
        ];
        $this->model->bank_sell = [
            'chf' => '123',
            'gbp' => '12123',
            'jpy' => '231222',
            'kzt' => '21212',
            'rub' => '12312',
            'usd' => '213',
            'euro' => '123',
        ];
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PaysCurrency();

        $this->model->id = 4;
        $this->model->name = '';
        $this->model->cbu = [
            'chf' => '000',
            'gbp' => '0000',
            'jpy' => '00000',
            'kzt' => '123123123',
            'rub' => '0000',
            'usd' => '000',
            'euro' => '0000',
        ];
        $this->model->cbu_sell = [
            'chf' => '123',
            'gbp' => '12331',
            'jpy' => '1231',
            'kzt' => '12123',
            'rub' => '3212',
            'usd' => '12',
            'euro' => '21312',
        ];
        $this->model->bank = [
            'chf' => '21231',
            'gbp' => '231erwwererwerwerw',
            'jpy' => '123123',
            'kzt' => '213',
            'rub' => '123',
            'usd' => '123213',
            'euro' => '213',
        ];
        $this->model->bank_sell = [
            'chf' => '123',
            'gbp' => '12123',
            'jpy' => '231222',
            'kzt' => '21212',
            'rub' => '12312',
            'usd' => '213',
            'euro' => '123',
        ];
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PaysCurrency();

        $this->model->id = 7;
        $this->model->name = '';
        $this->model->cbu = [
            'BHD' => '26956.00',
            'CAD' => '7473.97',
            'EUR' => '11424.95',
            'GBP' => '12730.48',
            'JPY' => '94.58',
            'RUB' => '145.39',
            'USD' => '10151.90',
        ];
        $this->model->cbu_sell = '';
        $this->model->bank = [
            'CAD' => '7473.97',
            'EUR' => '11424.95',
            'GBP' => '12730.48',
            'JPY' => '94.58',
            'RUB' => '145.39',
            'USD' => '10151.90',
        ];
        $this->model->bank_sell = [
            'CAD' => '',
            'EUR' => '11500.00',
            'GBP' => '12800.00',
            'JPY' => '95.00',
            'RUB' => '150.00',
            'USD' => '10200.00',
        ];
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PaysCurrency();

        $this->model->id = 8;
        $this->model->name = '';
        $this->model->cbu = [
            'BHD' => '26956.00',
            'CAD' => '7473.97',
            'EUR' => '11424.95',
            'GBP' => '12730.48',
            'JPY' => '94.58',
            'RUB' => '145.39',
            'USD' => '10151.90',
        ];
        $this->model->cbu_sell = '';
        $this->model->bank = [
            'CAD' => '7473.97',
            'EUR' => '11424.95',
            'GBP' => '12730.48',
            'JPY' => '94.58',
            'RUB' => '145.39',
            'USD' => '10151.90',
        ];
        $this->model->bank_sell = [
            'CAD' => '',
            'EUR' => '11500.00',
            'GBP' => '12800.00',
            'JPY' => '95.00',
            'RUB' => '150.00',
            'USD' => '10200.00',
        ];
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PaysCurrency();

        $this->model->id = 9;
        $this->model->name = '';
        $this->model->cbu = [
            'BHD' => '26956.00',
            'CAD' => '7473.97',
            'EUR' => '11424.95',
            'GBP' => '12730.48',
            'JPY' => '94.58',
            'RUB' => '145.39',
            'USD' => '10151.90',
        ];
        $this->model->cbu_sell = '';
        $this->model->bank = [
            'CAD' => '7473.97',
            'EUR' => '11424.95',
            'GBP' => '12730.48',
            'JPY' => '94.58',
            'RUB' => '145.39',
            'USD' => '10151.90',
        ];
        $this->model->bank_sell = [
            'CAD' => '',
            'EUR' => '11500.00',
            'GBP' => '12800.00',
            'JPY' => '95.00',
            'RUB' => '150.00',
            'USD' => '10200.00',
        ];
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PaysCurrency();

        $this->model->id = 10;
        $this->model->name = '';
        $this->model->cbu = [
            'BHD' => '26956.00',
            'CAD' => '7473.97',
            'EUR' => '11424.95',
            'GBP' => '12730.48',
            'JPY' => '94.58',
            'RUB' => '145.39',
            'USD' => '10151.90',
        ];
        $this->model->cbu_sell = '';
        $this->model->bank = [
            'CAD' => '7473.97',
            'EUR' => '11424.95',
            'GBP' => '12730.48',
            'JPY' => '94.58',
            'RUB' => '145.39',
            'USD' => '10151.90',
        ];
        $this->model->bank_sell = [
            'CAD' => '',
            'EUR' => '11500.00',
            'GBP' => '12800.00',
            'JPY' => '95.00',
            'RUB' => '150.00',
            'USD' => '10200.00',
        ];
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PaysCurrency();

        $this->model->id = 11;
        $this->model->name = '';
        $this->model->cbu = [
            'BHD' => '26956.00',
            'CAD' => '7473.97',
            'EUR' => '11424.95',
            'GBP' => '12730.48',
            'JPY' => '94.58',
            'RUB' => '145.39',
            'USD' => '10151.90',
        ];
        $this->model->cbu_sell = '';
        $this->model->bank = [
            'CAD' => '7473.97',
            'EUR' => '11424.95',
            'GBP' => '12730.48',
            'JPY' => '94.58',
            'RUB' => '145.39',
            'USD' => '10151.90',
        ];
        $this->model->bank_sell = [
            'CAD' => '',
            'EUR' => '11500.00',
            'GBP' => '12800.00',
            'JPY' => '95.00',
            'RUB' => '150.00',
            'USD' => '10200.00',
        ];
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


        $this->model = new PaysCurrency();

        $this->model->id = 12;
        $this->model->name = '';
        $this->model->cbu = [
            'BHD' => '26956.00',
            'CAD' => '7473.97',
            'EUR' => '11424.95',
            'GBP' => '12730.48',
            'JPY' => '94.58',
            'RUB' => '145.39',
            'USD' => '10151.90',
        ];
        $this->model->cbu_sell = '';
        $this->model->bank = [
            'CAD' => '7473.97',
            'EUR' => '11424.95',
            'GBP' => '12730.48',
            'JPY' => '94.58',
            'RUB' => '145.39',
            'USD' => '10151.90',
        ];
        $this->model->bank_sell = [
            'CAD' => '',
            'EUR' => '11500.00',
            'GBP' => '12800.00',
            'JPY' => '95.00',
            'RUB' => '150.00',
            'USD' => '10200.00',
        ];
        $this->model->created_at = '';
        $this->model->modified_at = '';
        $this->model->created_by = null;
        $this->model->modified_by = null;
        $this->save();


    }

}
