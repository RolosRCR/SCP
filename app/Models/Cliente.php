<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'clientes';  
    protected $primaryKey = 'id_cliente';  
    public $timestamps = false; 
    public function clientes()
    {
        return $this->hasMany(Cliente::class, 'id_usuario');
    }
 
}
