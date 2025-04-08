<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    /**
     * Los atributos que son asignables en masa.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'total',
        'status',
        'order_date'
    ];

    /**
     * Los atributos que deben convertirse a tipos de datos nativos.
     *
     * @var array
     */
    protected $casts = [
        'order_date' => 'date',
        'total' => 'decimal:2',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Los atributos que deben tratarse como fechas.
     *
     * @var array
     */
    protected $dates = [
        'order_date',
        'created_at',
        'updated_at'
    ];

    /**
     * Valores posibles para el campo 'status'
     */
    public const STATUSES = [
        'pendiente' => 'Pendiente',
        'procesando' => 'Procesando',
        'completado' => 'Completado',
        'cancelado' => 'Cancelado',
    ];

    /**
     * Relación con el modelo User (Usuario)
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Obtener el estado formateado
     *
     * @return string
     */
    public function getFormattedStatusAttribute()
    {
        return self::STATUSES[$this->status] ?? $this->status;
    }

    /**
     * Obtener el total formateado
     *
     * @return string
     */
    public function getFormattedTotalAttribute()
    {
        return '$' . number_format($this->total, 2);
    }

    /**
     * Obtener la fecha de orden formateada
     *
     * @return string
     */
    public function getFormattedOrderDateAttribute()
    {
        return $this->order_date->format('d/m/Y');
    }

    /**
     * Scope para filtrar por estado
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string $status
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeStatus($query, $status)
    {
        return $query->where('status', $status);
    }

    /**
     * Scope para órdenes recientes
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeRecent($query)
    {
        return $query->orderBy('order_date', 'desc');
    }

    /**
     * Verificar si la orden está completada
     *
     * @return bool
     */
    public function isCompleted()
    {
        return $this->status === 'completado';
    }

    /**
     * Verificar si la orden está pendiente
     *
     * @return bool
     */
    public function isPending()
    {
        return $this->status === 'pendiente';
    }
}