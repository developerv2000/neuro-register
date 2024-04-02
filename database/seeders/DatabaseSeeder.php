<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Factories\PatientFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = 'Administrator';
        $user->email = 'admin@mail.ru';
        $user->is_admin = 1;
        $user->password = bcrypt('12345');
        $user->save();

        $user = new User();
        $user->name = 'Guest';
        $user->email = 'guest@mail.ru';
        $user->is_admin = 0;
        $user->password = bcrypt('12345');
        $user->save();

        $this->call([
            PatientSeeder::class,
        ]);
    }
}
