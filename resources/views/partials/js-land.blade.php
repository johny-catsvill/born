<!-- <script src="/js/siema.js"></script>
<script>
  new Siema({
  selector: '.siema',
  duration: 200,
  easing: 'ease-out',
  perPage: {
    768: 1,
    1024: 6,
  },
  startIndex: 0,
  draggable: true,
  multipleDrag: true,
  threshold: 20,
  loop: false,
  rtl: false,
  onInit: () => {},
  onChange: () => {},
});
</script> -->

{{-- START ACCORDION --}}
<script>
    const items = document.querySelectorAll(".accordion button");

function toggleAccordion() {
  const itemToggle = this.getAttribute("aria-expanded");

  for (i = 0; i < items.length; i++) {
    items[i].setAttribute("aria-expanded", "false");
  }

  if (itemToggle == "false") {
    this.setAttribute("aria-expanded", "true");
  }
}

items.forEach((item) => item.addEventListener("click", toggleAccordion));

</script>
{{-- END ACCORDION --}}

{{-- START NAVBAR --}}
<script>
 // Navbar and dropdowns
var toggle = document.getElementsByClassName('navbar-toggle')[0],
    collapse = document.getElementsByClassName('navbar-collapse')[0],
    dropdowns = document.getElementsByClassName('dropdown');;

// Toggle if navbar menu is open or closed
function toggleMenu() {
    collapse.classList.toggle('collapse');
    collapse.classList.toggle('in');
}

// Close all dropdown menus
function closeMenus() {
    for (var j = 0; j < dropdowns.length; j++) {
        dropdowns[j].getElementsByClassName('dropdown-toggle')[0].classList.remove('dropdown-open');
        dropdowns[j].classList.remove('open');
    }
}

// Add click handling to dropdowns
for (var i = 0; i < dropdowns.length; i++) {
    dropdowns[i].addEventListener('click', function() {
        if (document.body.clientWidth < 768) {
            var open = this.classList.contains('open');
            closeMenus();
            if (!open) {
                this.getElementsByClassName('dropdown-toggle')[0].classList.toggle('dropdown-open');
                this.classList.toggle('open');
            }
        }
    });
}

// Close dropdowns when screen becomes big enough to switch to open by hover
function closeMenusOnResize() {
    if (document.body.clientWidth >= 768) {
        closeMenus();
        collapse.classList.add('collapse');
        collapse.classList.remove('in');
    }
}

// Event listeners
window.addEventListener('resize', closeMenusOnResize, false);
toggle.addEventListener('click', toggleMenu, false);
</script>
<script>
  var elements = document.getElementsByClassName("dropdown-toggle");
for (var i = 0; i < elements.length; i++) {
    elements[i].addEventListener("click", function(e) {
        e.preventDefault();
        for (var y = 0; y < elements.length; y++) {
            if (elements[y] == this) {
                elements[y].nextElementSibling.classList.toggle("show");
            } else {
                elements[y].nextElementSibling.classList.remove("show");
            }
        }
    });
}
</script>
{{-- END NAVABAR --}}



{{-- 
<script
  src="https://code.jquery.com/jquery-1.12.4.min.js"
  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  crossorigin="anonymous"></script>
<script type="text/javascript" defer src="{!! asset('js/main.js') !!}"></script>

<script type="text/javascript">jQuery(document).ready(function($){
   if (jQuery(".slider.clients.kd-client-5b82b178ca328").length) {
      jQuery(".slider.clients.kd-client-5b82b178ca328").owlCarousel({
         navigation: false,
         pagination: false,autoPlay: false,stopOnHover: false,
         items: 7,
         addClassActive: true,
      });
   }
   });
</script>
<script type="text/javascript">
   jQuery(document).ready(function($) {
      if ($(".review-carousel.kd-rwc-5ba101556a320 .rc-content").length) {
            $(".review-carousel.kd-rwc-5ba101556a320 .rc-content").owlCarousel({
               itemsDesktop: [1199, 3],
               itemsTablet: [768, 2],
               itemsMobile: [479, 1],
               navigation: true,
               pagination: false,
               slideSpeed: 500,
               paginationSpeed: 500,
               rewindSpeed: 500,
               autoPlay: false,
               stopOnHover: false,
               addClassActive: true,
               items: 3,
            });
      }
   });
</script> --}}
<!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        breakpoints: {
          640: {
            slidesPerView: 1,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 2,
            spaceBetween: 30,
          },
          1024: {
            slidesPerView: 3,
            spaceBetween: 30,
          },
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
      });
    </script>
    <script>
  var swiper = new Swiper(".gallery", {
    slidesPerView: 1,
    spaceBetween: 30,
    breakpoints: {
      640: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: '.swiper-pagination',
    },
  });
</script>
<script>
      var swiper = new Swiper(".tezis", {
        slidesPerView: 2,
        spaceBetween: 30,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        breakpoints: {
          640: {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 2,
            spaceBetween: 30,
          },
          1024: {
            slidesPerView: 4,
            spaceBetween: 30,
          },
        },
      });
    </script>