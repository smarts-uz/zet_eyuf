<!DOCTYPE html>
<!-- saved from url=(0029)https://h5bp.org/Effeckt.css/ -->
<html class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    

    <title>Effeckt.css</title>

    <meta name="title" content="UI-Less &amp; Performant Transitions &amp; Animations">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="./demo_files/demo.css">

    <!-- Individual module CSS files here -->
    <!-- Should we combine or not combine? -->
    <link rel="stylesheet" href="./demo_files/effeckt.css">
</head>

<body>

  <div class="warning">Work in Progress! Not quite ready for prime-time</div>

  <nav class="effeckt-off-screen-nav" id="effeckt-off-screen-nav">

  <header>
    <h4>
      Navigation
    </h4>
    <a href="https://h5bp.org/Effeckt.css/#0" id="effeckt-off-screen-nav-close" class="effeckt-off-screen-nav-close">×</a>
  </header>

  <ul>
    <li><a href="https://h5bp.org/Effeckt.css/#0">This</a></li>
    <li><a href="https://h5bp.org/Effeckt.css/#0">Little</a></li>
    <li><a href="https://h5bp.org/Effeckt.css/#0">Piggy</a></li>
    <li><a href="https://h5bp.org/Effeckt.css/#0">Went</a></li>
    <li><a href="https://h5bp.org/Effeckt.css/#0">To</a></li>
    <li><a href="https://h5bp.org/Effeckt.css/#0">Market</a></li>
  </ul>

</nav>


  <div class="effeckt-page-transition" id="effeckt-page-transition">

    <div class="effeckt-page-transition-content">

      <h2>Page Transition</h2>

      <p>This is another page.</p>

      <button class="page-transition-reset-button">Reset Transition</button>

    </div>

</div>


    <!-- dialogs first is important for ~ selector -->
  <div class="effeckt-wrap effeckt-modal-wrap" id="effeckt-modal-wrap"> <!-- for centering transform -->
    <div class="effeckt-content effeckt-modal" id="effeckt-modal">
      <h3>Modal Dialog</h3>
      <div class="effeckt-modal-content">
        <p>This is a modal window.</p>
        <button class="effeckt-modal-close">Close me!</button>
      </div>
    </div>
  </div>
  <!-- overlay coming after is important for ~ selector -->
  <!-- this is going to be used if there is not javascript involved -->
  <!-- <div class="effeckt-overlay effeckt-modal-overlay" id="effeckt-modal-overlay"></div> -->


  <div data-effeckt-page="page-1" class="effeckt-page-active">

    <div class="page-wrap" id="page-wrap">

      <h1>
        <a href="https://h5bp.org/Effeckt.css/">
          <span>E</span>
          <span>f</span>
          <span>f</span>
          <span>e</span>
          <span>c</span>
          <span>k</span>
          <span>t</span>
          <br class="mobile-break">
          <span>.</span>
          <span>c</span>
          <span>s</span>
          <span>s</span>
        </a>
      </h1>
      <subhead>
        Performant CSS transitions &amp; animations
        <a href="https://github.com/h5bp/Effeckt.css">on GitHub</a>
      </subhead>


      <section class="effeckt-demo-modals">
  <div class="effeckt effeckt-demo-modals">

  <header>
    <h2>
      Modals
      <a href="https://h5bp.org/Effeckt.css/modals.html">#</a>
    </h2>
    <span class="source">
      Source:
      <a href="http://tympanus.net/codrops/2013/06/25/nifty-modal-window-effects/">
        Codrops
      </a>
    </span>
  </header>

  <div class="button-group">
    <button class="effeckt-modal-button" data-effeckt-type="from-below">From Below</button>
    <button class="effeckt-modal-button" data-effeckt-type="from-above">From Above</button>
    <button class="effeckt-modal-button" data-effeckt-type="slide-in-top">Slide In (top)</button>
    <button class="effeckt-modal-button" data-effeckt-type="slide-in-right">Slide In (right)</button>
    <button class="effeckt-modal-button" data-effeckt-type="slide-in-bottom">Slide In (bottom)</button>
    <button class="effeckt-modal-button" data-effeckt-type="slide-in-left">Slide In (left)</button>
    <button class="effeckt-modal-button" data-effeckt-type="newspaper">Newspaper</button>
    <button class="effeckt-modal-button" data-effeckt-type="side-fall">Side Fall</button>
    <button class="effeckt-modal-button" data-effeckt-type="sticky-up">Sticky Up</button>
    <button class="effeckt-modal-button" data-effeckt-type="flip-horizontal-3D">3D Flip (horizontal)</button>
    <button class="effeckt-modal-button" data-effeckt-type="flip-vertical-3D">3D Flip (vertical)</button>
    <button class="effeckt-modal-button" data-effeckt-type="sign-3D">3D Sign</button>
    <button class="effeckt-modal-button" data-effeckt-type="fade-in">Fade In</button>
    <button class="effeckt-modal-button" data-effeckt-type="slit-3D">3D Slit</button>
    <button class="effeckt-modal-button" data-effeckt-type="rotate-from-bottom-3D">3D Rotate Bottom</button>
    <button class="effeckt-modal-button" data-effeckt-type="rotate-from-left-3D">3D Rotate In Left</button>
    <button class="effeckt-modal-button" data-effeckt-type="blur">Blur</button>

    <button class="effeckt-modal-button" data-effeckt-type="let-me-in" data-effeckt-needs-perspective="true">Let Me In</button>
    <button class="effeckt-modal-button" data-effeckt-type="make-way" data-effeckt-needs-perspective="true">Make Way!</button>
    <button class="effeckt-modal-button" data-effeckt-type="deep-content" data-effeckt-needs-perspective="true">Deep Content</button>
    <button class="effeckt-modal-button" data-effeckt-type="slip-in-from-top" data-effeckt-needs-perspective="true">Slip From Top</button>

    <button class="effeckt-modal-button" data-effeckt-type="slide-in-top" data-effeckt-out-type="tilt-fall">From Top, Tilt Fall</button>
    <button class="effeckt-modal-button" data-effeckt-type="slide-in-top" data-effeckt-out-type="slide-out-bottom">From Top to Bottom</button>
    <button class="effeckt-modal-button" data-effeckt-type="slide-in-bottom" data-effeckt-out-type="slide-out-top">From Bottom to Top</button>
    <button class="effeckt-modal-button" data-effeckt-type="slide-in-left" data-effeckt-out-type="slide-out-right">From Left to Right</button>
    <button class="effeckt-modal-button" data-effeckt-type="slide-in-right" data-effeckt-out-type="slide-out-left">From Right to Left</button>
    <button class="effeckt-modal-button" data-effeckt-type="from-above" data-effeckt-out-type="to-below">From Above to Below</button>
    <button class="effeckt-modal-button" data-effeckt-type="from-below" data-effeckt-out-type="to-above">From Below to Above</button>
    <button class="effeckt-modal-button" data-effeckt-type="shake">Shake</button>
    <button class="effeckt-modal-button" data-effeckt-type="bounce">Bounce</button>
    <button class="effeckt-modal-button" data-effeckt-type="pulse">Pulse</button>
    <button class="effeckt-modal-button" data-effeckt-type="wobble">Wobble</button>
    <button class="effeckt-modal-button" data-effeckt-type="swing">Swing</button>
    <button class="effeckt-modal-button" data-effeckt-type="tada">Tada</button>
  </div>

</div>

</section>

<section class="effeckt-demo-positional-modals">
  <div class="effeckt effeckt-demo-positional-modals">

  <header>
    <h2>
      Positional Modals
      <a href="https://h5bp.org/Effeckt.css/positional-modals.html">#</a>
    </h2>
  </header>

  <div class="button-group">
    <button class="effeckt-positional-modal-button" data-effeckt-position="above" data-effeckt-type="from-below">Above / From Below</button>
    <button class="effeckt-positional-modal-button" data-effeckt-position="above" data-effeckt-type="from-above">Above / From Above</button>
    <button class="effeckt-positional-modal-button" data-effeckt-position="above" data-effeckt-type="slide-in-right">Above / Slide In (right)</button>
    <button class="effeckt-positional-modal-button" data-effeckt-position="above" data-effeckt-type="slide-in-left">Above / Slide In (left)</button>
    <button class="effeckt-positional-modal-button" data-effeckt-position="above" data-effeckt-type="slide-in-top">Above / Slide In (top)</button>
    <button class="effeckt-positional-modal-button" data-effeckt-position="above" data-effeckt-type="slide-in-bottom">Above / Slide In (bottom)</button>

    <button class="effeckt-positional-modal-button" data-effeckt-position="below" data-effeckt-type="from-below">Below / From Below</button>
    <button class="effeckt-positional-modal-button" data-effeckt-position="below" data-effeckt-type="from-above">Below / From Above</button>
    <button class="effeckt-positional-modal-button" data-effeckt-position="below" data-effeckt-type="slide-in-right">Below / Slide In (right)</button>
    <button class="effeckt-positional-modal-button" data-effeckt-position="below" data-effeckt-type="slide-in-left">Below / Slide In (left)</button>
    <button class="effeckt-positional-modal-button" data-effeckt-position="below" data-effeckt-type="slide-in-top">Below / Slide In (top)</button>
    <button class="effeckt-positional-modal-button" data-effeckt-position="below" data-effeckt-type="slide-in-bottom">Below / Slide In (bottom)</button>

    <button class="effeckt-positional-modal-button" data-effeckt-position="right" data-effeckt-type="from-below">Right / From Below</button>
    <button class="effeckt-positional-modal-button" data-effeckt-position="right" data-effeckt-type="from-above">Right / From Above</button>
    <button class="effeckt-positional-modal-button" data-effeckt-position="right" data-effeckt-type="slide-in-right">Right / Slide In (right)</button>
    <button class="effeckt-positional-modal-button" data-effeckt-position="right" data-effeckt-type="slide-in-left">Right / Slide In (left)</button>
    <button class="effeckt-positional-modal-button" data-effeckt-position="right" data-effeckt-type="slide-in-top">Right / Slide In (top)</button>
    <button class="effeckt-positional-modal-button" data-effeckt-position="right" data-effeckt-type="slide-in-bottom">Right / Slide In (bottom)</button>

    <button class="effeckt-positional-modal-button" data-effeckt-position="left" data-effeckt-type="from-below">Left / From Below</button>
    <button class="effeckt-positional-modal-button" data-effeckt-position="left" data-effeckt-type="from-above">Left / From Above</button>
    <button class="effeckt-positional-modal-button" data-effeckt-position="left" data-effeckt-type="slide-in-right">Left / Slide In (right)</button>
    <button class="effeckt-positional-modal-button" data-effeckt-position="left" data-effeckt-type="slide-in-left">Left / Slide In (left)</button>
    <button class="effeckt-positional-modal-button" data-effeckt-position="left" data-effeckt-type="slide-in-top">Left / Slide In (top)</button>
    <button class="effeckt-positional-modal-button" data-effeckt-position="left" data-effeckt-type="slide-in-bottom">Left / Slide In (bottom)</button>
  </div>

</div>

</section>

