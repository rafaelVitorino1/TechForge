<?php

namespace Database\Seeders;

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
            'titulo' => 'UPGRADE/PEÇAS AVULSAS',
            'conteudo' => 'Pessoal, boa tarde.
                Estou querendo fazer um upgrade no meu pc pra rodar alguns jogos (lost ark, dota 2), não faço questão de rodar as coisas no alto ou até mesmo no médio. pretendo gastar entre 3 a 4k.
                Fiz o levantamento de uns 3 kits, por favor qual seria melhor?
                Kit 1:
                - MSI MAG B560 TOMAHAWK WIFI, Intel LGA 1200, ATX, DDR4 - 911-7D15-002
                - Processador Intel Core i5-10400, Cache 12MB, 2.9GHz (4.3GHz Max Turbo), LGA 1200 - BX8070110400
                - SSD XPG S41 TUF, 512GB, M.2, PCIe, Leituras: 3500MB/s e Gravações: 2400MB/s - AGAMMIXS41-512G-C
                - 2 x Memória Crucial Ballistix 8GB DDR4 3000 MHz, CL15, Preto - BL8G30C15U4B
                Obs: Melhor placa mãe.
                Kit 2:
                - Placa Mãe Gigabyte B560M AORUS ELITE (rev. 1.0), LGA1200, Micro ATX, DDR4
                - Processador Intel Core i5-10400, Cache 12MB, 2.9GHz (4.3GHz Max Turbo), LGA 1200 - BX8070110400
                - SSD XPG S41 TUF, 512GB, M.2, PCIe, Leituras: 3500MB/s e Gravações: 2400MB/s - AGAMMIXS41-512G-C
                - 2 x Memória Crucial Ballistix 8GB DDR4 3000 MHz, CL15, Preto - BL8G30C15U4B
                Obs: mais barato das três, porem, pelo o que entendi, certas funções da placa mãe só são habilitadas se o processador por da 11ª geração.
                Kit 3:
                - Placa Mãe Gigabyte B560M AORUS ELITE (rev. 1.0), LGA1200, Micro ATX, DDR4
                - PProcessador Intel Core i5-11400 11ª Geração, Cache 12MB, 2.6 GHz (4.4GHz Turbo), LGA1200 - BX8070811400
                - SSD XPG S41 TUF, 512GB, M.2, PCIe, Leituras: 3500MB/s e Gravações: 2400MB/s - AGAMMIXS41-512G-C
                - 2 x Memória Corsair Vengeance LPX 8GB, 3200MHz, DDR4, CL16, Preta - CMK8GX4M1E3200C16
                Obs: melhor processador e memórias.
                Já possuo:
                - NVIDIA ASUS GeForce GTX 1050 TI 4GB GDDR5 CERBERUS
                - Corsair GS600 600W
                - HD 1T',
            'user_id' => 1,
            'categoria_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('postagens')->insert([
            'titulo' => 'Sobre dúvidas e compras de smartphones',
            'conteudo' => 'Olá a todos, criando esse tópico para ajudar as pessoas que querem comprar um novo
             smartphone e tem dúvidas sobre qual é o melhor(sem necessidade de criar outro tópico, pergunte aqui), qual tem o melhor custo benefício
              ou quanto vale um smart em especifico.
             Para tentar organizar o tópico resolvi redigir umas regras básicas para o bom convívio de quem tem dúvida e quem quer ajudar.',
            'user_id' => 1,
            'categoria_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('postagens')->insert([
            'titulo' => 'Windows 11',
            'conteudo' => 'asdsad',
            'user_id' => 1,
            'categoria_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
