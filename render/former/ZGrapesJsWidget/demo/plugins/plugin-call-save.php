<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>GrapesJS Plugin Export</title>
    <link href="https://unpkg.com/grapesjs/dist/css/grapes.min.css" rel="stylesheet">
    <script src="https://unpkg.com/grapesjs"></script>
    <script src="dist/grapesjs-plugin-call-save.min.js"></script>
  </head>
  <style>
body, html{ height: 100%; margin: 0;}
  </style>
  <body>
    <div id="gjs" style="height:0px; overflow:hidden">
      <div class="red">Test content</div>
      <style>.red {color: red}</style>
    </div>
    <script type="text/javascript">
      var editor = grapesjs.init({
        noticeOnUnload: 0,
        container : '#gjs',
        height: '100%',
        fromElement: 1,
        storageManager: { autoload: 0 },
        plugins: ['grapesjs-plugin-call-save'],
        pluginsOpts: {
    'grapesjs-plugin-call-save': {
    
    }
        }
      });
    </script>
  </body>
</html>
