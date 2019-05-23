var halfContentSlider = document.getElementsByClassName('half-and-half-content-slider__slider-container');

if (halfContentSlider.length > 0) {
  // elements with class "half-and-half-content-slider__slider-container" exist
  var slider = tns({
    container: '.half-and-half-content-slider__slider-container',
    items: 1,
    swipeAngle: false,
    speed: 700,
    rewind: false,
    autoplay: false,
    loop: false
  });
}
