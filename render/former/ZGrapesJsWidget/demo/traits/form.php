<?php

use zetsoft\assets\testing\GrapeAsset;
use zetsoft\assets\blocks\ZGrapesPluginFormAsset;

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>GrapesJS Plugin Forms</title>
    <link href="">

    <?php

    ZGrapesPluginFormAsset::register($this);
    ?>
    <style>
        body, html {
            height: 100%;
            margin: 0;
        }

        .gjs-block-svg {
            width: 61%;
        }

        .gjs-block-svg-path {
            fill: white;
        }
    </style>
</head>
<body>

<div id="gjs" style="height:0px; overflow:hidden">
    <form action="index.html" method="post" style="padding: 50px;">
        <input type="hidden" name="hidden-input" value="someval">
        
        <button type="button" class="btn btn-success" name="button-name">Send</button>
    </form>

</div>


<script type="text/javascript">
    var editor = grapesjs.init({
        height: '1000px',
        noticeOnUnload: 0,
        storageManager: {autoload: 0},
        container: '#gjs',
        fromElement: true,
        plugins: ['grapesjs-plugin-forms'],
        pluginsOpts: {
            'grapesjs-plugin-forms': {
                blocks: ['form'],
                labelTraitMethod: 'Method',

            }
        }
    });

</script>

<script type="text/javascript">
    editor.DomComponents.addType('input', {
        model: {
            defaults: {
            },
            init() {
                this.on('change:attributes:type', this.handleTypeChange);
            },

            handleTypeChange() {
                console.log('Input type changed to: ', this.getAttributes().type);
            },
        }
    })
</script>



</body>
</html>
