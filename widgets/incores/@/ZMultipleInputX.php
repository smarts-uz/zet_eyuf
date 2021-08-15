<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

namespace zetsoft\widgets\incores;


use unclead\multipleinput\MultipleInputColumn;
use unclead\multipleinput\renderers\RendererInterface;
use unclead\multipleinput\renderers\TableRenderer;
use yii\db\ActiveRecordInterface;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZWidget;

class ZMultipleInputX extends ZWidget
{

    const POS_HEADER = RendererInterface::POS_HEADER;
    const POS_ROW = RendererInterface::POS_ROW;
    const POS_ROW_BEGIN = RendererInterface::POS_ROW_BEGIN;
    const POS_FOOTER = RendererInterface::POS_FOOTER;

    const THEME_DEFAULT = 'default';
    const THEME_BS = 'bootstrap';

    const ICONS_SOURCE_GLYPHICONS = 'glyphicons';
    const ICONS_SOURCE_FONTAWESOME = 'fa';

    /**
     * @var ActiveRecordInterface[]|array[] input data
     */
    public $data;

    /**
     * @var array columns configuration
     */
    public $columns = [];

    /**
     * @var integer maximum number of rows
     */
    public $max;

    /**
     * @var array client-side attribute options, e.g. enableAjaxValidation. You may use this property in case when
     * you use widget without a model, since in this case widget is not able to detect client-side options
     * automatically.
     */
    public $attributeOptions = [];

    /**
     * @var array the HTML options for the `remove` button
     */
    public $removeButtonOptions;

    /**
     * @var array the HTML options for the `add` button
     */
    public $addButtonOptions;

    /**
     * @var array the HTML options for the `clone` button
     */
    public $cloneButtonOptions;

    /**
     * @var bool whether to allow the empty list
     */
    public $allowEmptyList = false;

    /**
     * @var bool whether to guess column title in case if there is no definition of columns
     */
    public $enableGuessTitle = false;

    /**
     * @var int minimum number of rows
     */
    public $min;

    /**
     * @var string|array position of add button.
     */
    public $addButtonPosition;

    /**
     * @var array|\Closure the HTML attributes for the table body rows. This can be either an array
     * specifying the common HTML attributes for all body rows, or an anonymous function that
     * returns an array of the HTML attributes. It should have the following signature:
     *
     * ```php
     * function ($model, $index, $context)
     * ```
     *
     * - `$model`: the current data model being rendered
     * - `$index`: the zero-based index of the data model in the model array
     * - `$context`: the MultipleInput widget object
     *
     */
    public $rowOptions = [];

    /**
     * @var string the name of column class. You can specify your own class to extend base functionality.
     * Defaults to `unclead\multipleinput\MultipleInputColumn`
     */
    public $columnClass;

    /**
     * @var string the name of renderer class. Defaults to `unclead\multipleinput\renderers\TableRenderer`.
     * @since 1.4
     */
    public $rendererClass;

    /**
     * @var bool whether the widget is embedded or not.
     * @internal this property is used for internal purposes. Do not use it in your code.
     */
    public $isEmbedded = false;

    /**
     * @var ActiveForm an instance of ActiveForm which you have to pass in case of using client validation
     * @since 2.1
     */
    public $form;

    /**
     * @var bool allow sorting.
     * @internal this property is used when need to allow sorting rows.
     */
    public $sortable = false;

    /**
     * @var bool whether to render inline error for all input. Default to `false`. Can be override in `columns`
     * @since 2.10
     */
    public $enableError = false;

    /**
     * @var bool whether to render clone button. Default to `false`.
     */
    public $cloneButton = false;

    /**
     * @var string|\Closure the HTML content that will be rendered after the buttons.
     *
     * ```php
     * function ($model, $index, $context)
     * ```
     *
     * - `$model`: the current data model being rendered
     * - `$index`: the zero-based index of the data model in the model array
     * - `$context`: the MultipleInput widget object
     *
     */
    public $extraButtons;

    /**
     * @var array CSS grid classes for horizontal layout. This must be an array with these keys:
     *  - 'offsetClass' the offset grid class to append to the wrapper if no label is rendered
     *  - 'labelClass' the label grid class
     *  - 'wrapperClass' the wrapper grid class
     *  - 'errorClass' the error grid class
     */
    public $layoutConfig = [];

