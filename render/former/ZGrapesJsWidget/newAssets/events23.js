function componentAdd(model) {
    const visibility = buttonManager.getButton('options','sw-visibility');
    visibility.set('active',1);

    let parentDiv = $(model.getEl());
    let className = model.get('name');

    if (className) {

        let file = 'getWidget';
        let assetsFile = 'getAssets';
        let htmlClass = 'zwidget';
        if (className.includes('zetsoft/blocks')) {

            file = 'getBlocks';
            assetsFile = 'getBlockAssets';
            htmlClass = 'template-block';
        }

        if (className.includes('zetsoft')) {

            $.ajax({
                method: "GET",
                url: '/kernel/grapes/' + assetsFile + '.aspx?param=' + className,
                success: function(response) {
                    getAssets(model, response);
                },
            });

            $.ajax({
                method: "GET",
                url: '/kernel/grapes/' + file + '.aspx?param=' + className,
                success: function(response) {

                    console.log(response)

                    setTimeout(function() {
                        parentDiv.html(response);

                        var parentId = parentDiv.find('[parent-id]').attr('parent-id');
                        parentDiv.addClass('parent-div ' + parentId + ' ' + htmlClass);
                        parentDiv.attr('data-id', parentId);
                        parentDiv.attr('data-css', '');

                    }, 1500);
                },
            });

        }


    }
}

function componentSelected(model) {

    $('.gjs-traits-label').empty();

    var settingsBtn = panelManager.getButton('views', 'open-tm');
    settingsBtn.set('active', 1);

    $('#search_grape').hide();
    let selected = editor.getSelected();
    let selectedEl = $(selected.getEl());
    let parentDiv = selectedEl;

    let isAll = false;
    let blockName = '';
    let configs = {};
    let file = 'getOptions';

    if (!selectedEl.hasClass('parent-div'))
        parentDiv = selectedEl.closest('.parent-div');

    if (parentDiv.hasClass('zwidget')) {
        blockName = parentDiv.find('[widget]').attr('widget');
        configs = parentDiv.find('[config]').attr('config');
    } else {
        blockName = parentDiv.find('[widget]').attr('widget');
        configs = {};
        file = 'selected';
    }

    if (blockName)
        if (blockName.includes('zetsoft')) {

            if (blockName.match(/zetsoft\/blocks\/.*\/ALL/g))
                isAll = true;

            $.ajax({
                url: '/kernel/grapes/' + file + '.aspx?param=' + blockName + '&configs=' + configs + '&isAll=' + isAll,
                type: 'GET',
                async: false,
                success :  function(response) {
                    $('.gjs-traits-label').html(response);
                    $('.gjs-trt-traits').empty();
                },
            });

            let blockId = parentDiv.attr('data-id');
            $('#sendOptions').click(function() {
                $.ajax({
                    method: "GET",
                    url: '/kernel/grapes/getWidget.aspx?' + $('#activeForm').serialize()
                        + '&param=' + blockName
                        + '&blockId=' + blockId,
                    success: function(response) {
                        parentDiv.html(response);
                        model.attributes.content = response;
                    },
                });
            });

        }

}

function componentDragEnd(model) {

    var target = model.target;
    let className = target.get('name');
    var parentEl = $(target.getEl());
    var configs = parentEl.find('[config]').attr('config');

    if (className === '')
        className = parentEl.find('[widget]').attr('widget');

    if (className) {

        let file = 'getWidget';
        let htmlClass = 'zwidget';

        if (className.includes('zetsoft/blocks')) {
            file = 'getBlocks';
            htmlClass = 'template-block';
        }

        var ajaxable = parentEl.attr('ajaxable');
        var content = target.get('content');

        if (ajaxable === 'true')
            $.ajax({
                method: "GET",
                url: '/kernel/grapes/' + file + '.aspx?param=' + className + '&configs=' + configs,
                success: function(response) {
                    parentEl.html(response);
                    target.attributes.content = response;
                },
            });
        else
            parentEl.html(content);

        if (!parentEl.hasClass(htmlClass))
            parentEl.addClass(htmlClass + ' parent-div');

    }


}

