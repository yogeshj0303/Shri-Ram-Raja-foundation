@extends('layout.main')

@section('main.container')



<style>
.card-gallery-container {
  max-width: 1200px;
  margin: 50px auto;
  padding: 20px;
  text-align: center;
}

.gallery-title {
  font-size: 2rem;
  color: #333;
  margin-bottom: 20px;
}

.card-gallery {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 20px;
}

.card {
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  overflow: hidden;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card:hover {
  transform: scale(1.05);
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
}

.card-img {
  width: 100%;
  height: 250px;
  object-fit: cover;
  cursor: pointer;
}

.card-title, .card-description {
  margin: 10px;
}

/* Modal Styling */
.modal {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.9);
  justify-content: center;
  align-items: center;
}

.modal-content {
  max-width: 80%;
  max-height: 80%;
  border-radius: 10px;
}

.close {
  position: absolute;
  top: 20px;
  right: 30px;
  color: white;
  font-size: 30px;
  font-weight: bold;
  cursor: pointer;
}

.prev, .next {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background-color: rgba(255, 255, 255, 0.8);
  border: none;
  border-radius: 50%;
  font-size: 1.5rem;
  width: 40px;
  height: 40px;
  cursor: pointer;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
}

.prev {
  left: 20px;
}

.next {
  right: 20px;
}

.prev:hover, .next:hover {
  background-color: white;
}
</style>




<section class="page-title bg-1">

  <div class="container">

    <div class="row">

      <div class="col-md-12">

        <div class="block text-center">

          <span class="text-white">who we are</span>

          <h1 class="text-capitalize mb-4 text-lg">Gallery</h1>

        </div>

      </div>

    </div>

  </div>

</section>
 <div class="card-gallery-container">
    <div class="card-gallery">
      @foreach($media as $item)
            <div class="col mb-4">
                <div class="card">
                    <img src="{{ asset('uploads/images/' . $item->file_path) }}" alt="Media Image" class="card-img">


                </div>
            </div>
        @endforeach

    </div>
  </div>
  
  <!-- Modal -->
  <div id="gallery-modal" class="modal">
    <span class="close">&times;</span>
    <img id="modal-img" class="modal-content" alt="Expanded Image">
    <button class="prev">&laquo;</button>
    <button class="next">&raquo;</button>
  </div>
  
  
  
  <script>
  const modal = document.getElementById('gallery-modal');
const modalImg = document.getElementById('modal-img');
const closeBtn = document.querySelector('.close');
const prevBtn = document.querySelector('.prev');
const nextBtn = document.querySelector('.next');
const images = document.querySelectorAll('.card-img');

let currentIndex = 0;

// Open modal and display clicked image
images.forEach((img, index) => {
  img.addEventListener('click', () => {
    modal.style.display = 'flex';
    modalImg.src = img.src;
    currentIndex = index;
  });
});

// Close modal
closeBtn.addEventListener('click', () => {
  modal.style.display = 'none';
});

// Previous image
prevBtn.addEventListener('click', () => {
  currentIndex = (currentIndex - 1 + images.length) % images.length;
  modalImg.src = images[currentIndex].src;
});

// Next image
nextBtn.addEventListener('click', () => {
  currentIndex = (currentIndex + 1) % images.length;
  modalImg.src = images[currentIndex].src;
});

// Close modal on outside click
window.addEventListener('click', (e) => {
  if (e.target === modal) {
    modal.style.display = 'none';
  }
});
</script>
@endsection