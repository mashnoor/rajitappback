<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        $users = array(

        	array(
        		'name' => 'Admin',
        		'email' => 'admin@admin.com',
                'password' => Hash::make('admin.com'),
                'nickname' => 'Admin',
                'designation' => 'System Admin',
                'id_no' => '0000',
                'phone' => '01700000000'
        	),

        	array(
        		'name' => 'Nowfel Mashnoor',
        		'email' => '',
                'password' => '92702689',
                'nickname' => 'Mashnoor',
                'designation' => 'Student',
                'id_no' => '1234',
                'phone' => '01826636115'
        	),

        	array(
        		'name' => 'MD.Razeeun Nabi',
        		'email' => '',
                'password' => '*@#nabi14',
                'nickname' => 'Rajon',
                'designation' => 'Maddhapara',
                'id_no' => '8192226330796',
                'phone' => '01730332210'
        	),
        );

        DB::table('users')->insert($users);
    }
}