    /**
     * @var array
     * --icon library classes mapped for various controls
     */
    public $iconMap = [
        self::ICONS_SOURCE_GLYPHICONS => [
            'drag-handle' => 'glyphicon glyphicon-menu-hamburger',
            'remove' => 'glyphicon glyphicon-remove',
            'add' => 'glyphicon glyphicon-plus',
            'clone' => 'glyphicon glyphicon-duplicate',
        ],
        self::ICONS_SOURCE_FONTAWESOME => [
            'drag-handle' => 'fa fa-bars',
            'remove' => 'fa fa-times',
            'add' => 'fa fa-plus',
            'clone' => 'fa fa-files-o',
        ],
    ];
    /**
     * @var string the name of default icon library
     */
    public $iconSource = self::ICONS_SOURCE_GLYPHICONS;

    /**
     * @var string the CSS theme of the widget
     *
     * @todo Use bootstrap theme for BC. We can switch to default theme in major release
     */
    public $theme = self::THEME_BS;

    /**
     * @var bool
     */
    public $showGeneralError = false;

    /**
     * @var bool add a new line to the beginning of the list, not to the end
     */
    public $prepend = false;


    /**
     * Initializes data.
     */
    protected function initData()
    {

        if (!empty($this->value))
            $data = $this->value;
        else
            $data = [];

        foreach ($data as $index => $value) {
            $this->data[$index] = $value;
        }

    }

    /**
     * This function tries to guess the columns to show from the given data
     * if [[columns]] are not explicitly specified.
     */
    protected function guessColumns()
    {
        if (empty($this->columns)) {
            $column = [
                'name' => $this->hasModel() ? $this->attribute : $this->name,
                'type' => MultipleInputColumn::TYPE_TEXT_INPUT
            ];

            if ($this->enableGuessTitle && $this->hasModel()) {
                $column['title'] = $this->model->getAttributeLabel($this->attribute);
            }
            $this->columns[] = $column;
        }
    }

    /**
     * Run widget.
     */
    public function run()
    {

        $content = '';
        if ($this->isEmbedded === false && $this->hasModel()) {
            $content .= Html::hiddenInput(Html::getInputName($this->model, $this->attribute), null);
        }

        $this->guessColumns();
        $this->initData();

        $content .= $this->createRenderer()->render();

        return $content;
    }

    /**
     * @return TableRenderer
     */
    protected function createRenderer()
    {
        if ($this->sortable) {
            $drag = [
                'name' => 'drag',
                'type' => MultipleInputColumn::TYPE_DRAGCOLUMN,
                'headerOptions' => [
                    'style' => 'width: 20px;',
                ]
            ];

            array_unshift($this->columns, $drag);
        }

        $available_themes = [
            self::THEME_BS,
            self::THEME_DEFAULT
        ];

        if (!in_array($this->theme, $available_themes, true)) {
            $this->theme = self::THEME_BS;
        }

        /**
         * set default icon map
         */
        $iconMap = array_key_exists($this->iconSource, $this->iconMap)
            ? $this->iconMap[$this->iconSource]
            : $this->iconMap[self::ICONS_SOURCE_GLYPHICONS];

        $config = [
            'id' => $this->getId(),
            'columns' => $this->columns,
            'min' => $this->min,
            'max' => $this->max,
            'attributeOptions' => $this->attributeOptions,
            'data' => $this->data,
            'columnClass' => $this->columnClass !== null ? $this->columnClass : MultipleInputColumn::className(),
            'allowEmptyList' => $this->allowEmptyList,
            'addButtonPosition' => $this->addButtonPosition,
            'rowOptions' => $this->rowOptions,
            'context' => $this,
            'form' => $this->form,
            'sortable' => $this->sortable,
            'enableError' => $this->enableError,
            'cloneButton' => $this->cloneButton,
            'extraButtons' => $this->extraButtons,
            'layoutConfig' => $this->layoutConfig,
            'iconMap' => $iconMap,
            'theme' => $this->theme,
            'prepend' => $this->prepend
        ];

        if ($this->showGeneralError) {
            $config['jsExtraSettings'] = [
                'showGeneralError' => true
            ];
        }

        if ($this->removeButtonOptions !== null) {
            $config['removeButtonOptions'] = $this->removeButtonOptions;
        }

        if ($this->addButtonOptions !== null) {
            $config['addButtonOptions'] = $this->addButtonOptions;
        }

        if ($this->cloneButtonOptions !== null) {
            $config['cloneButtonOptions'] = $this->cloneButtonOptions;
        }

        $config['class'] = $this->rendererClass ?: TableRenderer::className();

        return Az::createObject($config);
    }
}
