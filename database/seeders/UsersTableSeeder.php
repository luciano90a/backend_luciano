<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'name1',
            'lastname' => 'apellido1',
            'email' => 'name1@correo.com',
            'city' => 'texas',
            'pais' => 'eeuu',
            'resumen' => 'Descripción de Ejemplo',
            'frameworks' => json_encode([
                ['name' => 'Laravel', 'level' => 'Avanzado', 'year' => 2010],
                ['name' => 'Vue.js', 'level' => 'Intermedio', 'year' => 2015],
            ]),
            'hobbies' => json_encode([
                ['name' => 'Deportes', 'description' => 'Jugar al fútbol'],
                ['name' => 'Música', 'description' => 'Tocar la guitarra'],
            ]),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'name2',
            'lastname' => 'apellido2',
            'email' => 'name2@correo.com',
            'city' => 'texas',
            'pais' => 'eeuu',
            'resumen' => 'Descripción de Ejemplo',
            'frameworks' => json_encode([
                ['name' => 'Laravel', 'level' => 'Avanzado', 'year' => 2010],
                ['name' => 'Vue.js', 'level' => 'Intermedio', 'year' => 2015],
            ]),
            'hobbies' => json_encode([
                ['name' => 'Deportes', 'description' => 'Jugar al fútbol'],
                ['name' => 'Música', 'description' => 'Tocar la guitarra'],
            ]),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'name3',
            'lastname' => 'apellido3',
            'email' => 'name3@correo.com',
            'city' => 'texas',
            'pais' => 'eeuu',
            'resumen' => 'Descripción de Ejemplo',
            'frameworks' => json_encode([
                ['name' => 'Laravel', 'level' => 'Avanzado', 'year' => 2010],
                ['name' => 'Vue.js', 'level' => 'Intermedio', 'year' => 2015],
            ]),
            'hobbies' => json_encode([
                ['name' => 'Deportes', 'description' => 'Jugar al fútbol'],
                ['name' => 'Música', 'description' => 'Tocar la guitarra'],
            ]),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'name4',
            'lastname' => 'apellido4',
            'email' => 'name4@correo.com',
            'city' => 'texas',
            'pais' => 'eeuu',
            'resumen' => 'Descripción de Ejemplo',
            'frameworks' => json_encode([
                ['name' => 'Laravel', 'level' => 'Avanzado', 'year' => 2010],
                ['name' => 'Vue.js', 'level' => 'Intermedio', 'year' => 2015],
            ]),
            'hobbies' => json_encode([
                ['name' => 'Deportes', 'description' => 'Jugar al fútbol'],
                ['name' => 'Música', 'description' => 'Tocar la guitarra'],
            ]),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'name5',
            'lastname' => 'apellido5',
            'email' => 'name5@correo.com',
            'city' => 'texas',
            'pais' => 'eeuu',
            'resumen' => 'Descripción de Ejemplo',
            'frameworks' => json_encode([
                ['name' => 'Laravel', 'level' => 'Avanzado', 'year' => 2010],
                ['name' => 'Vue.js', 'level' => 'Intermedio', 'year' => 2015],
            ]),
            'hobbies' => json_encode([
                ['name' => 'Deportes', 'description' => 'Jugar al fútbol'],
                ['name' => 'Música', 'description' => 'Tocar la guitarra'],
            ]),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'name6',
            'lastname' => 'apellido6',
            'email' => 'name6@correo.com',
            'city' => 'texas',
            'pais' => 'eeuu',
            'resumen' => 'Descripción de Ejemplo',
            'frameworks' => json_encode([
                ['name' => 'Laravel', 'level' => 'Avanzado', 'year' => 2010],
                ['name' => 'Vue.js', 'level' => 'Intermedio', 'year' => 2015],
            ]),
            'hobbies' => json_encode([
                ['name' => 'Deportes', 'description' => 'Jugar al fútbol'],
                ['name' => 'Música', 'description' => 'Tocar la guitarra'],
            ]),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'name78',
            'lastname' => 'apellido84',
            'email' => 'name884@correo.com',
            'city' => 'texas',
            'pais' => 'eeuu',
            'resumen' => 'Descripción de Ejemplo',
            'frameworks' => json_encode([
                ['name' => 'Laravel', 'level' => 'Avanzado', 'year' => 2010],
                ['name' => 'Vue.js', 'level' => 'Intermedio', 'year' => 2015],
            ]),
            'hobbies' => json_encode([
                ['name' => 'Deportes', 'description' => 'Jugar al fútbol'],
                ['name' => 'Música', 'description' => 'Tocar la guitarra'],
            ]),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
