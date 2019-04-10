
// const sliderImages = '';

// if(document.querySelectorAll('#posts .img-wrapper img')){
// 	const sliderImages = document.querySelectorAll('#posts .img-wrapper img');
// }

// if(document.querySelectorAll('#page .img-wrapper img')){
// 	const sliderImages = document.querySelectorAll('#page .img-wrapper img');
// }

const sliderImages = document.querySelectorAll('#posts .img-wrapper img');

           
function debounce(func, wait = 10, immediate = true){
  
  var timeout;
  
  return function(){
    
    var context = this, args = arguments;
    
    var later = function(){
      timeout = null;
      if(!immediate) func.apply(context, args);
    };
    
    var callNow = immediate && !timeout;
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
    if(callNow) func.apply(context, args);
    
  }
  
}

var isInViewport = function (elem) {
	var bounding = elem.getBoundingClientRect();
    return (
        bounding.top >= 0 &&
        bounding.left >= 0 &&
        bounding.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        bounding.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
};
    
    
function checkSlide(e){
	sliderImages.forEach(sliderImage => {

	if(isInViewport(sliderImage) && !sliderImage.getAttribute('src')){
		sliderImage.setAttribute('src', sliderImage.getAttribute('data-src') );
		sliderImage.onload = function() {
			sliderImage.removeAttribute('data-src');
		};
	}
	});
}
window.addEventListener('load', debounce(checkSlide));
window.addEventListener('scroll', debounce(checkSlide));
