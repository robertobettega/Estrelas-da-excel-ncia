<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Cria um usuário administrador, se não existir
        User::firstOrCreate([
            'email' => 'admin@example.com'
        ], [
            'name' => 'Admin',
            'password' => bcrypt('admin'), // Use bcrypt para criptografar a senha
            'is_admin' => true, // Define como administrador
        ]);
    }
}