<section class="effeckt-demo-buttons">
  <div class="effeckt effeckt-demo-buttons group">

  <header>
    <h2>
      Buttons
      <a href="https://h5bp.org/Effeckt.css/buttons.html">#</a>
    </h2>
    <span class="source">
      Sources:
      <a href="http://lab.hakim.se/ladda/">
        Hakim El Hattab
      </a>
      /
      <a href="http://tympanus.net/codrops/2013/06/13/creative-button-styles/">
        Codrops
      </a>
    </span>
  </header>

  <div class="button-demo-wrap">
    <button class="effeckt-button" data-effeckt-type="expand-right"><span class="label">Expand Right</span> <span class="spinner"></span></button>
  </div>

  <div class="button-demo-wrap">
    <button class="effeckt-button" data-effeckt-type="expand-left"><span class="label">Expand Left</span> <span class="spinner"></span></button>
  </div>

  <div class="button-demo-wrap">
    <button class="effeckt-button" data-effeckt-type="expand-up"><span class="label">Expand Up</span> <span class="spinner"></span></button>
  </div>

  <div class="button-demo-wrap">
    <button class="effeckt-button" data-effeckt-type="expand-down"><span class="label">Expand Down</span> <span class="spinner"></span></button>
  </div>

  <div class="button-demo-wrap">
    <button class="effeckt-button" data-effeckt-type="slide-left"><span class="label">Slide Left</span> <span class="spinner"></span></button>
  </div>

  <div class="button-demo-wrap">
    <button class="effeckt-button" data-effeckt-type="slide-right"><span class="label">Slide Right</span> <span class="spinner"></span></button>
  </div>

  <div class="button-demo-wrap">
    <button class="effeckt-button" data-effeckt-type="slide-up"><span class="label">Slide Up</span> <span class="spinner"></span></button>
  </div>

  <div class="button-demo-wrap">
    <button class="effeckt-button" data-effeckt-type="slide-down"><span class="label">Slide Down</span> <span class="spinner"></span></button>
  </div>

  <div class="button-demo-wrap">
    <button class="effeckt-button" data-effeckt-type="zoom-out"><span class="label">Zoom Out</span> <span class="spinner"></span></button>
  </div>

  <div class="button-demo-wrap">
    <button class="effeckt-button" data-effeckt-type="zoom-in"><span class="label">Zoom in</span> <span class="spinner"></span></button>
  </div>

  <div class="button-demo-wrap">
    <button class="effeckt-button" data-effeckt-type="fill-from-left"><span class="effeckt-button-label">Fill from left</span></button>
  </div>

  <div class="button-demo-wrap">
    <button class="effeckt-button" data-effeckt-type="fill-from-right"><span class="effeckt-button-label">Fill from right</span></button>
  </div>

  <div class="button-demo-wrap">
    <button class="effeckt-button" data-effeckt-type="fill-from-top"><span class="effeckt-button-label">Fill from top</span></button>
  </div>

  <div class="button-demo-wrap">
    <button class="effeckt-button" data-effeckt-type="fill-from-bottom"><span class="effeckt-button-label">Fill from bottom</span></button>
  </div>

  <div class="button-demo-wrap">
    <button class="effeckt-button" data-effeckt-type="icon-slide from-top">
      <span class="effeckt-button-label demo-button-icon">Icon from top</span>
    </button>
  </div>

  <div class="button-demo-wrap">
    <button class="effeckt-button" data-effeckt-type="icon-slide from-bottom">
      <span class="effeckt-button-label demo-button-icon">Icon from bottom</span>
    </button>
  </div>

  <div class="button-demo-wrap">
    <button class="effeckt-button" data-effeckt-type="icon-slide from-left">
      <span class="effeckt-button-label demo-button-icon">Icon from left</span>
    </button>
  </div>

  <div class="button-demo-wrap">
    <button class="effeckt-button" data-effeckt-type="icon-slide from-right">
      <span class="effeckt-button-label demo-button-icon">Icon from right</span>
    </button>
  </div>

  <div class="button-demo-wrap perspective">
    <button class="effeckt-button" data-effeckt-type="3d-rotate-success" data-effeckt-message="It Worked!">
      <span class="effeckt-button-label">3D Success</span>
    </button>
  </div>

  <div class="button-demo-wrap perspective">
    <button class="effeckt-button" data-effeckt-type="3d-rotate-error" data-effeckt-message="Error!">
      <span class="effeckt-button-label">3D Fail</span>
    </button>
  </div>

</div>

</section>

<section class="effeckt-demo-list-items">
  <div class="effeckt effeckt-demo-list-items group">

  <header>
    <h2>
      List Items
      <a href="https://h5bp.org/Effeckt.css/list-items.html">#</a>
    </h2>
    <span class="source">
      Source:
      <a href="http://css-tricks.com/transitional-interfaces-coded/">
        CSS-Tricks
      </a>
    </span>
  </header>

  <div class="effeckt-list-wrap">
    <h4>Gap, Slide In/Slide Out</h4>
    <ul class="effeckt-list" data-effeckt-type="pop-in">
      <li>list item</li>
      <li>list item</li>
      <li>list item</li>
      <li>list item</li>
    </ul>
    <button class="add">Add</button>
    <button class="remove" style="display: none;">Remove</button>
  </div>

  <div class="effeckt-list-wrap">
    <h4>Expand In/Shrink Out</h4>
    <ul class="effeckt-list" data-effeckt-type="expand-in">
      <li>list item</li>
      <li>list item</li>
      <li>list item</li>
      <li>list item</li>
    </ul>
    <button class="add">Add</button>
    <button class="remove" style="display: none;">Remove</button>
  </div>

  <div class="effeckt-list-wrap">
    <h4>Wobble In/Wobble Out</h4>
    <ul class="effeckt-list" data-effeckt-type="wobble-in">
      <li>list item</li>
      <li>list item</li>
      <li>list item</li>
      <li>list item</li>
    </ul>
    <button class="add">Add</button>
    <button class="remove" style="display: none;">Remove</button>
  </div>

  <div class="effeckt-list-wrap">
    <h4>Flip In/Flip Out</h4>
    <ul class="effeckt-list" data-effeckt-type="flip-in">
      <li>list item</li>
      <li>list item</li>
      <li>list item</li>
      <li>list item</li>
    </ul>
    <button class="add">Add</button>
    <button class="remove" style="display: none;">Remove</button>
  </div>

  <div class="effeckt-list-wrap">
    <h4>Fall In/Fall Off</h4>
    <ul class="effeckt-list" data-effeckt-type="fall-in">
      <li>list item</li>
      <li>list item</li>
      <li>list item</li>
      <li>list item</li>
    </ul>
    <button class="add">Add</button>
    <button class="remove" style="display: none;">Remove</button>
  </div>

  <div class="effeckt-list-wrap">
    <h4>From Above/To Above</h4>
    <ul class="effeckt-list" data-effeckt-type="from-above">
      <li>list item</li>
      <li>list item</li>
      <li>list item</li>
      <li>list item</li>
    </ul>
    <button class="add">Add</button>
    <button class="remove" style="display: none;">Remove</button>
  </div>

  <div class="effeckt-list-wrap">
    <h4>Fall In/Wobble Out</h4>
    <ul class="effeckt-list" data-effeckt-type="wobble-out">
      <li>list item</li>
      <li>list item</li>
      <li>list item</li>
      <li>list item</li>
    </ul>
    <button class="add">Add</button>
    <button class="remove" style="display: none;">Remove</button>
  </div>

  <div class="effeckt-list-wrap">
    <h4>Bouncy Slide In/Slide, Fall Off</h4>
    <ul class="effeckt-list" data-effeckt-type="bouncy-slide-in">
      <li>list item</li>
      <li>list item</li>
      <li>list item</li>
      <li>list item</li>
    </ul>
    <button class="add">Add</button>
    <button class="remove" style="display: none;">Remove</button>
  </div>

</div>

</section>

