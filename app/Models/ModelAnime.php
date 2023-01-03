<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelAnime extends Model
{
    use HasFactory;
    // dessa maneira o sistema entende que estamos falando dessa tabela.
    protected $table='anime';
    protected $fillable=['nome', 'id_studio', 'ep_qtd', 'duracao_ep'];


    // Função para relação entre tabelas, muitos para um. 2 -> chave estrangeira do proprio studio e a chave local sera id_studio.
    public function relStudios()
    {
        return $this->hasOne('App\Models\ModelStudio','id', 'id_studio');
    }

}
