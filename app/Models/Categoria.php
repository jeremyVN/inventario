<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
use HasFactory;
protected $fillable = ['nombre', 'descripcion'];
public function productos()
{
return $this->hasMany(Producto::class);
}
}