<section class="effeckt-demo-list-scroll">
  <div class="effeckt effeckt-demo-list-scroll group">

  <header>
    <h2>
      List Scroll
      <a href="https://h5bp.org/Effeckt.css/list-scroll.html">#</a>
    </h2>
    <span class="source">
      Source:
      <a href="http://lab.hakim.se/scroll-effects/">
        Hakim El Hattab
      </a>
    </span>
  </header>

  <ul class="effeckt-list-scroll" data-effeckt-type="grow"><li>One</li><li>Two</li><li>Three</li><li>Four</li><li>Five</li><li>Six</li><li>Seven</li><li>Eight</li><li>Nine</li><li>Ten</li><li>Eleven</li><li>Twelve</li><li class="future">Thirteen</li><li class="future">Fourteen</li><li class="future">Fifteen</li><li class="future">Sixteen</li><li class="future">Seventeen</li><li class="future">Eighteen</li><li class="future">Nineteen</li><li class="future">Twenty</li><li class="future">Twentyone</li><li class="future">Twentytwo</li><li class="future">Twentythree</li><li class="future">Twentyfour</li><li class="future">Twentyfive</li><li class="future">Twentysix</li><li class="future">Twentyseven</li><li class="future">Twentyeight</li><li class="future">Twentynine</li><li class="future">Thirty</li><li class="future">Thirtyone</li><li class="future">Thirtytwo</li><li class="future">Thirtythree</li><li class="future">Thirtyfour</li><li class="future">Thirtyfive</li><li class="future">Thirtysix</li><li class="future">Thirtyseven</li><li class="future">Thirtyeight</li><li class="future">Thirtynine</li><li class="future">Forty</li><li class="future">Fortyone</li><li class="future">Fortytwo</li><li class="future">Fortythree</li><li class="future">Fortyfour</li><li class="future">Fortyfive</li><li class="future">Fortysix</li><li class="future">Fortyseven</li><li class="future">Fortyeight</li><li class="future">Fortynine</li><li class="future">Fifty</li><li class="future">Fiftyone</li><li class="future">Fiftytwo</li><li class="future">Fiftythree</li><li class="future">Fiftyfour</li><li class="future">Fiftyfive</li><li class="future">Fiftysix</li><li class="future">Fiftyseven</li><li class="future">Fiftyeight</li><li class="future">Fiftynine</li><li class="future">Sixty</li><li class="future">Sixtyone</li><li class="future">Sixtytwo</li><li class="future">Sixtythree</li><li class="future">Sixtyfour</li><li class="future">Sixtyfive</li><li class="future">Sixtysix</li><li class="future">Sixtyseven</li><li class="future">Sixtyeight</li><li class="future">Sixtynine</li><li class="future">Seventy</li><li class="future">Seventyone</li><li class="future">Seventytwo</li><li class="future">Seventythree</li><li class="future">Seventyfour</li><li class="future">Seventyfive</li><li class="future">Seventysix</li><li class="future">Seventyseven</li><li class="future">Seventyeight</li><li class="future">Seventynine</li><li class="future">Eighty</li><li class="future">Eightyone</li><li class="future">Eightytwo</li><li class="future">Eightythree</li><li class="future">Eightyfour</li><li class="future">Eightyfive</li><li class="future">Eightysix</li><li class="future">Eightyseven</li><li class="future">Eightyeight</li><li class="future">Eightynine</li><li class="future">Ninety</li><li class="future">Ninetyone</li><li class="future">Ninetytwo</li><li class="future">Ninetythree</li><li class="future">Ninetyfour</li><li class="future">Ninetyfive</li><li class="future">Ninetysix</li><li class="future">Ninetyseven</li><li class="future">Ninetyeight</li><li class="future">Ninetynine</li></ul>

  <ul class="effeckt-list-scroll" data-effeckt-type="curl"><li>One</li><li>Two</li><li>Three</li><li>Four</li><li>Five</li><li>Six</li><li>Seven</li><li>Eight</li><li>Nine</li><li>Ten</li><li>Eleven</li><li>Twelve</li><li class="future">Thirteen</li><li class="future">Fourteen</li><li class="future">Fifteen</li><li class="future">Sixteen</li><li class="future">Seventeen</li><li class="future">Eighteen</li><li class="future">Nineteen</li><li class="future">Twenty</li><li class="future">Twentyone</li><li class="future">Twentytwo</li><li class="future">Twentythree</li><li class="future">Twentyfour</li><li class="future">Twentyfive</li><li class="future">Twentysix</li><li class="future">Twentyseven</li><li class="future">Twentyeight</li><li class="future">Twentynine</li><li class="future">Thirty</li><li class="future">Thirtyone</li><li class="future">Thirtytwo</li><li class="future">Thirtythree</li><li class="future">Thirtyfour</li><li class="future">Thirtyfive</li><li class="future">Thirtysix</li><li class="future">Thirtyseven</li><li class="future">Thirtyeight</li><li class="future">Thirtynine</li><li class="future">Forty</li><li class="future">Fortyone</li><li class="future">Fortytwo</li><li class="future">Fortythree</li><li class="future">Fortyfour</li><li class="future">Fortyfive</li><li class="future">Fortysix</li><li class="future">Fortyseven</li><li class="future">Fortyeight</li><li class="future">Fortynine</li><li class="future">Fifty</li><li class="future">Fiftyone</li><li class="future">Fiftytwo</li><li class="future">Fiftythree</li><li class="future">Fiftyfour</li><li class="future">Fiftyfive</li><li class="future">Fiftysix</li><li class="future">Fiftyseven</li><li class="future">Fiftyeight</li><li class="future">Fiftynine</li><li class="future">Sixty</li><li class="future">Sixtyone</li><li class="future">Sixtytwo</li><li class="future">Sixtythree</li><li class="future">Sixtyfour</li><li class="future">Sixtyfive</li><li class="future">Sixtysix</li><li class="future">Sixtyseven</li><li class="future">Sixtyeight</li><li class="future">Sixtynine</li><li class="future">Seventy</li><li class="future">Seventyone</li><li class="future">Seventytwo</li><li class="future">Seventythree</li><li class="future">Seventyfour</li><li class="future">Seventyfive</li><li class="future">Seventysix</li><li class="future">Seventyseven</li><li class="future">Seventyeight</li><li class="future">Seventynine</li><li class="future">Eighty</li><li class="future">Eightyone</li><li class="future">Eightytwo</li><li class="future">Eightythree</li><li class="future">Eightyfour</li><li class="future">Eightyfive</li><li class="future">Eightysix</li><li class="future">Eightyseven</li><li class="future">Eightyeight</li><li class="future">Eightynine</li><li class="future">Ninety</li><li class="future">Ninetyone</li><li class="future">Ninetytwo</li><li class="future">Ninetythree</li><li class="future">Ninetyfour</li><li class="future">Ninetyfive</li><li class="future">Ninetysix</li><li class="future">Ninetyseven</li><li class="future">Ninetyeight</li><li class="future">Ninetynine</li></ul>

  <ul class="effeckt-list-scroll" data-effeckt-type="wave"><li>One</li><li>Two</li><li>Three</li><li>Four</li><li>Five</li><li>Six</li><li>Seven</li><li>Eight</li><li>Nine</li><li>Ten</li><li>Eleven</li><li>Twelve</li><li class="future">Thirteen</li><li class="future">Fourteen</li><li class="future">Fifteen</li><li class="future">Sixteen</li><li class="future">Seventeen</li><li class="future">Eighteen</li><li class="future">Nineteen</li><li class="future">Twenty</li><li class="future">Twentyone</li><li class="future">Twentytwo</li><li class="future">Twentythree</li><li class="future">Twentyfour</li><li class="future">Twentyfive</li><li class="future">Twentysix</li><li class="future">Twentyseven</li><li class="future">Twentyeight</li><li class="future">Twentynine</li><li class="future">Thirty</li><li class="future">Thirtyone</li><li class="future">Thirtytwo</li><li class="future">Thirtythree</li><li class="future">Thirtyfour</li><li class="future">Thirtyfive</li><li class="future">Thirtysix</li><li class="future">Thirtyseven</li><li class="future">Thirtyeight</li><li class="future">Thirtynine</li><li class="future">Forty</li><li class="future">Fortyone</li><li class="future">Fortytwo</li><li class="future">Fortythree</li><li class="future">Fortyfour</li><li class="future">Fortyfive</li><li class="future">Fortysix</li><li class="future">Fortyseven</li><li class="future">Fortyeight</li><li class="future">Fortynine</li><li class="future">Fifty</li><li class="future">Fiftyone</li><li class="future">Fiftytwo</li><li class="future">Fiftythree</li><li class="future">Fiftyfour</li><li class="future">Fiftyfive</li><li class="future">Fiftysix</li><li class="future">Fiftyseven</li><li class="future">Fiftyeight</li><li class="future">Fiftynine</li><li class="future">Sixty</li><li class="future">Sixtyone</li><li class="future">Sixtytwo</li><li class="future">Sixtythree</li><li class="future">Sixtyfour</li><li class="future">Sixtyfive</li><li class="future">Sixtysix</li><li class="future">Sixtyseven</li><li class="future">Sixtyeight</li><li class="future">Sixtynine</li><li class="future">Seventy</li><li class="future">Seventyone</li><li class="future">Seventytwo</li><li class="future">Seventythree</li><li class="future">Seventyfour</li><li class="future">Seventyfive</li><li class="future">Seventysix</li><li class="future">Seventyseven</li><li class="future">Seventyeight</li><li class="future">Seventynine</li><li class="future">Eighty</li><li class="future">Eightyone</li><li class="future">Eightytwo</li><li class="future">Eightythree</li><li class="future">Eightyfour</li><li class="future">Eightyfive</li><li class="future">Eightysix</li><li class="future">Eightyseven</li><li class="future">Eightyeight</li><li class="future">Eightynine</li><li class="future">Ninety</li><li class="future">Ninetyone</li><li class="future">Ninetytwo</li><li class="future">Ninetythree</li><li class="future">Ninetyfour</li><li class="future">Ninetyfive</li><li class="future">Ninetysix</li><li class="future">Ninetyseven</li><li class="future">Ninetyeight</li><li class="future">Ninetynine</li></ul>

  <ul class="effeckt-list-scroll" data-effeckt-type="fan"><li>One</li><li>Two</li><li>Three</li><li>Four</li><li>Five</li><li>Six</li><li>Seven</li><li>Eight</li><li>Nine</li><li>Ten</li><li>Eleven</li><li>Twelve</li><li class="future">Thirteen</li><li class="future">Fourteen</li><li class="future">Fifteen</li><li class="future">Sixteen</li><li class="future">Seventeen</li><li class="future">Eighteen</li><li class="future">Nineteen</li><li class="future">Twenty</li><li class="future">Twentyone</li><li class="future">Twentytwo</li><li class="future">Twentythree</li><li class="future">Twentyfour</li><li class="future">Twentyfive</li><li class="future">Twentysix</li><li class="future">Twentyseven</li><li class="future">Twentyeight</li><li class="future">Twentynine</li><li class="future">Thirty</li><li class="future">Thirtyone</li><li class="future">Thirtytwo</li><li class="future">Thirtythree</li><li class="future">Thirtyfour</li><li class="future">Thirtyfive</li><li class="future">Thirtysix</li><li class="future">Thirtyseven</li><li class="future">Thirtyeight</li><li class="future">Thirtynine</li><li class="future">Forty</li><li class="future">Fortyone</li><li class="future">Fortytwo</li><li class="future">Fortythree</li><li class="future">Fortyfour</li><li class="future">Fortyfive</li><li class="future">Fortysix</li><li class="future">Fortyseven</li><li class="future">Fortyeight</li><li class="future">Fortynine</li><li class="future">Fifty</li><li class="future">Fiftyone</li><li class="future">Fiftytwo</li><li class="future">Fiftythree</li><li class="future">Fiftyfour</li><li class="future">Fiftyfive</li><li class="future">Fiftysix</li><li class="future">Fiftyseven</li><li class="future">Fiftyeight</li><li class="future">Fiftynine</li><li class="future">Sixty</li><li class="future">Sixtyone</li><li class="future">Sixtytwo</li><li class="future">Sixtythree</li><li class="future">Sixtyfour</li><li class="future">Sixtyfive</li><li class="future">Sixtysix</li><li class="future">Sixtyseven</li><li class="future">Sixtyeight</li><li class="future">Sixtynine</li><li class="future">Seventy</li><li class="future">Seventyone</li><li class="future">Seventytwo</li><li class="future">Seventythree</li><li class="future">Seventyfour</li><li class="future">Seventyfive</li><li class="future">Seventysix</li><li class="future">Seventyseven</li><li class="future">Seventyeight</li><li class="future">Seventynine</li><li class="future">Eighty</li><li class="future">Eightyone</li><li class="future">Eightytwo</li><li class="future">Eightythree</li><li class="future">Eightyfour</li><li class="future">Eightyfive</li><li class="future">Eightysix</li><li class="future">Eightyseven</li><li class="future">Eightyeight</li><li class="future">Eightynine</li><li class="future">Ninety</li><li class="future">Ninetyone</li><li class="future">Ninetytwo</li><li class="future">Ninetythree</li><li class="future">Ninetyfour</li><li class="future">Ninetyfive</li><li class="future">Ninetysix</li><li class="future">Ninetyseven</li><li class="future">Ninetyeight</li><li class="future">Ninetynine</li></ul>

  <ul class="effeckt-list-scroll" data-effeckt-type="fade"><li>One</li><li>Two</li><li>Three</li><li>Four</li><li>Five</li><li>Six</li><li>Seven</li><li>Eight</li><li>Nine</li><li>Ten</li><li>Eleven</li><li>Twelve</li><li class="future">Thirteen</li><li class="future">Fourteen</li><li class="future">Fifteen</li><li class="future">Sixteen</li><li class="future">Seventeen</li><li class="future">Eighteen</li><li class="future">Nineteen</li><li class="future">Twenty</li><li class="future">Twentyone</li><li class="future">Twentytwo</li><li class="future">Twentythree</li><li class="future">Twentyfour</li><li class="future">Twentyfive</li><li class="future">Twentysix</li><li class="future">Twentyseven</li><li class="future">Twentyeight</li><li class="future">Twentynine</li><li class="future">Thirty</li><li class="future">Thirtyone</li><li class="future">Thirtytwo</li><li class="future">Thirtythree</li><li class="future">Thirtyfour</li><li class="future">Thirtyfive</li><li class="future">Thirtysix</li><li class="future">Thirtyseven</li><li class="future">Thirtyeight</li><li class="future">Thirtynine</li><li class="future">Forty</li><li class="future">Fortyone</li><li class="future">Fortytwo</li><li class="future">Fortythree</li><li class="future">Fortyfour</li><li class="future">Fortyfive</li><li class="future">Fortysix</li><li class="future">Fortyseven</li><li class="future">Fortyeight</li><li class="future">Fortynine</li><li class="future">Fifty</li><li class="future">Fiftyone</li><li class="future">Fiftytwo</li><li class="future">Fiftythree</li><li class="future">Fiftyfour</li><li class="future">Fiftyfive</li><li class="future">Fiftysix</li><li class="future">Fiftyseven</li><li class="future">Fiftyeight</li><li class="future">Fiftynine</li><li class="future">Sixty</li><li class="future">Sixtyone</li><li class="future">Sixtytwo</li><li class="future">Sixtythree</li><li class="future">Sixtyfour</li><li class="future">Sixtyfive</li><li class="future">Sixtysix</li><li class="future">Sixtyseven</li><li class="future">Sixtyeight</li><li class="future">Sixtynine</li><li class="future">Seventy</li><li class="future">Seventyone</li><li class="future">Seventytwo</li><li class="future">Seventythree</li><li class="future">Seventyfour</li><li class="future">Seventyfive</li><li class="future">Seventysix</li><li class="future">Seventyseven</li><li class="future">Seventyeight</li><li class="future">Seventynine</li><li class="future">Eighty</li><li class="future">Eightyone</li><li class="future">Eightytwo</li><li class="future">Eightythree</li><li class="future">Eightyfour</li><li class="future">Eightyfive</li><li class="future">Eightysix</li><li class="future">Eightyseven</li><li class="future">Eightyeight</li><li class="future">Eightynine</li><li class="future">Ninety</li><li class="future">Ninetyone</li><li class="future">Ninetytwo</li><li class="future">Ninetythree</li><li class="future">Ninetyfour</li><li class="future">Ninetyfive</li><li class="future">Ninetysix</li><li class="future">Ninetyseven</li><li class="future">Ninetyeight</li><li class="future">Ninetynine</li></ul>

  <ul class="effeckt-list-scroll" data-effeckt-type="fly"><li>One</li><li>Two</li><li>Three</li><li>Four</li><li>Five</li><li>Six</li><li>Seven</li><li>Eight</li><li>Nine</li><li>Ten</li><li>Eleven</li><li>Twelve</li><li class="future">Thirteen</li><li class="future">Fourteen</li><li class="future">Fifteen</li><li class="future">Sixteen</li><li class="future">Seventeen</li><li class="future">Eighteen</li><li class="future">Nineteen</li><li class="future">Twenty</li><li class="future">Twentyone</li><li class="future">Twentytwo</li><li class="future">Twentythree</li><li class="future">Twentyfour</li><li class="future">Twentyfive</li><li class="future">Twentysix</li><li class="future">Twentyseven</li><li class="future">Twentyeight</li><li class="future">Twentynine</li><li class="future">Thirty</li><li class="future">Thirtyone</li><li class="future">Thirtytwo</li><li class="future">Thirtythree</li><li class="future">Thirtyfour</li><li class="future">Thirtyfive</li><li class="future">Thirtysix</li><li class="future">Thirtyseven</li><li class="future">Thirtyeight</li><li class="future">Thirtynine</li><li class="future">Forty</li><li class="future">Fortyone</li><li class="future">Fortytwo</li><li class="future">Fortythree</li><li class="future">Fortyfour</li><li class="future">Fortyfive</li><li class="future">Fortysix</li><li class="future">Fortyseven</li><li class="future">Fortyeight</li><li class="future">Fortynine</li><li class="future">Fifty</li><li class="future">Fiftyone</li><li class="future">Fiftytwo</li><li class="future">Fiftythree</li><li class="future">Fiftyfour</li><li class="future">Fiftyfive</li><li class="future">Fiftysix</li><li class="future">Fiftyseven</li><li class="future">Fiftyeight</li><li class="future">Fiftynine</li><li class="future">Sixty</li><li class="future">Sixtyone</li><li class="future">Sixtytwo</li><li class="future">Sixtythree</li><li class="future">Sixtyfour</li><li class="future">Sixtyfive</li><li class="future">Sixtysix</li><li class="future">Sixtyseven</li><li class="future">Sixtyeight</li><li class="future">Sixtynine</li><li class="future">Seventy</li><li class="future">Seventyone</li><li class="future">Seventytwo</li><li class="future">Seventythree</li><li class="future">Seventyfour</li><li class="future">Seventyfive</li><li class="future">Seventysix</li><li class="future">Seventyseven</li><li class="future">Seventyeight</li><li class="future">Seventynine</li><li class="future">Eighty</li><li class="future">Eightyone</li><li class="future">Eightytwo</li><li class="future">Eightythree</li><li class="future">Eightyfour</li><li class="future">Eightyfive</li><li class="future">Eightysix</li><li class="future">Eightyseven</li><li class="future">Eightyeight</li><li class="future">Eightynine</li><li class="future">Ninety</li><li class="future">Ninetyone</li><li class="future">Ninetytwo</li><li class="future">Ninetythree</li><li class="future">Ninetyfour</li><li class="future">Ninetyfive</li><li class="future">Ninetysix</li><li class="future">Ninetyseven</li><li class="future">Ninetyeight</li><li class="future">Ninetynine</li></ul>

  <ul class="effeckt-list-scroll" data-effeckt-type="landing"><li>One</li><li>Two</li><li>Three</li><li>Four</li><li>Five</li><li>Six</li><li>Seven</li><li>Eight</li><li>Nine</li><li>Ten</li><li>Eleven</li><li>Twelve</li><li class="future">Thirteen</li><li class="future">Fourteen</li><li class="future">Fifteen</li><li class="future">Sixteen</li><li class="future">Seventeen</li><li class="future">Eighteen</li><li class="future">Nineteen</li><li class="future">Twenty</li><li class="future">Twentyone</li><li class="future">Twentytwo</li><li class="future">Twentythree</li><li class="future">Twentyfour</li><li class="future">Twentyfive</li><li class="future">Twentysix</li><li class="future">Twentyseven</li><li class="future">Twentyeight</li><li class="future">Twentynine</li><li class="future">Thirty</li><li class="future">Thirtyone</li><li class="future">Thirtytwo</li><li class="future">Thirtythree</li><li class="future">Thirtyfour</li><li class="future">Thirtyfive</li><li class="future">Thirtysix</li><li class="future">Thirtyseven</li><li class="future">Thirtyeight</li><li class="future">Thirtynine</li><li class="future">Forty</li><li class="future">Fortyone</li><li class="future">Fortytwo</li><li class="future">Fortythree</li><li class="future">Fortyfour</li><li class="future">Fortyfive</li><li class="future">Fortysix</li><li class="future">Fortyseven</li><li class="future">Fortyeight</li><li class="future">Fortynine</li><li class="future">Fifty</li><li class="future">Fiftyone</li><li class="future">Fiftytwo</li><li class="future">Fiftythree</li><li class="future">Fiftyfour</li><li class="future">Fiftyfive</li><li class="future">Fiftysix</li><li class="future">Fiftyseven</li><li class="future">Fiftyeight</li><li class="future">Fiftynine</li><li class="future">Sixty</li><li class="future">Sixtyone</li><li class="future">Sixtytwo</li><li class="future">Sixtythree</li><li class="future">Sixtyfour</li><li class="future">Sixtyfive</li><li class="future">Sixtysix</li><li class="future">Sixtyseven</li><li class="future">Sixtyeight</li><li class="future">Sixtynine</li><li class="future">Seventy</li><li class="future">Seventyone</li><li class="future">Seventytwo</li><li class="future">Seventythree</li><li class="future">Seventyfour</li><li class="future">Seventyfive</li><li class="future">Seventysix</li><li class="future">Seventyseven</li><li class="future">Seventyeight</li><li class="future">Seventynine</li><li class="future">Eighty</li><li class="future">Eightyone</li><li class="future">Eightytwo</li><li class="future">Eightythree</li><li class="future">Eightyfour</li><li class="future">Eightyfive</li><li class="future">Eightysix</li><li class="future">Eightyseven</li><li class="future">Eightyeight</li><li class="future">Eightynine</li><li class="future">Ninety</li><li class="future">Ninetyone</li><li class="future">Ninetytwo</li><li class="future">Ninetythree</li><li class="future">Ninetyfour</li><li class="future">Ninetyfive</li><li class="future">Ninetysix</li><li class="future">Ninetyseven</li><li class="future">Ninetyeight</li><li class="future">Ninetynine</li></ul>

  <ul class="effeckt-list-scroll" data-effeckt-type="swing-front"><li>One</li><li>Two</li><li>Three</li><li>Four</li><li>Five</li><li>Six</li><li>Seven</li><li>Eight</li><li>Nine</li><li>Ten</li><li>Eleven</li><li>Twelve</li><li class="future">Thirteen</li><li class="future">Fourteen</li><li class="future">Fifteen</li><li class="future">Sixteen</li><li class="future">Seventeen</li><li class="future">Eighteen</li><li class="future">Nineteen</li><li class="future">Twenty</li><li class="future">Twentyone</li><li class="future">Twentytwo</li><li class="future">Twentythree</li><li class="future">Twentyfour</li><li class="future">Twentyfive</li><li class="future">Twentysix</li><li class="future">Twentyseven</li><li class="future">Twentyeight</li><li class="future">Twentynine</li><li class="future">Thirty</li><li class="future">Thirtyone</li><li class="future">Thirtytwo</li><li class="future">Thirtythree</li><li class="future">Thirtyfour</li><li class="future">Thirtyfive</li><li class="future">Thirtysix</li><li class="future">Thirtyseven</li><li class="future">Thirtyeight</li><li class="future">Thirtynine</li><li class="future">Forty</li><li class="future">Fortyone</li><li class="future">Fortytwo</li><li class="future">Fortythree</li><li class="future">Fortyfour</li><li class="future">Fortyfive</li><li class="future">Fortysix</li><li class="future">Fortyseven</li><li class="future">Fortyeight</li><li class="future">Fortynine</li><li class="future">Fifty</li><li class="future">Fiftyone</li><li class="future">Fiftytwo</li><li class="future">Fiftythree</li><li class="future">Fiftyfour</li><li class="future">Fiftyfive</li><li class="future">Fiftysix</li><li class="future">Fiftyseven</li><li class="future">Fiftyeight</li><li class="future">Fiftynine</li><li class="future">Sixty</li><li class="future">Sixtyone</li><li class="future">Sixtytwo</li><li class="future">Sixtythree</li><li class="future">Sixtyfour</li><li class="future">Sixtyfive</li><li class="future">Sixtysix</li><li class="future">Sixtyseven</li><li class="future">Sixtyeight</li><li class="future">Sixtynine</li><li class="future">Seventy</li><li class="future">Seventyone</li><li class="future">Seventytwo</li><li class="future">Seventythree</li><li class="future">Seventyfour</li><li class="future">Seventyfive</li><li class="future">Seventysix</li><li class="future">Seventyseven</li><li class="future">Seventyeight</li><li class="future">Seventynine</li><li class="future">Eighty</li><li class="future">Eightyone</li><li class="future">Eightytwo</li><li class="future">Eightythree</li><li class="future">Eightyfour</li><li class="future">Eightyfive</li><li class="future">Eightysix</li><li class="future">Eightyseven</li><li class="future">Eightyeight</li><li class="future">Eightynine</li><li class="future">Ninety</li><li class="future">Ninetyone</li><li class="future">Ninetytwo</li><li class="future">Ninetythree</li><li class="future">Ninetyfour</li><li class="future">Ninetyfive</li><li class="future">Ninetysix</li><li class="future">Ninetyseven</li><li class="future">Ninetyeight</li><li class="future">Ninetynine</li></ul>

  <ul class="effeckt-list-scroll" data-effeckt-type="swing-back"><li>One</li><li>Two</li><li>Three</li><li>Four</li><li>Five</li><li>Six</li><li>Seven</li><li>Eight</li><li>Nine</li><li>Ten</li><li>Eleven</li><li>Twelve</li><li class="future">Thirteen</li><li class="future">Fourteen</li><li class="future">Fifteen</li><li class="future">Sixteen</li><li class="future">Seventeen</li><li class="future">Eighteen</li><li class="future">Nineteen</li><li class="future">Twenty</li><li class="future">Twentyone</li><li class="future">Twentytwo</li><li class="future">Twentythree</li><li class="future">Twentyfour</li><li class="future">Twentyfive</li><li class="future">Twentysix</li><li class="future">Twentyseven</li><li class="future">Twentyeight</li><li class="future">Twentynine</li><li class="future">Thirty</li><li class="future">Thirtyone</li><li class="future">Thirtytwo</li><li class="future">Thirtythree</li><li class="future">Thirtyfour</li><li class="future">Thirtyfive</li><li class="future">Thirtysix</li><li class="future">Thirtyseven</li><li class="future">Thirtyeight</li><li class="future">Thirtynine</li><li class="future">Forty</li><li class="future">Fortyone</li><li class="future">Fortytwo</li><li class="future">Fortythree</li><li class="future">Fortyfour</li><li class="future">Fortyfive</li><li class="future">Fortysix</li><li class="future">Fortyseven</li><li class="future">Fortyeight</li><li class="future">Fortynine</li><li class="future">Fifty</li><li class="future">Fiftyone</li><li class="future">Fiftytwo</li><li class="future">Fiftythree</li><li class="future">Fiftyfour</li><li class="future">Fiftyfive</li><li class="future">Fiftysix</li><li class="future">Fiftyseven</li><li class="future">Fiftyeight</li><li class="future">Fiftynine</li><li class="future">Sixty</li><li class="future">Sixtyone</li><li class="future">Sixtytwo</li><li class="future">Sixtythree</li><li class="future">Sixtyfour</li><li class="future">Sixtyfive</li><li class="future">Sixtysix</li><li class="future">Sixtyseven</li><li class="future">Sixtyeight</li><li class="future">Sixtynine</li><li class="future">Seventy</li><li class="future">Seventyone</li><li class="future">Seventytwo</li><li class="future">Seventythree</li><li class="future">Seventyfour</li><li class="future">Seventyfive</li><li class="future">Seventysix</li><li class="future">Seventyseven</li><li class="future">Seventyeight</li><li class="future">Seventynine</li><li class="future">Eighty</li><li class="future">Eightyone</li><li class="future">Eightytwo</li><li class="future">Eightythree</li><li class="future">Eightyfour</li><li class="future">Eightyfive</li><li class="future">Eightysix</li><li class="future">Eightyseven</li><li class="future">Eightyeight</li><li class="future">Eightynine</li><li class="future">Ninety</li><li class="future">Ninetyone</li><li class="future">Ninetytwo</li><li class="future">Ninetythree</li><li class="future">Ninetyfour</li><li class="future">Ninetyfive</li><li class="future">Ninetysix</li><li class="future">Ninetyseven</li><li class="future">Ninetyeight</li><li class="future">Ninetynine</li></ul>

  <ul class="effeckt-list-scroll" data-effeckt-type="twist"><li>One</li><li>Two</li><li>Three</li><li>Four</li><li>Five</li><li>Six</li><li>Seven</li><li>Eight</li><li>Nine</li><li>Ten</li><li>Eleven</li><li>Twelve</li><li class="future">Thirteen</li><li class="future">Fourteen</li><li class="future">Fifteen</li><li class="future">Sixteen</li><li class="future">Seventeen</li><li class="future">Eighteen</li><li class="future">Nineteen</li><li class="future">Twenty</li><li class="future">Twentyone</li><li class="future">Twentytwo</li><li class="future">Twentythree</li><li class="future">Twentyfour</li><li class="future">Twentyfive</li><li class="future">Twentysix</li><li class="future">Twentyseven</li><li class="future">Twentyeight</li><li class="future">Twentynine</li><li class="future">Thirty</li><li class="future">Thirtyone</li><li class="future">Thirtytwo</li><li class="future">Thirtythree</li><li class="future">Thirtyfour</li><li class="future">Thirtyfive</li><li class="future">Thirtysix</li><li class="future">Thirtyseven</li><li class="future">Thirtyeight</li><li class="future">Thirtynine</li><li class="future">Forty</li><li class="future">Fortyone</li><li class="future">Fortytwo</li><li class="future">Fortythree</li><li class="future">Fortyfour</li><li class="future">Fortyfive</li><li class="future">Fortysix</li><li class="future">Fortyseven</li><li class="future">Fortyeight</li><li class="future">Fortynine</li><li class="future">Fifty</li><li class="future">Fiftyone</li><li class="future">Fiftytwo</li><li class="future">Fiftythree</li><li class="future">Fiftyfour</li><li class="future">Fiftyfive</li><li class="future">Fiftysix</li><li class="future">Fiftyseven</li><li class="future">Fiftyeight</li><li class="future">Fiftynine</li><li class="future">Sixty</li><li class="future">Sixtyone</li><li class="future">Sixtytwo</li><li class="future">Sixtythree</li><li class="future">Sixtyfour</li><li class="future">Sixtyfive</li><li class="future">Sixtysix</li><li class="future">Sixtyseven</li><li class="future">Sixtyeight</li><li class="future">Sixtynine</li><li class="future">Seventy</li><li class="future">Seventyone</li><li class="future">Seventytwo</li><li class="future">Seventythree</li><li class="future">Seventyfour</li><li class="future">Seventyfive</li><li class="future">Seventysix</li><li class="future">Seventyseven</li><li class="future">Seventyeight</li><li class="future">Seventynine</li><li class="future">Eighty</li><li class="future">Eightyone</li><li class="future">Eightytwo</li><li class="future">Eightythree</li><li class="future">Eightyfour</li><li class="future">Eightyfive</li><li class="future">Eightysix</li><li class="future">Eightyseven</li><li class="future">Eightyeight</li><li class="future">Eightynine</li><li class="future">Ninety</li><li class="future">Ninetyone</li><li class="future">Ninetytwo</li><li class="future">Ninetythree</li><li class="future">Ninetyfour</li><li class="future">Ninetyfive</li><li class="future">Ninetysix</li><li class="future">Ninetyseven</li><li class="future">Ninetyeight</li><li class="future">Ninetynine</li></ul>

  <ul class="effeckt-list-scroll" data-effeckt-type="door"><li>One</li><li>Two</li><li>Three</li><li>Four</li><li>Five</li><li>Six</li><li>Seven</li><li>Eight</li><li>Nine</li><li>Ten</li><li>Eleven</li><li>Twelve</li><li class="future">Thirteen</li><li class="future">Fourteen</li><li class="future">Fifteen</li><li class="future">Sixteen</li><li class="future">Seventeen</li><li class="future">Eighteen</li><li class="future">Nineteen</li><li class="future">Twenty</li><li class="future">Twentyone</li><li class="future">Twentytwo</li><li class="future">Twentythree</li><li class="future">Twentyfour</li><li class="future">Twentyfive</li><li class="future">Twentysix</li><li class="future">Twentyseven</li><li class="future">Twentyeight</li><li class="future">Twentynine</li><li class="future">Thirty</li><li class="future">Thirtyone</li><li class="future">Thirtytwo</li><li class="future">Thirtythree</li><li class="future">Thirtyfour</li><li class="future">Thirtyfive</li><li class="future">Thirtysix</li><li class="future">Thirtyseven</li><li class="future">Thirtyeight</li><li class="future">Thirtynine</li><li class="future">Forty</li><li class="future">Fortyone</li><li class="future">Fortytwo</li><li class="future">Fortythree</li><li class="future">Fortyfour</li><li class="future">Fortyfive</li><li class="future">Fortysix</li><li class="future">Fortyseven</li><li class="future">Fortyeight</li><li class="future">Fortynine</li><li class="future">Fifty</li><li class="future">Fiftyone</li><li class="future">Fiftytwo</li><li class="future">Fiftythree</li><li class="future">Fiftyfour</li><li class="future">Fiftyfive</li><li class="future">Fiftysix</li><li class="future">Fiftyseven</li><li class="future">Fiftyeight</li><li class="future">Fiftynine</li><li class="future">Sixty</li><li class="future">Sixtyone</li><li class="future">Sixtytwo</li><li class="future">Sixtythree</li><li class="future">Sixtyfour</li><li class="future">Sixtyfive</li><li class="future">Sixtysix</li><li class="future">Sixtyseven</li><li class="future">Sixtyeight</li><li class="future">Sixtynine</li><li class="future">Seventy</li><li class="future">Seventyone</li><li class="future">Seventytwo</li><li class="future">Seventythree</li><li class="future">Seventyfour</li><li class="future">Seventyfive</li><li class="future">Seventysix</li><li class="future">Seventyseven</li><li class="future">Seventyeight</li><li class="future">Seventynine</li><li class="future">Eighty</li><li class="future">Eightyone</li><li class="future">Eightytwo</li><li class="future">Eightythree</li><li class="future">Eightyfour</li><li class="future">Eightyfive</li><li class="future">Eightysix</li><li class="future">Eightyseven</li><li class="future">Eightyeight</li><li class="future">Eightynine</li><li class="future">Ninety</li><li class="future">Ninetyone</li><li class="future">Ninetytwo</li><li class="future">Ninetythree</li><li class="future">Ninetyfour</li><li class="future">Ninetyfive</li><li class="future">Ninetysix</li><li class="future">Ninetyseven</li><li class="future">Ninetyeight</li><li class="future">Ninetynine</li></ul>

  <ul class="effeckt-list-scroll" data-effeckt-type="climb"><li>One</li><li>Two</li><li>Three</li><li>Four</li><li>Five</li><li>Six</li><li>Seven</li><li>Eight</li><li>Nine</li><li>Ten</li><li>Eleven</li><li>Twelve</li><li class="future">Thirteen</li><li class="future">Fourteen</li><li class="future">Fifteen</li><li class="future">Sixteen</li><li class="future">Seventeen</li><li class="future">Eighteen</li><li class="future">Nineteen</li><li class="future">Twenty</li><li class="future">Twentyone</li><li class="future">Twentytwo</li><li class="future">Twentythree</li><li class="future">Twentyfour</li><li class="future">Twentyfive</li><li class="future">Twentysix</li><li class="future">Twentyseven</li><li class="future">Twentyeight</li><li class="future">Twentynine</li><li class="future">Thirty</li><li class="future">Thirtyone</li><li class="future">Thirtytwo</li><li class="future">Thirtythree</li><li class="future">Thirtyfour</li><li class="future">Thirtyfive</li><li class="future">Thirtysix</li><li class="future">Thirtyseven</li><li class="future">Thirtyeight</li><li class="future">Thirtynine</li><li class="future">Forty</li><li class="future">Fortyone</li><li class="future">Fortytwo</li><li class="future">Fortythree</li><li class="future">Fortyfour</li><li class="future">Fortyfive</li><li class="future">Fortysix</li><li class="future">Fortyseven</li><li class="future">Fortyeight</li><li class="future">Fortynine</li><li class="future">Fifty</li><li class="future">Fiftyone</li><li class="future">Fiftytwo</li><li class="future">Fiftythree</li><li class="future">Fiftyfour</li><li class="future">Fiftyfive</li><li class="future">Fiftysix</li><li class="future">Fiftyseven</li><li class="future">Fiftyeight</li><li class="future">Fiftynine</li><li class="future">Sixty</li><li class="future">Sixtyone</li><li class="future">Sixtytwo</li><li class="future">Sixtythree</li><li class="future">Sixtyfour</li><li class="future">Sixtyfive</li><li class="future">Sixtysix</li><li class="future">Sixtyseven</li><li class="future">Sixtyeight</li><li class="future">Sixtynine</li><li class="future">Seventy</li><li class="future">Seventyone</li><li class="future">Seventytwo</li><li class="future">Seventythree</li><li class="future">Seventyfour</li><li class="future">Seventyfive</li><li class="future">Seventysix</li><li class="future">Seventyseven</li><li class="future">Seventyeight</li><li class="future">Seventynine</li><li class="future">Eighty</li><li class="future">Eightyone</li><li class="future">Eightytwo</li><li class="future">Eightythree</li><li class="future">Eightyfour</li><li class="future">Eightyfive</li><li class="future">Eightysix</li><li class="future">Eightyseven</li><li class="future">Eightyeight</li><li class="future">Eightynine</li><li class="future">Ninety</li><li class="future">Ninetyone</li><li class="future">Ninetytwo</li><li class="future">Ninetythree</li><li class="future">Ninetyfour</li><li class="future">Ninetyfive</li><li class="future">Ninetysix</li><li class="future">Ninetyseven</li><li class="future">Ninetyeight</li><li class="future">Ninetynine</li></ul>

