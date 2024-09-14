@extends('index')
@section('form_personas')
<div class="container">
    <h2>Formulario de registro</h2>
    <form action="" method="post" id="formulario" class="formulario">
        <ul class="grid">

            <li id="group__name">
                <label class="validar" id="" for="first_name">Nombre:</label>
                <div class="primer_nombre">
                    <input class="validar_input" type="text" id="first_name" name="first_name" required>
                    <span class="material-symbols-outlined message-item">check_circle</span>
                    <span class="material-symbols-outlined message-item" id="false_symbols">
                        cancel
                    </span>
                </div>
                <p class="mensaje_error">los nombres solo pueden estar compuestos de letras y espacios</p>
            </li>

            <li id="group__apellido">
                <label class="validar" id="" for="last_name">Apellido:</label>
                <div class="apellido">
                    <input class="validar_input" type="text" id="last_name" name="last_name" required>
                    <span class="material-symbols-outlined message-item">check_circle</span>
                    <span class="material-symbols-outlined message-item" id="false_symbols">cancel</span>
                </div>
                <p class="mensaje_error">los apellidos solo pueden estar compuestos de letras y espacios</p>
            </li>

            <li id="group__tipoDocumento">
                <label class="validar" id="" for="document_type">Tipo de Documento:</label>
                <div class="select-class">
                    <select id="document_type" name="document_type" required>
                        <option value="">Seleccione</option>
                        <option value="Cédula de Ciudadanía">Cédula de Ciudadanía</option>
                        <option value="Tarjeta de Identidad">Tarjeta de Identidad</option>
                        <option value="Cedula extranjera">Cedula de extranjería</option>
                        <option value="Pasaporte">Pasaporte</option>
                    </select>
                </div>
            </li>

            <li id="group__documento">
                <label class="validar" id="" for="document_number">Nro. de Documento:</label>
                <div class="numero_documento">
                    <input class="validar_input" type="text" id="document_number" name="document_number" required>
                    <span class="material-symbols-outlined message-item">check_circle</span>
                    <span class="material-symbols-outlined message-item" id="false_symbols">cancel</span>
                </div>
                <p class="mensaje_error">El número de documento tiene entre 6 y 10 dígitos</p>
            </li>

            <li id="group__telefono">
                <label class="validar" id="" for="phone">Teléfono:</label>
                <div class="telefono">
                    <input class="validar_input" type="text" id="phone" name="phone" required>
                    <span class="material-symbols-outlined message-item">check_circle</span>
                    <span class="material-symbols-outlined message-item" id="false_symbols">cancel</span>
                </div>
                <p class="mensaje_error">Ingrese un número válido</p>
            </li>

            <li id="group__email">
                <label class="validar" id="" for="email">Email:</label>
                <div class="e-mail">
                    <input class="validar_input" type="email" id="email" name="email" required>
                    <span class="material-symbols-outlined message-item">check_circle</span>
                    <span class="material-symbols-outlined message-item" id="false_symbols">cancel</span>
                </div>
                <p class="mensaje_error">Ingrese un correo válido</p>
            </li>

            <li id="group__user">
                <label class="validar" id="" for="username">Usuario:</label>
                <div class="usuario">
                    <input class="validar_input" type="text" id="username" name="username" required>
                    <span class="material-symbols-outlined message-item">check_circle</span>
                    <span class="material-symbols-outlined message-item" id="false_symbols">cancel</span>
                </div>
                <p class="mensaje_error">El usuario tiene que ser de 4 a 16 carateres y solo puede contener letras, numeros, guión y guión bajo</p>
            </li>

            <li id="group__password">
                <label class="validar" id="" for="password">Contraseña:</label>
                <div class="contraseña">
                    <input class="validar_input" type="password" id="password" name="password" required>
                    <span class="material-symbols-outlined message-item">check_circle</span>
                    <span class="material-symbols-outlined message-item" id="false_symbols">cancel</span>

                </div>
                <p class="mensaje_error">La contraseña debe contener de 8 a 20 digitos, al menos 1 mayúscula, 1 minúscula, 1 número y 1 caracter especial como @$!%*?&</p>
            </li>

            <li class="li-buttons">
                <button type="submit" class="btn btn-login">Registrarse</button>
            </li>

            <li class="li-buttons">
                <button type="button" class="btn btn-cancel" onclick="">Cancelar
                    registro</button>
            </li>

        </ul>
    </form>

</div>
<script src="formulario.js"></script> 
@endsection