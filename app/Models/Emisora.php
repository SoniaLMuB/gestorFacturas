<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emisora extends Model
{
    protected $table = 'emisora';
    use HasFactory;
    protected $fillable = [
        'razon_social',
        'email',
        'rfc_emisora',
    ];
    
    
}
