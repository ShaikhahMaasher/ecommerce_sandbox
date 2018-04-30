<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Delete exsting users first 
        DB::table('users')->delete();
        
        $users = [
            [
                'id' => 1,
                'name' => 'Shaikhah', 
                'role_id' => 1, 
                'email' => 'sh.maasher@gmail.com', 
                'password' => bcrypt('shaikhah'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 2,
                'name' => 'test', 
                'role_id' => 6, 
                'email' => 'test@gmail.com', 
                'password' => bcrypt('test'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];
        User::insert($users);
    }
}
