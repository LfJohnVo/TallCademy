<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'John Vo',
            'email' => 'john@gmail.com',
            'password' => bcrypt('Administrador1')
        ]);

        User::factory(99)->create();
    }
}
