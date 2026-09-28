

            AOS.init({ once: true });

            function openEnquiry() {
                document.getElementById("enquiryModal").style.display = "flex";
            }
            document.getElementById("enquiryModal").onclick = function (e) {
                if (e.target === this) this.style.display = "none";
            };

            // FORM SUBMIT (AJAX READY)
            document.getElementById("enquiryForm").onsubmit = function (e) {
                e.preventDefault();

                // SEND TO DB / EMAIL HERE (PHP / WP AJAX)

                this.reset();
                document.getElementById("successMsg").classList.remove("d-none");
                setTimeout(() => {
                    document.getElementById("enquiryModal").style.display = "none";
                    document.getElementById("successMsg").classList.add("d-none");
                }, 2000);
            };
            
            
            AOS.init({ duration: 1000, once: true });
            new Swiper(".mySwiper", {
                slidesPerView: 3,
                spaceBetween: 20,
                loop: true,
                autoplay: { delay: 3000 },
                breakpoints: { 0: { slidesPerView: 1 }, 768: { slidesPerView: 2 }, 1024: { slidesPerView: 3 } },
            });



const items = document.querySelectorAll(".lightbox-item");
const modal = document.getElementById("lightboxModal");
const modalImg = document.getElementById("lightboxImg");
const closeBtn = document.querySelector(".lightbox-close");
const nextBtn = document.querySelector(".lightbox-next");
const prevBtn = document.querySelector(".lightbox-prev");

let currentIndex = 0;
let images = [];

items.forEach((item, index) => {
  images.push(item.href);

  item.addEventListener("click", function(e){
    e.preventDefault();
    currentIndex = index;
    openLightbox();
  });
});

function openLightbox() {
  modal.style.display = "flex";
  modalImg.src = images[currentIndex];
}

function closeLightbox() {
  modal.style.display = "none";
}

function showNext() {
  currentIndex = (currentIndex + 1) % images.length;
  modalImg.src = images[currentIndex];
}

function showPrev() {
  currentIndex = (currentIndex - 1 + images.length) % images.length;
  modalImg.src = images[currentIndex];
}

nextBtn.addEventListener("click", showNext);
prevBtn.addEventListener("click", showPrev);
closeBtn.addEventListener("click", closeLightbox);

modal.addEventListener("click", (e) => {
  if (e.target === modal) closeLightbox();
});

/* Swipe Support */
let startX = 0;

modal.addEventListener("touchstart", e => {
  startX = e.touches[0].clientX;
});

modal.addEventListener("touchend", e => {
  let endX = e.changedTouches[0].clientX;
  if (startX - endX > 50) showNext();
  if (endX - startX > 50) showPrev();
});



function playVideo(element) {
  const video = element.nextElementSibling;
  element.style.display = "none";
  video.style.display = "block";
  video.play();
}



