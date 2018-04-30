<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // check if table roles is empty
        if(DB::table('roles')->get()->count() == 0) {
            $roles = [
                [ 'title' => 'administrator' ],
                [ 'title' => 'manager' ],
                [ 'title' => 'editor' ],
                [ 'title' => 'author' ],
                [ 'title' => 'contributor' ],
                [ 'title' => 'customer' ]
            ];
            Role::insert($roles);  
        } else {
            echo "Table 'Role' is not empty, therefore will not be seeded to database. \n"; 
        }      
    }
}
