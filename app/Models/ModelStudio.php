<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class ModelStudio extends Model
{
    use HasFactory;
    protected $table='studio';

    // Função para relação entre tabelas, um para muitos.
    public function relAnimes()
    {
        return $this->hasMany('App\Models\ModelAnime','id_studio');
    }
}
