<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
          'name'=>'Administrador',
          'email'=>'admin@gmail.com',
          'password'=>Hash::make('12345678'),
          'email_verified_at'=>'2020-01-01'
        ]);

        DB::table('users')->insert([
          'name'=>'Adotante',
          'email'=>'admin@gmail.com',
          'password'=>Hash::make('12345678'),
          'email_verified_at'=>'2020-01-01'
        ]);

        DB::table('users')->insert([
          'name'=>'Protetor',
          'email'=>'admin@gmail.com',
          'password'=>Hash::make('12345678'),
          'email_verified_at'=>'2020-01-01'
        ]);
        $user_id = DB::table('users')->where('name','Avaliador1')->pluck('id');

        DB::table('avaliadors')->insert([
          'user_id' => $user_id[0],
          'area_id' => 1,
        ]);
    }
}
