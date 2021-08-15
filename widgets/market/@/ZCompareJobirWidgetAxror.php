<?php

/**
 *
 *
 * Author:  Jobir
 *      to'g'ri ishlayapti
 */

namespace zetsoft\widgets\market;


use zetsoft\dbitem\shop\ProductItem;
use zetsoft\dbitem\shop\PropertyItem;
use zetsoft\models\shop\ShopCategory;
use zetsoft\models\shop\ShopOptionType;
use zetsoft\models\shop\ShopOptionBranch;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZUrl;
use zetsoft\system\kernels\ZWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\widgets\inputes\ZSelect2Widget;

class ZCompareJobirWidgetAxror extends ZWidget
{
    /**
     * Configuration
     */
    public $config = [];
    public $_config = [
        'class' => 'quantity',
        'borderColor' => 'border-secondary',
        'selectColor' => '#007bff',
        'br-color' => '#007bff',


    ];


    /**
     *
     * Plugin Events
     * https://select2.org/programmatic-control/events
     */
    public $event = [];
    public $_event = [

    ];

    public $layout = [];
    public $_layout = [

        'main' => <<<HTML
               <div class="comparison-table container-fluid mt-3">
        <table class="table table-bordered ">
            <thead class="bg-white">
            <tr class="row">
                <td class="align-middle criteria_col col-4">
               
                 <form id="category_form" method="get">
                        {select_category}
                    </form>
                    
                     {select_branch}
                    <small class="form-text text-success">* Choose criteria to filter table below.</small>
                    <div class="pt-3">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="differences">
                            <label class="custom-control-label" for="differences">Показать разницу</label>
                        </div>
                    </div>
</div>
                    
                    
                </td>
                {cards}
            </tr>
            </thead>
            {branch_contents}
            
        </table>
    </div>
HTML,

        'card' => <<<HTML
       
            <td data-productid="{product_id}" class="col-7">
                <div class="comparison-item position-relative p-1 pb-2 border {borderColor} rounded-lg bg-white c-pointer">
                <span class="counter remove-item position-absolute bg-danger text-white " onclick="add_compare_list({product_id}, $(this), true)">
                    <i class="fa fa-times"></i>
                </span>
                   <!-- <div class="container">
                   
                    <div class="row">-->
                    <div class="col-md-4 w-100 d-block mr-auto mb-1 ml-auto" href="shop-single.html">
                            <div style="background-image: url('{product_image}');width:100px;height: 100px;background-size: cover; background-position: center"></div></a>
                    
                      
                        <div class="col-md-8">
                            <a class="comparison-item-title" href="shop-single.html">{product_name}</a>


<!--                    <button class="btn btn-pill btn-outline-primary btn-sm" type="button" data-toggle="toast" data-target="#cart-toast">Add to Cart</button>-->



                        {select_element}
                    
</div>
                        
                   </div>
                </div>
            </td>
</div>
            
HTML,

        'branch_content' => <<<HTML
            <tbody id="{branch_id}" class="branch" data-filter="target">
            <tr class="bg-light">
                <th class="text-uppercase">{branch_name}
                    <i class="fa fa-minus float-right mt-2"></i>
                </th>
                {element_names}
            </tr>
            {trs}
            </tbody>
HTML,

        'element_name' => <<<HTML
            <td class="{class_element_name}"><span class="text-dark font-weight-semibold">{element_name}</span></td>
HTML,


        'tr' => <<<HTML
            <tr class="{tr_class}">
                {tds}
            </tr>
HTML,

        'th' => <<<HTML
            <th class="text-muted">{property_name}</th>
HTML,
        'td' => <<<HTML
            <td class="{class_element_name} h6">{property}</td>
HTML,


        'js' => <<<JS
           $("#differences").on("change", function() {
               let sames = $('tr.same')
               sames.toggle();
               let pars = $('tbody');
               if ($(this).prop('checked')){
                    pars.map((i,item)=>
                        $(item).find('.diffirent')[0]?$(item).show():$(item).hide()
                    )                                 
               }else{
                   pars.show()
               }
           });
           
           $('.bg-light').on('click',function() {
               let siblings = $(this).siblings()
               let icon = $(this.children[0].children);
               let sames = $('tr.same');
               let diffs = $('tr.diffirent');
               if ($(icon).hasClass('fa-plus')){
                   $(icon).removeClass('fa-plus');
                   $(icon).addClass('fa-minus');
                   if ($('#differences').prop('checked')){
                       diffs.show();
                       sames.hide();
                   }else{
                       siblings.show('swing')
                   }
               }else{
                   $(icon).addClass('fa-plus');
                   $(icon).removeClass('fa-minus');
                   siblings.hide('swing')
               }
           })
                  
JS,
        'css' => <<<CSS

        .comparison-table .comparison-item .remove-item {
            top: -.3125rem;
            right: -.3125rem;
            width: 1.375rem;
            height: 1.375rem;
            border-radius: 50%;
        }

        .comparison-item-thumb img{
            width: auto!important;
           height: 100px;
           margin: 0 auto;
        }
CSS,
    ];


