<?php

namespace zetsoft\widgets\inptest;
/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 * Created by: Mustafayev Saidbek
 * Refactored: Mustafayev Saidbek
 */

use yii\helpers\Url;
use zetsoft\system\actives\ZActiveRecord;
use zetsoft\system\kernels\ZWidget;
use yii\base\Model;
use yii\web\UploadedFile;

class ZFilepondMultipleWidget extends ZWidget
{
    /**
     * Configuration
     */
    public $config = [];
    public $_config = [
        'allowFileSizeValidation' => false,
        'multiple' => true,
        'required' => true,
        'maxFiles' => 10,
        'instanceOptions' => [
            'allowFileSizeValidation' => true,
            'maxFileSize' => '10M',
            'acceptedFileTypes' => ['image/*']
        ],
        'language' => 'ru-RU'

    ];

    /**
     *
     * Plugin Events
     * https://select2.org/programmatic-control/events
     */
    public $event = [];
    public $_event = [

    ];


    /**
     *
     * Constants
     */

    public function asset()
    {
        $this->fileCss('https://unpkg.com/filepond/dist/filepond.css');
        $this->fileCss('https://unpkg.com/filepond-plugin-file-poster/dist/filepond-plugin-file-poster.css');
        $this->fileCss('https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.css');
        $this->fileCss('https://unpkg.com/filepond/dist/filepond.min.css');

        $this->fileCss('https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css');
        $this->fileCss('https://unpkg.com/filepond-plugin-image-edit/dist/filepond-plugin-image-edit.css');
        $this->fileJs('https://unpkg.com/filepond/dist/filepond.js');
        $this->fileJs('https://unpkg.com/filepond-plugin-file-rename/dist/filepond-plugin-file-rename.js');
        $this->fileJs('https://unpkg.com/filepond-plugin-file-encode/dist/filepond-plugin-file-encode.js');
        $this->fileJs('https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js');
        $this->fileJs('https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js');
        $this->fileJs('https://unpkg.com/filepond-plugin-file-metadata/dist/filepond-plugin-file-metadata.js');
        $this->fileJs('https://unpkg.com/filepond-plugin-file-poster/dist/filepond-plugin-file-poster.js');
        $this->fileJs('https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js');
        $this->fileJs('https://unpkg.com/filepond-plugin-image-edit/dist/filepond-plugin-image-edit.js');
        $this->fileJs('https://unpkg.com/filepond-plugin-image-cropLength/dist/filepond-plugin-image-cropLength.js');
        $this->fileJs('https://unpkg.com/filepond-plugin-image-resize/dist/filepond-plugin-image-resize.js');
        $this->fileJs('https://unpkg.com/filepond-plugin-image-transform/dist/filepond-plugin-image-transform.js');
        $this->fileJs('https://unpkg.com/filepond-plugin-image-exif-orientation/dist/filepond-plugin-image-exif-orientation.js');
        $this->fileJs('https://unpkg.com/filepond-plugin-image-validate-size/dist/filepond-plugin-image-validate-size.js');
        $this->fileJs('https://unpkg.com/filepond-plugin-image-filter/dist/filepond-plugin-image-filter.js');
        $this->fileJs('https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.js');
        $this->fileJs('https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.min.js');
        $this->fileJs('https://unpkg.com/filepond-plugin-image-exif-orientation/dist/filepond-plugin-image-exif-orientation.min.js');
        $this->fileJs('https://unpkg.com/filepond-plugin-file-encode/dist/filepond-plugin-file-encode.min.js');
        $this->fileJs('https://cdn.jsdelivr.net/npm/filepond@4.13.0/dist/filepond.min.js');

        $this->fileCss('https://cdn.jsdelivr.net/npm/filepond@4.13.0/dist/filepond.css');
    }


