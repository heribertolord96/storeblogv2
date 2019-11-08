<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Usuarios
        Permission::create([
            'name'  =>'Navegar usuarios',
            'slug'  =>'users.index',
            'description'  =>'Ver usuarios que hay',  
        ]);
        Permission::create([
            'name'  =>'Ver detalle de usuario',
            'slug'  =>'users.show',
            'description'  =>'Ver detalles de un usuario',
        ]);
        Permission::create([
            'name'  =>'Creacion de usuarios',
            'slug'  =>'users.create',
            'description'  =>'Agrega nuevos usuarios al sistema',
        ]);
        Permission::create([
            'name'  =>'Edicion de usuarios',
            'slug'  =>'users.edit',
            'description'  =>'Edita los datos de los usuarios',
        ]);
        Permission::create([
            'name'  =>'Eliminar usuario',
            'slug'  =>'users.destroy',
            'description'  =>'elimina los usuarios',
        ]);
        //Roles
        Permission::create([
            'name'  =>'Navegar roles',
            'slug'  =>'roles.index',
            'description'  =>'Ver roles que hay',
        ]);
        Permission::create([
            'name'  =>'Ver detalle de roles',
            'slug'  =>'roles.show',
            'description'  =>'Ver detalles de un rol',
        ]);
        Permission::create([
            'name'  =>'Creacion de rol',
            'slug'  =>'roles.create',
            'description'  =>'EAgrega roles al sistema',
        ]);
        Permission::create([
            'name'  =>'Edicion de rol',
            'slug'  =>'roles.edit',
            'description'  =>'Edita los datos de los roless',
        ]);
        Permission::create([
            'name'  =>'Eliminar rol',
            'slug'  =>'roles.destroy',
            'description'  =>'Elimina roles de usuario',
        ]);
         //Productos
         Permission::create([
            'name'  =>'Navegar productos',
            'slug'  =>'productos.index',
            'description'  =>'Ver productos que hay',
        ]);
        Permission::create([
            'name'  =>'Ver detalle de productos',
            'slug'  =>'productos.show',
            'description'  =>'Ver detalles de un producto',
        ]);
        Permission::create([
            'name'  =>'Creacion de producto',
            'slug'  =>'productos.create',
            'description'  =>'Agrega productos al sistema',
        ]);
        Permission::create([
            'name'  =>'Edicion de producto',
            'slug'  =>'productos.edit',
            'description'  =>'Edita los datos de los productoss',
        ]);
        Permission::create([
            'name'  =>'Eliminar producto',
            'slug'  =>'productos.destroy',
            'description'  =>'Elimina productos de usuario',
        ]);
    }
}
