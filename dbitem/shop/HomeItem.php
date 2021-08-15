<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */


namespace zetsoft\dbitem\shop;

class HomeItem extends PageItem
{


    /**
     * @var
     */
    public $bestOffers;

    /**
     * @var CatalogItem[] $bestSeller
     */
    public $bestSellers;

    
    public $newItems;

    /**
     * @var BannerItem[] $bannerBig
     */
    public $bannerBig;

    /**
     * @var CatalogItem[] $delayed
     */
    public $delayed;

    /**
     * @var CatalogItem[] $delayed
     */
    public $bestSellerMini;


    /**
     * @var BannerItem[] $delayed
     */
    public $premiere;

    /**
     * @var MarketItem[] $delayed
     */
    public $allMarket;

    /**
     * @var BannerItem[] $delayed
     */
    public $banner;

    /**
     * @var BannerItem[] $bannerSecond
     */
    public $bannerSecond;

    public $name;
    public $exists;
    public $title;
    public $partnum;

}
