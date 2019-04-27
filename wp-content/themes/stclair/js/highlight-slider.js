var highlightSlider = document.getElementsByClassName('highlight-slider');
if (highlightSlider.length > 0) {
  // elements with class "highlight-slider" exist
  var slider = tns({
    container: '.highlight-slider',
    items: 1,
    edgePadding: 222,
    swipeAngle: false,
    speed: 700,
    gutter: 44,
    nav: true
  });
}
