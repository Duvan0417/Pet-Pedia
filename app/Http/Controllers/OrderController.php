<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Muestra una lista de todas las órdenes
     */
    public function index()
    {
        // Obtiene las órdenes más recientes con paginación (10 por página)
        $orders = Order::with('user') // Carga la relación con el usuario
                      ->latest()     // Ordena por las más recientes
                      ->paginate(10); // Paginación
        
        return view('orders.index', compact('orders'));
    }

    /**
     * Muestra el formulario para crear una nueva orden
     */
    public function create()
    {
        return view('orders.create');
    }

    /**
     * Almacena una nueva orden en la base de datos
     */
    public function store(Request $request)
    {
        // Validación de los datos del formulario
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id', // Debe existir en la tabla users
            'total' => 'required|numeric|min:0',     // Número positivo
            'status' => 'required|string|max:255',   // Texto máximo 255 caracteres
            'order_date' => 'required|date',         // Fecha válida
        ]);

        // Crea la nueva orden
        $order = Order::create($validated);

        // Redirecciona a la vista de detalle con mensaje de éxito
        return redirect()->route('orders.show', $order)
                         ->with('success', 'Orden creada exitosamente.');
    }

    /**
     * Muestra los detalles de una orden específica
     */
    public function show(Order $order)
    {
        return view('orders.show', compact('order'));
    }

    /**
     * Muestra el formulario para editar una orden
     */
    public function edit(Order $order)
    {
        return view('orders.edit', compact('order'));
    }

    /**
     * Actualiza una orden en la base de datos
     */
    public function update(Request $request, Order $order)
    {
        // Validación (igual que en store)
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'total' => 'required|numeric|min:0',
            'status' => 'required|string|max:255',
            'order_date' => 'required|date',
        ]);

        // Actualiza la orden
        $order->update($validated);

        // Redirecciona a la vista de detalle con mensaje de éxito
        return redirect()->route('orders.show', $order)
                         ->with('success', 'Orden actualizada exitosamente.');
    }

    /**
     * Elimina una orden de la base de datos
     */
    public function destroy(Order $order)
    {
        $order->delete();

        // Redirecciona al listado con mensaje de éxito
        return redirect()->route('orders.index')
                         ->with('success', 'Orden eliminada exitosamente.');
    }

    /**
     * Métodos adicionales útiles
     */

    /**
     * Cambia el estado de una orden
     */
    public function changeStatus(Request $request, Order $order)
    {
        $request->validate([
            'status' => 'required|string|max:255',
        ]);

        $order->update(['status' => $request->status]);

        return back()->with('success', 'Estado de la orden actualizado.');
    }

    /**
     * Obtiene las órdenes de un usuario específico
     */
    public function userOrders($userId)
    {
        $orders = Order::where('user_id', $userId)->get();
        
        return view('orders.user', compact('orders'));
    }
}