@extends('layouts.app')

@section('title', 'Productos')

@section('content')
<div class="container-fluid py-5" style="margin-top: 70px;">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Nuestros Productos</h2>
        <a href="{{ route('products.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Agregar Producto
        </a>
    </div>

    <div class="row">
        @foreach($products as $product)
            <!-- ... tu código existente para mostrar productos ... -->
        @endforeach
    </div>
    
    <div class="row">
        <div class="col-12">
            {{ $products->links() }}
        </div>
    </div>
</div>
@endsection