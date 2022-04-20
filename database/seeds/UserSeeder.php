<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hrd = User::create([
            'name' => 'Admin',
            'username' => 'Admin',
            'email' => 'admin@proven.com',
            'password' => bcrypt('admin123')
        ]);
        $hrd->assignRole('super-admin');
    }
}