</div>
</section>

<section class="effeckt-demo-off-screen-nav">
  <div class="effeckt effeckt-demo-modals">

  <header>
    <h2>
      Off Screen Nav
      <a href="https://h5bp.org/Effeckt.css/off-screen-navs.html">#</a>
    </h2>
    <!-- <span class="source">
      ...
    </span> -->
  </header>

  <div class="button-group">
  <button class="off-screen-nav-button" data-effeckt-type="effeckt-off-screen-nav-left-overlay">Left Overlay</button>
  <button class="off-screen-nav-button" data-effeckt-type="effeckt-off-screen-nav-left-reveal">Left Reveal</button>
  <button class="off-screen-nav-button" data-effeckt-type="effeckt-off-screen-nav-left-push">Left Push</button>
  <button class="off-screen-nav-button" data-effeckt-type="effeckt-off-screen-nav-left-bounce" data-effeckt-needs-hide-class="true">Left Bounce</button>
  <button class="off-screen-nav-button" data-effeckt-type="effeckt-off-screen-nav-left-bounce-out" data-effeckt-needs-hide-class="true">Left Bounce Out</button>
  <button class="off-screen-nav-button" data-effeckt-type="effeckt-off-screen-nav-left-squeeze">Left Squeeze</button>
  <button class="off-screen-nav-button" data-effeckt-type="effeckt-off-screen-nav-left-rotate" data-threedee="true">Left Rotate</button>
  <button class="off-screen-nav-button" data-effeckt-type="effeckt-off-screen-nav-right-overlay">Right Overlay</button>
  <button class="off-screen-nav-button" data-effeckt-type="effeckt-off-screen-nav-right-reveal">Right Reveal</button>
  <button class="off-screen-nav-button" data-effeckt-type="effeckt-off-screen-nav-right-push">Right Push</button>
  <button class="off-screen-nav-button" data-effeckt-type="effeckt-off-screen-nav-right-bounce" data-effeckt-needs-hide-class="true">Right Bounce</button>
  <button class="off-screen-nav-button" data-effeckt-type="effeckt-off-screen-nav-right-bounce-out" data-effeckt-needs-hide-class="true">Right Bounce Out</button>
  <button class="off-screen-nav-button" data-effeckt-type="effeckt-off-screen-nav-right-squeeze">Right Squeeze</button>
  <button class="off-screen-nav-button" data-effeckt-type="effeckt-off-screen-nav-right-rotate" data-threedee="true">Right Rotate</button>
  <button class="off-screen-nav-button" data-effeckt-type="effeckt-off-screen-nav-top-overlay">Top Overlay</button>
  <button class="off-screen-nav-button" data-effeckt-type="effeckt-off-screen-nav-push-top">Top Push</button>
  <button class="off-screen-nav-button" data-effeckt-type="effeckt-off-screen-nav-top-bounce" data-effeckt-needs-hide-class="true">Top Bounce</button>
  <button class="off-screen-nav-button" data-effeckt-type="effeckt-off-screen-nav-top-bounce-out" data-effeckt-needs-hide-class="true">Top Bounce Out</button>
  <button class="off-screen-nav-button" data-effeckt-type="effeckt-off-screen-nav-top-card-deck">Top Card Deck</button>
  <button class="off-screen-nav-button" data-effeckt-type="effeckt-off-screen-nav-top-rotate" data-threedee="true">Top Rotate</button>
  <button class="off-screen-nav-button" data-effeckt-type="effeckt-off-screen-nav-bottom-overlay">Bottom Overlay</button>
  <button class="off-screen-nav-button" data-effeckt-type="effeckt-off-screen-nav-push-bottom">Bottom Push</button>
  <button class="off-screen-nav-button" data-effeckt-type="effeckt-off-screen-nav-bottom-bounce" data-effeckt-needs-hide-class="true">Bottom Bounce</button>
  <button class="off-screen-nav-button" data-effeckt-type="effeckt-off-screen-nav-bottom-bounce-out" data-effeckt-needs-hide-class="true">Bottom Bounce Out</button>
  <button class="off-screen-nav-button" data-effeckt-type="effeckt-off-screen-nav-bottom-card-deck">Bottom Card Deck</button>
  <button class="off-screen-nav-button" data-effeckt-type="effeckt-off-screen-nav-bottom-rotate" data-threedee="true">Bottom Rotate</button>
  <button class="off-screen-nav-button" data-effeckt-type="effeckt-off-screen-nav-minimize-reaveal" data-threedee="true" data-effeckt-needs-hide-class="true">Minimize then reveal</button>
  </div>

