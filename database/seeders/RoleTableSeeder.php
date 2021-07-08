<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Permission;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

<<<<<<< HEAD
      $admin_permissions = Permission::all();
=======
      $admin_permission = Permission::all();
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54

      //RoleTableSeeder.php
      $dev_role = new Role();
      $dev_role->name = 'Super-Admin';
      $dev_role->save();
<<<<<<< HEAD
      $dev_role->permissions()->attach($admin_permissions);

      $role = Role::create(['name' => 'Admin']);
      $role->permissions()->attach($admin_permissions);

      $role = Role::create(['name' => 'Blogger']);
      $role->givePermissionTo([
          'view_articles','create_articles', 'update_articles', 'delete_articles', 'view_products', 'create_products', 'update_products', 'delete_products', 'view_companies', 'create_companies', 'update_companies', 'delete_companies', 'view_brands', 'create_brands', 'update_brands', 'delete_brands']);
=======
      $dev_role->permissions()->attach($admin_permission);

      $role = Role::create(['name' => 'Admin']);
      $role->givePermissionTo(['view_products','view_companies','view_users','create_users','update_users','create_articles','update_articles','view_articles']);

      $role = Role::create(['name' => 'Blogger']);
      $role->givePermissionTo(['view_articles','create_articles', 'update_articles']);
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54

      /*----------------------------*/
      $role = Role::create(['name' => 'Partner']);
      $role->givePermissionTo(['company_management','product_management']);
    //   $role = Role::create(['name' => 'Product Supplier']);
    //   $role->givePermissionTo(['product_management']);

      $role = Role::create(['name' => 'Customer']);
      $role->givePermissionTo(['order_management']);
    }
}
