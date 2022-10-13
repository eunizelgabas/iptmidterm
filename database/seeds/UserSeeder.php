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
        //
        $data =[
            [
                'lname'=>'Lenteria',
                'fname'=>'Benjie',
                'address'=>'Pob. Centro, Clarin, Bohol',
                'phone'=>'0909.089.2350',
                'email'=>'benjielenteria@yahoo.com',
                'password'=>bcrypt('password123')
            ],
            [
                'lname'=>'Reyes',
                'fname'=>'Angelie Mae',
                'address'=>'Lajog. Centro, Clarin, Bohol',
                'phone'=>'0999.087.6657',
                'email'=>'angeliemaereyes@yahoo.com',
                'password'=>bcrypt('password123')
            ],
            [
                'lname'=>'Bautista',
                'fname'=>'Roland Glenn',
                'address'=>'Ubujan, Tubigon, Bohol',
                'phone'=>'0909.885.7736',
                'email'=>'rgbautista@yahoo.com',
                'password'=>bcrypt('password123')
            ]
        ];

        foreach($data as $usr){
            \App\User::create($usr);
        }
    }
}
