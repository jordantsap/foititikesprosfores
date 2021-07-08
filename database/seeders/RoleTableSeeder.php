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

      $admin_permissions = Permission::all();

      //RoleTableSeeder.php
      $dev_role = new Role();
      $dev_role->name = 'Super-Admin';
      $dev_role->save();
      $dev_role->permissions()->attach($admin_permissions);

      $role = Role::create(['name' => 'Admin']);
      $role->permissions()->attach($admin_permissions);

      $role = Role::create(['name' => 'Blogger']);
      $role->givePermissionTo([
          'view_articles','create_articles', 'update_articles', 'delete_articles', 'view_products', 'create_products', 'update_products', 'delete_products', 'view_companies', 'create_companies', 'update_companies', 'delete_companies', 'view_brands', 'create_brands', 'update_brands', 'delete_brands']);

      /*----------------------------*/
      $role = Role::create(['name' => 'Partner']);
      $role->givePermissionTo(['company_management','product_management']);
    //   $role = Role::create(['name' => 'Product Supplier']);
    //   $role->givePermissionTo(['product_management']);

      $role = Role::create(['name' => 'Customer']);
      $role->givePermissionTo(['order_management']);
    }
}
