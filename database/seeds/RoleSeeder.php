<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name'=>'Administrator',
            'guard_name' =>'web'
        ]);
        Role::create([
            'name'=>'User',
            'guard_name' =>'web'
        ]);
    }
}