    public function asset()
    {
        $this->fileJs('https://rawcdn.githack.com/shaack/bootstrap-input-spinner/661ee7a1424acd10985b87b4d64ed1b93b61a85a/src/bootstrap-input-spinner.js');
    }

    public function codes()
    {
        /** @var ProductItem[] $compareProducts */

        $compareProducts = null;
       if (!isset($compareProducts)) {

           $property = new \zetsoft\dbitem\shop\PropertyItem();
           $property->name = 'dasdasdsad';
           $property->branch = 'dasdasdsad';
           $property->items = [

               'dasdsad',
               'dasdsad',
               'dasdsad',
               'dasdsad',

           ];

           $properties[] = $property;
           $properties[] = $property;
           $properties[] = $property;
           $properties[] = $property;
           $properties[] = $property;
           $properties[] = $property;
           //vdd($properties);
           $item = new \zetsoft\dbitem\shop\MultiProductItem();
           $item->id = 2;
           $item->categoryId = 4;
           $item->name = 'Арахисовая паста с медом 200г';
           $item->title = 'Test Desc';
           $item->new_price = '14825920';
           $item->price_old = '188920';
           $item->barcode = '34234234';
           $item->exist = ProductItem::exists['not'];
           $item->images = [
               'https://images.pexels.com/photos/1095550/pexels-photo-1095550.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
               'https://images.pexels.com/photos/461198/pexels-photo-461198.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
               'https://previews.123rf.com/images/veneratio/veneratio1511/veneratio151100044/48203428-landscape-iamge-of-river-flowing-through-lush-green-forest-in-summer.jpg',
               'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRVDh2D2fzRSBYnwaA-70G74wjOeeZWbRnEVBMxfu1jVqcP9fMv&usqp=CAU',
           ];
           $item->currency = 'сум';
           $item->currencyType = 'after';
           $item->measure = 'шт';
           $item->rating = 3.5;
           $item->discount = -10;
           $item->catalogId = 19;
           $item->max_price = 2155632;
           $item->sale = 'sdadsa';
           $item->is_multi = false;
           $item->min_price = 'adssad';
           $item->in_wish = true;
           $item->in_compare = false;
//    $item->properties = [
//        (object)[
//            'name' =>'182sad',
//            'branch' => '00421sa',
//            'property'=> [
//                'huihuih',
//                'okjio',
//                'juijiio'
//            ],
//        ],
           //  ];
//    $item->allProperties=[
//        (object)[
//            'name' =>'182sad',
//            'branch' => '00421sa',
//            'property'=> [
//                'huihuih',
//                'okjio',
//                'juijiio'
//            ],
//        ]
//    ];
           $item->allProperties = $properties;
           $item->properties = $properties;
           $compareProducts[] = $item;

       }

        /*$compareProducts = Az::$app->market->product->getCompareProductItems();*/
//        $compareProducts = null;
//        if (!isset($compareProducts)) {
//            $item = new ProductItem();
//            $item->id = 2;
//            $item->categoryId = 4;
//            $item->name = 'Арахисовая паста с медом 200г';
//            $item->title = 'Test Desc';
//            $item->new_price = '14825920';
//            $item->price_old = '188920';
//            $item->barcode = '34234234';
//            $item->exist = ProductItem::exists['not'];
//            $item->images = [
//                'https://images.pexels.com/photos/1095550/pexels-photo-1095550.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
//                'https://images.pexels.com/photos/461198/pexels-photo-461198.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
//                'https://previews.123rf.com/images/veneratio/veneratio1511/veneratio151100044/48203428-landscape-iamge-of-river-flowing-through-lush-green-forest-in-summer.jpg',
//                'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRVDh2D2fzRSBYnwaA-70G74wjOeeZWbRnEVBMxfu1jVqcP9fMv&usqp=CAU',
//            ];
//            $item->currency = 'сум';
//            $item->currencyType = 'after';
//            $item->measure = 'шт';
//            $item->rating = 3.5;
//            $item->discount = -10;
//            $item->catalogId = 19;
//            $item->max_price = 2155632;
//            $item->sale = 'sdadsa';
//            $item->is_multi = false;
//            $item->min_price = 'adssad';
//            $item->in_wish = true;
//            $item->in_compare = false;
//            $item->properties = [
//                (object)[
//                    'name' => '182sad',
//                    'branch' => '00421sa',
//                    'property' => [
//                        'huihuih',
//                        'okjio',
//                        'juijiio'
//                    ],
//                ],
//            ];
//            $item->allProperties = [
//                (object)[
//                    'name' => '182sad',
//                    'branch' => '00421sa',
//                    'property' => [
//                        'huihuih',
//                        'okjio',
//                        'juijiio'
//                    ],
//                ]
//            ];
//            $compareProducts[] = $item;
//            $item2 = clone $item;
//
//            $compareProducts[] = $item2;
//
//
//        }
        //vdd($compareProducts);
        if (empty($compareProducts)) {
            $this->htm = '<div class="alert bg-light text-center" role="alert">Нет выбранных товаров</div>';
            return 0;
        }
        $category_ids = array_map(function ($compareProduct) {
            return $compareProduct->categoryId;
        }, $compareProducts);
        $category_ids = array_unique($category_ids);

        $first_key_c = array_key_first($category_ids);
        $current_category_id = $category_ids[$first_key_c];
        if (\Dash\count($category_ids) > 1)
            $current_category_id = $this->httpGet('category') ?? $current_category_id;
        $current_category = ShopCategory::findOne($current_category_id);
        $current_products = array_filter($compareProducts, function ($compareProduct) use ($current_category) {
            if ($compareProduct->categoryId == $current_category->id)
                return true;
            else
                false;
        });
        $select_categories = [];
        foreach ($category_ids as $category_id) {
            $select_categories[$category_id] = ShopCategory::findOne($category_id)->name;
        }
        $select_category_code = ZSelect2Widget::widget([
            'name' => 'category',
            "value" => (int)$current_category_id,
            'data' => $select_categories,
            'event' => [
                'select' => <<<JS
                    function () {
                        $("#category_form").submit();
                    }
JS,

            ]
        ]);

        $select_branch_data = [];
        $select_branch_data_['all'] = 'hammasi';

        foreach ($current_category->shop_option_type as $a) {
//            if ($a['shop_option_type'] !== (int)$a['shop_option_type'] )
//                vdd($current_category->id);

            if ($a['shop_option_type'] != "") {
                $cot = ShopOptionType::findOne($a['shop_option_type']);
                $cotb = ShopOptionBranch::findOne($cot->core_option_branch_id);
                $select_branch_data[$cotb->id] = $cotb->name;
                $select_branch_data_[$cotb->id] = $cotb->name;
            }
        }

        $select_branch_code = ZSelect2Widget::widget([
            'data' => $select_branch_data_,
            'value' => "all",
            'id' => "branch",
            'config' => [

                'selectColor' => $this->_config['selectColor'],
                'br-color' => $this->_config['br-color'],
            ],
            'event' => [
                'select' => <<<JS
                    function () {
                        var branch_id = $(this).val();
                        $(".branch").hide();
                        $("#branch"+branch_id).show();
                        if (branch_id == "all")
                            $(".branch").show();
                    }
JS
            ]
        ]);

        $element_names_code = '';
        $cards_code = '';
        foreach ($current_products as $key => $current_product) {
            $select_element_data = [];

            if (empty($current_product->items))
                $element_names_code .= strtr($this->_layout['element_name'], [
                    '{element_name}' => $current_product->name,
                    '{class_element_name}' => 'element' . $current_product->id
                ]);
            foreach ($current_product->items as $key => $element) {
                $d_none = ($key != 0) ? 'd-none' : '';
                $element_names_code .= strtr($this->_layout['element_name'], [
                    '{element_name}' => $element->name,
                    '{class_element_name}' => "product$current_product->id element" . $element->id . ' ' . $d_none
                ]);

                $select_element_data[$element->id] = $element->name;
            }

            $select_element_code = ZSelect2Widget::widget([
                'data' => $select_element_data,
                'id' => "element$key",

                'event' => [
                    'select' => <<<JS
                        function () {
                            var element_id = $(this).val();
                            var product_id = $(this).parents("td").data("productid");
                            $(".product"+product_id).addClass("d-none");
                            $(".element"+element_id).removeClass("d-none");
                        }
JS,

                ]
            ]);
            $cards_code .= strtr($this->_layout['card'], [
                '{product_image}' => $current_product->image[0] ?? 'https://c7.hotpng.com/preview/194/1006/470/dashboard-laptop-logo-business-plecto-laptop.jpg',
                '{product_name}' => $current_product->name,
                '{select_element}' => $select_element_code,
                '{product_id}' => $current_product->id,
                '{borderColor}' => $this->_config['borderColor']
            ]);
        }


        $branch_contents_code = '';
        foreach ($select_branch_data as $branch_id => $branch_name) {
            /** @var PropertyItem[] $propertyItems */
            $propertyItems = Az::$app->market->product->propertsByCategory($current_category->id, false, $branch_id);
            //vdd($propertyItems);
            $trs_code = '';

            foreach ($propertyItems as $propertyItem) {
                $tds_code = '';
                $td_data_array = [];
                $tds_code .= strtr($this->_layout['th'], [
                    '{property_name}' => $propertyItem->name
                ]);
                //vdd($current_products);
                foreach ($current_products as $current_product) {
                    if (empty($current_product->items))
                        $tds_code .= strtr($this->_layout['td'], [
                            '{property}' => $current_product->name,
                            '{class_element_name}' => 'product' . $current_product->id
                        ]);
                    foreach ($current_product->items as $key => $element) {
                        //vdd($element->allProperties);
                        $property_val = array_map(function ($a) use ($propertyItem) {
                            if ($a->name == $propertyItem->name)
                                return $a;
                        }, $element->allProperties);
                        //vdd($element->allProperties);
                        $property_val = array_filter($property_val, function ($a) {
                            if ($a == null)
                                return false;
                            else
                                return true;
                        });
                        $f_key = array_key_first($property_val);

                        if ($f_key !== null) {
                            $first_key = array_key_first($property_val[$f_key]->items);
                            $property_val = $property_val[$f_key]->items[$first_key];
                        } else {
                            $property_val = '';
                        }

                        $d_none = ($key != 0) ? 'd-none' : '';
                        $tds_code .= strtr($this->_layout['td'], [
                            '{property}' => $property_val,
                            '{class_element_name}' => "product$current_product->id element" . $element->id . ' ' . $d_none
                        ]);
                        $td_data_array[] = $property_val;
                    }
                }

                $tr_class = 'diffirent h2 text-danger';
                $td_data_array = array_unique($td_data_array);
                if (\Dash\count($td_data_array) < 2)
                    $tr_class = 'same h2 text-success';

                $trs_code .= strtr($this->_layout['tr'], [
                    '{tr_class}' => $tr_class,
                    '{tds}' => $tds_code
                ]);
            }

            $branch_contents_code .= strtr($this->_layout['branch_content'], [
                '{branch_id}' => 'branch' . $branch_id,
                '{branch_name}' => $branch_name,
                '{element_names}' => $element_names_code,
                '{trs}' => $trs_code,
            ]);
        }

        $this->htm = strtr($this->_layout['main'], [
            '{select_category}' => $select_category_code,
            '{select_branch}' => $select_branch_code,
            '{cards}' => $cards_code,
            '{branch_contents}' => $branch_contents_code,
        ]);
        if (isset($branch_id))
            $this->js .= strtr($this->_layout['js'], [
                '{class}' => $this->_config['class'],
                '{branch_id}' => 'branch' . $branch_id
            ]);
        $this->css = $this->_layout['css'];
    }

}

