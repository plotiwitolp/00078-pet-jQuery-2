jQuery(function () {
  //
  let $clr0 = '#212121';
  let $clr1 = '#3e3e3e';
  let $clr2 = '#cbcbcb';
  let $clr3 = '#ffffff';

  //SLIDER 1 --->
  const controller1 = $('.slider-1 .controller');
  const viewport1wrapper = $('.slider-1__viewport-wrapper');
  const sliderItems = $('.slider-1__item');
  const prev1 = $('.controller__prev');
  const next1 = $('.controller__next');
  const slider1Lng = sliderItems.length * 100;
  viewport1wrapper.css('width', slider1Lng + '%');
  let pos = 0;
  controller1.on('click', function (e) {
    if (e.target.classList.contains('controller__prev') && pos < 0) {
      pos += 100;
      viewport1wrapper.css('left', pos + '%');
    } else if (e.target.classList.contains('controller__next') && pos > -slider1Lng + 100) {
      pos -= 100;
      viewport1wrapper.css('left', pos + '%');
    }
    changeBtnController(pos, 0, prev1, $clr2, $clr0);
    changeBtnController(pos - 100, -slider1Lng, next1, $clr2, $clr0);

    function changeBtnController(pos1, pos2, el, clrDis, clrEn) {
      if (pos1 == pos2) {
        el.css('color', clrDis);
      } else {
        el.css('color', clrEn);
      }
    }
  });
  // <--- SLIDER 1

  // SLIDER 2 --->
  $('.rev_slider').slick({
    arrows: false,
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: false,
    prevArrow: "<div class='prev2'>&lsaquo;</div>",
    nextArrow: "<div class='next2'>&rsaquo;</div>",
    fade: true,
    infinite: true,
    asNavFor: '.rev_slider-2',
  });
  $('.rev_slider-2').slick({
    arrows: true,
    infinite: false,
    slidesToShow: 2,
    slidesToScroll: 1,
    prevArrow: "<div class='prev2'>&lsaquo;</div>",
    nextArrow: "<div class='next2'>&rsaquo;</div>",
    infinite: true,
    asNavFor: '.rev_slider',
    dots: true,
  });

  // SLIDER 2 <---
  //
});
