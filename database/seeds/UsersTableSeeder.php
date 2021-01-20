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
        DB::table('users')->insert([
            'name'=>'Adam Adamski',
            'email'=>'adam@adam.com',
            'password'=>bcrypt('password'),
            'phone'=>122333444,
            'address'=>"ul.Wyspiańskiego 19, 32-700 Bochnia",
            'status'=>'Active',
            'pesel'=>'73010222333',
            'type'=>'admin'
        ]);
//doctor 1
        DB::table('users')->insert([
            'name'=>'Janusz Henrickson',
            'email'=>'janusz@henrickson.com',
            'password'=>bcrypt('password'),
            'phone'=>122333444,
            'address'=>"ul.Wyspiańskiego 19, 32-700 Bochnia",
            'status'=>'Active',
            'pesel'=>'73010222333',
            'type'=>'doktor'
        ]);
//doctor 2
        DB::table('users')->insert([
            'name'=>'Janusz Nowak',
            'email'=>'janusz@nowak.com',
            'password'=>bcrypt('password'),
            'phone'=>122333444,
            'address'=>"ul.Wyspiańskiego 19, 32-700 Bochnia",
            'status'=>'Active',
            'pesel'=>'73010222333',
            'type'=>'doktor'
        ]);
//patient 1
        DB::table('users')->insert([
            'name'=>'Janusz Kowalski',
            'email'=>'janusz@kowalski.com',
            'password'=>bcrypt('password'),
            'phone'=>122333444,
            'address'=>"ul.Wyspiańskiego 19, 32-700 Bochnia",
            'status'=>'Active',
            'pesel'=>'73010222333',
            'type'=>'patient'
        ]);
//patient 2
        DB::table('users')->insert([
            'name'=>'Jan Nowak',
            'email'=>'jan@nowak.com',
            'password'=>bcrypt('password'),
            'phone'=>122333444,
            'address'=>"ul.Wyspiańskiego 19, 32-700 Bochnia",
            'status'=>'Active',
            'pesel'=>'73010222333',
            'type'=>'patient'
        ]);
            //patient 3
        DB::table('users')->insert([
            'name'=>'Janusz Nowakowski',
            'email'=>'janusz@nowakowski.com',
            'password'=>bcrypt('password'),
            'phone'=>122333444,
            'address'=>"ul.Wyspiańskiego 19, 32-700 Bochnia",
            'status'=>'Active',
            'pesel'=>'73010222333',
            'type'=>'patient'
        ]);

        DB::table('specializations')->insert([
            'name'=>'oncology'
        ]);

        DB::table('specializations')->insert([
            'name'=>'internist'
        ]);

        DB::table('specializations')->insert([
            'name'=>'surgeon'
        ]);
    }
}
