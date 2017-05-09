<?php

namespace produccion;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuario';
    protected $primaryKey = 'Id';
    public $timestamps = false;

    protected $fillable = [
      'Nom',
      'Ap',
      'User',
      'Pass',
      'Dpto',
      'Puesto',
      'Rol'
    ];

    protected $guarded = [];
}
