<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pack extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'home_index', // Establece el orden en que se muestra. Si es 0 no se muestra
        'available',
        'price',
        'offer_price',
        'offer_start',
        'offer_end',
        'color',
        'items', // Array(Map) de strings-atributo
        'info', // Array de strings
        'more_info', // Array de strings
        'deleted_at', // Soft delete
        'featured', // Indica si el pack es destacado
    ];
}