    public function codes()
    {
        $this->layout = [
            'main' => <<<HTML
        <input type="file" 
       class="filepond"
       name="filepond"
       multiple
       data-max-file-size="3MB"
       data-max-files="5" />
  
       <div id="{$this->id}-inputs">
             
        </div>
HTML,
            'css' => <<<CSS

      /**
 * FilePond Custom Styles
 */
.filepond--drop-label {
	color: #4c4e53;
}

.filepond--label-action {
	text-decoration-color: #babdc0;
}

.filepond--panel-root {
	border-radius: 2em;
	background-color: #edf0f4;
	height: 1em;
}

.filepond--item-panel {
	background-color: #595e68;
}

.filepond--drip-blob {
	background-color: #7f8a9a;
}


/**
 * Page Styles
 */





CSS,
            'js' => <<<JS
 jQuery(function ($) {
        var instanceOptions = {
            "labelIdle": "Перетащите файл или <span class=\"filepond--label-action\"> Выберите </span>",
            "labelInvalidField": "Поле содержит неверный файл",
            "labelFileWaitingForSize": "Ожидание размера...",
            "labelFileSizeNotAvailable": "Недопустимый размер",
            "labelFileLoading": "Загрузка...",
            "labelFileLoadError": "Ошибка при загрузке",
            "labelFileProcessing": "Загрузка...",
            "labelFileProcessingComplete": "Загрузка завершена",
            "labelFileProcessingAborted": "Загрузка отменена",
            "labelFileProcessingError": "Ошибка при загрузке",
            "labelFileProcessingRevertError": "Ошибка при возврате",
            "labelFileRemoveError": "Ошибка при удалении",
            "labelTapToCancel": "коснитесь для отмены",
            "labelTapToRetry": "коснитесь для повтора",
            "labelTapToUndo": "коснитесь для возврата",
            "labelButtonRemoveItem": "Удалить",
            "labelButtonAbortItemLoad": "Остановить",
            "labelButtonRetryItemLoad": "Повторить",
            "labelButtonAbortItemProcessing": "Отменить",
            "labelButtonUndoItemProcessing": "Отменить",
            "labelButtonRetryItemProcessing": "Повторить",
            "labelButtonProcessItem": "Загрузить",
            "required": true,
            minimum: 0.08,
            easing: 'ease',
            name: 'filepond',
            positionUsing: '',
            speed: 500,
            trickle: true,
            trickleRate: 0.02,
            allowBrowse: true,
            trickleSpeed: 800,
            showSpinner: true,
            allowMultiple: 1,
           
            // default cropLength aspect ratio
            imageCropAspectRatio: 1,

            // resize to width of 200
            imageResizeTargetWidth: 200,

            // open editor on image drop
            imageEditInstantEdit: true,
            imageTransformVariants: {
                'thumb_medium_': transforms => {
                    transforms.resize.size.width = 384;
                    return transforms;
                },
                'thumb_small_': transforms => {
                    transforms.resize.size.width = 128;
                    return transforms;
                }
            },
            imageTransformBeforeCreateBlob: (canvas) => new Promise(resolve => {

                // Do something with the canvas, like drawing some text on it
                const ctx = canvas.getContext('2d');
                ctx.font = '48px serif';
                ctx.fillText('Hello world', 10, 50);

                // return canvas to the plugin for further processing
                resolve(canvas);
            }),
            imageTransformAfterCreateBlob: (blob) => new Promise(resolve => {
                // do something with the blob, for instance send it to a custom compression alogrithm


                // return the blob to the plugin for further processing
                resolve(blob);
            }),
            onpreparefile: (file, output) => {
                const img = new Image();
                img.src = URL.createObjectURL(output);
                
            },
            allowFileRename: true,
            fileRenameFunction: file => new Promise(resolve => {
                resolve(window.prompt('Enter new filename', file.name))
            }),
               
            getFileEncodeDataURL: () => console.log(),
            getFileEncodeBase64String: () => console.log(),
            allowFileEncode: true,
            onaddfilestart: file => {
                // console.log(file.filename)
              inputs = "<input type='hidden' value='"+file.filename+"' name='{name}[]'>";
               $('#$this->id-inputs').append(inputs);  
            },
            allowFileSizeValidation: true,
            maxFileSize: '5MB',
            maxTotalFileSize: '5MB',
            labelMaxFileSizeExceeded: 'File is too large',
            labelMaxFileSize: 'Maximum file size is {filesize}',
            labelMaxTotalFileSizeExceeded: 'Maximum total size exceeded',
            labelMaxTotalFileSize: 'Maximum total file size is {filesize}',
            acceptedFileTypes: ['image/*'],
            allowFileTypeValidation: true,
            labelFileTypeNotAllowed: 'File of invalid type',
            fileValidateTypeLabelExpectedTypes: 'Expects {allButLastType} or {lastType}',
            fileValidateTypeLabelExpectedTypesMap: {'image/jpeg': '.jpg'},
            fileValidateTypeDetectType: (source, type) => new Promise((resolve, reject) => {
                // Do custom type detection here and return with promise
                resolve(type);
            }),
            allowFileMetadata: true,
            allowFilePoster: true,
            allowImagePreview: true,
            imagePreviewMinHeight: 44,
            imagePreviewMaxHeight: 256,
            imagePreviewMaxFileSize: '2MB',
            imagePreviewTransparencyIndicator: 'grid',
            imagePreviewMaxInstantPreviewFileSize: 1000000,
            imagePreviewMarkupShow: true,
            imagePreviewMarkupFilter: (markup) => true,
            allowImageCrop: true,
          
            imageResizeMode: 'cover',  //'force','contain','cover'
            imageResizeUpscale: true,
            imageTransformOutputQuality: '94',
            imageTransformOutputQualityMode: 'always',
            imageTransformOutputStripImageHead: true,
            imageTransformClientTransforms: 'resize',//'cropLength'
            imageTransformVariantsIncludeDefault: true,
            imageTransformVariantsDefaultName: '',
            imageTransformVariantsIncludeOriginal: false,
            imageTransformVariantsOriginalName: '',
                     
            imageTransformCanvasMemoryLimit: '',
            allowImageExifOrientation: true,
            allowImageValidateSize: true,
            imageValidateSizeMinWidth: 1,
            imageValidateSizeMaxWidth: 65535,
            imageValidateSizeMinHeight: 1,
            imageValidateSizeMaxHeight: 65535,
            imageValidateSizeLabelFormatError: 'Image type not supported',
            imageValidateSizeLabelImageSizeTooSmall: 'Image is too small',
            imageValidateSizeLabelImageSizeTooBig: 'Image is too big',
            imageValidateSizeLabelExpectedMinSize: 'Minimum size is {minWidth} × {minHeight}',
            imageValidateSizeLabelExpectedMaxSize: 'Maximum size is {maxWidth} × {maxHeight}',
            imageValidateSizeMinResolution: '',
           
            imageValidateSizeMaxResolution: 'Resolution is too low',
            imageValidateSizeLabelImageResolutionTooHigh: 'Resolution is too high',
            imageValidateSizeLabelExpectedMinResolution: 'Minimum resolution is {minResolution}',
            imageValidateSizeLabelExpectedMaxResolution: 'Maximum resolution is {maxResolution}',
        };
        var settingsOptions = {
            "server": {
                "process": "/filepond/main/upload.aspx",
                "revert": "/filepond/main/delete.aspx"
            }
            
        };
        
        
        

        if (instanceOptions.allowFileEncode) {
            FilePond.registerPlugin(FilePondPluginFileEncode);
        }

        if (instanceOptions.allowFileMetadata) {
            FilePond.registerPlugin(FilePondPluginFileMetadata);
        }

        if (instanceOptions.allowFilePoster) {
            FilePond.registerPlugin(FilePondPluginFilePoster);
        }

        if (instanceOptions.allowFileRename) {
            FilePond.registerPlugin(FilePondPluginFileRename);
        }

        if (instanceOptions.allowFileSizeValidation) {
            FilePond.registerPlugin(FilePondPluginFileValidateSize);
        }

        if (instanceOptions.allowFileTypeValidation) {
            FilePond.registerPlugin(FilePondPluginFileValidateType);
        }

        if (instanceOptions.allowImageExifOrientation) {
            FilePond.registerPlugin(FilePondPluginImageExifOrientation);
        }

        if (instanceOptions.allowImageCrop) {
            FilePond.registerPlugin(FilePondPluginImageCrop);
        }

        if (instanceOptions.allowImageEdit) {
            FilePond.registerPlugin(FilePondPluginImageEdit);
        }

        if (instanceOptions.allowImagePreview) {
            FilePond.registerPlugin(FilePondPluginImagePreview);
        }

        if (instanceOptions.allowImageResize) {
            FilePond.registerPlugin(FilePondPluginImageResize);
        }

        if (instanceOptions.allowImageValidateSize) {
            FilePond.registerPlugin(FilePondPluginImageValidateSize);
        }

        if (instanceOptions.allowImageTransform) {
            FilePond.registerPlugin(FilePondPluginImageTransform);
        }

        FilePond.setOptions(settingsOptions);
        var inputElement = document.querySelector('.filepond');
        FilePond.create(inputElement, instanceOptions);
        
        
        FilePond.registerPlugin(
	
	// encodes the file as base64 data
        FilePondPluginFileEncode,
	
	// validates the size of the file
	    FilePondPluginFileValidateSize,
	
	// corrects mobile image orientation
	    FilePondPluginImageExifOrientation,
	
	// previews dropped images
        FilePondPluginImagePreview
);      
         
    })
JS,

        ];


        $this->htm = strtr($this->layout['main'],[
            '{name}' => $this->name,
            '{id}' => $this->id,
        ]);
        $this->css = $this->layout['css'];
        $this->js = strtr($this->layout['js'],[
            '{name}' => $this->name,
        ]);



    }

}
