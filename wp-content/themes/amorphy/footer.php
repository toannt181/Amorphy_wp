<script src="https://maps.googleapis.com/maps/api/js?v=3&amp;sensor=false&amp;key=AIzaSyCC1THe7oQ831KoE9xMVEm62eWAKNhcNCQ"></script>
<script>
  (function fixInfoWindow() {
    var set = google.maps.InfoWindow.prototype.set;
    google.maps.InfoWindow.prototype.set = function (key, val) {
      if (key === "map") {
        if (!this.get("noSuppress")) {
          return;
        }
      }
      set.apply(this, arguments);
    }
  })();

  var map;
  var brooklyn = new google.maps.LatLng(43.072152, 141.350026);
  var MY_MAPTYPE_ID = 'Pandy_style';

  function initialize() {

    var featureOpts = [
      {
        "stylers": [
          {
            "hue": "#D7000E"
          },
          {
            "saturation": -80
          }
        ],
        "elementType": "all",
        "featureType": "all"
      }

    ]

    var mapOptions = {
      zoom: 15,
      scrollwheel: false,
      disableDoubleClickZoom: true,
      draggable: false,
      streetViewControl: false,
      panControl: false,
      center: brooklyn,
      mapTypeControlOptions: {
        mapTypeIds: [google.maps.MapTypeId.ROADMAP, MY_MAPTYPE_ID]
      },
      mapTypeId: MY_MAPTYPE_ID
    };

    map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);
    var marker = new google.maps.Marker({
      position: brooklyn,
      map: map,
    });

    var styledMapOptions = {
      name: '株式会社アモルフィ｜アクセスマップ'
    };

    var customMapType = new google.maps.StyledMapType(featureOpts, styledMapOptions);

    map.mapTypes.set(MY_MAPTYPE_ID, customMapType);

  }
  google.maps.event.addDomListener(window, 'load', initialize);
</script>

<?php $template_img_url =  get_template_directory_uri() . '/template' ?>

<div class="box3 text-center">
<img class="img08" src="/wp-content/themes/amorphy/template/images/logo_e.svg" alt="株式会社アモルフィ" border="0" />
  <p class="text15 inline-block">
    株式会社アモルフィ｜ 〒060-0809 札幌市北区北9条西3丁目15クラークノルド1F　TEL.011-708-7610　FAX.011-708-7611
    <br />
  </p>
  <p class="text02">
    <br /> © amorphy co.,ltd.
  </p>

</div>

<div id="back2">
  <div class="bg-back-06"></div>
</div>


<div id="logo3" class="<?php if ( is_front_page() ) echo 'logo2'; ?>">
  <a href="/homepage" class="logo3">
  <img id="logo_m" class="img03" src="/wp-content/themes/amorphy/template/images/logo_m.svg" alt="株式会社アモルフィ" name="logo_m" border="0"/>
  </a>
</div>

<div id="pagetop">
  <div class="text-right">
    <a href="#top" class="pagetop">
      <img id="pagetop2" class="img03" src="<?php echo $template_img_url ?>/images/pagetop.svg" alt="ページトップへ" name="pagetop2" border="0"
      />
    </a>
  </div>
</div>

<div id="logosp">
<img class="img07" src="/wp-content/themes/amorphy/template/images/logo_sp.svg" alt="" border="0" />
</div>

<footer>
  <script src="<?php echo $template_img_url ?>/scripts/menu.js"></script>
  <nav class="nav is-fixed" role="navigation">
    <div class="wrapper wrapper-flush">
      <div align="right">
        <button class="nav-toggle">
          <div class="icon-menu">
            <span class="line line-1"></span>
            <span class="line line-2"></span>
            <span class="line line-3"></span>
          </div>
        </button>
        <div class="nav-container">
          <ul class="nav-menu text-center">
            <li class="menu-item">
              <a href="/homepage" class="menu-link">
                <img class="img02" src="<?php echo $template_img_url ?>/images/bt01.svg" alt="ホーム" border="0">
              </a>
            </li>
            <li class="menu-item">
              <a href="/company" class="menu-link">
                <img class="img02" src="<?php echo $template_img_url ?>/images/bt02.svg" alt="企業情報" border="0">
              </a>
            </li>
            <li class="menu-item">
              <a href="/service" class="menu-link">
                <img class="img02" src="<?php echo $template_img_url ?>/images/bt03.svg" alt="事業内容" border="0">
              </a>
            </li>
            <li class="menu-item">
              <a href="/news" class="menu-link">
                <img class="img02" src="<?php echo $template_img_url ?>/images/bt04.svg" alt="新着情報" border="0">
              </a>
            </li>
            <li class="menu-item">
              <a href="/vr" class="menu-link">
                <img width="60" class="img02" src="<?php echo $template_img_url ?>/images/bt06.svg" alt="新着情報" border="0">
              </a>
            </li>
            <li class="menu-item">
              <a href="/contact" class="menu-link">
                <img class="img02" src="<?php echo $template_img_url ?>/images/bt05.svg" alt="お問合せ" border="0">
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>


</footer>
</body>
</html>