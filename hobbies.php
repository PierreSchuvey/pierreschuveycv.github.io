<span id="ancragehob"></span>
<div id="hobbies">
<div class="w3-container">
</div>
<div class="w3-content w3-display-container">
<div class="w3-display-container mySlides">
  <video width="980" height="780" autoplay muted>
      <source src="assets/mp4/zeldaV.mp4" type="video/mp4">
  </video>
  <div class="w3-display-middle w3-large w3-container w3-padding-16 w3-black">
    <h1 class="txtslide">Jeux Video</h1>
  </div>
</div>
<div class="w3-display-container mySlides">
  <video width="980" height="780" autoplay muted>
      <source src="assets/mp4/animeV.mp4" type="video/mp4">
  </video>
  <div class="w3-display-middle w3-large w3-container w3-padding-16 w3-black">
    <h1 class="txtslide">Manga & Anime</h1>
  </div>
</div>
<div class="w3-display-container mySlides">
  <video width="980" height="780" autoplay muted>
      <source src="assets/mp4/japanV.mp4" type="video/mp4">
  </video>
  <div class="w3-display-middle w3-large w3-container w3-padding-16 w3-black">
    <h1 class="txtslide">Culture Japonaise</h1>
  </div>
</div>
<div class="w3-display-container mySlides">
  <video width="980" height="780" autoplay muted>
      <source src="assets/mp4/cinemaV.mp4" type="video/mp4">
  </video>
  <div class="w3-display-middle w3-large w3-container w3-padding-16 w3-black">
    <h1 class="txtslide">Cinema</h1>
  </div>
</div>
<div class="w3-display-container mySlides">
  <video width="980" height="780" autoplay muted>
      <source src="assets/mp4/musiqueV.mp4" type="video/mp4">
  </video>
  <div class="w3-display-middle w3-large w3-container w3-padding-16 w3-black">
    <h1 class="txtslide">Musique</h1>
  </div>
</div>
<button class="w3-button w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
<button class="w3-button w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
}
</script>
</div>
