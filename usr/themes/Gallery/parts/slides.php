<div style="width:80vw; margin: 0 auto; padding-top:50px;" class="slides">
<div class="carousel">
  <div class="carousel__slides" id="carouselSlides">
    <div class="carousel__slide">
      <img src="https://picsum.photos/id/1018/1200/600" alt="Slide 1" />
      <div class="carousel__slide-content">
        <h2 class="carousel__slide-title">Slide Title 1</h2>
        <a class="carousel__slide-button" href="#">Learn More</a>
      </div>
    </div>
    <div class="carousel__slide">
      <img src="https://picsum.photos/id/1015/1200/600" alt="Slide 2" />
      <div class="carousel__slide-content">
        <h2 class="carousel__slide-title">Slide Title 2</h2>
        <a class="carousel__slide-button" href="#">Learn More</a>
      </div>
    </div>
    <div class="carousel__slide">
      <img src="https://picsum.photos/id/1019/1200/600" alt="Slide 3" />
      <div class="carousel__slide-content">
        <h2 class="carousel__slide-title">Slide Title 3</h2>
        <a class="carousel__slide-button" href="#">Learn More</a>
      </div>
    </div>
  </div>

  <div class="carousel__arrows">
    <button class="carousel__arrow" id="prevBtn">&#10094;</button>
    <button class="carousel__arrow" id="nextBtn">&#10095;</button>
  </div>

  <div class="carousel__dots" id="carouselDots"></div>
</div>

<script>
  const slidesContainer = document.getElementById("carouselSlides");
  const totalSlides = slidesContainer.children.length;
  let currentIndex = 0;
  const dotsContainer = document.getElementById("carouselDots");

  function updateSlide(index) {
    slidesContainer.style.transform = `translateX(-${index * 100}%)`;
    [...dotsContainer.children].forEach((dot, i) => {
      dot.classList.toggle('active', i === index);
    });
  }

  function createDots() {
    for (let i = 0; i < totalSlides; i++) {
      const dot = document.createElement("div");
      dot.className = "carousel__dot";
      dot.addEventListener("click", () => {
        currentIndex = i;
        updateSlide(currentIndex);
      });
      dotsContainer.appendChild(dot);
    }
  }

  document.getElementById("prevBtn").addEventListener("click", () => {
    currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
    updateSlide(currentIndex);
  });

  document.getElementById("nextBtn").addEventListener("click", () => {
    currentIndex = (currentIndex + 1) % totalSlides;
    updateSlide(currentIndex);
  });

  createDots();
  updateSlide(currentIndex);

  setInterval(() => {
    currentIndex = (currentIndex + 1) % totalSlides;
    updateSlide(currentIndex);
  }, 5000);
</script>
</div>