</div>

</section>

<section class="effeckt-demo-page-transitons">
  <div class="effeckt effeckt-demo-modals">

  <header>
    <h2>
      Page Transitions
      <a href="https://h5bp.org/Effeckt.css/page-transitions.html">#</a>
    </h2>
    <!-- <span class="source">
      ...
    </span> -->
  </header>

  <button class="effeckt-page-transition-button" data-effeckt-transition-in="slide-from-left" data-effeckt-transition-out="slide-to-right" data-effeckt-transition-page="page-2">Slide From Left</button>

  <button class="effeckt-page-transition-button" data-effeckt-transition-in="slide-from-right" data-effeckt-transition-out="slide-to-left" data-effeckt-transition-page="page-3">Slide From Right</button>

  <button class="effeckt-page-transition-button" data-effeckt-transition-in="slide-from-bottom" data-effeckt-transition-out="slide-to-top" data-effeckt-transition-page="page-4">Slide From Bottom</button>

  <button class="effeckt-page-transition-button" data-effeckt-transition-in="slide-from-top" data-effeckt-transition-out="slide-to-bottom" data-effeckt-transition-page="page-5">Slide From Top</button>


  <button class="effeckt-page-transition-button" data-effeckt-transition-in="scale-up-from-behind" data-effeckt-transition-out="scale-up-to-front" data-effeckt-transition-page="page-5" data-effeckt-needs-perspective="true">Scale Up From Behind</button>

  <button class="effeckt-page-transition-button" data-effeckt-transition-in="scale-down-from-front" data-effeckt-transition-out="scale-down-to-behind" data-effeckt-transition-page="page-5" data-effeckt-needs-perspective="true">Scale Down From Front</button>


  <button class="effeckt-page-transition-button" data-effeckt-transition-in="scale-down-slide-from-right" data-effeckt-transition-out="scale-down-slide-to-left" data-effeckt-transition-page="page-5" data-effeckt-needs-perspective="true">Scale Down Slide From Right</button>

  <button class="effeckt-page-transition-button" data-effeckt-transition-in="scale-down-slide-from-left" data-effeckt-transition-out="scale-down-slide-to-right" data-effeckt-transition-page="page-5" data-effeckt-needs-perspective="true">Scale Down Slide From Left</button>

  <button class="effeckt-page-transition-button" data-effeckt-transition-in="scale-down-slide-from-top" data-effeckt-transition-out="scale-down-slide-to-bottom" data-effeckt-transition-page="page-5" data-effeckt-needs-perspective="true">Scale Down Slide From Top</button>

  <button class="effeckt-page-transition-button" data-effeckt-transition-in="scale-down-slide-from-bottom" data-effeckt-transition-out="scale-down-slide-to-top" data-effeckt-transition-page="page-5" data-effeckt-needs-perspective="true">Scale Down Slide From Bottom</button>


  <button class="effeckt-page-transition-button" data-effeckt-transition-in="rotate-to-front" data-effeckt-transition-out="rotate-to-behind" data-effeckt-transition-page="page-5" data-effeckt-needs-perspective="true">Rotate to Behind</button>


  <button class="effeckt-page-transition-button" data-effeckt-transition-in="flip-to-right-front" data-effeckt-transition-out="flip-to-right-back" data-effeckt-transition-page="page-5" data-effeckt-needs-perspective="true">Flip to Right</button>

  <button class="effeckt-page-transition-button" data-effeckt-transition-in="flip-to-left-front" data-effeckt-transition-out="flip-to-left-back" data-effeckt-transition-page="page-5" data-effeckt-needs-perspective="true">Flip to Left</button>

  <button class="effeckt-page-transition-button" data-effeckt-transition-in="flip-to-top-front" data-effeckt-transition-out="flip-to-top-back" data-effeckt-transition-page="page-5" data-effeckt-needs-perspective="true">Flip to Top</button>

  <button class="effeckt-page-transition-button" data-effeckt-transition-in="flip-to-bottom-front" data-effeckt-transition-out="flip-to-bottom-back" data-effeckt-transition-page="page-5" data-effeckt-needs-perspective="true">Flip to Bottom</button>

