<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts =[
            [
                'user_id' =>1,
                'title' => 'Primeiro post do adm',
                'content' => 'este é o primeiro post do adm do sistema, welcome  to my word'
            ],
            [
                'user_id' =>2,
                'title' => 'ola tudo bem?',
                'content' => 'quero respeito entre todos hein'
            ],
            [
                'user_id' =>2,
                'title' => 'segundo post do normal user',
                'content' => 'como se tornar adm?'
            ],
            [
                'user_id' =>1,
                'title' => 'faça vc o seu melhor',
                'content' => ' seja 1 porcento melhor cada dia'
            ],
            [
                'user_id' =>2,
                'title' => 'o importante é seguir mesmo com receios e medos ',
                'content' => 'programar é como dirigir... Eu não sei dirigir!'
            ],
            [
                'user_id' =>1,
                'title' => 'estudar na biblioteca é uma atividade terapeutica ',
                'content' => 'o tempo passa mais devagar, sua mente fica vazia e nada importa naquele momento além das suas metas'
            ],
        ];
        DB::table('posts')->insert($posts);
    }
}
