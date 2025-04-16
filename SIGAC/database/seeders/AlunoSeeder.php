<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlunoSeeder extends Seeder
{
    public function run()
    {
        $alunos = [
            [
                'nome' => 'João Silva',
                'email' => 'joao.silva@example.com',
                'cpf' => '123.456.789-00',
                'data_nascimento' => '1990-05-15',
                'telefone' => '(11) 99999-9999',
                'endereco' => 'Rua das Flores, 123',
                'cidade' => 'São Paulo',
                'estado' => 'SP',
                'cep' => '01234-567'
            ];

            foreach ($alunos as $aluno) {
                Aluno::create($aluno);
            }
        }
    }

    }
}
