var highlightSlider = document.getElementsByClassName('highlight-slider');
if (highlightSlider.length > 0) {
  // elements with class "highlight-slider" exist
  var slider = tns({
    container: '.highlight-slider',
    items: 1,
    edgePadding: 0,
    swipeAngle: false,
    speed: 700,
    gutter: 0,
    nav: true,
    responsive: {
      600: {
        edgePadding: 80,
        gutter: 20
      },
      768: {
        edgePadding: 120,
        gutter: 30
      },
      1120: {
        edgePadding: 222,
        gutter: 44
      },
      1582: {
        edgePadding: 322
      }
    }
  });
}
