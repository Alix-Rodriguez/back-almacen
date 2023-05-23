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
            CentrocostoSeeder::class,
            ClienteSeeder::class,
            ColoniaSeeder::class,
            ConfigloteSeeder::class,
            DelegacionSeeder::class,
            EmpleadosSeeder::class,
            EmpresaSeeder::class,
            Etiqueta_inSeeder::class,
            Etiqueta_outSeeder::class,
            EtiquetadoSeeder::class,
            KittingSeeder::class,
            LayoutqaSeeder::class,
            LayoutSeeder::class,
            LineaproductoSeeder::class,
            LocalidadSeeder::class,
            MarcaSeeder::class,
            NivelSeeder::class,
            OrdencompraSeeder::class,
            PaisSeeder::class,
            ProgramaciondetalleSeeder::class,
            ProgramacionprogresoSeeder::class,
            ProveedorSeeder::class,
            ProductoSeeder::class,
            RackSeeder::class,
            RecepcionNocatalogadoSeeder::class,
            RecepcionOrdencerradaSeeder::class,
            RecepcionProcesarSeeder::class,
            RecepcionSeeder::class,
            RecepcionUbicarcerrarSeeder::class,
            RemitenteSeeder::class,
            RutaSeeder::class,
            UbicacionSeeder::class,
            UnidadcargaSeeder::class,
            UnidadmedidaSeeder::class,
            ZonaSeeder::class


        ]);
    }
}
