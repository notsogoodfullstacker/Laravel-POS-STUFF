<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        Customer::create(['full_name' => 'Alice Johnson', 'email' => 'alice@example.com', 'phone' => '555-0101']);
        Customer::create(['full_name' => 'Bob Smith', 'email' => 'bob@example.com', 'phone' => '555-0102']);
        Customer::create(['full_name' => 'Charlie Brown', 'email' => 'charlie@example.com', 'phone' => '555-0103']);
        Customer::create(['full_name' => 'Diana Prince', 'email' => 'diana@example.com', 'phone' => '555-0104']);
        Customer::create(['full_name' => 'Evan Wright', 'email' => 'evan@example.com', 'phone' => '555-0105']);
    }
}