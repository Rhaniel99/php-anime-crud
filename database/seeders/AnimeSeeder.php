<?php

namespace Database\Seeders;
use App\Models\ModelAnime;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(ModelAnime $anime)
    {
        $anime -> create([
            'nome'=>'Naruto',
            'ep_qtd'=>'20',
            'duracao_ep'=>'45',
            'id_studio'=>'2'
        ]);
        $anime -> create([
            'nome'=>'Chainsawman',
            'ep_qtd'=>'15',
            'duracao_ep'=>'21',
            'id_studio'=>'1'
        ]);
        $anime -> create([
            'nome'=>'One Piece',
            'ep_qtd'=>'100000',
            'duracao_ep'=>'120',
            'id_studio'=>'1'
        ]);
        $anime -> create([
            'nome'=>'Parasyte',
            'ep_qtd'=>'14',
            'duracao_ep'=>'20',
            'id_studio'=>'2'
        ]);
    }
}
