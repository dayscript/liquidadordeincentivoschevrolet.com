<?php

use App\Manager\Programs\Program;
use App\Manager\User\Permission;
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['id'             => 2,
             'firstname'      => 'Cristian',
             'lastname'       => 'Villamil',
             'identification' => '1032451235',
             'email'          => 'cvillamil@dayscript.com',
             'password'       => bcrypt('p0p01234'),
            ]
        ];
        $permissions = [
            [
                'name'        => 'Administrar permisos',
                'description' => 'Ver y modificar los permisos del sistema. Use con precaución.',
                'model'       => 'permissions',
                'list'        => true,
                'show'        => true,
                'create'      => true,
                'edit'        => true,
                'destroy'     => true,
            ],
            [
                'name'        => 'Administrar usuarios',
                'description' => 'Ver y modificar los usuarios del sistema.',
                'model'       => 'users',
                'list'        => true,
                'show'        => true,
                'create'      => true,
                'edit'        => true,
                'destroy'     => true,
            ],
            [
                'name'        => 'Administrar roles',
                'description' => 'Ver y modificar los roles del sistema.',
                'model'       => 'roles',
                'list'        => true,
                'show'        => true,
                'create'      => true,
                'edit'        => true,
                'destroy'     => true,
            ]
        ];
        $programs = [
            [
                'name'        => 'Programa de prueba',
                'description' => 'Este programa se usa para pruebas del sistema y desarrollo',
            ],
            [
                'name'        => 'Estrellas Kimberly',
                'description' => 'Descripción del programa de estrellas kimberly',
            ]
        ];
        DB::table('roles')->insert([
            'id'          => 1,
            'name'        => 'Super Administrador',
            'description' => 'Este rol permite acceder a todas las funcionalidades del sistema',
        ]);
        foreach ($users as $user) {
            $us = User::create($user);
            $us->roles()->attach(1);
        }
        foreach ($permissions as $permission) {
            $perm = Permission::create($permission);
            $perm->roles()->attach(1);
        }
        foreach ($programs as $program) {
            $pr = Program::create($program);
            $pr->roles()->attach(1);
            $pr->users()->attach(1);
        }
    }
}