</div>

</section>

<section class="effeckt-demo-captions">
  <div class="effeckt effeckt-captions group">

  <header>
    <h2>
      Captions
      <a href="https://h5bp.org/Effeckt.css/captions.html">#</a>
    </h2>
  </header>

  <div class="all-captions-wrap">

  <!-- Appear -->
  <figure class="effeckt-caption" data-effeckt-type="quarter-appear">
    <img src="./demo_files/300x200" alt="">
    <figcaption>
      <div class="effeckt-figcaption-wrap">
        <h3>Appear</h3>
        <p>Lorem ipsum dolar.</p>
      </div>
    </figcaption>
  </figure>

  <!-- Quarter Slide Up -->
  <figure class="effeckt-caption" data-effeckt-type="quarter-slide-up">
    <img src="./demo_files/300x200" alt="">
    <figcaption>
      <div class="effeckt-figcaption-wrap">
        <h3>Quarter Slide Up</h3>
        <p>Lorem ipsum dolar.</p>
      </div>
    </figcaption>
  </figure>

  <!-- Quarter Slide Side -->
  <figure class="effeckt-caption" data-effeckt-type="quarter-slide-side">
    <img src="./demo_files/300x200" alt="">
    <figcaption>
      <div class="effeckt-figcaption-wrap">
        <h3>Quarter Slide Side</h3>
        <p>Lorem ipsum dolar.</p>
      </div>
    </figcaption>
  </figure>

  <!-- Quarter Fall in -->
  <figure class="effeckt-caption" data-effeckt-type="quarter-fall-in">
    <img src="./demo_files/300x200" alt="">
    <figcaption>
      <div class="effeckt-figcaption-wrap">
        <h3>Quarter Fall in</h3>
        <p>Lorem ipsum dolar.</p>
      </div>
    </figcaption>
  </figure>

  <!-- 3Quarter Two Step -->
  <figure class="effeckt-caption" data-effeckt-type="quarter-two-step">
    <img src="./demo_files/300x200" alt="">
    <figcaption>
      <div class="effeckt-figcaption-wrap">
        <h3>Quarter Two-step</h3>
        <p>Lorem ipsum dolar.</p>
      </div>
    </figcaption>
  </figure>

  <!-- Quarter Caption Zoom -->
  <figure class="effeckt-caption" data-effeckt-type="quarter-zoom">
    <img src="./demo_files/300x200" alt="">
    <figcaption>
      <div class="effeckt-figcaption-wrap">
        <h3>Quarter Caption Zoom</h3>
        <p>Lorem ipsum dolar.</p>
      </div>
    </figcaption>
  </figure>

  <!-- Cover Fade -->
  <figure class="effeckt-caption" data-effeckt-type="cover-fade">
    <img src="./demo_files/300x200" alt="">
    <figcaption>
      <div class="effeckt-figcaption-wrap">
        <h3>Cover Fade</h3>
        <p>Lorem ipsum dolar.</p>
      </div>
    </figcaption>
  </figure>

  <!-- Cover Push Right -->
  <figure class="effeckt-caption" data-effeckt-type="cover-push-right">
    <img src="./demo_files/300x200" alt="">
    <figcaption>
      <div class="effeckt-figcaption-wrap">
        <h3>Cover Push Right</h3>
        <p>Lorem ipsum dolar.</p>
      </div>
    </figcaption>
  </figure>

  <!-- Revolving Door Left -->
  <figure class="effeckt-caption" data-effeckt-type="revolving-door-left">
    <img src="./demo_files/300x200" alt="">
    <figcaption>
      <div class="effeckt-figcaption-wrap">
        <h3>Revolving Door</h3>
        <p>Lorem ipsum dolar.</p>
      </div>
    </figcaption>
  </figure>

  <!-- Revolving Door Right -->
  <figure class="effeckt-caption" data-effeckt-type="revolving-door-right">
    <img src="./demo_files/300x200" alt="">
    <figcaption>
      <div class="effeckt-figcaption-wrap">
        <h3>Revolving Door Inverse</h3>
        <p>Lorem ipsum dolar.</p>
      </div>
    </figcaption>
  </figure>

  <!-- Revolving Door Top -->
  <figure class="effeckt-caption" data-effeckt-type="revolving-door-top">
    <img src="./demo_files/300x200" alt="">
    <figcaption>
      <div class="effeckt-figcaption-wrap">
        <h3>Revolving Door</h3>
        <p>Lorem ipsum dolar.</p>
      </div>
    </figcaption>
  </figure>

  <!-- Revolving Door Bottom -->
  <figure class="effeckt-caption" data-effeckt-type="revolving-door-bottom">
    <img src="./demo_files/300x200" alt="">
    <figcaption>
      <div class="effeckt-figcaption-wrap">
        <h3>Revolving Door Inverse</h3>
        <p>Lorem ipsum dolar.</p>
      </div>
    </figcaption>
  </figure>

  <!-- Cover Slide Top -->
  <figure class="effeckt-caption" data-effeckt-type="cover-slide-top">
    <img src="./demo_files/300x200" alt="">
    <figcaption>
      <div class="effeckt-figcaption-wrap">
        <h3>Cover Slide Top</h3>
        <p>Lorem ipsum dolar.</p>
      </div>
    </figcaption>
  </figure>

  <!-- Caption Offset -->
  <figure class="effeckt-caption" data-effeckt-type="offset">
    <img src="./demo_files/300x200" alt="">
    <figcaption>
      <div class="effeckt-figcaption-wrap">
        <h3>Caption Offset</h3>
        <p>Lorem ipsum dolar.</p>
      </div>
    </figcaption>
  </figure>

  <!-- Guillotine Reverse -->
  <figure class="effeckt-caption" data-effeckt-type="guillotine-reverse">
    <img src="./demo_files/300x200" alt="">
    <figcaption>
      <div class="effeckt-figcaption-wrap">
        <h3>Guillotine Reverse</h3>
        <p>Lorem ipsum dolar.</p>
      </div>
    </figcaption>
  </figure>

  <!-- Half Slide -->
  <figure class="effeckt-caption" data-effeckt-type="half-slide">
    <img src="./demo_files/300x200" alt="">
    <figcaption>
      <div class="effeckt-figcaption-wrap">
        <h3>Half Slide</h3>
        <p>Lorem ipsum dolar.</p>
      </div>
    </figcaption>
  </figure>

  <!-- Sqkwoosh -->
  <figure class="effeckt-caption" data-effeckt-type="sqkwoosh">
    <img src="./demo_files/300x200" alt="">
    <figcaption>
      <div class="effeckt-figcaption-wrap">
        <h3>Sqkwoosh</h3>
        <p>Lorem ipsum dolar.</p>
      </div>
    </figcaption>
  </figure>

  <!-- Tunnel -->
  <figure class="effeckt-caption" data-effeckt-type="tunnel">
    <img src="./demo_files/300x200" alt="">
    <figcaption>
      <div class="effeckt-figcaption-wrap">
        <h3>Tunnel</h3>
        <p>Lorem ipsum dolar.</p>
      </div>
    </figcaption>
  </figure>
  
  </div>

