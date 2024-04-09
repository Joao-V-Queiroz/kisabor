<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use function Laravel\Prompts\info;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        info('> Iniciando inserção de dados no banco de dados...');

        info('> Criando userAdmin');

		User::create([
			'id' => 1,
			'name' => 'User Admin',
			'email' => 'admin@admin.com',
			'email_verified_at' => now(),
			'remember_token' => 'rKYAELCsWha',
			'password' => bcrypt('123456'),
		]);

    }
}
