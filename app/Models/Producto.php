<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';
    protected $fillable = ['nombre', 'categoria', 'precio', 'cantidad', 'unidad'];
    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $hidden = ['created_at', 'updated_at'];
    protected $casts = [
        'precio' => 'float',
        'cantidad' => 'integer'
    ];
    protected $attributes = [
        'categoria' => 'bazar',
        'unidad' => 'unidad'
    ];
    protected $appends = ['precio_iva'];

    public function getPrecioIvaAttribute()
    {
        return $this->precio * 1.21;
    }
}
