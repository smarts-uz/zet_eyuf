<?php


namespace zetsoft\service\market;

use zetsoft\dbitem\shop\CartOrderItem;
use zetsoft\dbitem\shop\CartOrder;
use zetsoft\dbitem\shop\CompanyCardItem;
use zetsoft\dbitem\shop\ProductItem;
use zetsoft\dbitem\shop\ShopCatalogItem;
use zetsoft\former\shop\ShopCompanyCardForm;
use zetsoft\models\place\PlaceAdress;
use zetsoft\models\place\PlaceRegion;
use zetsoft\models\shop\ShopCatalog;
use zetsoft\models\shop\ShopOptionType;
use zetsoft\models\user\UserCompany;
use zetsoft\models\shop\ShopElement;
use zetsoft\models\shop\ShopOption;
use zetsoft\models\shop\ShopProduct;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\helpers\ZUrl;
use zetsoft\system\kernels\ZFrame;
use zetsoft\widgets\incores\ZIRadioGroupWidget;
use function zetsoft\apisys\edit\returnn;

class Catalog extends ZFrame
{

    public function getProduct(int $catalogId)
    {

        $item = new ShopCatalogItem();
        $catalog = ShopCatalog::findOne($catalogId);

        if ($catalog === null)
            return Az::warning($catalogId, 'Catalog is empty');

        $element = $catalog->getShopElementOne();
        if ($element === null)
        {
            Az::warning($catalog->shop_element_id, 'Element is empty');
            return $item;
        }

        $product = $element->getShopProductOne();
        if ($product === null)
        {
            Az::warning($element->shop_product_id, 'Element is empty');
            return $item;
        }

        $item->catalog = $catalog->toArray();
        $item->element = $element->toArray();
        $item->product = $product->toArray();
        $item->options = $product->shop_option;
        return $item;

    }


    public function options(int $id)
    {

        $item = $this->getProduct($id);


        /**
         *
         * Get Shop Options
         */
        $shopOptions = ShopOption::findAllArray();
        $shopOptionTypes = ShopOptionType::findAllArray();
        $mappedOptions = ZArrayHelper::map($shopOptions, 'id', 'name');
        $mappedOptionTypes = ZArrayHelper::map($shopOptionTypes, 'id', 'name');


        $options = zcollect($item->options)->map(function ($model, $key) use ($mappedOptions, $mappedOptionTypes) {

            $shop_option_id = $model['shop_option_id'];
            $shop_option_id = zcollect($shop_option_id)->map
            (function ($model, $key) use ($mappedOptions) {
                return $mappedOptions[$model];
            })->toArray();

            $shop_option_type_id = $model['shop_option_type_id'];

            $shop_option_type_id = $mappedOptionTypes[$shop_option_type_id];
            $model['shop_option_id'] = $shop_option_id;
            $model['shop_option_type_id'] = $shop_option_type_id;

            return $model;
        });


        $item->options = $options;

        return $item;
    }


    public function BeforeSaveTest()
    {
        $data = $this->beforeSave($model);
        vd($data);
    }

    //start: MurodovMirbosit
    public function renameCatalog()
    {
        /** @var ShopCatalog $catalog */
        $catalogs = ShopCatalog::find()->all();
        foreach ($catalogs as $catalog) {

            $catalog->name = $this->getCatalogName($catalog);
            $catalog->title = $this->getTitleCatalog($catalog);

            $catalog->configs->rules = [
                [
                    validatorSafe
                ]
            ];

            $catalog->save();
        }
    }

    private function getCatalogName($model)
    {
        /** @var ShopCatalog $model */
        $company = UserCompany::findOne($model->user_company_id);
        $element = ShopElement::findOne($model->shop_element_id);

        if (!$element)
            return false;

        if (!$company)
            return false;

        return $element->name . '/' . $company->name . '/' . $model->amount . '/' . $model->price . '№' . $model->id;
    }

    public function getTitleCatalog($catalog)
    {

        /** @var ShopCatalog $catalog */

        $element = ShopElement::findOne($catalog->shop_element_id);

        if (!$element) {
            return false;
        }

        return $element->name;
    }


    //end

    /**
     *
     * Function  beforeSave
     * @param $model
     * @return  bool
     * @throws \Exception
     *
     */

    public function catalogByElementId($id)
    {

    }


    public function beforeSave(&$model)
    {
        if ($model->currency === ShopCatalog::currency['UZS']) {
            $model->price_base = $model->price;
        } else {
            $model->price_base = Az::$app->payer->currency2->convert($model->currency, ShopCatalog::currency['UZS'], $model->price);
        }
//            name Generation
        $a = $this->paramGet('not_catalog_before_save') ?? false;
        if ($a === false) {
            $catalog = ShopCatalog::findOne([
                'shop_element_id' => $model->shop_element_id,
                'user_company_id' => $model->user_company_id,
            ]);

            $element = ShopElement::findOne($model->shop_element_id);
            if ($element === null)
                return true;
            $product = ShopProduct::findOne($element->shop_product_id);
            $options = [];
            if (!empty($element->shop_option_ids))
                $options = ShopOption::find()->where(['id' => $element->shop_option_ids])->all();

            $model->name = $product->name;

            foreach ($options as $option) {
                $model->name .= ', ' . $option->name;
            }

            $model->name .= ', ' . $model->price . ' ' . $model->currency;

            if (isset($catalog)) {
                $catalog->setAttributes($model->attributes);
                $this->paramSet($this->paramNoWarn, true);
                $this->paramSet('not_catalog_before_save', true);
                $catalog->save();
                return false;
            }
        }
    }
}
