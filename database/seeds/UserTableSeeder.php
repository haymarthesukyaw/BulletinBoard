<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' =>bcrypt('12345678'),
            'profile'=>'IMG_8295.jpg',
            'type'=>'0',
            'phone'=>'09798491241',
            'address'=>'Mandalay',
            'dob'=>'1996/6/4',
            'create_user_id'=>'1',
            'updated_user_id'=>'1',
        ]);
    }
}
