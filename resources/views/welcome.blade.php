@extends('index')
@section('content')
<header>
    <div class="header-container">
        <div class="logo-container">
         <a href="index.html">
            <img src="  {{Vite::asset('resources/images/Logo-proyecto(1).png')}} " alt="Logo del Hotel" class="logo-img">
         </a>
            <div class="hotel-name">SAN JOSÉ REAL</div>
        </div>
        <div class="menu-container">
            <div class="nav-menu">
                <a href="secciones/reservas/reservas.html" class="nav-link">Reserva</a>
                <a href="secciones/alojamiento/alojamiento.html" class="nav-link">Alojamiento</a>
                <a href="secciones/galeria/galeria.html" class="nav-link">Galeria</a>
            </div>
            <div class="divider"></div>
            <div class="footer-menu">
                <a href="secciones/contactanos/contactanos.html" class="footer-link">Contactanos</a>
                <a href="secciones/servicios/servicios.html" class="nav-link">Servicios</a>
                <a href="secciones/acerca/acerca.html" class="footer-link">Nosotros</a>
            </div>
        </div>
        <div class="user-menu">
            <a href="#es" class="language-link">ES</a> | 
            <a href="#en" class="language-link">EN</a>
            <a href="" class="profile-link">
                <img src="{{Vite::asset('resources/images/perfilblanco.png')}}" alt="Perfil">
            </a>
        </div>

        <!-- ventanaa emergente -->
        <div id="modal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <a href="{{url('personas/create')}}" class="modal-link">Iniciar sesión</a>
                <a href="{{url('personas/create')}}" class="modal-link">Registrarse</a>
            </div>
        </div>
    </div>
</header>

<div class="body-container">
    <div id="slides" class="cover-slides">
        <ul class="slides-container">
            <li class="text-center">
                <img src="{{Vite::asset('resources/images/habitacion_azulygris.jpg')}}" alt="Slide 1">
            </li>
            <li class="text-center">
                <img src="{{Vite::asset('resources/images/fachada_hotel.jpg')}}" alt="Slide 2">
            </li>
            <li class="text-center">
                <img src="{{Vite::asset('resources/images/habitacion_beige.jpg')}}" alt="Slide 3">
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="prev">❮</a>
            <a href="#" class="next">❯</a>
        </div>
        <div class="slides-pagination">
            <a href="#" class="current"></a>
            <a href="#"></a>
            <a href="#"></a>
        </div>
    </div>

    <div class="content">
        <div id="fecha-reserva">
            <form action="" id="form-fechas">
                <div class="date-wrapper">
                    <label for="check-in">Entrada</label>
                    <input type="date" id="check-in" name="check-in" required>
                </div>
                <div class="date-wrapper">
                    <label for="check-out">Salida</label>
                    <input type="date" id="check-out" name="check-out" required>
                </div>
                <button type="button" id="boton-reserva" disabled>RESERVAR</button>
            </form>
        </div>
    </div>
</div>

@yield('habs')

<!-- bienvenida -->
<div class="seccion-bienvenida">
    <div class="contenedor">
        <div class="fila">
            <div class="columna-izquierda">
                <img src="{{Vite::asset('resources/images/Municipio de Sibaté.jpg')}}" alt="Imagen de bienvenida" class="img-fluid">
            </div>
            <div class="columna-derecha text-center">
                <div class="contenido-interior">
                    <h1>Bienvenido a <span>San Jose Real</span></h1>
                    <h4>En Sibaté</h4>
                    <p>Disfruta de la tranquilidad de Sibaté a solo minutos de Bogotá en el Hotel San José Real. </p>
                    <p>Con una ubicación estratégica, ambiente acogedor y excelente relación calidad-precio, es la opción ideal para una escapada relajante cerca de la ciudad.</p>
                    <a class="btn btn-lg btn-circulo btn-outline-nuevo-blanco" href="secciones/reservas/reservas.html">Reservar ahora</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- habitaciones -->
<h2 class="titulo-habitaciones">NUESTRAS HABITACIONES</h2>

<div id="habitaciones">
<div class="habitacion-item">
    <img src="{{Vite::asset('resources/images/habitacion_azul.jpg')}}" alt="" class="habitacion-imagen">
    <div class="habitacion-info">
        <h3>Habitacion individual</h3>
        <p> Ideal para viajeros solitarios, la habitación individual ofrece una cómoda cama individual, un espacio funcional y acogedor, con todas las comodidades esenciales para una estancia agradable. Perfecta para quienes buscan privacidad y tranquilidad durante su viaje</p>
        <p class="habitacion-precio"><strong>$100.000 COP por noche</strong></p>
        <a href="secciones/reservas/reservas.html" class="boton-reserva">Reservar</a>
    </div>
