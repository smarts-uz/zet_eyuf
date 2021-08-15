<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */
?>

<style>
    #_checkbox
    {
        display: none;
    }

    label
    {
        /*position: absolute;
        top: 50%;
        right: 0;
        left: 0;*/
        width: 100px;
        height: 100px;
        margin: 0 auto;
        background-color: #f72414;
        /*transform: translateY(-50%);*/
        border-radius: 50%;
        box-shadow: 0 7px 10px #ffbeb8;
        cursor: pointer;
        transition: 0.2s ease transform, 0.2s ease background-color, 0.2s ease box-shadow;
        overflow: hidden;
        z-index: 10;
    }

    label:before
    {
        content: "";
       /* position: absolute;
        top: 50%;
        right: 0;
        left: 0;*/
        width: 70px;
        height: 70px;
        margin: 0 auto;
        background-color: #fff;
        /*transform: translateY(-50%);*/
        border-radius: 50%;
        box-shadow: inset 0 7px 10px #ffbeb8;
        transition: 0.2s ease width, 0.2s ease height;
    }

    label:hover:before
    {
        width: 55px;
        height: 55px;
        box-shadow: inset 0 7px 10px #ff9d96;
    }

    label:active
    {
        transform: translateY(-50%) scale(0.9);
    }

    #tick_mark
    {
        position: absolute;
        top: -1px;
        right: 0;
        left: 0;
        width: 60px;
        height: 60px;
        margin: 0 auto;
        margin-left: 14px;
        transform: rotateZ(-40deg);
    }

    #tick_mark:before, #tick_mark:after
    {
        content: "";
        position: absolute;
        background-color: #fff;
        border-radius: 2px;
        opacity: 0;
        transition: 0.2s ease transform, 0.2s ease opacity;
    }

    #tick_mark:before
    {
        left: 0;
        bottom: 0;
        width: 10px;
        height: 30px;
        box-shadow: -2px 0 5px rgba(0,0,0,0.23);
        transform: translateY(-68px)
    }

    #tick_mark:after
    {
        left: 0;
        bottom: 0;
        width: 100%;
        height: 10px;
        box-shadow: 0 3px 5px rgba(0,0,0,0.23);
        transform: translateX(90px)
    }

    #_checkbox:checked + label
    {
        background-color: #f72414;
        box-shadow: 0 7px 10px #ffbeb8;
    }

    #_checkbox:checked + label:before
    {
        width: 0;
        height: 0;
    }

    #_checkbox:checked + label #tick_mark:before, #_checkbox:checked + label #tick_mark:after
    {
        transform: translate(0);
        opacity: 1;
    }
</style>

<input type="checkbox" id="_checkbox">
<label for="_checkbox">
    <div id="tick_mark"></div>
</label>

