document.addEventListener('DOMContentLoaded', function () {
    initDatePickers();
    initCarousel();

    function initDatePickers() {
        const checkIn = document.getElementById('check-in');
        const checkOut = document.getElementById('check-out');
        const botonReserva = document.getElementById('boton-reserva');

        const hoy = new Date().toISOString().split('T')[0];
        checkIn.min = hoy;
        checkOut.min = hoy;

        const validarFechas = () => {
            const fechaEntrada = new Date(checkIn.value);
            const fechaSalida = new Date(checkOut.value);
            botonReserva.disabled = !(fechaSalida > fechaEntrada && checkIn.value && checkOut.value);
        };

        checkIn.addEventListener('change', () => {
            checkOut.min = checkIn.value;
            validarFechas();
        });

        checkOut.addEventListener('change', validarFechas);

        botonReserva.addEventListener('click', () => {
            if (!botonReserva.disabled) {
                window.open('secciones/reservas/reservas.html', '_self'); 
            }
        });
    }

    function initCarousel() {
        const slides = document.querySelectorAll('#slides .slides-container li');
        const prevButton = document.querySelector('.slides-navigation .prev');
        const nextButton = document.querySelector('.slides-navigation .next');
        const pagination = document.querySelectorAll('.slides-pagination a');
        let currentSlide = 0;
        let slideInterval;

    //    este muestra la primera imagen
        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.style.opacity = (i === index) ? 1 : 0; 
                pagination[i].classList.toggle('current', i === index);
            });
            currentSlide = index;
        }

    //    cambioo de la imegensita automatico 
        function startAutoSlide() {
            slideInterval = setInterval(() => {
                showSlide((currentSlide + 1) % slides.length);
            }, 5000); 
        }


      

        
        prevButton.addEventListener('click', (e) => {
            e.preventDefault();
            stopAutoSlide(); 
            showSlide((currentSlide - 1 + slides.length) % slides.length); 
            startAutoSlide(); 
        });

      
        nextButton.addEventListener('click', (e) => {
            e.preventDefault();
            stopAutoSlide(); 
            showSlide((currentSlide + 1) % slides.length); 
            startAutoSlide();
        });

       
        pagination.forEach((dot, index) => {
            dot.addEventListener('click', (e) => {
                e.preventDefault();
                stopAutoSlide(); 
                showSlide(index); 
                startAutoSlide(); 
            });
        });

        showSlide(currentSlide); 
        startAutoSlide(); 
    }
});
// ventanaaa emergenteee

var modal = document.getElementById("modal");


var span = document.getElementsByClassName("close")[0];


var profileLink = document.querySelector(".profile-link");

profileLink.onclick = function() {
    modal.style.display = "block";
}


span.onclick = function() {
    modal.style.display = "none";
}


window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
