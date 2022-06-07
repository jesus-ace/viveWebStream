<main class="principal">
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
<img class="d-block w-100" src="{{ asset('image/testing/840_560.jpg') }}" alt="First slide">

    </div>
    <div class="carousel-item">
 <img class="d-block w-100" src="{{ asset('image/testing/1366_2000.jpg') }}" alt="Second slide">
    </div>
    <div class="carousel-item">
 <img class="d-block w-100" src="{{ asset('image/testing/Wallpaper-Engine-Steam-App.jpg') }}" alt="Third slide">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</main>
<section class="series">
  <h1>Series</h1>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
      @foreach($series as $serie)
    <div class="carousel-item active">
      <img src="" class="d-block w-100" alt="...">
      <p>$series->ser_nombre</p>
    </div>
      @endforeach
  </div>
</div>
</section>

<section class="peliculas">
  <h1>Peliculas</h1>

</section>

<section class="infantil">
  <h1>Para los chicos</h1>

</section>

<section class="recientes">
  <h1>Series Recientes</h1>

</section>

<section class="recientes2">
  <h1>Peliculas Recientes</h1>

</section>

<footer >

  <p>Author: Tecnologia e Informacion</p>
  <p><a href="mailto:hege@example.com">hege@example.com</a></p>

</footer>
</body>
</html>