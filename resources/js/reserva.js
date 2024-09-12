class ReservaComponent {
    constructor() {
    
    }
  
    ngOnInit() {
      if (typeof window !== 'undefined' && typeof document !== 'undefined') {
        this.initDatePickers();
      }
    }
  
    initDatePickers() {
      const checkIn = document.getElementById('check-in-reserva');
      const checkOut = document.getElementById('check-out-reserva');
  
      const hoy = new Date().toISOString().split('T')[0];
      checkIn.min = hoy;
      checkOut.min = hoy;
  
      const validarFechas = () => {
        const fechaEntrada = new Date(checkIn.value);
        const fechaSalida = new Date(checkOut.value);
        if (fechaSalida <= fechaEntrada) {
            alert("La fecha de salida debe ser posterior a la fecha de entrada.");
            checkOut.value = "";
        }
    };
    
  
      checkIn.addEventListener('change', () => {
        checkOut.min = checkIn.value;
        validarFechas();
      });
  
      checkOut.addEventListener('change', validarFechas);
    }
  }
  
  
  const reservaComponent = new ReservaComponent();
  reservaComponent.ngOnInit();


const modal = document.getElementById("modal");


const modifyButton = document.querySelector(".modify-button");


const closeButton = document.querySelector(".close-button");

 
modifyButton.onclick = function() {
    modal.style.display = "block";
}


closeButton.onclick = function() {
    modal.style.display = "none";
}


window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

const botonesReserva = document.querySelectorAll('.reserve-button');


function calcularNoches(fechaEntrada, fechaSalida) {
    const fechaEntradaObj = new Date(fechaEntrada);
    const fechaSalidaObj = new Date(fechaSalida);
    const diferenciaMs = fechaSalidaObj - fechaEntradaObj;
    const diferenciaDias = diferenciaMs / (1000 * 60 * 60 * 24);
    return Math.floor(diferenciaDias); 
}


function extraerTarifa(tarifaTexto) {
    
    const tarifaNumeros = tarifaTexto.replace(/[^0-9,.]/g, '');
    
    return parseFloat(tarifaNumeros.replace('.', '').replace(',', '.'));
}


botonesReserva.forEach(boton => {
    boton.addEventListener('click', function() {
        
        const fechaEntrada = document.getElementById('check-in-reserva').value;
        const fechaSalida = document.getElementById('check-out-reserva').value;

        
        const roomCard = this.closest('.room-card');
        const nombreHabitacion = roomCard.querySelector('.room-info h3').textContent;
        const tarifaHabitacionTexto = roomCard.querySelector('.price').textContent;
        const tarifaHabitacion = extraerTarifa(tarifaHabitacionTexto);


        if (fechaEntrada && fechaSalida) {
           
            const numeroNoches = calcularNoches(fechaEntrada, fechaSalida);

            
            const costoTotal = tarifaHabitacion * numeroNoches;

            
            const totalFormateado = costoTotal.toLocaleString('es-CO', {
                style: 'currency',
                currency: 'COP'
            });

            
            const carritoReserva = document.querySelector('.cart');
            carritoReserva.innerHTML = `
                <h2>Tu Reserva</h2>
                <div class="reserve-info">
                    <div><p><strong>Entrada:</strong> ${fechaEntrada}</p></div>
                    <div><p><strong>Salida:</strong> ${fechaSalida}</p></div>
                    <div><p><strong>Noches:</strong> ${numeroNoches}</p></div>
                    <div><p><strong>Habitación:</strong> ${nombreHabitacion}</p></div>
                    <div><p><strong>Tarifa:</strong> ${tarifaHabitacionTexto}</p></div>
                </div>
                <div class="reserve-total">
                    <p><strong>Total:</strong> ${totalFormateado}</p>
                </div>
                <div class="cart-footer">
                    <button id="confirm-button" class="confirm-button">Confirmar Reserva</button>
                </div>
            `;
        } else {
            
            alert('Por favor, selecciona ambas fechas antes de añadir a la reserva.');
        }
    });
});