</div>

</section>

<section class="effeckt-demo-tooltips">
  <div class="effeckt effeckt-demo-tooltips">

  <header>
    <h2>
      Tooltips
      <a href="https://h5bp.org/Effeckt.css/tooltips.html">#</a>
    </h2>
    <!-- <span class="source">
      ...
    </span> -->
  </header>

  <p>Lorem ipsum <a href="https://h5bp.org/Effeckt.css/#0" data-effeckt-tooltip-text="I appear on top." class="effeckt-tooltip" data-effeckt-type="bubble" data-effeckt-position="top">example one</a> dolor sit amet, consectetur adipisicing elit. Unde, dolor, <a href="https://h5bp.org/Effeckt.css/#0" data-effeckt-tooltip-text="I appear on bottom." class="effeckt-tooltip" data-effeckt-type="bubble" data-effeckt-position="bottom">example two</a> ipsa, dolorem officia expedita error <a href="https://h5bp.org/Effeckt.css/#0" data-effeckt-tooltip-text="I appear on right." class="effeckt-tooltip" data-effeckt-type="bubble" data-effeckt-position="right">example three</a> vel blanditiis tempore molestias voluptatem ducimus porro <a href="https://h5bp.org/Effeckt.css/#0" data-effeckt-tooltip-text="I appear on left." class="effeckt-tooltip" data-effeckt-type="bubble" data-effeckt-position="left">example four</a> recusandae quo ex quisquam voluptas iure! Amet, dignissimos.</p>

</div>
</section>

<section class="effeckt-demo-form-elements">
  <div class="effeckt effeckt-demo-form-elements">

  <header>
    <h2>
      Form Elements
      <a href="https://h5bp.org/Effeckt.css/form-elements.html">#</a>
    </h2>
    <!-- <span class="source">
      ...
    </span> -->
  </header>

  <!-- Checkboxes -->
  <!-- http://codepen.io/uquaisse/pen/Jqhte -->
  <h3>Checkbox</h3>
  <input type="checkbox" class="effeckt-ckbox-ios7">
  <input type="checkbox" class="effeckt-ckbox-ios7" checked="">

  <!-- Radios -->
  <!-- http://codepen.io/uquaisse/pen/Jqhte -->
  <h3>Radio</h3>
  <input type="radio" name="group" class="effeckt-rdio-ios7">
  <input type="radio" name="group" class="effeckt-rdio-ios7" checked="">
  <input type="radio" name="group" class="effeckt-rdio-ios7">

  <!-- Android Checkboxes -->

  <h3>Android Checkbox</h3>
  <input type="checkbox" class="effeckt-ckbox-android">
  <input type="checkbox" class="effeckt-ckbox-android" checked="">

  <!-- Android Radios -->

  <h3>Android Radio</h3>
  <input type="radio" name="group2" class="effeckt-rdio-android">
  <input type="radio" name="group2" class="effeckt-rdio-android" checked="">
  <input type="radio" name="group2" class="effeckt-rdio-android">

</div>
</section>

<section class="effeckt-demo-tabs">
  <div class="effeckt effeckt-demo-tabs">

  <header>
    <h2>
      Tabs
      <a href="https://h5bp.org/Effeckt.css/tabs.html">#</a>
    </h2>
    <span class="source">
      Source:
      <a href="http://git.aaronlumsden.com/tabulous.js/">
        Tabulous
      </a>
    </span>
  </header>

  <div class="effeckt-tabs-wrap" data-effeckt-type="scale">
    <ul class="effeckt-tabs">
      <li><a href="https://h5bp.org/Effeckt.css/#tab-1" class="effeckt-tab active">Tab 1</a></li>
      <li><a href="https://h5bp.org/Effeckt.css/#tab-2" class="effeckt-tab">Tab 2</a></li>
      <li><a href="https://h5bp.org/Effeckt.css/#tab-3" class="effeckt-tab">Tab 3</a></li>
    </ul>
    <div class="effeckt-tabs-container" style="height: 183px;">
      <div id="tab-1" class="effeckt-tab-content effeckt-show">
        <p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus.</p>

        <p>Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
      </div>
      <div id="tab-2" class="effeckt-tab-content effeckt-hide">
        <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor.</p>
      </div>
      <div id="tab-3" class="effeckt-tab-content effeckt-hide">
        <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem.</p>

        <p>Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales.</p>
      </div>
    </div>
  </div>

  <div class="effeckt-tabs-wrap" data-effeckt-type="scale-up">
    <ul class="effeckt-tabs">
      <li><a href="https://h5bp.org/Effeckt.css/#tab-1" class="effeckt-tab active">Tab 1</a></li>
      <li><a href="https://h5bp.org/Effeckt.css/#tab-2" class="effeckt-tab">Tab 2</a></li>
      <li><a href="https://h5bp.org/Effeckt.css/#tab-3" class="effeckt-tab">Tab 3</a></li>
    </ul>
    <div class="effeckt-tabs-container" style="height: 183px;">
      <div id="tab-1" class="effeckt-tab-content effeckt-show">
        <p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus.</p>

        <p>Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
      </div>
      <div id="tab-2" class="effeckt-tab-content effeckt-hide">
        <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor.</p>
      </div>
      <div id="tab-3" class="effeckt-tab-content effeckt-hide">
        <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem.</p>

        <p>Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales.</p>
      </div>
    </div>
  </div>

  <div class="effeckt-tabs-wrap" data-effeckt-type="slide-left">
    <ul class="effeckt-tabs">
      <li><a href="https://h5bp.org/Effeckt.css/#tab-1" class="effeckt-tab active">Tab 1</a></li>
      <li><a href="https://h5bp.org/Effeckt.css/#tab-2" class="effeckt-tab">Tab 2</a></li>
      <li><a href="https://h5bp.org/Effeckt.css/#tab-3" class="effeckt-tab">Tab 3</a></li>
    </ul>
    <div class="effeckt-tabs-container" style="height: 183px;">
      <div id="tab-1" class="effeckt-tab-content effeckt-show">
        <p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus.</p>

        <p>Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
      </div>
      <div id="tab-2" class="effeckt-tab-content effeckt-hide">
        <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor.</p>
      </div>
      <div id="tab-3" class="effeckt-tab-content effeckt-hide">
        <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem.</p>

        <p>Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales.</p>
      </div>
    </div>
  </div>

  <div class="effeckt-tabs-wrap" data-effeckt-type="slide-right">
    <ul class="effeckt-tabs">
      <li><a href="https://h5bp.org/Effeckt.css/#tab-1" class="effeckt-tab active">Tab 1</a></li>
      <li><a href="https://h5bp.org/Effeckt.css/#tab-2" class="effeckt-tab">Tab 2</a></li>
      <li><a href="https://h5bp.org/Effeckt.css/#tab-3" class="effeckt-tab">Tab 3</a></li>
    </ul>
    <div class="effeckt-tabs-container" style="height: 183px;">
      <div id="tab-1" class="effeckt-tab-content effeckt-show">
        <p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus.</p>

        <p>Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
      </div>
      <div id="tab-2" class="effeckt-tab-content effeckt-hide">
        <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor.</p>
      </div>
      <div id="tab-3" class="effeckt-tab-content effeckt-hide">
        <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem.</p>

        <p>Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales.</p>
      </div>
    </div>
  </div>

  <div class="effeckt-tabs-wrap" data-effeckt-type="slide-up">
    <ul class="effeckt-tabs">
      <li><a href="https://h5bp.org/Effeckt.css/#tab-1" class="effeckt-tab active">Tab 1</a></li>
      <li><a href="https://h5bp.org/Effeckt.css/#tab-2" class="effeckt-tab">Tab 2</a></li>
      <li><a href="https://h5bp.org/Effeckt.css/#tab-3" class="effeckt-tab">Tab 3</a></li>
    </ul>
    <div class="effeckt-tabs-container" style="height: 183px;">
      <div id="tab-1" class="effeckt-tab-content effeckt-show">
        <p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus.</p>

        <p>Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
      </div>
      <div id="tab-2" class="effeckt-tab-content effeckt-hide">
        <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor.</p>
      </div>
      <div id="tab-3" class="effeckt-tab-content effeckt-hide">
        <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem.</p>

        <p>Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales.</p>
      </div>
    </div>
  </div>

  <div class="effeckt-tabs-wrap" data-effeckt-type="slide-down">
    <ul class="effeckt-tabs">
      <li><a href="https://h5bp.org/Effeckt.css/#tab-1" class="effeckt-tab active">Tab 1</a></li>
      <li><a href="https://h5bp.org/Effeckt.css/#tab-2" class="effeckt-tab">Tab 2</a></li>
      <li><a href="https://h5bp.org/Effeckt.css/#tab-3" class="effeckt-tab">Tab 3</a></li>
    </ul>
    <div class="effeckt-tabs-container" style="height: 183px;">
      <div id="tab-1" class="effeckt-tab-content effeckt-show">
        <p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus.</p>

        <p>Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
      </div>
      <div id="tab-2" class="effeckt-tab-content effeckt-hide">
        <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor.</p>
      </div>
      <div id="tab-3" class="effeckt-tab-content effeckt-hide">
        <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem.</p>

        <p>Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales.</p>
      </div>
    </div>
  </div>

  <div class="effeckt-tabs-wrap" data-effeckt-type="flip">
    <ul class="effeckt-tabs">
      <li><a href="https://h5bp.org/Effeckt.css/#tab-1" class="effeckt-tab active">Tab 1</a></li>
      <li><a href="https://h5bp.org/Effeckt.css/#tab-2" class="effeckt-tab">Tab 2</a></li>
      <li><a href="https://h5bp.org/Effeckt.css/#tab-3" class="effeckt-tab">Tab 3</a></li>
    </ul>
    <div class="effeckt-tabs-container" style="height: 183px;">
      <div id="tab-1" class="effeckt-tab-content effeckt-show">
        <p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus.</p>

        <p>Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
      </div>
      <div id="tab-2" class="effeckt-tab-content effeckt-hide">
        <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor.</p>
      </div>
      <div id="tab-3" class="effeckt-tab-content effeckt-hide">
        <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem.</p>

        <p>Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales.</p>
      </div>
    </div>
  </div>