function loadEditor() {

    const wrapper = editor.DomComponents.getWrapper();

    const componentsParent = wrapper.find('.zwidget');
    componentsParent.forEach(function (zwidget) {

        var widget = zwidget.getEl();
        var parent = $(widget).closest('.template-block');

        zwidget.attributes.content = $(widget).html();

        if (parent.hasClass('template-block'))
            $(widget).removeClass('parent-div');

    });

    const categoriess = editor.BlockManager.getCategories();
    categoriess.each(category => {
        category.set('open', false)
    })

    const components = wrapper.find('[data-gjs-type]');
    components.forEach(function (component) {

        const componentEl = component.getEl();
        component.set({
            'editable': false,
            'copyable': false,
            'droppable': false,
            'draggable': false,
            'hoverable': false,
            'selectable': false,
            'stylable': false,
            'highlightable': false,
            'badgable': false,
            'layerable': false,
            'ajaxable': true,
        });


        if ($(componentEl).hasClass('parent-div')
            || $(componentEl).hasClass('col'))
            component.set({
                'copyable': true,
                'ajaxable': true,
                'droppable': false,
                'stylable': true,
                'draggable': '.col',
                'hoverable': true,
                'selectable': true,
                'highlightable': true,
                'layerable': true,
            });

        if ($(componentEl).hasClass('col'))
            component.set({
                'droppable': true,
            });


        if (component.get('type') === 'text')
            component.set({
                'editable': true
            });

    });


    $('.fa-desktop').attr('data-original-title', 'Desktop');
    $('.fa-tablet').attr('data-original-title', 'Tablet');
    $('.fa-mobile').attr('data-original-title', 'Mobile');

    const body = editor.Canvas.getDocument().body;
    let child = $(body)[0].children[1]
    $(child).hide();

    let wrapper1 = $(editor.Canvas.getDocument().body).find('#wrapper')
    wrapper1.addClass('parent-div');

//Loader options start

    setTimeout(function () {
        $('.preloader').hide();
        $('#gjs').removeClass('d-none');
    }, 1500);

//Loader options end


    editor.CssComposer.getAll().reset();
    const swv = buttonManager.getButton('options', 'sw-visibility');

    $('#search_grape').attr('type', 'search');

    $('#search_grape').on('keyup', function () {
        $(this).value;
    });

    $('.gjs-pn-options .gjs-pn-btn').on('click', function () {
        if (!$(this).hasClass('fa-square-o')) {
            if (!$('fa-square-o').hasClass('gjs-pn-active')
            ) {
                swv.set('active', 1);
            } else {
                swv.set('active', 0);
            }
        }
    });



    blockManager.remove([
        'column1',
        'column2',
        'column3',
        'column3-7',
    ]);


//template and Widget block filter part

    let blocks = blockManager.getAll().models;
    let widgets = [];
    let templates = [];
    let container = $('.gjs-pn-views-container');
    let container_div2 = $('.gjs-pn-options .gjs-pn-buttons')

    let template_btn1 = document.createElement('span');
    let widget_btn = document.createElement('span');
    let widget_icon = document.createElement('i');
    let template_icon = document.createElement('i');
    const openBlock = editor.Panels.getButton('views', 'open-blocks');
    let content_tmpl = document.createElement('div');

    container_div2.addClass('extras');

    widget_btn.setAttribute('data-original-title', 'Widgets');
    template_btn1.setAttribute('data-original-title', 'Templates');


    content_tmpl.setAttribute('class', 'content-switch');
    widget_icon.setAttribute('class', 'fas fa-palette');
    template_icon.setAttribute('class', 'fas fa-layer-group');
    widget_icon.setAttribute('style', 'font-size:1.4rem');
    template_icon.setAttribute('style', 'font-size:1.4rem');

    template_btn1.setAttribute('class', 'btn-widget d-inline-block btn btn-sm btn-outline-primary template-switch ');
    widget_btn.setAttribute('class', 'btn-template d-inline-block btn btn-sm btn-outline-primary widget-switch ');

    content_tmpl.append(widget_btn);
    content_tmpl.append(template_btn1);
    if (window.matchMedia("(max-width: 768px)").matches) {
        $('.gjs-pn-options .gjs-pn-buttons .fa-arrows-alt').remove();
        $('#search_grape').after(content_tmpl);
    } else {
        container_div2.prepend(content_tmpl);
    }

    let btn_widget = $('.widget-switch');
    let btn_template = $('.template-switch');

    btn_widget.append(widget_icon);
    btn_template.append(template_icon);

    let block_categories = $('.gjs-block-categories');
    let block_category = $('.gjs-block-category');

    block_categories.append()
    for (let i = 0; i < block_category.length; i++) {
        let counter_wdg = 0;
        let counter_tmp = 0;
        let item = block_category[i];
        let item_children = item.children[1].children;
        for (let j = 0; j < item_children.length; j++) {
            let item_after = item_children[j];
            if (item_after.classList.contains('widgets')) {
                counter_wdg++;
            }
            if (item_after.classList.contains('templates')) {
                counter_tmp++;
            }
        }
        if (counter_wdg > 0) {
            widgets.push(item);
        }
        if (counter_tmp > 0) {
            templates.push(item);
            item.style.display = 'none';
        }
        if (counter_tmp === 0 && counter_wdg === 0) {
            widgets.push(item);
        }
    }
    btn_widget.removeClass('btn-outline-primary');
    btn_widget.addClass('btn-primary');
    btn_template.on('click', function () {
        $('#search_grape').show();
        openBlock.set('active', 1);
        widgets.map(widget =>
            widget.style.display = 'none'
        )
        templates.map(template =>
            template.style.display = 'block'
        )
        btn_widget.removeClass('btn-primary');
        btn_widget.addClass('btn-outline-primary');
        btn_template.removeClass('btn-outline-primary');
        btn_template.addClass('btn-primary');
    })

    btn_widget.on('click', function () {
        openBlock.set('active', 1);
        $('#search_grape').show();
        widgets.map(widget =>
            widget.style.display = 'block'
        )
        templates.map(template =>
            template.style.display = 'none'
        )
        btn_template.removeClass('btn-primary');
        btn_template.addClass('btn-outline-primary');
        btn_widget.removeClass('btn-outline-primary');
        btn_widget.addClass('btn-primary');
    })


//end template and widget filter part


    let content_right = document.createElement('div');
    let btn_eye = $('.fa-eye')[0];
    let btn_arrow = $('.gotoPage')[0];


//btn_eye.classList.add('eye-add');

    content_right.setAttribute('class', 'content-right');
    content_tmpl.setAttribute('class', 'content-switch');
    content_right.append(btn_eye);
    content_right.append(btn_arrow);
    container_div2.append(content_right)

    let col = $(".gjs-pn-views .gjs-pn-buttons");
    let cols = $('.gjs-pn-panel:nth-child(3)');
    let categories = $(".gjs-pn-views-container");
    let btnDiv = document.createElement("SPAN");
    let canvas = $(".gjs-cv-canvas");
    let count = 0;

    let btns = $(".gjs-pn-views span");
    $(".gjs-pn-buttons .fa-paint-brush,.gjs-pn-buttons .fa-cog,.gjs-pn-buttons .fa-th-large,.gjs-pn-buttons .fa-bars").on("click", function () {
        if (!$(this).hasClass('gjs-pn-active')) {
            canvas.css({"left": "3%", "width": "97%", "transition": "0.3s all ease-in"});
            $('.gjs-pn-views-container').hide("swing");
        } else {
            canvas.css({"left": "22.5%", "width": "77.4%"});
            $('.gjs-pn-views-container').show("swing");
        }
    })
//category list fa

    let categories1 = $(".gjs-block-category");
    let bar_icon = document.createElement("i");
    let close_icon = document.createElement("i");
    close_icon.setAttribute("class", "fa fa-times float-right d-none close");
    bar_icon.setAttribute("class", "fa fa-bars float-right bar gjs-caret-icon");
    categories1.each((i, category) =>
        category.children[0].children[0].remove('.fa-caret-right')
    )
    $(".gjs-block-category .gjs-title").append(bar_icon, close_icon);

//end

    $(".gjs-block").attr("data-toggle", "popover");
    $(".gjs-block").attr("tabindex", "0");
    $(".gjs-block").attr("data-placement", "top");
    $(".gjs-block").attr("data-trigger", "hover");
    $(".popover-body").css("padding", "0");

    $(function () {
        $('.gjs-block').popover();
    });
//zoom in/out

//Review options

    $('.gjs-pn-options .gjs-pn-buttons .fa-eye').on("click", function () {
        $('.gjs-off-prv').removeClass('fa-eye-slash');
        $('.gjs-off-prv').addClass('fa-times-circle');
        $('.gjs-off-prv').css({'font-size': '1.7rem'});
    })

//Review options end

    let zoomsize = 100;

    function zoomOutt() {
        zoomsize--;
        zoomsize--;
        editor.Canvas.setZoom(zoomsize);

    }

    function zoomInn() {
        zoomsize++;
        zoomsize++;
        editor.Canvas.setZoom(zoomsize);
    }

// + , -
    $(document).keydown(function (e) {
        if (e.keyCode === 189) {
            //editor.Canvas.setZoom(20);
            zoomOutt();
        } else if (e.keyCode === 187) {
            //editor.Canvas.setZoom(120);
            zoomInn();
        }
    });


    $('.grapes-tooltip').tooltipster({
        theme: 'tooltipster-borderless',
        animation: 'fade',
        delay: 100,
        anchor: 'right',/*top-left, top-center, top-right, left-center, left-right, bottom-left, bottom-center, bottom-right*/
        minWidth: 140,
        maxWidth: 180,

    });

    $(document).ready(function () {

        $(".fa-save, .fa-arrows-alt, .fa-trash, .fa-square-o, .fa-undo, .fa-redo, .fa-eye, .fa-desktop," +
            ".fa-tablet, .fa-mobile, .fa-palette, .fa-layer-group, .fa-location-arrow").tooltip({
            placement: 'bottom'
        });

    });


    let undoBtn = document.querySelector('.fa-undo');
    let redoBtn = document.querySelector('.fa-repeat');
    undoBtn.className = 'gjs-pn-btn fa fa-undo btn btn-outline-primary';
    redoBtn.className = 'gjs-pn-btn fa fa-redo btn btn-outline-primary';
    undoBtn.onclick = function () {
        this.className = 'gjs-pn-btn fa fa-undo btn btn-outline-primary';
    };
    redoBtn.onclick = function () {
        redoBtn.className = 'gjs-pn-btn fa fa-redo btn btn-outline-primary';
    };

}

