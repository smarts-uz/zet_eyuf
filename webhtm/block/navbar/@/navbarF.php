<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */

use rmrevin\yii\fontawesome\FA;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\actions\ZEasyViewWidget;
use zetsoft\widgets\former\ZTopSearchWidget;
use zetsoft\widgets\iconers\ZFlagiconWidget;
use zetsoft\widgets\market\ZCartViewWidget;
use zetsoft\widgets\market\ZMSearchWidget;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\notifier\ZModalNewWidget;
use zetsoft\widgets\themes\ZCarolinaWidget;
use zetsoft\widgets\themes\ZFriendRequestsWidget;
use zetsoft\widgets\themes\ZMessageWidget;
use zetsoft\widgets\themes\ZNotifyWidget;
use zetsoft\widgets\themes\ZSignUpWidget;

/** @var ZView $this */
$baseUrl = $this->urlGetBase();

?>
<!--Navbarco-->

<nav class="navbar navbar-expand-lg navbar-dark ilon-mask siticky-navbar">

    <div class="row">
        <div id="hamburger" class="Sticky col-2 d-none">
            <a href="#menu" class="mburger mburger--collapse">
                <b></b>
                <b></b>
                <b></b>
            </a>
        </div>
        <div class="d-flex">
            <div class="logo">
                <a href="<?= $baseUrl ?>" class="zetshopLogo">
                    <svg width="438" height="43" viewBox="0 0 438 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="438" height="43" fill="white"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M390.333 34C390.333 32.5272 391.527 31.3333 393 31.3333C394.473 31.3333 395.667 32.5272 395.667 34C395.667 35.4727 394.473 36.6666 393 36.6666C391.527 36.6666 390.333 35.4727 390.333 34Z" fill="#10B410"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M405 34C405 32.5272 406.194 31.3333 407.667 31.3333C409.139 31.3333 410.333 32.5272 410.333 34C410.333 35.4727 409.139 36.6666 407.667 36.6666C406.194 36.6666 405 35.4727 405 34Z" fill="#10B410"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M381 7.33333C381 6.59695 381.597 6 382.333 6H387.667C388.302 6 388.849 6.44851 388.974 7.07166L390.094 12.6667H411.667C412.064 12.6667 412.441 12.8439 412.694 13.1501C412.947 13.4562 413.051 13.8594 412.976 14.2498L410.841 25.4464C410.658 26.3672 410.157 27.1943 409.426 27.783C408.698 28.3688 407.789 28.6813 406.855 28.6667H393.918C392.985 28.6813 392.075 28.3688 391.347 27.783C390.616 27.1946 390.116 26.3679 389.932 25.4476C389.932 25.4472 389.933 25.4479 389.932 25.4476L387.705 14.3189C387.696 14.2821 387.689 14.2447 387.683 14.2068L386.574 8.66667H382.333C381.597 8.66667 381 8.06971 381 7.33333ZM390.628 15.3333L392.548 24.9269C392.609 25.2338 392.776 25.5096 393.019 25.7058C393.263 25.902 393.568 26.0062 393.881 26.0002L393.907 26H406.867L406.892 26.0002C407.205 26.0062 407.51 25.902 407.754 25.7058C407.996 25.5105 408.163 25.2364 408.225 24.9312L410.055 15.3333H390.628Z" fill="#10B410"/>
                        <path d="M222.046 36.914L221.59 38.32C220.931 38.3707 220.437 38.396 220.108 38.396C218.588 38.396 217.347 37.75 216.384 36.458C215.447 35.1913 214.978 33.532 214.978 31.48C214.978 30.2387 215.257 27.8953 215.814 24.45C216.397 20.9793 217.068 17.8127 217.828 14.95C217.98 14.3167 218.056 13.8987 218.056 13.696C218.056 13.4933 217.967 13.392 217.79 13.392C217.613 13.392 217.043 14.342 216.08 16.242C215.143 18.1167 214.015 20.4347 212.698 23.196C211.381 25.932 210.621 27.5027 210.418 27.908C210.241 28.288 210.089 28.6047 209.962 28.858C209.861 29.086 209.633 29.5167 209.278 30.15C208.949 30.758 208.632 31.3027 208.328 31.784C207.492 33.0507 206.833 33.684 206.352 33.684C206.023 33.684 205.655 33.5953 205.25 33.418C204.87 33.2407 204.617 33.0507 204.49 32.848C204.211 32.4173 204.072 31.0747 204.072 28.82C204.072 24.108 204.452 19.6113 205.212 15.33C205.465 13.9113 205.592 13.164 205.592 13.088C205.592 12.8347 205.491 12.708 205.288 12.708C204.883 12.708 204.237 13.9747 203.35 16.508L202.248 19.662C200.627 24.2473 198.98 27.8193 197.308 30.378C195.661 32.9367 193.761 34.7353 191.608 35.774L190.62 33.684C193.077 31.86 194.965 29.998 196.282 28.098C197.625 26.198 199.081 23.1327 200.652 18.902L201.944 15.444C202.831 13.0373 203.603 11.3273 204.262 10.314C204.921 9.27533 205.655 8.756 206.466 8.756C207.809 8.756 208.48 9.56667 208.48 11.188C208.48 11.3147 208.239 13.886 207.758 18.902C207.277 23.8927 207.036 27.186 207.036 28.782C207.036 29.238 207.112 29.4787 207.264 29.504C207.391 29.504 207.53 29.3773 207.682 29.124C209.734 25.704 211.697 21.98 213.572 17.952C213.8 17.4453 214.193 16.5713 214.75 15.33C215.307 14.0887 215.852 12.9867 216.384 12.024C216.916 11.0613 217.321 10.4787 217.6 10.276C217.879 10.048 218.322 9.934 218.93 9.934C219.538 9.934 220.057 10.162 220.488 10.618C220.944 11.0487 221.172 11.568 221.172 12.176C221.172 12.784 221.083 13.4807 220.906 14.266C218.93 23.918 217.942 29.694 217.942 31.594C217.942 33.4687 218.246 34.748 218.854 35.432C219.462 36.1413 220.526 36.6353 222.046 36.914ZM238.334 29.162L239.208 29.808C238.854 30.568 238.195 31.29 237.232 31.974C236.295 32.658 235.434 33 234.648 33C233.154 33 232.406 32.2147 232.406 30.644C232.406 29.9093 232.596 29.0353 232.976 28.022L231.57 29.466C230.202 30.8593 229.012 31.7967 227.998 32.278C227.01 32.7593 226.035 33 225.072 33C224.11 33 223.375 32.734 222.868 32.202C222.387 31.6447 222.146 30.8847 222.146 29.922C222.146 28.1487 222.83 26.4007 224.198 24.678C225.566 22.93 227.314 21.5113 229.442 20.422C231.57 19.3327 233.698 18.7753 235.826 18.75L235.902 20.004L234.306 20.346C232.001 20.8527 229.962 21.866 228.188 23.386C226.44 24.906 225.566 26.426 225.566 27.946C225.566 29.4407 226.174 30.188 227.39 30.188C228.53 30.188 229.936 29.39 231.608 27.794C233.28 26.198 234.674 24.3233 235.788 22.17L237.384 23.12C235.814 26.2867 235.028 28.3007 235.028 29.162C235.028 29.5167 235.142 29.8207 235.37 30.074C235.624 30.302 235.864 30.416 236.092 30.416C236.346 30.416 236.51 30.4033 236.586 30.378C236.662 30.3527 236.738 30.3273 236.814 30.302C236.89 30.2513 236.979 30.188 237.08 30.112C237.207 30.036 237.308 29.96 237.384 29.884C237.486 29.808 237.638 29.694 237.84 29.542C238.043 29.39 238.208 29.2633 238.334 29.162ZM250.485 19.548C251.118 19.548 251.638 19.7633 252.043 20.194C252.448 20.6247 252.651 21.182 252.651 21.866C252.651 23.234 251.866 24.678 250.295 26.198L249.383 25.476C249.738 24.6907 249.915 24.1207 249.915 23.766C249.915 23.082 249.535 22.74 248.775 22.74C248.015 22.74 247.293 23.2213 246.609 24.184C245.925 25.1467 245.114 26.6413 244.177 28.668C243.265 30.6693 242.568 32.088 242.087 32.924L239.921 31.974C241.314 28.8073 242.112 26.9453 242.315 26.388C242.999 24.412 243.341 21.904 243.341 18.864L245.469 18.294C245.393 19.9407 245.279 21.22 245.127 22.132C244.975 23.0187 244.608 24.4753 244.025 26.502C246.584 21.866 248.737 19.548 250.485 19.548ZM268.705 29.124L269.655 29.96C268.185 32.3667 266.627 33.57 264.981 33.57C263.967 33.57 262.929 32.8227 261.865 31.328C260.801 29.8333 260.269 28.6047 260.269 27.642C260.269 27.034 261.181 26.426 263.005 25.818C263.689 25.59 264.309 25.248 264.867 24.792C265.449 24.3107 265.741 23.8167 265.741 23.31C265.741 22.8033 265.601 22.4233 265.323 22.17C265.044 21.8913 264.689 21.752 264.259 21.752C261.472 22.0053 258.559 25.7547 255.519 33L253.201 32.202C253.201 31.1127 254.67 26.7047 257.609 18.978C260.573 11.2513 262.675 6.57733 263.917 4.956L265.779 5.64C262.359 11.5933 259.496 18.5093 257.191 26.388C259.167 23.424 260.864 21.448 262.283 20.46C263.701 19.472 265.057 18.978 266.349 18.978C267.134 18.978 267.755 19.2187 268.211 19.7C268.692 20.1813 268.933 20.802 268.933 21.562C268.933 22.2967 268.743 22.968 268.363 23.576C268.008 24.184 267.489 24.716 266.805 25.172C265.817 25.8307 264.601 26.4767 263.157 27.11C263.385 28.3007 263.777 29.2 264.335 29.808C264.892 30.416 265.525 30.72 266.235 30.72C266.615 30.72 267.438 30.188 268.705 29.124ZM281.211 28.516L282.085 29.2C281.3 30.2893 280.223 31.2013 278.855 31.936C277.487 32.6453 276.157 33 274.865 33C273.573 33 272.535 32.62 271.749 31.86C270.964 31.1 270.571 30.0993 270.571 28.858C270.571 26.5273 271.8 24.2347 274.257 21.98C276.74 19.7253 279.248 18.598 281.781 18.598C283.453 18.598 284.289 19.2567 284.289 20.574C284.289 21.942 283.403 23.3227 281.629 24.716C279.881 26.1093 277.411 27.376 274.219 28.516C274.447 29.0987 274.802 29.5547 275.283 29.884C275.765 30.2133 276.259 30.378 276.765 30.378C277.855 30.378 279.337 29.7573 281.211 28.516ZM274.029 27.376C276.081 26.6667 277.842 25.78 279.311 24.716C280.781 23.652 281.515 22.6767 281.515 21.79C281.515 21.4607 281.389 21.1693 281.135 20.916C280.882 20.6627 280.591 20.536 280.261 20.536C279.071 20.536 277.779 21.2833 276.385 22.778C275.017 24.2473 274.232 25.78 274.029 27.376ZM293.936 28.744L294.772 29.694C294.139 30.682 293.366 31.4547 292.454 32.012C291.567 32.5693 290.668 32.848 289.756 32.848C288.844 32.848 288.122 32.5947 287.59 32.088C287.058 31.556 286.792 30.834 286.792 29.922C286.792 27.794 287.59 24.8553 289.186 21.106C287.894 21.3087 286.602 21.6127 285.31 22.018L285.044 20.536L285.006 20.498C286.273 19.966 287.932 19.5353 289.984 19.206C290.187 18.826 290.643 17.9013 291.352 16.432C292.771 13.5187 293.784 11.6313 294.392 10.77L296.026 11.416C295.773 11.9733 295.329 12.9107 294.696 14.228C294.063 15.52 293.353 16.9893 292.568 18.636C293.708 18.56 294.607 18.522 295.266 18.522C295.925 18.522 296.431 18.6233 296.786 18.826V20.46C296.431 20.384 295.912 20.346 295.228 20.346C294.569 20.346 293.379 20.46 291.656 20.688C290.161 24.032 289.414 26.464 289.414 27.984C289.414 28.5667 289.591 29.048 289.946 29.428C290.326 29.808 290.82 29.998 291.428 29.998C292.061 29.998 292.897 29.58 293.936 28.744ZM310.925 12.1C313.002 10.6813 314.421 9.82 315.181 9.516C315.941 9.18667 316.828 9.022 317.841 9.022C318.88 9.022 319.678 9.37667 320.235 10.086C320.792 10.7953 321.071 11.8087 321.071 13.126C321.071 15.482 320.311 18.0153 318.791 20.726C317.271 23.4367 315.371 25.7167 313.091 27.566C310.811 29.39 308.658 30.302 306.631 30.302C306.124 30.302 305.542 30.2767 304.883 30.226C303.642 32.8607 302.514 34.8493 301.501 36.192C300.488 37.5347 299.474 38.206 298.461 38.206C297.828 38.206 297.334 37.978 296.979 37.522C296.624 37.066 296.447 36.4327 296.447 35.622C296.447 33.0127 297.65 29.5293 300.057 25.172C302.464 20.7893 305.111 17.2807 307.999 14.646C308.404 12.974 308.607 11.758 308.607 10.998C308.607 10.2127 308.582 9.61733 308.531 9.212L311.267 8.756C311.267 8.93333 311.153 10.048 310.925 12.1ZM302.223 27.49L303.287 28.022C304.883 24.906 306.226 21.41 307.315 17.534C304.984 20.4473 303.072 23.4113 301.577 26.426C300.082 29.4407 299.335 31.7587 299.335 33.38C299.335 33.8613 299.487 34.102 299.791 34.102C300.019 34.102 300.424 33.6333 301.007 32.696C301.59 31.7333 302.084 30.758 302.489 29.77C302.16 29.618 301.843 29.39 301.539 29.086L302.223 27.49ZM305.681 28.554L306.403 28.592C308.86 28.592 311.166 27.3 313.319 24.716C314.535 23.2213 315.561 21.5113 316.397 19.586C317.258 17.6607 317.689 16.0267 317.689 14.684C317.689 13.9493 317.486 13.3667 317.081 12.936C316.701 12.5053 316.169 12.29 315.485 12.29C314.244 12.29 312.597 12.974 310.545 14.342C310.089 17.762 308.468 22.4993 305.681 28.554ZM328.527 29.352L329.325 29.998C328.463 31.3407 327.716 32.316 327.083 32.924C326.475 33.5067 325.791 33.798 325.031 33.798C324.271 33.798 323.65 33.494 323.169 32.886C322.687 32.278 322.447 31.518 322.447 30.606C322.447 28.8327 323.612 25.02 325.943 19.168C328.273 13.2907 330.667 8.12267 333.125 3.664L334.797 4.576C332.314 9.38933 330.072 14.1773 328.071 18.94C326.069 23.6773 325.069 27.0847 325.069 29.162C325.069 30.3527 325.512 30.948 326.399 30.948C327.108 30.948 327.817 30.416 328.527 29.352ZM349.217 29.162L350.091 29.808C349.736 30.568 349.078 31.29 348.115 31.974C347.178 32.658 346.316 33 345.531 33C344.036 33 343.289 32.2147 343.289 30.644C343.289 29.9093 343.479 29.0353 343.859 28.022L342.453 29.466C341.085 30.8593 339.894 31.7967 338.881 32.278C337.893 32.7593 336.918 33 335.955 33C334.992 33 334.258 32.734 333.751 32.202C333.27 31.6447 333.029 30.8847 333.029 29.922C333.029 28.1487 333.713 26.4007 335.081 24.678C336.449 22.93 338.197 21.5113 340.325 20.422C342.453 19.3327 344.581 18.7753 346.709 18.75L346.785 20.004L345.189 20.346C342.884 20.8527 340.844 21.866 339.071 23.386C337.323 24.906 336.449 26.426 336.449 27.946C336.449 29.4407 337.057 30.188 338.273 30.188C339.413 30.188 340.819 29.39 342.491 27.794C344.163 26.198 345.556 24.3233 346.671 22.17L348.267 23.12C346.696 26.2867 345.911 28.3007 345.911 29.162C345.911 29.5167 346.025 29.8207 346.253 30.074C346.506 30.302 346.747 30.416 346.975 30.416C347.228 30.416 347.393 30.4033 347.469 30.378C347.545 30.3527 347.621 30.3273 347.697 30.302C347.773 30.2513 347.862 30.188 347.963 30.112C348.09 30.036 348.191 29.96 348.267 29.884C348.368 29.808 348.52 29.694 348.723 29.542C348.926 29.39 349.09 29.2633 349.217 29.162ZM361.026 27.604L361.938 28.364C361.33 29.7573 360.354 30.872 359.012 31.708C357.669 32.544 356.364 32.962 355.098 32.962C353.856 32.962 352.818 32.5693 351.982 31.784C351.171 30.9987 350.766 29.922 350.766 28.554C350.766 27.186 351.361 25.704 352.552 24.108C353.742 22.512 355.275 21.1947 357.15 20.156C359.05 19.1173 360.912 18.598 362.736 18.598C362.989 18.598 363.369 18.6233 363.876 18.674L363.762 20.156C360.975 20.2827 358.657 21.1313 356.808 22.702C354.984 24.2727 354.072 25.9447 354.072 27.718C354.072 28.4527 354.3 29.048 354.756 29.504C355.212 29.96 355.807 30.188 356.542 30.188C357.707 30.188 359.202 29.3267 361.026 27.604ZM375.247 28.516L376.121 29.2C375.335 30.2893 374.259 31.2013 372.891 31.936C371.523 32.6453 370.193 33 368.901 33C367.609 33 366.57 32.62 365.785 31.86C364.999 31.1 364.607 30.0993 364.607 28.858C364.607 26.5273 365.835 24.2347 368.293 21.98C370.775 19.7253 373.283 18.598 375.817 18.598C377.489 18.598 378.325 19.2567 378.325 20.574C378.325 21.942 377.438 23.3227 375.665 24.716C373.917 26.1093 371.447 27.376 368.255 28.516C368.483 29.0987 368.837 29.5547 369.319 29.884C369.8 30.2133 370.294 30.378 370.801 30.378C371.89 30.378 373.372 29.7573 375.247 28.516ZM368.065 27.376C370.117 26.6667 371.877 25.78 373.347 24.716C374.816 23.652 375.551 22.6767 375.551 21.79C375.551 21.4607 375.424 21.1693 375.171 20.916C374.917 20.6627 374.626 20.536 374.297 20.536C373.106 20.536 371.814 21.2833 370.421 22.778C369.053 24.2473 368.267 25.78 368.065 27.376Z" fill="#10B410"/>
                    </svg>

                </a>
            </div>

        </div>
       <!-- <div class="logo col-2">
            <a href="<?/*= $baseUrl */?>" class="zetshopLogo">
                <img class="ml-2" src="/render/asrorz/img/shoppingLogo.jpg" width="50"/>
            </a>
        </div>-->

 <!--       <div class="ZMSearchWidgetDiv col-8">
            
        </div>-->
    </div>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
            aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-align-justify"></i>
    </button>

    <div class="collapse navbar-collapse" id="basicExampleNav">

        <ul class="navbar-nav my_left_ul ml-auto">
            <li class="nav-item mt-3">
                <?
                echo ZTopSearchWidget::widget();
                ?>
            </li>
            <li class="nav-item mx-auto d-flex">

                <?php
                Az::$app->forms->zPjax->begin();
                ?>
                <div class="vd_mega-menu-wrapper w-100 mr-2">
                    <div class="vd_mega-menu ">
                        <ul class="mega-ul d-flex w-100" style="height: 65px;">
                            <?
                            if (!$this->userIsGuest()) {
                                /** @var ZView $this */

                                echo ZMessageWidget::widget([
                                    'config' => [
                                        'icon' => 'fas fa-' . FA::_ENVELOPE,
                                        'viewButtonTitle' => 'view all',
                                        'title' => Az::l('Сообщение'),
                                        'class' => 'Message',

                                    ]
                                ]);

//                                echo ZNotifyWidget::widget([
//                                    'config' => [
//                                        'icon' => 'fas fa-' . FA::_BELL,
//                                        'title' => Az::l('Уведомления'),
//                                    ]
//                                ]);

                                echo ZFriendRequestsWidget::widget([
                                    'config' => [
                                        'icon' => 'fas fa-' . FA::_USERS,
                                        'title' => Az::l('Запросы на добавление в друзья'),
                                    ]
                                ]);
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <?php
                Az::$app->forms->zPjax->end();
                ?>

                <div class="d-flex align-items-center mr-2 topNavbarLanguageBlock">
                    <?
                    echo ZFlagIconWidget::widget([
                        'config' =>
                            [
                                'visible' => true
                            ]
                    ]);
                    ?>
                </div>
                <div class="d-flex align-items-center mr-2 topNavbarIconsBlock">
                    <?
                     echo ZCartViewWidget::widget()
                    ?>
                    <!-- wish list button -->
                    <div class="topNavbarIcons">
                        <div class="cart-box ml-auto text-center">
                            <div class="d-flex">
                                <div class="wsh-box cart-btn">
                                    <a href="/customer/wish/index.aspx"
                                       
                                       data-toggle="tooltip"
                                       data-placement="top"
                                    >
                                        <i class="far fa-heart fa-lg text-black-50 navbarIconsFontSize">&nbsp;
                                        <b class="ZCartReviewIconText">Избранное</b></i>
                                        <span class="ZCompareIcon"
                                              id="wish_list"><?php if (is_array(Az::$app->cores->session->get('wishList'))) echo count(Az::$app->cores->session->get('wishList')); else echo 0; ?></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="topNavbarIcons">
                        <div class="cart-box ml-auto text-center">
                            <div class="d-flex">
                                <div class="wsh-box cart-btn ">
                                    <a href="/shop/user/compare/index.aspx"

                                       data-toggle="tooltip"
                                       data-placement="top"
                                    >
                                        <i class="fas fa-align-center fa-lg text-black-50 navbarIconsFontSize">&nbsp;<b
                                                    class="ZCartReviewIconText">Сравнение</b></i>

                                        <span class="ZWishIcon"
                                              id="compare_list"><?php if (is_array(Az::$app->cores->session->get('compare'))) echo count(Az::$app->cores->session->get('compare')); else echo 0; ?></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="RegisterBlockCarolinaRegisterBtn mt-1">

                    <?

                    /** @var ZView $this */
                    /*if (!$this->userIsGuest())
                        echo ZCarolinaWidget::widget(['config' => ['visible' => true],]);
                    else*/
                        echo ZSignUpWidget::widget();

                        /*echo ZButtonWidget::widget([
                            'config' => [
                                'text' => Az::l('Войти'),
                                'btnType' => ZButtonWidget::btnType['link'],
                                'btnStyle' => ZButtonWidget::btnStyle['btn-light'],
                                'class' => 'text-dark',
                                'btnRounded' => false,
                                'url' => '/shop/cores/auth/login.aspx',
                                'btnPaddingBottom' => ZButtonWidget::btnScale['0'],
                            ]
                        ]);*/
                    ?>
                    <style>
                        .vd_mega-menu-wrapper .vd_mega-menu .mega-li {
                            margin-bottom: -44px;
                        }
                    </style>
                </div>
            </li>
        </ul>
    </div>
</nav>

