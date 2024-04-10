<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Categoria; //utilizar la el modelo categoria
use Iluminate\Support\Str; //para tener metodo adicionales(string)

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 1; $i <= 100; $i++){
            Categoria::create([
                'nombre' => 'Categoria' . Str::random(5),
                'imagen' => 'imagen' . $i . '.jpg',
                'activo' => rand(0, 1) == 1 ? true : false,
            ]);
        }
    }
}
