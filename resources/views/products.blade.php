@extends('layouts.app')
@section('content')

<div class="row" style="margin-left: 0%;"> <!-- Fila para organizar los productos -->
          
          <div class="col-md-3 col-sm-6 mb-4" onclick="enlargeCard(this)"> <!-- Columna para el primer producto -->
            <div class="pet-card"> <!-- Contenedor para la tarjeta del producto -->
              <img src="https://via.placeholder.com/400x200?text=Producto+1" alt="Producto 1" class="pet-image"> <!-- Imagen del producto -->
              <div class="pet-info"> <!-- Contenedor para la información del producto -->
                <h3 class="pet-name">Comida para Gatos</h3> <!-- Nombre del producto -->
                <p class="pet-description">Alimento de alta calidad para gatos, ideal para su salud.</p> <!-- Descripción del producto -->
                <div class="d-flex justify-content-between"> <!-- Contenedor flex para los botones de acción -->
                    <button class="btn-action flex-grow-1">agregar <i class="fas fa-shopping-cart"></i></button> <!-- Botón para agregar al carrito -->
                </div>
              </div>
            </div>
          </div>
        </div>
</div>

@endsection
