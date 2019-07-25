window.onload = function(){
	var slides = document.querySelectorAll('.sld')
	var slidesQnt = slides.length
	var sliderContainer = document.querySelector('#sldArticle')
	function sldRodarAuto(){
		var i = 0
		setInterval(function(){
			if(i !== slidesQnt-1){
				slides[i].classList.remove('visivel')
				slides[i].nextElementSibling.classList.add('visivel')		
			} else {
				slides[i].classList.remove('visivel')
				slides[0].classList.add('visivel')
				sldRodarAuto()
			}
			i++
		}, 2500)	
	}
	sldRodarAuto()
}