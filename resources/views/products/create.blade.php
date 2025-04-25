@extends('layouts.app')

@section('title', 'Agregar Nuevo Producto')

@section('content')
<div class="container py-5" style="margin-top: 70px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Agregar Nuevo Producto</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="name">Nombre del Producto</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="description">Descripción</label>
                            <textarea name="description" id="description" class="form-control" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="price">Precio</label>
                            <input type="number" name="price" id="price" class="form-control" step="0.01" min="0" required>
                        </div>

                        <div class="form-group">
                            <label for="product_category_id">Categoría</label>
                            <select name="product_category_id" id="product_category_id" class="form-control" required>
                                <option value="">Seleccione una categoría</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="image">Imagen del Producto</label>
                            <input type="file" name="image" id="image" class="form-control-file">
                            <small class="form-text text-muted">Formatos aceptados: jpeg, png, jpg, gif (max 2MB)</small>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Guardar Producto
                            </button>
                            <a href="{{ route('products.index') }}" class="btn btn-secondary">
                                <i class="fas fa-arrow-left"></i> Cancelar
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection