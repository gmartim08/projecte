<?php

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
/**
* Agregamos un usuario nuevo a la base de datos.
*/
class UsersTableSeeder extends Seeder {
    public function run(){
        User::create(array(
            'rol'  => '1',
            'email'     => 'admin@admin.com',
            'name'=> 'Administrator',
            'password' => Hash::make('admin') // Hash::make() nos va generar una cadena con nuestra contraseña encriptada
        ));
        User::create(array(
            'rol'  => '1',
            'email'     => 'becaripsv@gmail.com',
            'name'=> 'Gerard',
            'password' => Hash::make('123456')            
        ));
        User::create(array(
            'rol'  => '0',
            'email'     => 'pep@gmail.com',
            'name'=> 'Pep',
            'password' => Hash::make('123456')            
        ));
        User::create(array(
            'rol'  => '0',
            'email'     => 'laplana@gmail.com',
            'name'=> 'Helena',
            'password' => Hash::make('123456')            
        ));
        User::create(array(
            'rol'  => '0',
            'email'     => 'juan@gmail.com',
            'name'=> 'Joan',
            'password' => Hash::make('123456')            
        ));
        User::create(array(
            'rol'  => '0',
            'email'     => 'frank@gmail.com',
            'name'=> 'Frank',
            'password' => Hash::make('123456')            
        ));
        User::create(array(
            'rol'  => '0',
            'email'     => 'sofia@gmail.com',
            'name'=> 'Sofia',
            'password' => Hash::make('123456')            
        ));
        User::create(array(
            'rol'  => '0',
            'email'     => 'dilan@gmail.com',
            'name'=> 'Dilan',
            'password' => Hash::make('123456')            
        ));
        User::create(array(
            'rol'  => '0',
            'email'     => 'albert@gmail.com',
            'name'=> 'Albert',
            'password' => Hash::make('123456')            
        ));
    }
}