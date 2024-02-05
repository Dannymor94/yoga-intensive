// Все слайдеры
const sliderWrap = document.querySelectorAll('.slider-wrap');
const slider = document.querySelectorAll('.slider-line');
const controlls = document.querySelectorAll('.slider-control');
// Каждый слайдер отдельнь
slider.forEach(function(item){
  //Получил и перебрал дочерние элементы
  const sliderItem = Array.from(item.children);
  
  sliderItem.forEach(function(slide, index){
    // hidden = display:none;
      if (index !==0) slide.classList.add('hidden');
      //добавил Индексы
      slide.dataset.index = index;



 slide.addEventListener('click', function(){
      this.classList.add('hidden');
      let nextSlideIndex;
      // переключательн слайдов вперёд
      index + 1 === sliderItem.length?nextSlideIndex = 0:nextSlideIndex = index+1;
      const nextSlide = item.querySelector(`[data-index="${nextSlideIndex}"]`);
       nextSlide.classList.remove('hidden');


      
    })
  })
});
// Добавить слайдер на vw 992
$(window).resize(function () {
  if ($(window).width() > 992){
    $('.history__img-wrap').removeClass('slider-line');
    $('.history__icon-finger').addClass('hidden');
  }
  else if($(window).width() < 992){
    $('.history__img-wrap').addClass('slider-line');
    $('.history__icon-finger').removeClass('hidden');
  }
});
