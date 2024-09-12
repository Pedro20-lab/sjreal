@extends('welcome')

@section('habs')
@vite(['resources/css/reservas.css', 'resources/js/reserva.js'])
@foreach ($habitaciones as $habitacion)
<div class="room-card">
    <img src="{{Vite::asset('resources/images/habitacion_beige.jpg')}}" alt="Habitación Familiar" class="room-image">
    <div class="room-info">
      <h3>{{ $habitacion->tipo_habitacion}}</h3>
      <p><i class="fa fa-users"></i>Maximo para {{$habitacion->capacidad_habitacion}}</p>
      <p><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
          class="fa fa-star"></i><i class="fa fa-star"></i></p>
      <p class="description">{{ $habitacion->descripcion_habitacion}}</p>
    </div>
    <div class="room-reserve">
      <button class="reserve-button">Añadir a la reserva </button>
      <p>Desde</p>
      <p class="price">{{ $habitacion->precio_habitacion}}</p>
    </div>
  </div>
@endforeach
@endsection