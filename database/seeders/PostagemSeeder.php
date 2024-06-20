<?php

namespace Database\Seeders;

use App\Models\Postagem;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostagemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('postagens')->insert([
            'titulo' => 'Placa de video',
            'conteudo' => 'Melhor amiga do CPU',
            'user_id' => 1,
            'categoria_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('postagens')->insert([
            'titulo' => 'VS Code',
            'conteudo' => 'Editor de texto brabo.',
            'user_id' => 1,
            'categoria_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('postagens')->insert([
            'titulo' => 'Tomada',
            'conteudo' => 'De 3 Pinos :(',
            'user_id' => 1,
            'categoria_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('postagens')->insert([
            'titulo' => 'Windows 11',
            'conteudo' => 'Janelas onze :)',
            'user_id' => 1,
            'categoria_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
