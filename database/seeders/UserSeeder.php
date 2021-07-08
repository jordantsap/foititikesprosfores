<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->truncate();

        $super_admin_role = Role::where('id', 1)->first();
        $admin_role = Role::where('id', 2)->first();
        $blogger_role = Role::where('id', 3)->first();
        $partner_role = Role::where('id', 4)->first();
        $customer_role = Role::where('id', 5)->first();
        // $product_management = Role::where('id',7)->first();

        $super_admin = new User();
        $super_admin->username = 'jordantsap';
        $super_admin->active = 1;
        $super_admin->email = 'jordantsap@hotmail.gr';
        $super_admin->password = bcrypt('123456');
        $super_admin->email_verified_at = now();
        $super_admin->save();
        $super_admin->roles()->attach($super_admin_role);

        $admin = new User();
        $admin->username = 'moridis';
        $admin->active = 1;
        $admin->email = 'moridis@moridis.com';
        $admin->password = bcrypt('123456');
        $admin->email_verified_at = now();
        $admin->save();
        $admin->roles()->attach($admin_role);

        $blogger = new User();
        $blogger->username = 'Blogger';
        $blogger->active = 1;
        $blogger->email = 'blogger@blogger.com';
        $blogger->password = bcrypt('123456');
        $blogger->email_verified_at = now();
        $blogger->save();
        $blogger->roles()->attach($blogger_role);

        $partner = new User();
        $partner->username = 'Partner';
        $partner->active = 1;
        $partner->email = 'partner@partner.com';
        $partner->password = bcrypt('123456');
        $partner->email_verified_at = now();
        $partner->save();
        $partner->roles()->attach($partner_role);

        $customer = new User();
        $customer->username = 'Customer';
        $customer->active = 1;
        $customer->email = 'customer@customer.com';
        $customer->password = bcrypt('123456');
        $customer->email_verified_at = now();
        $customer->save();
        $customer->roles()->attach($customer_role);

        // $users = User::factory()->count(15)->create();
    }
}
