<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        DB::table('personas')->insert([
             'id'           =>      1,
            'carnet'            => 111,
            'nombre'          => 'Maikol',
            'apellido'          => 'Sanchez',
            'direccion'          => 'En algun lugar',
            'telefono'          => 419445,
            'tipo'          => 1,
            'estado'          => 1,
        ]);
        DB::table('personas')->insert([
            'id'           =>      2,
            'carnet'            => 222,
            'nombre'          => 'Juan',
            'apellido'          => 'Perez',
            'direccion'          => 'En algun lugar',
            'telefono'          => 5125125,
            'tipo'          => 0,
            'estado'          => 1,
        ]);
        DB::table('personas')->insert([
            'id'           =>      3,
            'carnet'            => 333,
            'nombre'          => 'Juan',
            'apellido'          => 'Ojeda',
            'direccion'          => 'En algun lugar',
            'telefono'          => 61361631,
            'tipo'          => 1,
            'estado'          => 1,
        ]);
        DB::table('personas')->insert([
            'id'           =>      4,
            'carnet'            => 444,
            'nombre'          => 'Rosanyela',
            'apellido'          => 'Hurtado',
            'direccion'          => 'En algun lugar',
            'telefono'          => 6315116,
            'tipo'          => 0,
            'estado'          => 1,
        ]);
        DB::table('personas')->insert([
            'id'           =>      5,
            'carnet'            => 555,
            'nombre'          => 'Oliver',
            'apellido'          => 'Carranza',
            'direccion'          => 'En algun lugar',
            'telefono'          => 1361631,
            'tipo'          => 1,
            'estado'          => 1,
        ]);
        DB::table('personas')->insert([
            'id'           =>      6,
            'carnet'            => 666,
            'nombre'          => 'Cesar',
            'apellido'          => 'Mamani',
            'direccion'          => 'En algun lugar',
            'telefono'          => 6136111,
            'tipo'          => 0,
            'estado'          => 1,
        ]);
        DB::table('personas')->insert([
            'id'           =>      7,
            'carnet'            => 777,
            'nombre'          => 'Bruno',
            'apellido'          => 'Diaz',
            'direccion'          => 'En algun lugar',
            'telefono'          => 5135161,
            'tipo'          => 1,
            'estado'          => 1,
        ]);



        DB::table('users')->insert([
            'id'            => 1,
            'name'          => 'Maikol Sanchez',
            'email'         => 'maikol@gmail.com',
            'password'      => bcrypt('123456789'),
            'id_persona'    => 1
        ]);

        DB::table('users')->insert([
            'id'            => 2,
            'name'          => 'Juan Perez',
            'email'         => 'perez@gmail.com',
            'password'      => bcrypt('123456789'),
            'id_persona'    => 2
        ]);
        DB::table('users')->insert([
            'id'            => 3,
            'name'          => 'Juan Ojeda',
            'email'         => 'juan@gmail.com',
            'password'      => bcrypt('123456789'),
            'id_persona'    => 3
        ]);
        DB::table('users')->insert([
            'id'            => 4,
            'name'          => 'Rosanyela Hurtado',
            'email'         => 'rosanyela@gmail.com',
            'password'      => bcrypt('123456789'),
            'id_persona'    => 4
        ]);
        DB::table('users')->insert([
            'id'            => 5,
            'name'          => 'Oliver Carraanza',
            'email'         => 'oliver@gmail.com',
            'password'      => bcrypt('123456789'),
            'id_persona'    => 5
        ]);
        DB::table('users')->insert([
            'id'            => 6,
            'name'          => 'Cesar Mamani',
            'email'         => 'cesar@gmail.com',
            'password'      => bcrypt('123456789'),
            'id_persona'    => 6
        ]);
        DB::table('users')->insert([
            'id'            => 7,
            'name'          => 'Bruno Diaz',
            'email'         => 'bruno@gmail.com',
            'password'      => bcrypt('123456789'),
            'id_persona'    => 7
        ]);



        DB::table('categorias')->insert([
            'id'              =>1,
            'nombre'          => 'Producto',
            'descripcion'         => 'A esta categoria van todos los negocios que ofrecen un producto',
            'estado'      => 1,
        ]);
        DB::table('categorias')->insert([
            'id'            =>2,
            'nombre'          => 'Servicio',
            'descripcion'         => 'A esta categoria van todos los negocios que ofrecen un servicio',
            'estado'      => 1,
        ]);
        DB::table('negocios')->insert([
            'id'            => 1,
            'nombre'          => 'KFC',
            'descripcion' =>'Un restaurante de posho',
            'buscasocio'         => 0,
            'estado'      => 1,
            'id_categoria'    => 1,
            'id_persona'=> 1
        ]);

        DB::table('imagenes')->insert([
            'id'            => 1,
            'url'          => 'Maikol Sanchez',
            'id_negocio'    => 1
        ]);



    }
}
