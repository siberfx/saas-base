<?php
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'info@siberfx.com',
                'password'       => bcrypt('47819812'),
                'remember_token' => null,
            ],
        ];

        User::insert($users);

    }
}
