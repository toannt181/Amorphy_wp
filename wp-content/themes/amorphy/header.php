<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<?php $base_template_url = get_template_directory_uri() . '/template' ?>

 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <link rel="stylesheet" href="<?php echo $base_template_url ?>/css/bootstrap.min.css">
  <link href="<?php echo $base_template_url ?>/css/camera.css" rel="stylesheet" type="text/css" media="all" />
  <link rel="stylesheet" media="(max-width: 1023px)" href="<?php echo $base_template_url ?>/css/style_sp.css">
  <link rel="stylesheet" media="(min-width: 1024px)" href="<?php echo $base_template_url ?>/css/style.css">
  <link rel="stylesheet" media="(max-width: 1023px)" href="<?php echo $base_template_url ?>/css/id_sp.css">
  <link rel="stylesheet" media="(min-width: 1024px)" href="<?php echo $base_template_url ?>/css/id.css">
  <link rel="stylesheet" media="(max-width: 1023px)" href="<?php echo $base_template_url ?>/css/id_page_sp.css">
  <link rel="stylesheet" media="(min-width: 1024px)" href="<?php echo $base_template_url ?>/css/id_page.css">           
  <link rel="stylesheet" media="(max-width: 1023px)" href="<?php echo $base_template_url ?>/css/menu_sp.css">
  <link rel="stylesheet" media="(min-width: 1024px)" href="<?php echo $base_template_url ?>/css/menu.css">

  <link rel="stylesheet" href="<?php echo $base_template_url ?>/css/newstyle.css">

  <meta name="keywords" content="アモルフィ,amorphy,IT,札幌,インターネット,モバイル,システム開発,webサイト,ホームページ">
  <meta name="description" content="株式会社アモルフィ｜札幌を拠点に先端のweb技術・サイト制作、システム開発・構築、広報戦略を手がける企業。">

  <title>株式会社アモルフィ｜amorphy co.,ltd.</title>
  <script type="text/javascript" src="<?php echo $base_template_url ?>/scripts/jquery.min.1.9.1.js"></script>
  <script type="text/javascript">
    $(function () {
      $('a[href^=#]').click(function () {
        var speed = 600;
        var href = $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top;
        $("html, body").animate({ scrollTop: position }, speed, "swing");
        return false;
      });
    });
  </script>
  <script type="text/javascript">
    $(function () {
      var pageTop = $('.pagetop');
      pageTop.hide();
      $(window).scroll(function () {
        if ($(this).scrollTop() > 400) {
          pageTop.fadeIn();
        } else {
          pageTop.fadeOut();
        }
      });
      pageTop.click(function () {
        $('body, html').animate({ scrollTop: 0 }, 600, 'swing');
        return false;
      });

      var pageTop2 = document.querySelector('.pagetop');
      pageTop2.onclick = function () {
        $('body, html').animate({ scrollTop: 0 }, 600, 'swing');
        return false;
      }
    });
  </script>
  <script type="text/javascript">
    $(function () {
      var pageTop = $('.logo2');
      pageTop.hide();
      $(window).scroll(function () {
        if ($(this).scrollTop() > 700) {
          pageTop.fadeIn();
        } else {
          pageTop.fadeOut();
        }
      });
    });
  </script>
  <script type="text/javascript">
    $(function () {
      var pageTop = $('.pagetop');
      pageTop.hide();
      $(window).scroll(function () {
        if ($(this).scrollTop() > 400) {
          pageTop.fadeIn();
        } else {
          pageTop.fadeOut();
        }
      });
    });
  </script>
  <style>
    .camera_overlayer {
      opacity: 0.2;
    }
  </style>
  <csscriptdict>
    <script type="text/javascript">

        function newImage(arg) {
          if (document.images) {
            rslt = new Image();
            rslt.src = arg;
            return rslt;
          }
        }


      userAgent = window.navigator.userAgent;
      browserVers = parseInt(userAgent.charAt(userAgent.indexOf("/") + 1), 10);
      mustInitImg = true;
      function initImgID() { var di = document.images; if (mustInitImg && di) { for (var i = 0; i < di.length; i++) { if (!di[i].id) di[i].id = di[i].name; } mustInitImg = false; } }

      function findElement(n, ly) {
        var d = document;
        if (browserVers < 4) return d[n];
        if ((browserVers >= 6) && (d.getElementById)) { initImgID; return (d.getElementById(n)) };
        var cd = ly ? ly.document : d;
        var elem = cd[n];
        if (!elem) {
          for (var i = 0; i < cd.layers.length; i++) {
            elem = findElement(n, cd.layers[i]);
            if (elem) return elem;
          }
        }
        return elem;
      }

      function changeImagesArray(array) {
        if (preloadFlag == true) {
          var d = document; var img;
          for (i = 0; i < array.length; i += 2) {
            img = null; var n = array[i];
            if (d.images) {
              if (d.layers) { img = findElement(n, 0); }
              else { img = d.images[n]; }
            }
            if (!img && d.getElementById) { img = d.getElementById(n); }
            if (!img && d.getElementsByName) {
              var elms = d.getElementsByName(n);
              if (elms) {
                for (j = 0; j < elms.length; j++) {
                  if (elms[j].src) { img = elms[j]; break; }
                }
              }
            }
            if (img) { img.src = array[i + 1]; }
          }
        }
      }


      function changeImages() { changeImagesArray(changeImages.arguments); }

    </script>
  </csscriptdict>
  <csactiondict>
    <script type="text/javascript">
var preloadFlag = false;
      function preloadImages() {
        if (document.images) {
          pre_logo_m_over = newImage('images/logo_m_over.svg');
          preloadFlag = true;
        }
      }
    </script>
  </csactiondict>
  <link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed%7CYanone+Kaffeesatz%7CVollkorn%7COswald:400,300&amp;subset=latin,latin-ext,cyrillic,cyrillic-ext'
    rel='stylesheet' type='text/css' />
  <script type='text/javascript' src='<?php echo $base_template_url ?>/scripts/jquery.min.js'></script>
  <script type='text/javascript' src='<?php echo $base_template_url ?>/scripts/jquery.mobile.customized.min.js'></script>
  <script type='text/javascript' src='<?php echo $base_template_url ?>/scripts/jquery.easing.1.3.js'></script>
  <script type='text/javascript' src='<?php echo $base_template_url ?>/scripts/camera.js'></script>

  <script>
    jQuery(function () {

      jQuery('#camera_wrap_4').camera({
        height: 'auto',
        loader: 'none',
        alignment: 'center',
        pieDiameter: 36,
        autoAdvance: true,
        mobileAutoAdvance: true,
        fx: 'simpleFade',
        barPosition: 'bottom',
        loaderStroke: 6,
        loaderColor: '#ffffff',
        loaderOpacity: .5,
        navigation: false,
        pagination: false,
        playPause: false,
        time: 4000,
        transPeriod: 4000,
        thumbnails: false,
        pauseOnClick: false,
        hover: false,
        opacityOnGrid: false,
        imagePath: 'images/'
      });

    });
  </script>

</head>

<body>

