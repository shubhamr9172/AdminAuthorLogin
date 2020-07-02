<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
         'name'=>'Admin',
         'slag'=>'admin',

        	]);

          DB::table('roles')->insert([
         'name'=>'Author',
         'slag'=>'author',
        	]);
    }
}
