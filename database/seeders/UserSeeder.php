<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create(['username' => 'admin_john', 'full_name' => 'John Admin']);
        User::create(['username' => 'cashier_mary', 'full_name' => 'Mary Cashier']);
        User::create(['username' => 'manager_bob', 'full_name' => 'Bob Manager']);
        User::create(['username' => 'staff_sally', 'full_name' => 'Sally Staff']);
        User::create(['username' => 'supervisor_dan', 'full_name' => 'Dan Supervisor']);
    }
}