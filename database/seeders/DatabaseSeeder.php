<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Kitting;
use App\Models\UnidadCarga;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            almacenSeeder::class,
            ClienteSeeder::class,
            ColoniaSeeder::class,
            DelegacionSeeder::class,
            EmpresaSeeder::class,
            PaisSeeder::class,
            RemitenteSeeder::class,

        ]);
    }
}
