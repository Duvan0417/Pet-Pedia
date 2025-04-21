<?php

namespace App\Http\Controllers;
use App\Models\forum_categories;
use Illuminate\Http\Request;

class ForumCategoriesController extends Controller
{
    //
    public function index()
    {
        $categories = forum_categories::all();
        return response()->json($categories);
    }

    // Crear una nueva categoría
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $category = forum_categories::create($request->all());

        return response()->json($category, 201);
    }

    // Mostrar una categoría específica
    public function show($id)
    {
        $category = forum_categories::with('forums')->findOrFail($id);
        return response()->json($category);
    }

    // Actualizar una categoría
    public function update(Request $request, $id)
    {
        $category = forum_categories::findOrFail($id);

        $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $category->update($request->all());

        return response()->json($category);
    }

    // Eliminar una categoría
    public function destroy($id)
    {
        $category = forum_categories::findOrFail($id);
        $category->delete();

        return response()->json(null, 204);
    }
}