function componentStyleUpdate(model) {
    let parentEl = $(model.getEl());
    let parentId = parentEl.attr('data-id');
    let styles = model.getStyle();
    let css=null;
    let newCss = '';
    //let elements = importCss.split('{').join('').split('}');

    let elements = importCss.split('}');
    let isContain = false;
    let info=null;

    console.log(elements)

    elements.map((key,k)=>
        key.includes(parentId)?equalize(true,k):''
    )

    function equalize(bool,int) {
        info=int;
        isContain = bool;
    }


    if (styles !== '' && parentEl.hasClass('parent-div')){
        /*if (isContain){
            let el = elements[info];
            elements[info]+=JSON.stringify(styles).split('{').join('').split('}').join('').split(',')[0]+';}';
        }
        else{*/
        if (parentId!==undefined)
            newCss = '.' + parentId + JSON.stringify(styles);
        else{
            if (parentEl[0].id)
                newCss = '#'+parentEl[0].id+JSON.stringify(styles);
            else
                newCss = '.'+parentId.id+JSON.stringify(styles);
        }
        //}

        /*if (newCss!==''){
            console.log(newCss);
            elements.push(newCss);
            //importCss = importCss.join(newCss);
            console.log(elements);
            elements.map((key,k)=>
                css+=key
            )
            importCss=css;
            console.log(importCss);
        }
        else
            console.log(elements[info])*/

        if (parentEl.hasClass('parent-div'))
            parentEl.attr('data-css', newCss);
    }
}

function componentRemove(model) {
    const openBl=buttonManager.getButton('views','open-blocks');
    openBl.set('active',1)
}

function setOptions() {

    const wrapper = editor.DomComponents.getWrapper();
    const components = wrapper.find('[data-gjs-type]');
    components.forEach(function(component) {

        const componentEl = component.getEl();
        component.set({
            'editable': false,
            'copyable': false,
            'droppable': false,
            'draggable': false,
            'hoverable': false,
            'selectable': false,
            'stylable': false,
            'highlightable': false,
            'badgable': false,
            'layerable': false,
            'ajaxable': true,
        });


        if ($(componentEl).hasClass('parent-div')
            || $(componentEl).hasClass('col'))
            component.set({
                'copyable': true,
                'ajaxable': true,
                'droppable': false,
                'stylable': true,
                'draggable': '.col',
                'hoverable': true,
                'selectable': true,
                'highlightable': true,
                'layerable': true,
            });

        if ($(componentEl).hasClass('col'))
            component.set({
                'droppable': true,
            });


        if (component.get('type') === 'text')
            component.set({
                'editable': true
            });

    });

}

var arrayAssets = [];
function getAssets(model, response) {

    model.attributes.content = response;

    const responseDom = $.parseHTML(response, document, true);
    const canvasHead = editor.Canvas.getDocument().head;

    $(responseDom).each(function(i , el) {

        const src = $(el).attr("src");
        const href = $(el).attr("href");
        if (src && !arrayAssets.includes(src)) {
            const script = document.createElement("script");
            script.src = src;
            script.type = "text/javascript";
            canvasHead.append(script);
            arrayAssets.push(src);
        }

        if (href && !arrayAssets.includes(href)) {
            const link = document.createElement("link");
            link.href = href;
            link.rel = "stylesheet";
            canvasHead.append(link);
            arrayAssets.push(href);
        }

    });


}
