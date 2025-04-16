<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        $this->call([
            CategoriaSeeder::class,
            NivelSeeder::class,
            CursoSeeder::class,
            AlunoSeeder::class,
            TurmaSeeder::class,
            ComprovanteSeeder::class,
            DeclaracaoSeeder::class,
            DocumentoSeeder::class,
        ]);
    }
}
