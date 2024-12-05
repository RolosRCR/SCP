<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;

    protected $table = 'pagos';  
    protected $primaryKey = 'id_pago'; 
    public $timestamps = false;  

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente');
    }
}