</div>
</section>



      <div class="effeckt contributors readme">

        <header>
          <h2>About</h2>
        </header>

        <p>Ever notice how small flourishes and subtle transitions dramatically increases the value of the experience you enjoy with an app or site?

        </p><p>Designing and developing UIs for the mobile web is tricky, but it's extremely difficult to do that while delivering something that performs at 60fps. The best opportunities to getting jank-free transitions on phones/tablets are CSS transition and keyframe animation based, especially tapping into hardware-accelerated transforms and opacity changes.

        </p><p>This library has a few <strong>goals</strong>:</p>

        <ol>
          <li>It provides very little UI of its own. It's only hooks for transitions/animations.</li>
          <li>Designer-curated set of classy and reasonable effects. (no <a href="http://easings.net/#easeInBounce"><code>easeInBounce</code></a>)</li>
          <li>Establish browser support guidelines (e.g. Android 2.3 would gracefully degrade)</li>
          <li>CSS performance regression testing (a la <a href="http://bench.topcoat.io/">bench.topcoat.io</a>)</li>
          <li>Deliver jank-free <em>60fps</em> performance on target browsers/devices</li>
          <li>If a particular effect cannot deliver target performance (hey <code>blur()</code> CSS filter), it cannot be included.</li>
          <li>Guidelines on what to avoid when styling these affected elements (avoid expensive CSS)</li>
          <li>Deliver a builder so users can pull only the CSS they need.</li>
          <li>There is no hover on the mobile web, so any hover-based effects would be excluded or have a tap equivalent.</li>
        </ol>

        <div class="fluid-video">
          <iframe width="640" height="480" src="./demo_files/Qc40YDFA4Bg.html" frameborder="0" allowfullscreen=""></iframe>
        </div>

        <header>
          <h2>Contributors</h2>
        </header>

        <ul id="contributors-list" class="contributors-list"><li><a href="https://github.com/wellingguzman"><img src="./demo_files/1531291" alt="wellingguzman" class="contributor-avatar"></a></li><li><a href="https://github.com/chriscoyier"><img src="./demo_files/69156" alt="chriscoyier" class="contributor-avatar"></a></li><li><a href="https://github.com/grayghostvisuals"><img src="./demo_files/934322" alt="grayghostvisuals" class="contributor-avatar"></a></li><li><a href="https://github.com/inlineblock"><img src="./demo_files/409340" alt="inlineblock" class="contributor-avatar"></a></li><li><a href="https://github.com/benschwarz"><img src="./demo_files/924" alt="benschwarz" class="contributor-avatar"></a></li><li><a href="https://github.com/benfields"><img src="./demo_files/4770753" alt="benfields" class="contributor-avatar"></a></li><li><a href="https://github.com/arthurvr"><img src="./demo_files/6025224" alt="arthurvr" class="contributor-avatar"></a></li><li><a href="https://github.com/mente"><img src="./demo_files/391997" alt="mente" class="contributor-avatar"></a></li><li><a href="https://github.com/kbariotis"><img src="./demo_files/605742" alt="kbariotis" class="contributor-avatar"></a></li><li><a href="https://github.com/paulirish"><img src="./demo_files/39191" alt="paulirish" class="contributor-avatar"></a></li><li><a href="https://github.com/mbrandorff"><img src="./demo_files/1352295" alt="mbrandorff" class="contributor-avatar"></a></li><li><a href="https://github.com/ShashankaNataraj"><img src="./demo_files/650317" alt="ShashankaNataraj" class="contributor-avatar"></a></li><li><a href="https://github.com/wonglok"><img src="./demo_files/4082826" alt="wonglok" class="contributor-avatar"></a></li><li><a href="https://github.com/enriquemorenotent"><img src="./demo_files/368842" alt="enriquemorenotent" class="contributor-avatar"></a></li><li><a href="https://github.com/podo"><img src="./demo_files/136778" alt="podo" class="contributor-avatar"></a></li><li><a href="https://github.com/aristretto"><img src="./demo_files/1207032" alt="aristretto" class="contributor-avatar"></a></li><li><a href="https://github.com/bradleyboy"><img src="./demo_files/755001" alt="bradleyboy" class="contributor-avatar"></a></li><li><a href="https://github.com/martinwolf"><img src="./demo_files/1442939" alt="martinwolf" class="contributor-avatar"></a></li><li><a href="https://github.com/davidtheclark"><img src="./demo_files/628431" alt="davidtheclark" class="contributor-avatar"></a></li><li><a href="https://github.com/synth3tk"><img src="./demo_files/2099988" alt="synth3tk" class="contributor-avatar"></a></li><li><a href="https://github.com/FWeinb"><img src="./demo_files/1250430" alt="FWeinb" class="contributor-avatar"></a></li><li><a href="https://github.com/javangriff"><img src="./demo_files/2154118" alt="javangriff" class="contributor-avatar"></a></li><li><a href="https://github.com/jontewks"><img src="./demo_files/3970573" alt="jontewks" class="contributor-avatar"></a></li><li><a href="https://github.com/jhches21"><img src="./demo_files/892814" alt="jhches21" class="contributor-avatar"></a></li><li><a href="https://github.com/MayhemYDG"><img src="./demo_files/567105" alt="MayhemYDG" class="contributor-avatar"></a></li><li><a href="https://github.com/neilcarpenter"><img src="./demo_files/1040780" alt="neilcarpenter" class="contributor-avatar"></a></li><li><a href="https://github.com/nikcorg"><img src="./demo_files/816988" alt="nikcorg" class="contributor-avatar"></a></li><li><a href="https://github.com/roblarsen"><img src="./demo_files/361421" alt="roblarsen" class="contributor-avatar"></a></li><li><a href="https://github.com/thcipriani"><img src="./demo_files/563651" alt="thcipriani" class="contributor-avatar"></a></li><li><a href="https://github.com/fionnbharra"><img src="./demo_files/860228" alt="fionnbharra" class="contributor-avatar"></a></li></ul>

      </div>


      <div class="off-screen-nav-cover"></div>

    </div><!-- div.page-wrap -->
  </div>

  <div data-effeckt-page="page-2">
    <div class="page-wrap" id="page-2">
      <h2>Page Transition From Left</h2>

      <p>This is another page.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro nulla unde doloremque consequuntur illum quo dolor. Tenetur, voluptate temporibus fuga labore atque illum quas vel dignissimos impedit vitae corporis itaque!</p><p>
      </p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, sunt tempora perspiciatis officia laudantium voluptas dicta! Nesciunt, magnam nostrum velit iste beatae totam voluptatibus sint quas amet modi architecto labore.</p>
      <button class="effeckt-page-transition-button" data-effeckt-transition-in="slide-from-right" data-effeckt-transition-out="slide-to-left" data-effeckt-transition-page="page-1">Slide From Right</button>
    </div>
  </div>

  <div data-effeckt-page="page-3">
    <div class="page-wrap" id="page-3">
      <h2>Page Transition From Right</h2>

      <p>This is another page.</p>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, accusamus, aliquam error excepturi asperiores ipsum nobis molestias neque molestiae illum magnam mollitia nulla temporibus aliquid esse rem amet cumque facilis.</p>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, temporibus, ducimus architecto quidem voluptatem sint maiores atque deserunt sed aspernatur eveniet vel perferendis corrupti impedit aut voluptates neque similique enim.</p>
      <button class="effeckt-page-transition-button" data-effeckt-transition-in="slide-from-left" data-effeckt-transition-out="slide-to-right" data-effeckt-transition-page="page-1">Slide From Left</button>
    </div>
  </div>

  <div data-effeckt-page="page-4">
    <div class="page-wrap" id="page-4">
      <h2>Page Transition From Bottom</h2>

      <p>This is another page.</p>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, accusamus, aliquam error excepturi asperiores ipsum nobis molestias neque molestiae illum magnam mollitia nulla temporibus aliquid esse rem amet cumque facilis.</p>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, temporibus, ducimus architecto quidem voluptatem sint maiores atque deserunt sed aspernatur eveniet vel perferendis corrupti impedit aut voluptates neque similique enim.</p>
      <button class="effeckt-page-transition-button" data-effeckt-transition-in="slide-from-top" data-effeckt-transition-out="slide-to-bottom" data-effeckt-transition-page="page-1">Slide From Top</button>
    </div>
  </div>

  <div data-effeckt-page="page-5">
    <div class="page-wrap" id="page-5">
      <h2>Page Transition From Top</h2>

      <p>This is another page.</p>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, accusamus, aliquam error excepturi asperiores ipsum nobis molestias neque molestiae illum magnam mollitia nulla temporibus aliquid esse rem amet cumque facilis.</p>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, temporibus, ducimus architecto quidem voluptatem sint maiores atque deserunt sed aspernatur eveniet vel perferendis corrupti impedit aut voluptates neque similique enim.</p>
      <button class="effeckt-page-transition-button" data-effeckt-transition-in="slide-from-bottom" data-effeckt-transition-out="slide-to-top" data-effeckt-transition-page="page-1">Slide From Bottom</button>
    </div>
  </div>

  <!-- Libs -->
  <script src="./demo_files/jquery.min.js.download"></script>
  <script src="./demo_files/modernizr.js.download"></script>

  <!-- Individual module JS files here -->
  <!-- Should we combine or not combine? -->
  <!-- Should we provide minified versions? -->
  <script src="./demo_files/core.js.download"></script>
  <script src="./demo_files/modal.js.download"></script>
  <script src="./demo_files/buttons.js.download"></script>
  <script src="./demo_files/list-items.js.download"></script>
  <script src="./demo_files/off-screen-nav.js.download"></script>
  <script src="./demo_files/page-transitions.js.download"></script>
  <script src="./demo_files/list-scroll.js.download"></script>
  <script src="./demo_files/tabs.js.download"></script>
  <script src="./demo_files/positional-modals.js.download"></script>
  <script src="./demo_files/captions.js.download"></script>

  <!-- Demo JS -->
  <script src="./demo_files/demo.js.download"></script>




</body></html>