</div>

<div class="habitacion-item">
    <img src="{{Vite::asset('resources/images/cabana_camas_blancas.jpg')}}" alt="" class="habitacion-imagen">
    <div class="habitacion-info">
        <h3>Habitacion doble</h3>
        <p> La habitación doble es ideal para parejas o amigos que desean compartir el espacio. Cuenta con una cama matrimonial o dos camas individuales, y está equipada con comodidades modernas para garantizar una estancia cómoda y relajante. Ideal para escapadas en pareja o viajes con amigos.</p>
        <p class="habitacion-precio"><strong>$150.000 COP por noche</strong></p>
        <a href="secciones/reservas/reservas.html" class="boton-reserva">Reservar</a>
    </div>
</div>

<div class="habitacion-item">
    <img src="{{Vite::asset('resources/images/cama_con_sofa_azul.jpg')}}" alt="" class="habitacion-imagen">
    <div class="habitacion-info">
        <h3>Habitacion familiar </h3>
        <p> La habitación familiar está diseñada para alojar a grupos o familias, ofreciendo espacio adicional y múltiples camas. Equipado con áreas de descanso amplias y comodidades adecuadas para niños, es perfecta para familias que buscan confort y funcionalidad durante su estancia.</p>
        <p class="habitacion-precio"><strong>$200.000 COP por noche</strong></p>
        <a href="secciones/reservas/reservas.html" class="boton-reserva">Reservar</a>
    </div>
</div>
</div>

<!-- mapaaaa -->

<div class="ubicacion-container">
<div class="title-map">
    <h1>Una localizacion serena y pintoresca </h1>
    <h2>Cr 7a #5A-49, Sibaté, Cundinamarca.</h2>
    <p>Ubicado en el encantador pueblito de Sibaté, nuestro hotel ofrece una experiencia única de tranquilidad y confort en un entorno rural pintoresco. Situado en Cr 7a #5A-49, este refugio acogedor combina la belleza del paisaje campestre con la comodidad moderna. Disfruta de habitaciones elegantes y bien equipadas, ideales para relajarte después de explorar los alrededores.</p>
</div>

<div class="map-content">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3977.5871233282396!2d-74.26304612502203!3d4.487521695486818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNMKwMjknMTUuMSJOIDc0wrAxNSczNy43Ilc!5e0!3m2!1ses!2sco!4v1708658396182!5m2!1ses!2sco"
        width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</div>
</div>

<!-- footer --> 
<!-- pd:esto esta re largooo esteban me va a matar xdddd -->

<footer class="footer-section">
<div class="container">
    <div class="footer-cta pt-5 pb-5 d-flex">
        <div class="single-cta">
            <i class="fas fa-map-marker-alt"></i>
            <div class="cta-text">
                <h4>Ubicacion</h4>
                <span>Sibate</span>
            </div>
        </div>
        <div class="single-cta">
            <i class="fas fa-phone"></i>
            <div class="cta-text">
                <h4>Telefono</h4>
                <span>00000000000</span>
            </div>
        </div>
        <div class="single-cta">
            <i class="far fa-envelope-open"></i>
            <div class="cta-text">
                <h4>correo</h4>
                <span>sjrealgmail.com</span>
            </div>
        </div>
    </div>
    <div class="footer-content pt-5 pb-5">
        <div class="footer-widget">
            <div class="footer-logo">
                <img src="{{Vite::asset('resources/images/Logo-proyecto(1).png')}}" class="img-fluid" alt="Logo de tu empresa">
            </div>
            <div class="footer-text">
                <p>ERES BIENVENIDO</p>
            </div>
            <div class="footer-social-icon">
                <span>Redes Sociales</span>
                <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
                <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
            </div>
        </div>

        <div class="footer-widget">
            <div class="footer-widget-heading">
                <h3>Menu</h3>
            </div>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Servicios</a></li>
                <li><a href="#">Acerca de</a></li>
                <li><a href="#">Alojamiento</a></li>
                <li><a href="#">Contacto</a></li>
                <li><a href="#">Galeria</a></li>

            </ul>
        </div>

        <div class="footer-widget">
            <div class="footer-widget-heading">
                <h3>Contactanos</h3>
            </div>
            <div class="footer-text mb-25">
                <p>¿tines dudas o preguntas? envianos un mensaje</p>
            </div>
            <div class="subscribe-form">
                <form action="#">
                    <input type="text" placeholder="Email Address">
                    <button><i class="fab fa-telegram-plane"></i></button>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                <div class="copyright-text">
                    <p>Copyright &copy; 2024, All Right Reserved <a href="">SENA</a></p>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right"></div>
        </div>
    </div>
</div>
</footer>    
@endsection
