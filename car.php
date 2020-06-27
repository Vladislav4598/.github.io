<h1>Наши Новости</h1>
		<div class="block2" >

		<div class="mySlides fade">
		  <img src="images/logo10.png" style="width:100%">
		</div>

		<div class="mySlides fade">
		  <img src="images/logo11.png" style="width:100%">
		</div>

		<div class="mySlides fade">
		  <img src="images/logo12.png" style="width:100%">
		</div>
		<div class="mySlides fade">
		  <img src="images/logo13.png" style="width:100%">
		</div>

	</div>


	<div style="text-align:center">
	  <span class="dot"></span>
	  <span class="dot"></span>
	  <span class="dot"></span>
	  <span class="dot"></span>
	</div>
	<!--<script scr=js/script1.js type="text/javascript"></script>-->
	<script >

	  var slideIndex = 0;
	  showSlides();

	  function showSlides() {
	      var i;
	      var slides = document.getElementsByClassName("mySlides");
	      var dots = document.getElementsByClassName("dot");
	      for (i = 0; i < slides.length; i++) {
	         slides[i].style.display = "none";
	      }
	      slideIndex++;
	      if (slideIndex > slides.length) {slideIndex = 1}
	      for (i = 0; i < dots.length; i++) {
	          dots[i].className = dots[i].className.replace(" active", "");
	      }
	      slides[slideIndex-1].style.display = "inline-block";
	      dots[slideIndex-1].className += " active";
	      setTimeout(showSlides, 5000); // Change image every 2 seconds
	  }
	</script>