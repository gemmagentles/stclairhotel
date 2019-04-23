var heroSlider = document.getElementsByClassName('hero-slider');
if (heroSlider.length > 0) {
  // elements with class "hero-slider" exist
  var slider = tns({
    container: '.hero-slider',
    items: 1,
    slideBy: 'page',
    autoplay: true,
    speed: 2000,
    mode: 'gallery',
    animateIn: 'fadeIn',
    animateOut: 'fadeOut',
    controlsPosition: 'bottom'
  });
}
